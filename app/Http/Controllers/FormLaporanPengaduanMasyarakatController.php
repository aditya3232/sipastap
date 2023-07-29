<?php

namespace App\Http\Controllers;

use App\Models\FormLaporanPengaduanMasyarakat;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert as Alert;
use PDOException;
use Throwable;

class FormLaporanPengaduanMasyarakatController extends Controller
{
     public function index() {
        $title = 'Hapus!';
        $text = "Apakah anda yakin hapus?";
        confirmDelete($title, $text);
        return view('mazer_template.admin.form_laporan_pengaduan_masyarakat.index');
    }

    public function dataTable(Request $request) {
        $columns = array( 
                            0 =>'nama_yang_melaporkan',
                            1 =>'nik_yang_melaporkan',
                            2 =>'alamat_yang_melaporkan',
                            3 =>'no_telp_yang_melaporkan',
                            4 =>'email_yang_melaporkan',
                            5 => 'id', //action
                        );

        $totalData = FormLaporanPengaduanMasyarakat::count();

        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value')))
        {            
            $FormLaporanPengaduanMasyarakats = FormLaporanPengaduanMasyarakat::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 

            $FormLaporanPengaduanMasyarakats = FormLaporanPengaduanMasyarakat::where('id','LIKE',"%{$search}%")
                            ->orWhere('nama_yang_melaporkan', 'LIKE',"%{$search}%")
                            ->orWhere('nik_yang_melaporkan', 'LIKE',"%{$search}%")
                            ->orWhere('alamat_yang_melaporkan', 'LIKE',"%{$search}%")
                            ->orWhere('no_telp_yang_melaporkan', 'LIKE',"%{$search}%")
                            ->orWhere('email_yang_melaporkan', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

            $totalFiltered = FormLaporanPengaduanMasyarakat::where('id','LIKE',"%{$search}%")
                            ->orWhere('nama_yang_melaporkan', 'LIKE',"%{$search}%")
                            ->orWhere('nik_yang_melaporkan', 'LIKE',"%{$search}%")
                            ->orWhere('alamat_yang_melaporkan', 'LIKE',"%{$search}%")
                            ->orWhere('no_telp_yang_melaporkan', 'LIKE',"%{$search}%")
                            ->orWhere('email_yang_melaporkan', 'LIKE',"%{$search}%")
                            ->count();
        }

        $data = array();
        if(!empty($FormLaporanPengaduanMasyarakats))
        {
            foreach ($FormLaporanPengaduanMasyarakats as $FormLaporanPengaduanMasyarakat)
            {
                $edit =  route('admin.formlaporanpengaduanmasyarakat.edit',$FormLaporanPengaduanMasyarakat->id);
                $destroy =  route('admin.formlaporanpengaduanmasyarakat.destroy',$FormLaporanPengaduanMasyarakat->id);
                $detail =  route('admin.formlaporanpengaduanmasyarakat.detail',$FormLaporanPengaduanMasyarakat->id);

                $nestedData['id'] = $FormLaporanPengaduanMasyarakat->id;
                $nestedData['nama_yang_melaporkan'] = $FormLaporanPengaduanMasyarakat->nama_yang_melaporkan;
                $nestedData['nik_yang_melaporkan'] = $FormLaporanPengaduanMasyarakat->nik_yang_melaporkan;
                $nestedData['alamat_yang_melaporkan'] = $FormLaporanPengaduanMasyarakat->alamat_yang_melaporkan;
                $nestedData['no_telp_yang_melaporkan'] = $FormLaporanPengaduanMasyarakat->no_telp_yang_melaporkan;
                $nestedData['email_yang_melaporkan'] = $FormLaporanPengaduanMasyarakat->email_yang_melaporkan;
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
            $data = FormLaporanPengaduanMasyarakat::findOrFail($id); 
            
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal melihat detail form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal melihat detail form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (\Exception $e) {
            Alert::error('Gagal melihat detail form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (PDOException $e) {
            Alert::error('Gagal melihat detail form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (Throwable $e) {
            Alert::error('Gagal melihat detail form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        }
        
        return view('mazer_template.admin.form_laporan_pengaduan_masyarakat.detail', compact('data'));
    }

    public function create() {
        return view('mazer_template.sipastap.form_laporan_pengaduan_masyarakat.create');
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
            'nama_yang_melaporkan' => 'required',
            'nik_yang_melaporkan' => 'required',
            'tempat_lahir_yang_melaporkan' => 'required',
            'tanggal_lahir_yang_melaporkan' => 'required',
            'umur_yang_melaporkan' => 'required',
            'jenis_kelamin_yang_melaporkan' => 'required',
            'pekerjaan_yang_melaporkan' => 'required',
            'alamat_yang_melaporkan' => 'required',
            'no_telp_yang_melaporkan' => 'required',
            'agama_yang_melaporkan' => 'required',
            'waktu_kejadian' => 'required',
            'tempat_kejadian' => 'required',
            'apa_yang_terjadi' => 'required',
            'nama_terlapor' => 'required',
            'tempat_lahir_terlapor' => 'required',
            'tanggal_lahir_terlapor' => 'required',
            'umur_terlapor' => 'required',
            'jenis_kelamin_terlapor' => 'required',
            'pekerjaan_terlapor' => 'required',
            'alamat_terlapor' => 'required',
            'no_telp_terlapor' => 'required',
            'agama_terlapor' => 'required',
            'nama_korban' => 'required',
            'tempat_lahir_korban' => 'required',
            'tanggal_lahir_korban' => 'required',
            'umur_korban' => 'required',
            'jenis_kelamin_korban' => 'required',
            'pekerjaan_korban' => 'required',
            'alamat_korban' => 'required',
            'no_telp_korban' => 'required',
            'agama_korban' => 'required',
            'nama_saksi' => 'required',
            'tempat_lahir_saksi' => 'required',
            'tanggal_lahir_saksi' => 'required',
            'umur_saksi' => 'required',
            'jenis_kelamin_saksi' => 'required',
            'pekerjaan_saksi' => 'required',
            'alamat_saksi' => 'required',
            'no_telp_saksi' => 'required',
            'agama_saksi' => 'required',
            'uraian_kejadian' => 'required',
        ],$messages);

        if($validator->fails()) {
            Alert::error('Cek kembali pengisian form, terima kasih !');
            // Alert::error($validator->errors());
            return redirect()->route('sipastap.formlaporanpengaduanmasyarakat.create')->withErrors($validator->errors())->withInput();
        }

        try {
        FormLaporanPengaduanMasyarakat::insert([
            'nama_yang_melaporkan' => $request->input('nama_yang_melaporkan'),
            'nik_yang_melaporkan' => $request->input('nik_yang_melaporkan'),
            'tempat_lahir_yang_melaporkan' => $request->input('tempat_lahir_yang_melaporkan'),
            'tanggal_lahir_yang_melaporkan' => $request->input('tanggal_lahir_yang_melaporkan'),
            'umur_yang_melaporkan' => $request->input('umur_yang_melaporkan'),
            'jenis_kelamin_yang_melaporkan' => $request->input('jenis_kelamin_yang_melaporkan'),
            'pekerjaan_yang_melaporkan' => $request->input('pekerjaan_yang_melaporkan'),
            'alamat_yang_melaporkan' => $request->input('alamat_yang_melaporkan'),
            'no_telp_yang_melaporkan' => $request->input('no_telp_yang_melaporkan'),
            'email_yang_melaporkan' => $request->input('email_yang_melaporkan'),
            'agama_yang_melaporkan' => $request->input('agama_yang_melaporkan'),
            'waktu_kejadian' => $request->input('waktu_kejadian'),
            'tempat_kejadian' => $request->input('tempat_kejadian'),
            'apa_yang_terjadi' => $request->input('apa_yang_terjadi'),
            'nama_terlapor' => $request->input('nama_terlapor'),
            'tempat_lahir_terlapor' => $request->input('tempat_lahir_terlapor'),
            'tanggal_lahir_terlapor' => $request->input('tanggal_lahir_terlapor'),
            'umur_terlapor' => $request->input('umur_terlapor'),
            'jenis_kelamin_terlapor' => $request->input('jenis_kelamin_terlapor'),
            'pekerjaan_terlapor' => $request->input('pekerjaan_terlapor'),
            'alamat_terlapor' => $request->input('alamat_terlapor'),
            'no_telp_terlapor' => $request->input('no_telp_terlapor'),
            'email_terlapor' => $request->input('email_terlapor'),
            'agama_terlapor' => $request->input('agama_terlapor'),
            'nama_korban' => $request->input('nama_korban'),
            'tempat_lahir_korban' => $request->input('tempat_lahir_korban'),
            'tanggal_lahir_korban' => $request->input('tanggal_lahir_korban'),
            'umur_korban' => $request->input('umur_korban'),
            'jenis_kelamin_korban' => $request->input('jenis_kelamin_korban'),
            'pekerjaan_korban' => $request->input('pekerjaan_korban'),
            'alamat_korban' => $request->input('alamat_korban'),
            'no_telp_korban' => $request->input('no_telp_korban'),
            'email_korban' => $request->input('email_korban'),
            'agama_korban' => $request->input('agama_korban'),
            'nama_saksi' => $request->input('nama_saksi'),
            'tempat_lahir_saksi' => $request->input('tempat_lahir_saksi'),
            'tanggal_lahir_saksi' => $request->input('tanggal_lahir_saksi'),
            'umur_saksi' => $request->input('umur_saksi'),
            'jenis_kelamin_saksi' => $request->input('jenis_kelamin_saksi'),
            'pekerjaan_saksi' => $request->input('pekerjaan_saksi'),
            'alamat_saksi' => $request->input('alamat_saksi'),
            'no_telp_saksi' => $request->input('no_telp_saksi'),
            'email_saksi' => $request->input('email_saksi'),
            'agama_saksi' => $request->input('agama_saksi'),
            'uraian_kejadian' => $request->input('uraian_kejadian'),

        ]);
    } catch (\Illuminate\Database\QueryException $e) {
        Alert::error($e->getMessage());
        return redirect()->route('sipastap.formlaporanpengaduanmasyarakat.create');
    } catch (ModelNotFoundException $e) {
        Alert::error($e->getMessage());
        return redirect()->route('sipastap.formlaporanpengaduanmasyarakat.create');
    } catch (\Exception $e) {
        Alert::error($e->getMessage());
        return redirect()->route('sipastap.formlaporanpengaduanmasyarakat.create');
    } catch (PDOException $e) {
        Alert::error($e->getMessage());
        return redirect()->route('sipastap.formlaporanpengaduanmasyarakat.create');
    } catch (Throwable $e) {
        Alert::error($e->getMessage());
        return redirect()->route('sipastap.formlaporanpengaduanmasyarakat.create');
    }

        Alert::success('Sukses', 'Formulir laporan pengaduan masyarakat berhasil ditambahkan.');
        return redirect()->route('sipastap.index');
    }

    public function edit($id) {
        try {
            $data = FormLaporanPengaduanMasyarakat::findOrFail($id);

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal masuk form edit laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal masuk form edit laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (\Exception $e) {
            Alert::error('Gagal masuk form edit laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (PDOException $e) {
            Alert::error('Gagal masuk form edit laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (Throwable $e) {
            Alert::error('Gagal masuk form edit laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        }

        return view('mazer_template.admin.form_laporan_pengaduan_masyarakat.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        try {
            $FormLaporanPengaduanMasyarakat = FormLaporanPengaduanMasyarakat::findOrFail($id);
            
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal update form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal update form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (\Exception $e) {
            Alert::error('Gagal update form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (PDOException $e) {
            Alert::error('Gagal update form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (Throwable $e) {
            Alert::error('Gagal update form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        }

        $messages = [
            'required' => ':attribute wajib diisi.',
            'min' => ':attribute harus diisi minimal :min karakter.',
            'max' => ':attribute harus diisi maksimal :max karakter.',
            'size' => ':attribute harus diisi tepat :size karakter.',
            'unique' => ':attribute sudah terpakai.',
        ];

        $validator = Validator::make($request->all(),[
            'nama_yang_melaporkan' => 'required',
            'tempat_lahir_yang_melaporkan' => 'required',
            'tanggal_lahir_yang_melaporkan' => 'required',
            'umur_yang_melaporkan' => 'required',
            'jenis_kelamin_yang_melaporkan' => 'required',
            'pekerjaan_yang_melaporkan' => 'required',
            'alamat_yang_melaporkan' => 'required',
            'no_telp_yang_melaporkan' => 'required',
            'agama_yang_melaporkan' => 'required',
            'waktu_kejadian' => 'required',
            'tempat_kejadian' => 'required',
            'apa_yang_terjadi' => 'required',
            'nama_terlapor' => 'required',
            'tempat_lahir_terlapor' => 'required',
            'tanggal_lahir_terlapor' => 'required',
            'umur_terlapor' => 'required',
            'jenis_kelamin_terlapor' => 'required',
            'pekerjaan_terlapor' => 'required',
            'alamat_terlapor' => 'required',
            'no_telp_terlapor' => 'required',
            'agama_terlapor' => 'required',
            'nama_korban' => 'required',
            'tempat_lahir_korban' => 'required',
            'tanggal_lahir_korban' => 'required',
            'umur_korban' => 'required',
            'jenis_kelamin_korban' => 'required',
            'pekerjaan_korban' => 'required',
            'alamat_korban' => 'required',
            'no_telp_korban' => 'required',
            'agama_korban' => 'required',
            'nama_saksi' => 'required',
            'tempat_lahir_saksi' => 'required',
            'tanggal_lahir_saksi' => 'required',
            'umur_saksi' => 'required',
            'jenis_kelamin_saksi' => 'required',
            'pekerjaan_saksi' => 'required',
            'alamat_saksi' => 'required',
            'no_telp_saksi' => 'required',
            'agama_saksi' => 'required',
            'uraian_kejadian' => 'required',
        ],$messages);

        // Check if the 'nik' values have changed
        if ($request->input('nik_yang_melaporkan') !== $FormLaporanPengaduanMasyarakat->nik) {
            $validator->addRules(['nik_yang_melaporkan' => 'required|unique:form_sims,nik']);
        }

        if($validator->fails()) {
            Alert::error('Cek kembali pengisian form, terima kasih !');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.edit',$id)->withErrors($validator->errors())->withInput();
        }

        try {
            FormLaporanPengaduanMasyarakat::where('id',$id)
                ->update([
                    'nama_yang_melaporkan' => $request->input('nama_yang_melaporkan'),
                    'nik_yang_melaporkan' => $request->input('nik_yang_melaporkan'),
                    'tempat_lahir_yang_melaporkan' => $request->input('tempat_lahir_yang_melaporkan'),
                    'tanggal_lahir_yang_melaporkan' => $request->input('tanggal_lahir_yang_melaporkan'),
                    'umur_yang_melaporkan' => $request->input('umur_yang_melaporkan'),
                    'jenis_kelamin_yang_melaporkan' => $request->input('jenis_kelamin_yang_melaporkan'),
                    'pekerjaan_yang_melaporkan' => $request->input('pekerjaan_yang_melaporkan'),
                    'alamat_yang_melaporkan' => $request->input('alamat_yang_melaporkan'),
                    'no_telp_yang_melaporkan' => $request->input('no_telp_yang_melaporkan'),
                    'email_yang_melaporkan' => $request->input('email_yang_melaporkan'),
                    'agama_yang_melaporkan' => $request->input('agama_yang_melaporkan'),
                    'waktu_kejadian' => $request->input('waktu_kejadian'),
                    'tempat_kejadian' => $request->input('tempat_kejadian'),
                    'apa_yang_terjadi' => $request->input('apa_yang_terjadi'),
                    'nama_terlapor' => $request->input('nama_terlapor'),
                    'tempat_lahir_terlapor' => $request->input('tempat_lahir_terlapor'),
                    'tanggal_lahir_terlapor' => $request->input('tanggal_lahir_terlapor'),
                    'umur_terlapor' => $request->input('umur_terlapor'),
                    'jenis_kelamin_terlapor' => $request->input('jenis_kelamin_terlapor'),
                    'pekerjaan_terlapor' => $request->input('pekerjaan_terlapor'),
                    'alamat_terlapor' => $request->input('alamat_terlapor'),
                    'no_telp_terlapor' => $request->input('no_telp_terlapor'),
                    'email_terlapor' => $request->input('email_terlapor'),
                    'agama_terlapor' => $request->input('agama_terlapor'),
                    'nama_korban' => $request->input('nama_korban'),
                    'tempat_lahir_korban' => $request->input('tempat_lahir_korban'),
                    'tanggal_lahir_korban' => $request->input('tanggal_lahir_korban'),
                    'umur_korban' => $request->input('umur_korban'),
                    'jenis_kelamin_korban' => $request->input('jenis_kelamin_korban'),
                    'pekerjaan_korban' => $request->input('pekerjaan_korban'),
                    'alamat_korban' => $request->input('alamat_korban'),
                    'no_telp_korban' => $request->input('no_telp_korban'),
                    'email_korban' => $request->input('email_korban'),
                    'agama_korban' => $request->input('agama_korban'),
                    'nama_saksi' => $request->input('nama_saksi'),
                    'tempat_lahir_saksi' => $request->input('tempat_lahir_saksi'),
                    'tanggal_lahir_saksi' => $request->input('tanggal_lahir_saksi'),
                    'umur_saksi' => $request->input('umur_saksi'),
                    'jenis_kelamin_saksi' => $request->input('jenis_kelamin_saksi'),
                    'pekerjaan_saksi' => $request->input('pekerjaan_saksi'),
                    'alamat_saksi' => $request->input('alamat_saksi'),
                    'no_telp_saksi' => $request->input('no_telp_saksi'),
                    'email_saksi' => $request->input('email_saksi'),
                    'agama_saksi' => $request->input('agama_saksi'),
                    'uraian_kejadian' => $request->input('uraian_kejadian'),
                ]);
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal update form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.edit',$id);
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal update form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.edit',$id);
        } catch (\Exception $e) {
            Alert::error('Gagal update form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.edit',$id);
        } catch (PDOException $e) {
            Alert::error('Gagal update form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.edit',$id);
        } catch (Throwable $e) {
            Alert::error('Gagal update form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.edit',$id);
        }

        Alert::success('Sukses', 'Update form laporan pengaduan masyarakat berhasil');
        return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
    }

    public function destroy($id) {
        try {
            $FormLaporanPengaduanMasyarakat = FormLaporanPengaduanMasyarakat::findOrFail($id);
            
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal hapus form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal hapus form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (\Exception $e) {
            Alert::error('Gagal hapus form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (PDOException $e) {
            Alert::error('Gagal hapus form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (Throwable $e) {
            Alert::error('Gagal hapus form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        }

        try {
            $FormLaporanPengaduanMasyarakat->delete();
        
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal hapus form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal hapus form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (\Exception $e) {
            Alert::error('Gagal hapus form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (PDOException $e) {
            Alert::error('Gagal hapus form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (Throwable $e) {
            Alert::error('Gagal hapus form laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        }

        Alert::success('Sukses', 'Form laporan pengaduan masyarakat berhasil dihapus');
        return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
    }

    public function pdf($id) {
        try {
            $data = FormLaporanPengaduanMasyarakat::findOrFail($id);

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal masuk form edit laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal masuk form edit laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (\Exception $e) {
            Alert::error('Gagal masuk form edit laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (PDOException $e) {
            Alert::error('Gagal masuk form edit laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        } catch (Throwable $e) {
            Alert::error('Gagal masuk form edit laporan pengaduan masyarakat!');
            return redirect()->route('admin.formlaporanpengaduanmasyarakat.index');
        }

        return view('mazer_template.admin.form_laporan_pengaduan_masyarakat.pdf', compact('data'));
    }


}