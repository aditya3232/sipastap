<?php

namespace App\Http\Controllers;

use App\Models\FormLaporanTindakKriminal;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert as Alert;
use PDOException;
use Throwable;

class FormLaporanTindakKriminalController extends Controller
{
    public function index() {
        $title = 'Hapus!';
        $text = "Apakah anda yakin hapus?";
        confirmDelete($title, $text);
        return view('mazer_template.admin.form_laporan_tindak_kriminal.index');
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

        $totalData = FormLaporanTindakKriminal::count();

        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value')))
        {            
            $FormLaporanTindakKriminals = FormLaporanTindakKriminal::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 

            $FormLaporanTindakKriminals = FormLaporanTindakKriminal::where('id','LIKE',"%{$search}%")
                            ->orWhere('nama', 'LIKE',"%{$search}%")
                            ->orWhere('nik', 'LIKE',"%{$search}%")
                            ->orWhere('alamat_saat_ini', 'LIKE',"%{$search}%")
                            ->orWhere('no_telp', 'LIKE',"%{$search}%")
                            ->orWhere('email', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

            $totalFiltered = FormLaporanTindakKriminal::where('id','LIKE',"%{$search}%")
                            ->orWhere('nama', 'LIKE',"%{$search}%")
                            ->orWhere('nik', 'LIKE',"%{$search}%")
                            ->orWhere('alamat_saat_ini', 'LIKE',"%{$search}%")
                            ->orWhere('no_telp', 'LIKE',"%{$search}%")
                            ->orWhere('email', 'LIKE',"%{$search}%")
                            ->count();
        }

        $data = array();
        if(!empty($FormLaporanTindakKriminals))
        {
            foreach ($FormLaporanTindakKriminals as $FormLaporanTindakKriminal)
            {
                $edit =  route('admin.formlaporantindakkriminal.edit',$FormLaporanTindakKriminal->id);
                $destroy =  route('admin.formlaporantindakkriminal.destroy',$FormLaporanTindakKriminal->id);
                $detail =  route('admin.formlaporantindakkriminal.detail',$FormLaporanTindakKriminal->id);

                $nestedData['id'] = $FormLaporanTindakKriminal->id;
                $nestedData['nama'] = $FormLaporanTindakKriminal->nama;
                $nestedData['nik'] = $FormLaporanTindakKriminal->nik;
                $nestedData['alamat_saat_ini'] = $FormLaporanTindakKriminal->alamat_saat_ini;
                $nestedData['no_telp'] = $FormLaporanTindakKriminal->no_telp;
                $nestedData['email'] = $FormLaporanTindakKriminal->email;
                $nestedData['options'] = "&emsp;<a href='{$edit}' title='EDIT' class='btn btn-info btn-sm mt-2'><i class='bi bi-pencil-square'></i></a>
                                          &emsp;<a href='{$destroy}' title='DESTROY' class='btn btn-danger btn-sm mt-2' data-confirm-delete='true'><i class='bi bi-trash' data-confirm-delete='true'></i></a>
                                          &emsp;<a href='{$detail}' title='DETAIL' class='btn btn-warning btn-sm mt-2'><i class='bi bi-info-square'></i></a>";
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
            $data = FormLaporanTindakKriminal::findOrFail($id); 
            
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal melihat detail form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal melihat detail form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (\Exception $e) {
            Alert::error('Gagal melihat detail form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (PDOException $e) {
            Alert::error('Gagal melihat detail form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (Throwable $e) {
            Alert::error('Gagal melihat detail form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        }
        
        return view('mazer_template.admin.form_laporan_tindak_kriminal.detail', compact('data'));
    }

    public function create() {
        return view('mazer_template.dilan_polres.form_laporan_tindak_kriminal.create');
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
            'agama' => 'required',
            'alamat_saat_ini' => 'required',
            'no_telp' => 'required',
            'tindak_kriminal' => 'required',
        ],$messages);

        if($validator->fails()) {
            Alert::error('Cek kembali pengisian form, terima kasih !');
            // Alert::error($validator->errors());
            return redirect()->route('dilanpolres.formlaporantindakkriminal.create')->withErrors($validator->errors())->withInput();
        }

        try {
        FormLaporanTindakKriminal::insert([
            'nama' => $request->input('nama'),
            'nama_kecil_alias' => $request->input('nama_kecil_alias'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'nik' => $request->input('nik'),
            'pekerjaan' => $request->input('pekerjaan'),
            'kebangsaan' => $request->input('kebangsaan'),
            'agama' => $request->input('agama'),
            'alamat_saat_ini' => $request->input('alamat_saat_ini'),
            'no_telp' => $request->input('no_telp'),
            'email' => $request->input('email'),
            'tindak_kriminal' => $request->input('tindak_kriminal'),
        ]);
    } catch (\Illuminate\Database\QueryException $e) {
        Alert::error($e->getMessage());
        return redirect()->route('dilanpolres.formlaporantindakkriminal.create');
    } catch (ModelNotFoundException $e) {
        Alert::error($e->getMessage());
        return redirect()->route('dilanpolres.formlaporantindakkriminal.create');
    } catch (\Exception $e) {
        Alert::error($e->getMessage());
        return redirect()->route('dilanpolres.formlaporantindakkriminal.create');
    } catch (PDOException $e) {
        Alert::error($e->getMessage());
        return redirect()->route('dilanpolres.formlaporantindakkriminal.create');
    } catch (Throwable $e) {
        Alert::error($e->getMessage());
        return redirect()->route('dilanpolres.formlaporantindakkriminal.create');
    }

        Alert::success('Sukses', 'Formulir laporan tindak kriminal berhasil ditambahkan.');
        return redirect()->route('dilanpolres.index');
    }

    public function edit($id) {
        try {
            $data = FormLaporanTindakKriminal::findOrFail($id);

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal masuk form edit laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal masuk form edit laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (\Exception $e) {
            Alert::error('Gagal masuk form edit laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (PDOException $e) {
            Alert::error('Gagal masuk form edit laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (Throwable $e) {
            Alert::error('Gagal masuk form edit laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        }

        return view('mazer_template.admin.form_laporan_tindak_kriminal.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        try {
            $FormLaporanKehilangan = FormLaporanTindakKriminal::findOrFail($id);
            
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal update form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal update form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (\Exception $e) {
            Alert::error('Gagal update form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (PDOException $e) {
            Alert::error('Gagal update form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (Throwable $e) {
            Alert::error('Gagal update form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
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
            'tindak_kriminal' => 'required',
        ],$messages);

        // Check if the 'nik' values have changed
        if ($request->input('nik') !== $FormLaporanKehilangan->nik) {
            $validator->addRules(['nik' => 'required|unique:form_sims,nik']);
        }

        if($validator->fails()) {
            Alert::error('Cek kembali pengisian form, terima kasih !');
            return redirect()->route('admin.formlaporantindakkriminal.edit',$id)->withErrors($validator->errors())->withInput();
        }

        try {
            FormLaporanTindakKriminal::where('id',$id)
                ->update([
                    'nama' => $request->input('nama'),
                    'nama_kecil_alias' => $request->input('nama_kecil_alias'),
                    'jenis_kelamin' => $request->input('jenis_kelamin'),
                    'tempat_lahir' => $request->input('tempat_lahir'),
                    'tanggal_lahir' => $request->input('tanggal_lahir'),
                    'nik' => $request->input('nik'),
                    'pekerjaan' => $request->input('pekerjaan'),
                    'kebangsaan' => $request->input('kebangsaan'),
                    'agama' => $request->input('agama'),
                    'alamat_saat_ini' => $request->input('alamat_saat_ini'),
                    'no_telp' => $request->input('no_telp'),
                    'email' => $request->input('email'),
                    'tindak_kriminal' => $request->input('tindak_kriminal'),
                ]);
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal update form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.edit',$id);
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal update form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.edit',$id);
        } catch (\Exception $e) {
            Alert::error('Gagal update form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.edit',$id);
        } catch (PDOException $e) {
            Alert::error('Gagal update form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.edit',$id);
        } catch (Throwable $e) {
            Alert::error('Gagal update form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.edit',$id);
        }

        Alert::success('Sukses', 'Update form laporan tindak kriminal berhasil');
        return redirect()->route('admin.formlaporantindakkriminal.index');
    }

    public function destroy($id) {
        try {
            $FormLaporanTindakKriminal = FormLaporanTindakKriminal::findOrFail($id);
            
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal hapus form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal hapus form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (\Exception $e) {
            Alert::error('Gagal hapus form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (PDOException $e) {
            Alert::error('Gagal hapus form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (Throwable $e) {
            Alert::error('Gagal hapus form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        }

        try {
            $FormLaporanTindakKriminal->delete();
        
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal hapus form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal hapus form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (\Exception $e) {
            Alert::error('Gagal hapus form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (PDOException $e) {
            Alert::error('Gagal hapus form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (Throwable $e) {
            Alert::error('Gagal hapus form laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        }

        Alert::success('Sukses', 'Form laporan tindak kriminal berhasil dihapus');
        return redirect()->route('admin.formlaporantindakkriminal.index');
    }

    public function pdf($id) {
        try {
            $data = FormLaporanTindakKriminal::findOrFail($id);

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal masuk form edit laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal masuk form edit laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (\Exception $e) {
            Alert::error('Gagal masuk form edit laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (PDOException $e) {
            Alert::error('Gagal masuk form edit laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        } catch (Throwable $e) {
            Alert::error('Gagal masuk form edit laporan tindak kriminal!');
            return redirect()->route('admin.formlaporantindakkriminal.index');
        }

        return view('mazer_template.admin.form_laporan_tindak_kriminal.pdf', compact('data'));
    }


}