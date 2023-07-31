<?php

namespace App\Http\Controllers;

use App\Models\FormSim;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert as Alert;
use PDOException;
use Throwable;

class FormSimController extends Controller
{
    public function index() {
        $title = 'Hapus!';
        $text = "Apakah anda yakin hapus?";
        confirmDelete($title, $text);
        return view('mazer_template.admin.form_sim.index');
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

        $totalData = FormSim::count();

        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value')))
        {            
            $FormSims = FormSim::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 

            $FormSims = FormSim::where('id','LIKE',"%{$search}%")
                            ->orWhere('nama', 'LIKE',"%{$search}%")
                            ->orWhere('nik', 'LIKE',"%{$search}%")
                            ->orWhere('alamat_saat_ini', 'LIKE',"%{$search}%")
                            ->orWhere('no_telp', 'LIKE',"%{$search}%")
                            ->orWhere('email', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

            $totalFiltered = FormSim::where('id','LIKE',"%{$search}%")
                            ->orWhere('nama', 'LIKE',"%{$search}%")
                            ->orWhere('nik', 'LIKE',"%{$search}%")
                            ->orWhere('alamat_saat_ini', 'LIKE',"%{$search}%")
                            ->orWhere('no_telp', 'LIKE',"%{$search}%")
                            ->orWhere('email', 'LIKE',"%{$search}%")
                            ->count();
        }

        $data = array();
        if(!empty($FormSims))
        {
            foreach ($FormSims as $FormSim)
            {
                $edit =  route('admin.formsim.edit',$FormSim->id);
                $destroy =  route('admin.formsim.destroy',$FormSim->id);
                $detail =  route('admin.formsim.detail',$FormSim->id);

                $nestedData['id'] = $FormSim->id;
                $nestedData['nama'] = $FormSim->nama;
                $nestedData['nik'] = $FormSim->nik;
                $nestedData['alamat_saat_ini'] = $FormSim->alamat_saat_ini;
                $nestedData['no_telp'] = $FormSim->no_telp;
                $nestedData['email'] = $FormSim->email;
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
            $data = FormSim::findOrFail($id);
            
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal melihat detail form sim!');
            return redirect()->route('admin.formsim.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal melihat detail form sim!');
            return redirect()->route('admin.formsim.index');
        } catch (\Exception $e) {
            Alert::error('Gagal melihat detail form sim!');
            return redirect()->route('admin.formsim.index');
        } catch (PDOException $e) {
            Alert::error('Gagal melihat detail form sim!');
            return redirect()->route('admin.formsim.index');
        } catch (Throwable $e) {
            Alert::error('Gagal melihat detail form sim!');
            return redirect()->route('admin.formsim.index');
        }
        
        return view('mazer_template.admin.form_sim.detail', compact('data'));
    }

    public function create() {
        return view('mazer_template.sipastap.form_sim.create');
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
            'pendidikan_terakhir' => 'required',
            'fotokopi_ktp' => 'required',
            'sertifikat_mengemudi' => 'required',
            'berkacamata' => 'required',
            'cacat_fisik' => 'required',
            'jenis_permohonan' => 'required',
            'gol_sim' => 'required',
            'polda_kedatangan' => 'required',
            'lokasi_kedatangan' => 'required',
            'hasil_ujian_teori' => 'required',
            'hasil_uji_keterampilan_pengemudi' => 'required',
            'praktik_satu' => 'required',
            'praktik_dua' => 'required',
        ],$messages);

        if($validator->fails()) {
            Alert::error('Cek kembali pengisian form, terima kasih !');
            return redirect()->route('sipastap.formsim.create')->withErrors($validator->errors())->withInput();
        }

        try {
        FormSim::insert([
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
            'pendidikan_terakhir' => $request->input('pendidikan_terakhir'),
            'fotokopi_ktp' => $request->input('fotokopi_ktp'),
            'sertifikat_mengemudi' => $request->input('sertifikat_mengemudi'),
            'berkacamata' => $request->input('berkacamata'),
            'cacat_fisik' => $request->input('cacat_fisik'),
            'jenis_permohonan' => $request->input('jenis_permohonan'),
            'gol_sim' => $request->input('gol_sim'),
            'polda_kedatangan' => $request->input('polda_kedatangan'),
            'lokasi_kedatangan' => $request->input('lokasi_kedatangan'),
            'hasil_ujian_teori' => $request->input('hasil_ujian_teori'),
            'hasil_uji_keterampilan_pengemudi' => $request->input('hasil_uji_keterampilan_pengemudi'),
            'praktik_satu' => $request->input('praktik_satu'),
            'praktik_dua' => $request->input('praktik_dua'),
        ]);
    } catch (\Illuminate\Database\QueryException $e) {
        // Alert::error('Gagal menyimpan!');
        Alert::error($e->getMessage());
        return redirect()->route('sipastap.formsim.create');
    } catch (ModelNotFoundException $e) {
        // Alert::error('Gagal menyimpan!');
        Alert::error($e->getMessage());
        return redirect()->route('sipastap.formsim.create');
    } catch (\Exception $e) {
        // Alert::error('Gagal menyimpan!');
        Alert::error($e->getMessage());
        return redirect()->route('sipastap.formsim.create');
    } catch (PDOException $e) {
        // Alert::error('Gagal menyimpan!');
        Alert::error($e->getMessage());
        return redirect()->route('sipastap.formsim.create');
    } catch (Throwable $e) {
        // Alert::error('Gagal menyimpan!');
        Alert::error($e->getMessage());
        return redirect()->route('sipastap.formsim.create');
    }

        Alert::success('Sukses', 'Formulir permohonan sim berhasil ditambahkan.');
        return redirect()->route('sipastap.index');
    }

    public function edit($id) {
        try {
            $data = FormSim::findOrFail($id);

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal masuk form edit permohonan sim!');
            return redirect()->route('admin.formsim.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal masuk form edit permohonan sim!');
            return redirect()->route('admin.formsim.index');
        } catch (\Exception $e) {
            Alert::error('Gagal masuk form edit permohonan sim!');
            return redirect()->route('admin.formsim.index');
        } catch (PDOException $e) {
            Alert::error('Gagal masuk form edit permohonan sim!');
            return redirect()->route('admin.formsim.index');
        } catch (Throwable $e) {
            Alert::error('Gagal masuk form edit permohonan sim!');
            return redirect()->route('admin.formsim.index');
        }

        return view('mazer_template.admin.form_sim.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        try {
            $FormSim = FormSim::findOrFail($id);
            
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal update form permohonan sim!');
            return redirect()->route('admin.formsim.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal update form permohonan sim!');
            return redirect()->route('admin.formsim.index');
        } catch (\Exception $e) {
            Alert::error('Gagal update form permohonan sim!');
            return redirect()->route('admin.formsim.index');
        } catch (PDOException $e) {
            Alert::error('Gagal update form permohonan sim!');
            return redirect()->route('admin.formsim.index');
        } catch (Throwable $e) {
            Alert::error('Gagal update form permohonan sim!');
            return redirect()->route('admin.formsim.index');
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
            'pendidikan_terakhir' => 'required',
            'fotokopi_ktp' => 'required',
            'sertifikat_mengemudi' => 'required',
            'berkacamata' => 'required',
            'cacat_fisik' => 'required',
            'jenis_permohonan' => 'required',
            'gol_sim' => 'required',
            'polda_kedatangan' => 'required',
            'lokasi_kedatangan' => 'required',
            'hasil_ujian_teori' => 'required',
            'hasil_uji_keterampilan_pengemudi' => 'required',
            'praktik_satu' => 'required',
            'praktik_dua' => 'required',
        ],$messages);

        // Check if the 'nik' values have changed
        if ($request->input('nik') !== $FormSim->nik) {
            $validator->addRules(['nik' => 'required|unique:form_sims,nik']);
        }

        if($validator->fails()) {
            Alert::error('Cek kembali pengisian form, terima kasih !');
            return redirect()->route('admin.formsim.edit',$id)->withErrors($validator->errors())->withInput();
        }

        try {
            FormSim::where('id',$id)
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
                    'pendidikan_terakhir' => $request->input('pendidikan_terakhir'),
                    'fotokopi_ktp' => $request->input('fotokopi_ktp'),
                    'sertifikat_mengemudi' => $request->input('sertifikat_mengemudi'),
                    'berkacamata' => $request->input('berkacamata'),
                    'cacat_fisik' => $request->input('cacat_fisik'),
                    'jenis_permohonan' => $request->input('jenis_permohonan'),
                    'gol_sim' => $request->input('gol_sim'),    
                    'polda_kedatangan' => $request->input('polda_kedatangan'),
                    'lokasi_kedatangan' => $request->input('lokasi_kedatangan'),
                    'hasil_ujian_teori' => $request->input('hasil_ujian_teori'),
                    'hasil_uji_keterampilan_pengemudi' => $request->input('hasil_uji_keterampilan_pengemudi'),
                    'praktik_satu' => $request->input('praktik_satu'),
                    'praktik_dua' => $request->input('praktik_dua'),
                ]);
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal update form permohonan sim!');
            return redirect()->route('admin.formsim.edit',$id);
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal update form permohonan sim!');
            return redirect()->route('admin.formsim.edit',$id);
        } catch (\Exception $e) {
            Alert::error('Gagal update form permohonan sim!');
            return redirect()->route('admin.formsim.edit',$id);
        } catch (PDOException $e) {
            Alert::error('Gagal update form permohonan sim!');
            return redirect()->route('admin.formsim.edit',$id);
        } catch (Throwable $e) {
            Alert::error('Gagal update form permohonan sim!');
            return redirect()->route('admin.formsim.edit',$id);
        }

        Alert::success('Sukses', 'Update form permohonan sim berhasil');
        return redirect()->route('admin.formsim.index');
    }

    public function destroy($id) {
        try {
            $FormSim = FormSim::findOrFail($id);
            
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal hapus form permohonan sim!');
            return redirect()->route('admin.formsim.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal hapus form permohonan sim!');
            return redirect()->route('admin.formsim.index');
        } catch (\Exception $e) {
            Alert::error('Gagal hapus form permohonan sim!');
            return redirect()->route('admin.formsim.index');
        } catch (PDOException $e) {
            Alert::error('Gagal hapus form permohonan sim!');
            return redirect()->route('admin.formsim.index');
        } catch (Throwable $e) {
            Alert::error('Gagal hapus form permohonan sim!');
            return redirect()->route('admin.formsim.index');
        }

        try {
            $FormSim->delete();
        
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal hapus form permohonan sim!');
            return redirect()->route('admin.formsim.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal hapus form permohonan sim!');
            return redirect()->route('admin.formsim.index');
        } catch (\Exception $e) {
            Alert::error('Gagal hapus form permohonan sim!');
            return redirect()->route('admin.formsim.index');
        } catch (PDOException $e) {
            Alert::error('Gagal hapus form permohonan sim!');
            return redirect()->route('admin.formsim.index');
        } catch (Throwable $e) {
            Alert::error('Gagal hapus form permohonan sim!');
            return redirect()->route('admin.formsim.index');
        }

        Alert::success('Sukses', 'Form permohonan sim berhasil dihapus');
        return redirect()->route('admin.formsim.index');
    }

    // public function pdf() {
    //   $pegawai = FormSim::all();
 
    //     $pdf = FacadePdf::loadview('mazer_template.admin.form_sim.pdf',['pegawai'=>$pegawai]);
    //     return $pdf->download('laporan-pegawai-pdf.pdf');
    // }

    public function pdf($id) {
        try {
            $data = FormSim::findOrFail($id);

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal masuk form edit permohonan sim!');
            return redirect()->route('admin.formsim.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal masuk form edit permohonan sim!');
            return redirect()->route('admin.formsim.index');
        } catch (\Exception $e) {
            Alert::error('Gagal masuk form edit permohonan sim!');
            return redirect()->route('admin.formsim.index');
        } catch (PDOException $e) {
            Alert::error('Gagal masuk form edit permohonan sim!');
            return redirect()->route('admin.formsim.index');
        } catch (Throwable $e) {
            Alert::error('Gagal masuk form edit permohonan sim!');
            return redirect()->route('admin.formsim.index');
        }

        $imagePath = asset('assets/images/logo/polantas.png');
 
        return view('mazer_template.admin.form_sim.pdf', compact('data', 'imagePath'));
    }


}