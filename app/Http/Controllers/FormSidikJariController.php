<?php

namespace App\Http\Controllers;

use App\Models\FormSidikJari;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert as Alert;
use PDOException;
use Throwable;

class FormSidikJariController extends Controller
{
    public function index() {
        $title = 'Hapus!';
        $text = "Apakah anda yakin hapus?";
        confirmDelete($title, $text);
        return view('mazer_template.admin.form_sidik_jari.index');
    }

    public function dataTable(Request $request) {
        $columns = array( 
                            0 =>'nama',
                            1 =>'nik',
                            2 =>'alamat_saat_ini',
                            3 =>'no_telp',
                            4 =>'email',
                            5 => 'id', //action
                        );

        $totalData = FormSidikJari::count();

        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value')))
        {            
            $FormSidikJaris = FormSidikJari::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 

            $FormSidikJaris = FormSidikJari::where('id','LIKE',"%{$search}%")
                            ->orWhere('nama', 'LIKE',"%{$search}%")
                            ->orWhere('nik', 'LIKE',"%{$search}%")
                            ->orWhere('alamat_saat_ini', 'LIKE',"%{$search}%")
                            ->orWhere('no_telp', 'LIKE',"%{$search}%")
                            ->orWhere('email', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

            $totalFiltered = FormSidikJari::where('id','LIKE',"%{$search}%")
                            ->orWhere('nama', 'LIKE',"%{$search}%")
                            ->orWhere('nik', 'LIKE',"%{$search}%")
                            ->orWhere('alamat_saat_ini', 'LIKE',"%{$search}%")
                            ->orWhere('no_telp', 'LIKE',"%{$search}%")
                            ->orWhere('email', 'LIKE',"%{$search}%")
                            ->count();
        }

        $data = array();
        if(!empty($FormSidikJaris))
        {
            foreach ($FormSidikJaris as $FormSidikJari)
            {
                $edit =  route('admin.formsidikjari.edit',$FormSidikJari->id);
                $destroy =  route('admin.formsidikjari.destroy',$FormSidikJari->id);
                $detail =  route('admin.formsidikjari.detail',$FormSidikJari->id);

                $nestedData['id'] = $FormSidikJari->id;
                $nestedData['nama'] = $FormSidikJari->nama;
                $nestedData['nik'] = $FormSidikJari->nik;
                $nestedData['alamat_saat_ini'] = $FormSidikJari->alamat_saat_ini;
                $nestedData['no_telp'] = $FormSidikJari->no_telp;
                $nestedData['email'] = $FormSidikJari->email;
                $nestedData['options'] = "<a href='{$edit}' title='EDIT' class='btn btn-info btn-sm mt-2'><i class='bi bi-pencil-square'></i></a>
                                          <a href='{$destroy}' title='DESTROY' class='btn btn-danger btn-sm mt-2' data-confirm-delete='true'><i class='bi bi-trash' data-confirm-delete='true'></i></a>
                                          <a href='{$detail}' title='DETAIL' class='btn btn-warning btn-sm mt-2'><i class='bi bi-info-square'></i></a>";
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

    public function detail($id) {
        try {
            $data = FormSidikJari::findOrFail($id); // harus pakai findorfail untuk menangkap catch
            
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal melihat detail form sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal melihat detail form sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (\Exception $e) {
            Alert::error('Gagal melihat detail form sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (PDOException $e) {
            Alert::error('Gagal melihat detail form sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (Throwable $e) {
            Alert::error('Gagal melihat detail form sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        }
        
        return view('mazer_template.admin.form_sidik_jari.detail', compact('data'));
    }

    public function create() {
        // contoh authorization di controller
        // $this->authorize('create', FormSidikJari::class);
        
        return view('mazer_template.sipastap.form_sidik_jari.create');
    }

    public function store(Request $request) {
        $messages = [
        'required' => ':attribute wajib diisi.',
        'min' => ':attribute harus diisi minimal :min karakter.',
        'max' => ':attribute harus diisi maksimal :max karakter.',
        'size' => ':attribute harus diisi tepat :size karakter.',
        'unique' => ':attribute sudah terpakai.',
        ];

        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'nama_kecil_alias' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nik' => 'required|unique:form_sidik_jaris,nik',
            'pekerjaan' => 'required',
            'kebangsaan' => 'required',
            'agama' => 'required',
            'alamat_saat_ini' => 'required',
            'no_telp' => 'required',
            'status_pernikahan' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
        ],$messages);

        if($validator->fails()) {
            Alert::error('Cek kembali pengisian form, terima kasih !');
            return redirect()->route('sipastap.formsidikjari.create')->withErrors($validator->errors())->withInput();
        }

        try {
        FormSidikJari::insert([
            'nama' => $request->input('nama'),
            'nama_kecil_alias' => $request->input('nama_kecil_alias'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'nik' => $request->input('nik'),
            'no_paspor' => $request->input('no_paspor'),
            'pekerjaan' => $request->input('pekerjaan'),
            'kebangsaan' => $request->input('kebangsaan'),
            'agama' => $request->input('agama'),
            'alamat_saat_ini' => $request->input('alamat_saat_ini'),
            'no_telp' => $request->input('no_telp'),
            'email' => $request->input('email'),
            'status_pernikahan' => $request->input('status_pernikahan'),
            'nama_ayah' => $request->input('nama_ayah'),
            'alamat_ayah' => $request->input('alamat_ayah'),
            'nama_ibu' => $request->input('nama_ibu'),
            'alamat_ibu' => $request->input('alamat_ibu'),
            'nama_istri' => $request->input('nama_istri'),
            'nama_suami' => $request->input('nama_suami'),
            'nama_anak' => $request->input('nama_anak'),
        ]);
    } catch (\Illuminate\Database\QueryException $e) {
        // Alert::error($e->getMessage());
        Alert::error('Gagal menyimpan!');
        return redirect()->route('sipastap.formsidikjari.create');
    } catch (ModelNotFoundException $e) {
        // Alert::error($e->getMessage());
        Alert::error('Gagal menyimpan!');
        return redirect()->route('sipastap.formsidikjari.create');
    } catch (\Exception $e) {
        Alert::error('Gagal menyimpan!');
        return redirect()->route('sipastap.formsidikjari.create');
    } catch (PDOException $e) {
        Alert::error('Gagal menyimpan!');
        return redirect()->route('sipastap.formsidikjari.create');
    } catch (Throwable $e) {
        Alert::error('Gagal menyimpan!');
        return redirect()->route('sipastap.formsidikjari.create');
    }

        Alert::success('Sukses', 'Formulir pendaftaran sidik jari berhasil ditambahkan.');
        return redirect()->route('sipastap.index');
    }

    public function edit($id) {
        try {
            $data = FormSidikJari::findOrFail($id);

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal masuk form edit sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal masuk form edit sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (\Exception $e) {
            Alert::error('Gagal masuk form edit sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (PDOException $e) {
            Alert::error('Gagal masuk form edit sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (Throwable $e) {
            Alert::error('Gagal masuk form edit sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        }

        return view('mazer_template.admin.form_sidik_jari.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        try {
            $FormSidikJari = FormSidikJari::findOrFail($id);
            
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal update form sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal update form sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (\Exception $e) {
            Alert::error('Gagal update form sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (PDOException $e) {
            Alert::error('Gagal update form sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (Throwable $e) {
            Alert::error('Gagal update form sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        }

        $messages = [
            'required' => ':attribute wajib diisi.',
            'min' => ':attribute harus diisi minimal :min karakter.',
            'max' => ':attribute harus diisi maksimal :max karakter.',
            'size' => ':attribute harus diisi tepat :size karakter.',
            'unique' => ':attribute sudah terpakai.',
        ];

        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'nama_kecil_alias' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nik' => 'required',
            'pekerjaan' => 'required',
            'kebangsaan' => 'required',
            'agama' => 'required',
            'alamat_saat_ini' => 'required',
            'no_telp' => 'required',
            'status_pernikahan' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
        ],$messages);

        // Check if the 'nik' values have changed
        if ($request->input('nik') !== $FormSidikJari->nik) {
            $validator->addRules(['nik' => 'required|unique:form_sidik_jaris,nik']);
        }

        if($validator->fails()) {
            Alert::error('Cek kembali pengisian form, terima kasih !');
            return redirect()->route('admin.formsidikjari.edit',$id)->withErrors($validator->errors())->withInput();
        }

        try {
            FormSidikJari::where('id',$id)
                ->update([
                    'nama' => $request->input('nama'),
                    'nama_kecil_alias' => $request->input('nama_kecil_alias'),
                    'jenis_kelamin' => $request->input('jenis_kelamin'),
                    'tempat_lahir' => $request->input('tempat_lahir'),
                    'tanggal_lahir' => $request->input('tanggal_lahir'),
                    'nik' => $request->input('nik'),
                    'no_paspor' => $request->input('no_paspor'),
                    'pekerjaan' => $request->input('pekerjaan'),
                    'kebangsaan' => $request->input('kebangsaan'),
                    'agama' => $request->input('agama'),
                    'alamat_saat_ini' => $request->input('alamat_saat_ini'),
                    'no_telp' => $request->input('no_telp'),
                    'email' => $request->input('email'),
                    'status_pernikahan' => $request->input('status_pernikahan'),
                    'nama_ayah' => $request->input('nama_ayah'),
                    'alamat_ayah' => $request->input('alamat_ayah'),
                    'nama_ibu' => $request->input('nama_ibu'),
                    'alamat_ibu' => $request->input('alamat_ibu'),
                    'nama_istri' => $request->input('nama_istri'),
                    'nama_suami' => $request->input('nama_suami'),
                    'nama_anak' => $request->input('nama_anak'),
                ]);
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal update form sidik jari!');
            return redirect()->route('admin.formsidikjari.edit',$id);
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal update form sidik jari!');
            return redirect()->route('admin.formsidikjari.edit',$id);
        } catch (\Exception $e) {
            Alert::error('Gagal update form sidik jari!');
            return redirect()->route('admin.formsidikjari.edit',$id);
        } catch (PDOException $e) {
            Alert::error('Gagal update form sidik jari!');
            return redirect()->route('admin.formsidikjari.edit',$id);
        } catch (Throwable $e) {
            Alert::error('Gagal update form sidik jari!');
            return redirect()->route('admin.formsidikjari.edit',$id);
        }

        Alert::success('Sukses', 'Update form sidik jari berhasil');
        return redirect()->route('admin.formsidikjari.index');
    }

    public function destroy($id) {
        try {
            $FormSidikJari = FormSidikJari::findOrFail($id);
            
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal hapus form sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal hapus form sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (\Exception $e) {
            Alert::error('Gagal hapus form sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (PDOException $e) {
            Alert::error('Gagal hapus form sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (Throwable $e) {
            Alert::error('Gagal hapus form sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        }

        try {
            $FormSidikJari->delete();
        
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal hapus form sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal hapus form sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (\Exception $e) {
            Alert::error('Gagal hapus form sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (PDOException $e) {
            Alert::error('Gagal hapus form sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (Throwable $e) {
            Alert::error('Gagal hapus form sidik jari!');
            return redirect()->route('admin.formsidikjari.index');
        }

        Alert::success('Sukses', 'Form sidik jari berhasil dihapus');
        return redirect()->route('admin.formsidikjari.index');
    }

    public function pdf($id) {
        try {
            $data = FormSidikJari::findOrFail($id);

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal masuk form edit permohonan sim!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal masuk form edit permohonan sim!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (\Exception $e) {
            Alert::error('Gagal masuk form edit permohonan sim!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (PDOException $e) {
            Alert::error('Gagal masuk form edit permohonan sim!');
            return redirect()->route('admin.formsidikjari.index');
        } catch (Throwable $e) {
            Alert::error('Gagal masuk form edit permohonan sim!');
            return redirect()->route('admin.formsidikjari.index');
        }

        return view('mazer_template.admin.form_sidik_jari.pdf', compact('data'));
    }

}