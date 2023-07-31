<?php

namespace App\Http\Controllers;

use App\Models\FormLaporanKehilangan;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert as Alert;
use PDOException;
use Throwable;

class FormLaporanKehilanganController extends Controller
{
    public function index() {
        $title = 'Hapus!';
        $text = "Apakah anda yakin hapus?";
        confirmDelete($title, $text);
        return view('mazer_template.admin.form_laporan_kehilangan.index');
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

        $totalData = FormLaporanKehilangan::count();

        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value')))
        {            
            $FormLaporanKehilangans = FormLaporanKehilangan::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 

            $FormLaporanKehilangans = FormLaporanKehilangan::where('id','LIKE',"%{$search}%")
                            ->orWhere('nama', 'LIKE',"%{$search}%")
                            ->orWhere('nik', 'LIKE',"%{$search}%")
                            ->orWhere('alamat_saat_ini', 'LIKE',"%{$search}%")
                            ->orWhere('no_telp', 'LIKE',"%{$search}%")
                            ->orWhere('email', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

            $totalFiltered = FormLaporanKehilangan::where('id','LIKE',"%{$search}%")
                            ->orWhere('nama', 'LIKE',"%{$search}%")
                            ->orWhere('nik', 'LIKE',"%{$search}%")
                            ->orWhere('alamat_saat_ini', 'LIKE',"%{$search}%")
                            ->orWhere('no_telp', 'LIKE',"%{$search}%")
                            ->orWhere('email', 'LIKE',"%{$search}%")
                            ->count();
        }

        $data = array();
        if(!empty($FormLaporanKehilangans))
        {
            foreach ($FormLaporanKehilangans as $FormLaporanKehilangan)
            {
                $edit =  route('admin.formlaporankehilangan.edit',$FormLaporanKehilangan->id);
                $destroy =  route('admin.formlaporankehilangan.destroy',$FormLaporanKehilangan->id);
                $detail =  route('admin.formlaporankehilangan.detail',$FormLaporanKehilangan->id);

                $nestedData['id'] = $FormLaporanKehilangan->id;
                $nestedData['nama'] = $FormLaporanKehilangan->nama;
                $nestedData['nik'] = $FormLaporanKehilangan->nik;
                $nestedData['alamat_saat_ini'] = $FormLaporanKehilangan->alamat_saat_ini;
                $nestedData['no_telp'] = $FormLaporanKehilangan->no_telp;
                $nestedData['email'] = $FormLaporanKehilangan->email;
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
            $data = FormLaporanKehilangan::findOrFail($id); 
            
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal melihat detail form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal melihat detail form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (\Exception $e) {
            Alert::error('Gagal melihat detail form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (PDOException $e) {
            Alert::error('Gagal melihat detail form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (Throwable $e) {
            Alert::error('Gagal melihat detail form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        }
        
        return view('mazer_template.admin.form_laporan_kehilangan.detail', compact('data'));
    }

    public function create() {
        return view('mazer_template.sipastap.form_laporan_kehilangan.create');
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
            'nik' => 'required',
            'pekerjaan' => 'required',
            'kebangsaan' => 'required',
            'alamat_saat_ini' => 'required',
            'no_telp' => 'required',
            'barang_hilang' => 'required',
        ],$messages);

        if($validator->fails()) {
            Alert::error('Cek kembali pengisian form, terima kasih !');
            // Alert::error($validator->errors());
            return redirect()->route('sipastap.formlaporankehilangan.create')->withErrors($validator->errors())->withInput();
        }

        try {
        FormLaporanKehilangan::insert([
            'nama' => $request->input('nama'),
            'nama_kecil_alias' => $request->input('nama_kecil_alias'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'nik' => $request->input('nik'),
            'pekerjaan' => $request->input('pekerjaan'),
            'kebangsaan' => $request->input('kebangsaan'),
            'alamat_saat_ini' => $request->input('alamat_saat_ini'),
            'no_telp' => $request->input('no_telp'),
            'email' => $request->input('email'),
            'barang_hilang' => $request->input('barang_hilang'),
        ]);
    } catch (\Illuminate\Database\QueryException $e) {
        Alert::error($e->getMessage());
        return redirect()->route('sipastap.formlaporankehilangan.create');
    } catch (ModelNotFoundException $e) {
        Alert::error($e->getMessage());
        return redirect()->route('sipastap.formlaporankehilangan.create');
    } catch (\Exception $e) {
        Alert::error($e->getMessage());
        return redirect()->route('sipastap.formlaporankehilangan.create');
    } catch (PDOException $e) {
        Alert::error($e->getMessage());
        return redirect()->route('sipastap.formlaporankehilangan.create');
    } catch (Throwable $e) {
        Alert::error($e->getMessage());
        return redirect()->route('sipastap.formlaporankehilangan.create');
    }

        Alert::success('Sukses', 'Formulir laporan kehilangan berhasil ditambahkan.');
        return redirect()->route('sipastap.index');
    }

    public function edit($id) {
        try {
            $data = FormLaporanKehilangan::findOrFail($id);

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal masuk form edit laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal masuk form edit laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (\Exception $e) {
            Alert::error('Gagal masuk form edit laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (PDOException $e) {
            Alert::error('Gagal masuk form edit laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (Throwable $e) {
            Alert::error('Gagal masuk form edit laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        }

        return view('mazer_template.admin.form_laporan_kehilangan.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        try {
            $FormLaporanKehilangan = FormLaporanKehilangan::findOrFail($id);
            
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal update form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal update form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (\Exception $e) {
            Alert::error('Gagal update form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (PDOException $e) {
            Alert::error('Gagal update form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (Throwable $e) {
            Alert::error('Gagal update form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
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
            'alamat_saat_ini' => 'required',
            'no_telp' => 'required',
            'barang_hilang' => 'required',
        ],$messages);

        // Check if the 'nik' values have changed
        if ($request->input('nik') !== $FormLaporanKehilangan->nik) {
            $validator->addRules(['nik' => 'required|unique:form_sims,nik']);
        }

        if($validator->fails()) {
            Alert::error('Cek kembali pengisian form, terima kasih !');
            return redirect()->route('admin.formlaporankehilangan.edit',$id)->withErrors($validator->errors())->withInput();
        }

        try {
            FormLaporanKehilangan::where('id',$id)
                ->update([
                    'nama' => $request->input('nama'),
                    'nama_kecil_alias' => $request->input('nama_kecil_alias'),
                    'jenis_kelamin' => $request->input('jenis_kelamin'),
                    'tempat_lahir' => $request->input('tempat_lahir'),
                    'tanggal_lahir' => $request->input('tanggal_lahir'),
                    'nik' => $request->input('nik'),
                    'pekerjaan' => $request->input('pekerjaan'),
                    'kebangsaan' => $request->input('kebangsaan'),
                    'alamat_saat_ini' => $request->input('alamat_saat_ini'),
                    'no_telp' => $request->input('no_telp'),
                    'email' => $request->input('email'),
                    'barang_hilang' => $request->input('barang_hilang'),
                ]);
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal update form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.edit',$id);
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal update form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.edit',$id);
        } catch (\Exception $e) {
            Alert::error('Gagal update form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.edit',$id);
        } catch (PDOException $e) {
            Alert::error('Gagal update form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.edit',$id);
        } catch (Throwable $e) {
            Alert::error('Gagal update form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.edit',$id);
        }

        Alert::success('Sukses', 'Update form laporan kehilangan berhasil');
        return redirect()->route('admin.formlaporankehilangan.index');
    }

    public function destroy($id) {
        try {
            $FormLaporanKehilangan = FormLaporanKehilangan::findOrFail($id);
            
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal hapus form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal hapus form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (\Exception $e) {
            Alert::error('Gagal hapus form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (PDOException $e) {
            Alert::error('Gagal hapus form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (Throwable $e) {
            Alert::error('Gagal hapus form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        }

        try {
            $FormLaporanKehilangan->delete();
        
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal hapus form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal hapus form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (\Exception $e) {
            Alert::error('Gagal hapus form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (PDOException $e) {
            Alert::error('Gagal hapus form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (Throwable $e) {
            Alert::error('Gagal hapus form laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        }

        Alert::success('Sukses', 'Form laporan kehilangan berhasil dihapus');
        return redirect()->route('admin.formlaporankehilangan.index');
    }

    public function pdf($id) {
        try {
            $data = FormLaporanKehilangan::findOrFail($id);

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal masuk form edit laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal masuk form edit laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (\Exception $e) {
            Alert::error('Gagal masuk form edit laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (PDOException $e) {
            Alert::error('Gagal masuk form edit laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        } catch (Throwable $e) {
            Alert::error('Gagal masuk form edit laporan kehilangan!');
            return redirect()->route('admin.formlaporankehilangan.index');
        }

        return view('mazer_template.admin.form_laporan_kehilangan.pdf', compact('data'));
    }

}