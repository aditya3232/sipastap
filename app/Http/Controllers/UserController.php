<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert as Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use PDOException;
use Throwable;

class UserController extends Controller
{
    public function index() {
        $title = 'Hapus User!';
        $text = "Apakah anda yakin hapus user?";

        // dd(Auth::user()->name);

        confirmDelete($title, $text);
        return view('mazer_template.admin.users.index');
    }

    public function dataTable(Request $request) {
        $columns = array( 
                            0 => 'name', 
                            1 => 'email', 
                            2 =>'role.name',
                            3 => 'id', //action
                        );

        $totalData = User::with('role')->count();

        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value')))
        {            
            $Users = User::with('role')
                         ->where('id', '!=', Auth::user()->id) // Exclude the logged-in user's ID
                         ->offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 

            $Users = User::with('role')
                            ->whereNotIn('id', [Auth::user()->id]) // Exclude the logged-in user's ID
                            ->where(function ($query) use ($search) {
                                $query->where('id', 'LIKE', "%{$search}%")
                                    ->orWhere('name', 'LIKE', "%{$search}%")
                                    ->orWhere('email', 'LIKE', "%{$search}%")
                                    ->orWhereHas('role', function ($q) use ($search) {
                                        $q->where('name', 'LIKE', "%{$search}%");
                                    });
                            })
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order, $dir)
                            ->get()
                            ->map(function ($user) {
                                $user->role_name = optional($user->role)->name;
                                return $user;
                            });

            $totalFiltered = User::with('role')
                            ->whereNotIn('id', [Auth::user()->id]) // Exclude the logged-in user's ID
                            ->where(function ($query) use ($search) {
                                $query->where('id', 'LIKE', "%{$search}%")
                                    ->orWhere('name', 'LIKE', "%{$search}%")
                                    ->orWhere('email', 'LIKE', "%{$search}%")
                                    ->orWhereHas('role', function ($q) use ($search) {
                                        $q->where('name', 'LIKE', "%{$search}%");
                                    });
                            })
                            ->count();
        }

        $data = array();
        if(!empty($Users))
        {
            foreach ($Users as $User)
            {
                $edit =  route('admin.users.edit',$User->id);
                $destroy =  route('admin.users.destroy',$User->id);

                $nestedData['id'] = $User->id;
                $nestedData['name'] = $User->name;
                $nestedData['email'] = $User->email;
                
                $nestedData['role'] = $User->role->name;
                // data auth biar orang yg login tidak bisa edit atau hapus usernya sendiri. if (row.authId === row.id) return "" in script datatable
                // ini digunakan buat jaga2 aja, walaupun data user yg login tidak ditampilkan di daftar users
                $nestedData['authId'] = Auth::user()->id; 
                $nestedData['options'] = "&emsp;<a href='{$edit}' title='EDIT ROLE' class='btn btn-info btn-sm mt-2'><i class='bi bi-pencil-square'></i></a>
                                          &emsp;<a href='{$destroy}' title='DESTROY' class='btn btn-danger btn-sm mt-2' data-confirm-delete='true'><i class='bi bi-trash' data-confirm-delete='true'></i></a>";
                $data[] = $nestedData;

            }
        }

        $json_data = array(
                    "draw"            => intval($request->input('draw')),  
                    "recordsTotal"    => intval($totalData),  
                    "recordsFiltered" => intval($totalFiltered), 
                    "data"            => $data
                    );
            
        return response()->json($json_data);

    }

    public function create() {
        return view('mazer_template.admin.users.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if($validator->fails()) {
            Alert::error('Cek kembali pengisian form, terima kasih !');
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        try {
            $user = User::create([
                'role_id' => 14,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            // Alert::error($e->getMessage());
            Alert::error('Gagal menyimpan!');
            return redirect()->route('admin.users.create');
        } catch (ModelNotFoundException $e) {
            // Alert::error($e->getMessage());
            Alert::error('Gagal menyimpan!');
            return redirect()->route('admin.users.create');
        } catch (\Exception $e) {
            Alert::error('Gagal menyimpan!');
            return redirect()->route('admin.users.create');
        } catch (PDOException $e) {
            Alert::error('Gagal menyimpan!');
            return redirect()->route('admin.users.create');
        } catch (Throwable $e) {
            Alert::error('Gagal menyimpan!');
            return redirect()->route('admin.users.create');
        }

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);

        return redirect()->route('admin.users.index');
    }

    public function select2Roles(Request $request) {
        $search = $request->search;
        
        if($search) {
            $Roles = Role::select('roles.id', 'roles.name')
                                        ->where('roles.name', 'LIKE',"%{$search}%")
                                        ->limit(100)
                                        ->get();
        } else {
            $Roles = Role::select('roles.id', 'roles.name')
                                        ->limit(100)
                                        ->get();
        }

        $response = array();
            foreach($Roles as $Role){
                $response[] = array(
                    "id"=>$Role->id,
                    "text"=>$Role->name
                );
            }

        return response()->json($response);
    }

    public function edit($id) {
        try {
            $data = User::with('role')->findOrFail($id);

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal masuk form edit user!');
            return redirect()->route('admin.users.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal masuk form edit user!');
            return redirect()->route('admin.users.index');
        } catch (\Exception $e) {
            Alert::error('Gagal masuk form edit user!');
            return redirect()->route('admin.users.index');
        } catch (PDOException $e) {
            Alert::error('Gagal masuk form edit user!');
            return redirect()->route('admin.users.index');
        } catch (Throwable $e) {
            Alert::error('Gagal masuk form edit user!');
            return redirect()->route('admin.users.index');
        }

        return view('mazer_template.admin.users.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        try {
            User::findOrFail($id);

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal update form user!');
            return redirect()->route('admin.users.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal update form user!');
            return redirect()->route('admin.users.index');
        } catch (\Exception $e) {
            Alert::error('Gagal update form user!');
            return redirect()->route('admin.users.index');
        } catch (PDOException $e) {
            Alert::error('Gagal update form user!');
            return redirect()->route('admin.users.index');
        } catch (Throwable $e) {
            Alert::error('Gagal update form user!');
            return redirect()->route('admin.users.index');
        }

        $messages = [
            'required' => ':attribute wajib diisi.',
            'min' => ':attribute harus diisi minimal :min karakter.',
            'max' => ':attribute harus diisi maksimal :max karakter.',
            'size' => ':attribute harus diisi tepat :size karakter.',
            'unique' => ':attribute sudah terpakai.',
        ];

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'role_id' => 'required',
        ],$messages);

        if($validator->fails()) {
            Alert::error('Cek kembali pengisian form, terima kasih !');
            return redirect()->route('admin.users.edit',$id)->withErrors($validator->errors())->withInput();
        }

        try {
            User::where('id',$id)
                ->update([
                    'name' => $request->input('name'),
                    'role_id' => $request->input('role_id'),
                ]);
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal update form user!');
            return redirect()->route('admin.users.edit',$id);
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal update form user!');
            return redirect()->route('admin.users.edit',$id);
        } catch (\Exception $e) {
            Alert::error('Gagal update form user!');
            return redirect()->route('admin.users.edit',$id);
        } catch (PDOException $e) {
            Alert::error('Gagal update form user!');
            return redirect()->route('admin.users.edit',$id);
        } catch (Throwable $e) {
            Alert::error('Gagal update form user!');
            return redirect()->route('admin.users.edit',$id);
        }

        Alert::success('Sukses', 'Update form user berhasil');
        return redirect()->route('admin.users.index');
    }

    public function destroy($id) {
        // try catch ternyata harus satu2, soalnya jika fungsi findOrFail & delete digabung, fungsi try gagal
        try {
            $User = User::findOrFail($id);
    
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal hapus user!');
            return redirect()->route('admin.users.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal hapus user!');
            return redirect()->route('admin.users.index');
        } catch (\Exception $e) {
            Alert::error('Gagal hapus user!');
            return redirect()->route('admin.users.index');
        } catch (PDOException $e) {
            Alert::error('Gagal hapus user!');
            return redirect()->route('admin.users.index');
        } catch (Throwable $e) {
            Alert::error('Gagal hapus user!');
            return redirect()->route('admin.users.index');
        }

        try {
            $User->delete();
        
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal hapus user!');
            return redirect()->route('admin.users.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal hapus user!');
            return redirect()->route('admin.users.index');
        } catch (\Exception $e) {
            Alert::error('Gagal hapus user!');
            return redirect()->route('admin.users.index');
        } catch (PDOException $e) {
            Alert::error('Gagal hapus user!');
            return redirect()->route('admin.users.index');
        } catch (Throwable $e) {
            Alert::error('Gagal hapus user!');
            return redirect()->route('admin.users.index');
        }

        Alert::success('Sukses', 'User berhasil dihapus');
        return redirect()->route('admin.users.index');
    }

}