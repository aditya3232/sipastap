<?php

namespace App\Http\Controllers;

use App\Models\Skck;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert as Alert;
use PDOException;
use Throwable;
use Illuminate\Support\Str;

class FormSkckController extends Controller
{
    public function index() {
        $title = 'Hapus!';
        $text = "Apakah anda yakin hapus?";
        confirmDelete($title, $text);
        return view('mazer_template.admin.form_skck.index');
    }

    public function dataTable(Request $request) {
        $columns = array( 
                            0 =>'nama',
                            1 =>'nik',
                            2 =>'alamat_sekarang',
                            3 =>'no_telp',
                            4 =>'keperluan',
                            5 => 'id', //action
                        );

        $totalData = Skck::count();

        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value')))
        {            
            $Skcks = Skck::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 

            $Skcks = Skck::where('id','LIKE',"%{$search}%")
                            ->orWhere('nama', 'LIKE',"%{$search}%")
                            ->orWhere('nik', 'LIKE',"%{$search}%")
                            ->orWhere('alamat_sekarang', 'LIKE',"%{$search}%")
                            ->orWhere('no_telp', 'LIKE',"%{$search}%")
                            ->orWhere('keperluan', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

            $totalFiltered = Skck::where('id','LIKE',"%{$search}%")
                            ->orWhere('nama', 'LIKE',"%{$search}%")
                            ->orWhere('nik', 'LIKE',"%{$search}%")
                            ->orWhere('alamat_sekarang', 'LIKE',"%{$search}%")
                            ->orWhere('no_telp', 'LIKE',"%{$search}%")
                            ->orWhere('keperluan', 'LIKE',"%{$search}%")
                            ->count();
        }

        $data = array();
        if(!empty($Skcks))
        {
            foreach ($Skcks as $Skck)
            {
                $edit =  route('admin.formskck.edit',$Skck->id);
                $destroy =  route('admin.formskck.destroy',$Skck->id);
                $detail =  route('admin.formskck.detail',$Skck->id);

                $nestedData['id'] = $Skck->id;
                $nestedData['nama'] = $Skck->nama;
                $nestedData['nik'] = $Skck->nik;
                $nestedData['alamat_sekarang'] = Str::limit($Skck->alamat_sekarang, 50);
                $nestedData['no_telp'] = $Skck->no_telp;
                $nestedData['keperluan'] = Str::limit($Skck->keperluan, 50);
                $nestedData['email'] = $Skck->email;
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
            $skck_daftar_diris = DB::table('skck_daftar_diris as skck_daftar_diris')
                        ->select(
                        'skck_daftar_diris.id as skck_daftar_diris_id',
                        'skck_daftar_diris.nama as skck_daftar_diris_nama',
                        'skck_daftar_diris.keperluan as skck_daftar_diris_keperluan',
                        'skck_daftar_diris.tempat_lahir as skck_daftar_diris_tempat_lahir',
                        'skck_daftar_diris.tanggal_lahir as skck_daftar_diris_tanggal_lahir',
                        'skck_daftar_diris.umur as skck_daftar_diris_umur',
                        'skck_daftar_diris.kedudukan_dalam_keluarga as skck_daftar_diris_kedudukan_dalam_keluarga',
                        'skck_daftar_diris.agama as skck_daftar_diris_agama',
                        'skck_daftar_diris.kebangsaan as skck_daftar_diris_kebangsaan',
                        'skck_daftar_diris.jenis_kelamin as skck_daftar_diris_jenis_kelamin',
                        'skck_daftar_diris.status_kawin as skck_daftar_diris_status_kawin',
                        'skck_daftar_diris.pekerjaan as skck_daftar_diris_pekerjaan',
                        'skck_daftar_diris.alamat_sekarang as skck_daftar_diris_alamat_sekarang',
                        'skck_daftar_diris.nik as skck_daftar_diris_nik',
                        'skck_daftar_diris.no_passport as skck_daftar_diris_no_passport',
                        'skck_daftar_diris.no_kitas as skck_daftar_diris_no_kitas',
                        'skck_daftar_diris.no_telp as skck_daftar_diris_no_telp',

                        'skck_daftar_diris.rambut as skck_daftar_diris_rambut',
                        'skck_daftar_diris.muka as skck_daftar_diris_muka',
                        'skck_daftar_diris.kulit as skck_daftar_diris_kulit',
                        'skck_daftar_diris.tinggi_badan as skck_daftar_diris_tinggi_badan',
                        'skck_daftar_diris.tanda_istimewa as skck_daftar_diris_tanda_istimewa',
                        'skck_daftar_diris.rumus_sidik_jari as skck_daftar_diris_rumus_sidik_jari',

                        'skck_daftar_diris.suami_atau_istri as skck_daftar_diris_suami_atau_istri',
                        'skck_daftar_diris.nama_pasangan as skck_daftar_diris_nama_pasangan',
                        'skck_daftar_diris.umur_pasangan as skck_daftar_diris_umur_pasangan',
                        'skck_daftar_diris.agama_pasangan as skck_daftar_diris_agama_pasangan',
                        'skck_daftar_diris.kebangsaan_pasangan as skck_daftar_diris_kebangsaan_pasangan',
                        'skck_daftar_diris.pekerjaan_pasangan as skck_daftar_diris_pekerjaan_pasangan',
                        'skck_daftar_diris.alamat_pasangan as skck_daftar_diris_alamat_pasangan',

                        'skck_daftar_diris.nama_bapak as skck_daftar_diris_nama_bapak',
                        'skck_daftar_diris.umur_bapak as skck_daftar_diris_umur_bapak',
                        'skck_daftar_diris.agama_bapak as skck_daftar_diris_agama_bapak',
                        'skck_daftar_diris.kebangsaan_bapak as skck_daftar_diris_kebangsaan_bapak',
                        'skck_daftar_diris.pekerjaan_bapak as skck_daftar_diris_pekerjaan_bapak',
                        'skck_daftar_diris.alamat_bapak as skck_daftar_diris_alamat_bapak',

                        'skck_daftar_diris.nama_ibu as skck_daftar_diris_nama_ibu',
                        'skck_daftar_diris.umur_ibu as skck_daftar_diris_umur_ibu',
                        'skck_daftar_diris.agama_ibu as skck_daftar_diris_agama_ibu',
                        'skck_daftar_diris.kebangsaan_ibu as skck_daftar_diris_kebangsaan_ibu',
                        'skck_daftar_diris.pekerjaan_ibu as skck_daftar_diris_pekerjaan_ibu',
                        'skck_daftar_diris.alamat_ibu as skck_daftar_diris_alamat_ibu',

                        'skck_daftar_diris.riwayat_pekerjaan_lain as skck_daftar_diris_riwayat_pekerjaan_lain',
                        'skck_daftar_diris.negara_yg_pernah_dikunjungi as skck_daftar_diris_negara_yg_pernah_dikunjungi',
                        'skck_daftar_diris.hobi as skck_daftar_diris_hobi',
                        'skck_daftar_diris.no_telp_lain as skck_daftar_diris_no_telp_lain',
                        'skck_daftar_diris.disponsori_oleh as skck_daftar_diris_disponsori_oleh',
                        'skck_daftar_diris.alamat_sponsor as skck_daftar_diris_alamat_sponsor',
                        'skck_daftar_diris.no_telp_sponsor as skck_daftar_diris_no_telp_sponsor',
                        'skck_daftar_diris.fax as skck_daftar_diris_fax',
                        'skck_daftar_diris.jenis_usaha as skck_daftar_diris_jenis_usaha',

                        'skck_daftar_diris.apakah_pernah_tersangkut_perkara_pidana as skck_daftar_diris_apakah_pernah_tersangkut_perkara_pidana',
                        'skck_daftar_diris.dalam_perkara_pidana_apa as skck_daftar_diris_dalam_perkara_pidana_apa',
                        'skck_daftar_diris.bagaimana_putusan_hakim as skck_daftar_diris_bagaimana_putusan_hakim',
                        'skck_daftar_diris.apakah_sedang_dalam_proses_pidana as skck_daftar_diris_apakah_sedang_dalam_proses_pidana',
                        'skck_daftar_diris.sejauh_mana_proses_hukum_pidananya as skck_daftar_diris_sejauh_mana_proses_hukum_pidananya',

                        'skck_daftar_diris.apakah_pernah_tersangkut_perkara_pelanggaran as skck_daftar_diris_apakah_pernah_tersangkut_perkara_pelanggaran',
                        'skck_daftar_diris.dalam_perkara_pelanggaran_apa as skck_daftar_diris_dalam_perkara_pelanggaran_apa',
                        'skck_daftar_diris.sejauh_mana_proses_hukum_pelanggarannya as skck_daftar_diris_sejauh_mana_proses_hukum_pelanggarannya',

                        'skck_daftar_diris.created_at as skck_daftar_diris_created_at',
                        'skck_daftar_diris.updated_at as skck_daftar_diris_updated_at',
                        'skck_daftar_diris.updated_by as skck_daftar_diris_updated_by',

                        'skck_daftar_diris.verified as skck_daftar_diris_verified',
                        'skck_daftar_diris.verified_by as skck_daftar_diris_verified_by',
                        'skck_daftar_diris.verified_at as skck_daftar_diris_verified_at',

                        'skck_daftar_diris.why_rejected as skck_daftar_diris_why_rejected'
                        )
                        ->where('skck_daftar_diris.id', $id)
                        ->get();
            
        } catch (\Illuminate\Database\QueryException $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        } catch (ModelNotFoundException $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        } catch (\Exception $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        } catch (PDOException $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        } catch (Throwable $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        }

        try {
            $skck_daftar_saudara_kandungs = DB::table('skck_daftar_saudara_kandungs as skck_daftar_saudara_kandungs')
                        ->select(
                        'skck_daftar_saudara_kandungs.id as skck_daftar_saudara_kandungs_id',
                        'skck_daftar_saudara_kandungs.nama as skck_daftar_saudara_kandungs_nama',
                        'skck_daftar_saudara_kandungs.umur as skck_daftar_saudara_kandungs_umur',
                        'skck_daftar_saudara_kandungs.pekerjaan as skck_daftar_saudara_kandungs_pekerjaan',
                        'skck_daftar_saudara_kandungs.alamat as skck_daftar_saudara_kandungs_alamat'
                        )
                        ->where('skck_daftar_saudara_kandungs.skck_daftar_diris_id', $id)
                        ->get();
            
        } catch (\Illuminate\Database\QueryException $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        } catch (ModelNotFoundException $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        } catch (\Exception $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        } catch (PDOException $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        } catch (Throwable $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        }

        try {
            $skck_riwayat_sekolahs = DB::table('skck_riwayat_sekolahs as skck_riwayat_sekolahs')
                        ->select(
                        'skck_riwayat_sekolahs.id as skck_riwayat_sekolahs_id',
                        'skck_riwayat_sekolahs.nama_pendidikan as skck_riwayat_sekolahs_nama_pendidikan',
                        'skck_riwayat_sekolahs.tahun_lulus as skck_riwayat_sekolahs_tahun_lulus',
                        )
                        ->where('skck_riwayat_sekolahs.skck_daftar_diris_id', $id)
                        ->get();
            
        } catch (\Illuminate\Database\QueryException $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        } catch (ModelNotFoundException $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        } catch (\Exception $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        } catch (PDOException $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        } catch (Throwable $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        }

        try {
            $skck_saudara_yg_menjadi_tanggungans = DB::table('skck_saudara_yg_menjadi_tanggungans as skck_saudara_yg_menjadi_tanggungans')
                        ->select(
                        'skck_saudara_yg_menjadi_tanggungans.id as skck_saudara_yg_menjadi_tanggungans_id',
                        'skck_saudara_yg_menjadi_tanggungans.nama as skck_saudara_yg_menjadi_tanggungans_nama',
                        'skck_saudara_yg_menjadi_tanggungans.alamat as skck_saudara_yg_menjadi_tanggungans_alamat',
                        )
                        ->where('skck_saudara_yg_menjadi_tanggungans.skck_daftar_diris_id', $id)
                        ->get();
            
        } catch (\Illuminate\Database\QueryException $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        } catch (ModelNotFoundException $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        } catch (\Exception $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        } catch (PDOException $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        } catch (Throwable $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        }

        try {
            $skck_daftar_anaks = DB::table('skck_daftar_anaks as skck_daftar_anaks')
                        ->select(
                        'skck_daftar_anaks.id as skck_daftar_anaks_id',
                        'skck_daftar_anaks.nama as skck_daftar_anaks_nama',
                        'skck_daftar_anaks.umur as skck_daftar_anaks_umur',
                        )
                        ->where('skck_daftar_anaks.skck_daftar_diris_id', $id)
                        ->get();
            
        } catch (\Illuminate\Database\QueryException $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        } catch (ModelNotFoundException $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        } catch (\Exception $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        } catch (PDOException $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        } catch (Throwable $e) {
            // Alert::error('Gagal melihat detail form permohonan skck!');
            Alert::error($e->getMessage());
            return redirect()->route('admin.formskck.index');
        }
            
        return view('mazer_template.admin.form_skck.detail', compact('skck_daftar_diris','skck_daftar_saudara_kandungs','skck_riwayat_sekolahs','skck_saudara_yg_menjadi_tanggungans','skck_daftar_anaks'));
    }

    public function create() {
        return view('mazer_template.sipastap.form_skck.create');
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
            'skck_daftar_diris_nama' => 'required',
            'skck_daftar_diris_keperluan' => 'required',
            'skck_daftar_diris_tempat_lahir' => 'required',
            'skck_daftar_diris_tanggal_lahir' => 'required',
            'skck_daftar_diris_umur' => 'required',
            'skck_daftar_diris_kedudukan_dalam_keluarga' => 'required',
            'skck_daftar_diris_agama' => 'required',
            'skck_daftar_diris_kebangsaan' => 'required',
            'skck_daftar_diris_jenis_kelamin' => 'required',
            'skck_daftar_diris_status_kawin' => 'required',
            'skck_daftar_diris_pekerjaan' => 'required',
            'skck_daftar_diris_alamat_sekarang' => 'required',
            'skck_daftar_diris_nik' => 'required|unique:skck_daftar_diris,nik',
            'skck_daftar_diris_no_telp' => 'required',

            'skck_daftar_diris_rambut' => 'required',
            'skck_daftar_diris_muka' => 'required',
            'skck_daftar_diris_kulit' => 'required',
            'skck_daftar_diris_tinggi_badan' => 'required',
            'skck_daftar_diris_tanda_istimewa' => 'required',

            'skck_daftar_diris_nama_bapak' => 'required',
            'skck_daftar_diris_umur_bapak' => 'required',
            'skck_daftar_diris_agama_bapak' => 'required',
            'skck_daftar_diris_kebangsaan_bapak' => 'required',
            'skck_daftar_diris_pekerjaan_bapak' => 'required',
            'skck_daftar_diris_alamat_bapak' => 'required',

            'skck_daftar_diris_nama_ibu' => 'required',
            'skck_daftar_diris_umur_ibu' => 'required',
            'skck_daftar_diris_agama_ibu' => 'required',
            'skck_daftar_diris_kebangsaan_ibu' => 'required',
            'skck_daftar_diris_pekerjaan_ibu' => 'required',
            'skck_daftar_diris_alamat_ibu' => 'required',
            
        ],$messages);

        // if input passport not null then must unique, but when null or string '' then not unique
        if($request->input('skck_daftar_diris_no_passport') != null) {
            $validator = Validator::make($request->all(),[
                'skck_daftar_diris_no_passport' => 'required|unique:skck_daftar_diris,no_passport',
            ],$messages);
        }

        // if input kitas not null then must unique, but when null then not unique
        if($request->input('skck_daftar_diris_no_kitas') != null) {
            $validator = Validator::make($request->all(),[
                'skck_daftar_diris_no_kitas' => 'required|unique:skck_daftar_diris,no_kitas',
            ],$messages);
        }

        if($validator->fails()) {
            Alert::error('Cek kembali pengisian form, terima kasih !');
            // Alert::error($validator->errors());
            return redirect()->route('sipastap.formskck.create')->withErrors($validator->errors())->withInput();
        }

        try {
            DB::beginTransaction();

            // setp 1: create skck_daftar_diris
            DB::table('skck_daftar_diris')->insert([
                'nama' => $request->input('skck_daftar_diris_nama'),
                'keperluan' => $request->input('skck_daftar_diris_keperluan'),
                'tempat_lahir' => $request->input('skck_daftar_diris_tempat_lahir'),
                'tanggal_lahir' => $request->input('skck_daftar_diris_tanggal_lahir'),
                'umur' => $request->input('skck_daftar_diris_umur'),
                'kedudukan_dalam_keluarga' => $request->input('skck_daftar_diris_kedudukan_dalam_keluarga'),
                'agama' => $request->input('skck_daftar_diris_agama'),
                'kebangsaan' => $request->input('skck_daftar_diris_kebangsaan'),
                'jenis_kelamin' => $request->input('skck_daftar_diris_jenis_kelamin'),
                'status_kawin' => $request->input('skck_daftar_diris_status_kawin'),
                'pekerjaan' => $request->input('skck_daftar_diris_pekerjaan'),
                'alamat_sekarang' => $request->input('skck_daftar_diris_alamat_sekarang'),
                'nik' => $request->input('skck_daftar_diris_nik'),
                'no_passport' => $request->input('skck_daftar_diris_no_passport'),
                'no_kitas' => $request->input('skck_daftar_diris_no_kitas'),
                'no_telp' => $request->input('skck_daftar_diris_no_telp'),

                'rambut' => $request->input('skck_daftar_diris_rambut'),
                'muka' => $request->input('skck_daftar_diris_muka'),
                'kulit' => $request->input('skck_daftar_diris_kulit'),
                'tinggi_badan' => $request->input('skck_daftar_diris_tinggi_badan'),
                'tanda_istimewa' => $request->input('skck_daftar_diris_tanda_istimewa'),
                'rumus_sidik_jari' => $request->input('skck_daftar_diris_rumus_sidik_jari'),

                'suami_atau_istri' => $request->input('skck_daftar_diris_suami_atau_istri'),
                'nama_pasangan' => $request->input('skck_daftar_diris_nama_pasangan'),
                'umur_pasangan' => $request->input('skck_daftar_diris_umur_pasangan'),
                'agama_pasangan' => $request->input('skck_daftar_diris_agama_pasangan'),
                'kebangsaan_pasangan' => $request->input('skck_daftar_diris_kebangsaan_pasangan'),
                'pekerjaan_pasangan' => $request->input('skck_daftar_diris_pekerjaan_pasangan'),
                'alamat_pasangan' => $request->input('skck_daftar_diris_alamat_pasangan'),

                'nama_bapak' => $request->input('skck_daftar_diris_nama_bapak'),
                'umur_bapak' => $request->input('skck_daftar_diris_umur_bapak'),
                'agama_bapak' => $request->input('skck_daftar_diris_agama_bapak'),
                'kebangsaan_bapak' => $request->input('skck_daftar_diris_kebangsaan_bapak'),
                'pekerjaan_bapak' => $request->input('skck_daftar_diris_pekerjaan_bapak'),
                'alamat_bapak' => $request->input('skck_daftar_diris_alamat_bapak'),

                'nama_ibu' => $request->input('skck_daftar_diris_nama_ibu'),
                'umur_ibu' => $request->input('skck_daftar_diris_umur_ibu'),
                'agama_ibu' => $request->input('skck_daftar_diris_agama_ibu'),
                'kebangsaan_ibu' => $request->input('skck_daftar_diris_kebangsaan_ibu'),
                'pekerjaan_ibu' => $request->input('skck_daftar_diris_pekerjaan_ibu'),
                'alamat_ibu' => $request->input('skck_daftar_diris_alamat_ibu'),

                'riwayat_pekerjaan_lain' => $request->input('skck_daftar_diris_riwayat_pekerjaan_lain'),
                'negara_yg_pernah_dikunjungi' => $request->input('skck_daftar_diris_negara_yg_pernah_dikunjungi'),
                'hobi' => $request->input('skck_daftar_diris_hobi'),
                'no_telp_lain' => $request->input('skck_daftar_diris_no_telp_lain'),
                'disponsori_oleh' => $request->input('skck_daftar_diris_disponsori_oleh'),
                'alamat_sponsor' => $request->input('skck_daftar_diris_alamat_sponsor'),
                'no_telp_sponsor' => $request->input('skck_daftar_diris_no_telp_sponsor'),
                'fax' => $request->input('skck_daftar_diris_fax'),
                'jenis_usaha' => $request->input('skck_daftar_diris_jenis_usaha'),

                'apakah_pernah_tersangkut_perkara_pidana' => $request->input('skck_daftar_diris_apakah_pernah_tersangkut_perkara_pidana'),
                'dalam_perkara_pidana_apa' => $request->input('skck_daftar_diris_dalam_perkara_pidana_apa'),
                'bagaimana_putusan_hakim' => $request->input('skck_daftar_diris_bagaimana_putusan_hakim'),
                'apakah_sedang_dalam_proses_pidana' => $request->input('skck_daftar_diris_apakah_sedang_dalam_proses_pidana'),
                'sejauh_mana_proses_hukum_pidananya' => $request->input('skck_daftar_diris_sejauh_mana_proses_hukum_pidananya'),

                'apakah_pernah_tersangkut_perkara_pelanggaran' => $request->input('skck_daftar_diris_apakah_pernah_tersangkut_perkara_pelanggaran'),
                'dalam_perkara_pelanggaran_apa' => $request->input('skck_daftar_diris_dalam_perkara_pelanggaran_apa'),
                'sejauh_mana_proses_hukum_pelanggarannya' => $request->input('skck_daftar_diris_sejauh_mana_proses_hukum_pelanggarannya'),

            ]);

            // setp 2: find the id of the newly created skck_daftar_diris
            $skck_daftar_diris_id = DB::table('skck_daftar_diris')->where('nik', $request->input('skck_daftar_diris_nik'))->first()->id;

            // step 3: insert into skck_daftar_saudara_kandungs from multiple data in array, from input like this 
            // name="skck_daftar_saudara_kandungs_nama[]"
            // name="skck_daftar_saudara_kandungs_umur[]"
            // name="skck_daftar_saudara_kandungs_pekerjaan[]"
            // name="skck_daftar_saudara_kandungs_alamat[]"
            // but if no data on array, dont insert or skip
            $skck_daftar_saudara_kandungs_namas = $request->input('skck_daftar_saudara_kandungs_nama');
            $skck_daftar_saudara_kandungs_umurs = $request->input('skck_daftar_saudara_kandungs_umur');
            $skck_daftar_saudara_kandungs_pekerjaans = $request->input('skck_daftar_saudara_kandungs_pekerjaan');
            $skck_daftar_saudara_kandungs_alamats = $request->input('skck_daftar_saudara_kandungs_alamat');

            // Use array_filter to remove any null or empty elements from the arrays [prevent insert null to database]
            $skck_daftar_saudara_kandungs_namas = array_filter($skck_daftar_saudara_kandungs_namas);
            $skck_daftar_saudara_kandungs_umurs = array_filter($skck_daftar_saudara_kandungs_umurs);
            $skck_daftar_saudara_kandungs_pekerjaans = array_filter($skck_daftar_saudara_kandungs_pekerjaans);
            $skck_daftar_saudara_kandungs_alamats = array_filter($skck_daftar_saudara_kandungs_alamats);

            // if skck_daftar_saudara_kandungs_namas value is empty dont insert
            if (count($skck_daftar_saudara_kandungs_namas) > 0) {
                for ($i = 0; $i < count($skck_daftar_saudara_kandungs_namas); $i++) {
                    DB::table('skck_daftar_saudara_kandungs')->insert([
                        'skck_daftar_diris_id' => $skck_daftar_diris_id,
                        'nama' => $skck_daftar_saudara_kandungs_namas[$i],
                        'umur' => $skck_daftar_saudara_kandungs_umurs[$i],
                        'pekerjaan' => $skck_daftar_saudara_kandungs_pekerjaans[$i],
                        'alamat' => $skck_daftar_saudara_kandungs_alamats[$i],
                    ]);
                }
            }
           
            // step 4: insert into skck_riwayat_sekolahs from multiple data in array, from input like this
            // name="skck_riwayat_sekolahs_nama_pendidikan[]"
            // name="skck_riwayat_sekolahs_tahun_lulus[]"
            // but if no data on array, dont insert or skip
            $skck_riwayat_sekolahs_nama_pendidikans = $request->input('skck_riwayat_sekolahs_nama_pendidikan');
            $skck_riwayat_sekolahs_tahun_luluss = $request->input('skck_riwayat_sekolahs_tahun_lulus');

            // Use array_filter to remove any null or empty elements from the arrays [prevent insert null to database]
            $skck_riwayat_sekolahs_nama_pendidikans = array_filter($skck_riwayat_sekolahs_nama_pendidikans);
            $skck_riwayat_sekolahs_tahun_luluss = array_filter($skck_riwayat_sekolahs_tahun_luluss);

            if (count($skck_riwayat_sekolahs_nama_pendidikans) > 0) {
                for ($i = 0; $i < count($skck_riwayat_sekolahs_nama_pendidikans); $i++) {
                    DB::table('skck_riwayat_sekolahs')->insert([
                        'skck_daftar_diris_id' => $skck_daftar_diris_id,
                        'nama_pendidikan' => $skck_riwayat_sekolahs_nama_pendidikans[$i],
                        'tahun_lulus' => $skck_riwayat_sekolahs_tahun_luluss[$i],
                    ]);
                }
            }
            
            // step 5: insert into skck_saudara_yg_menjadi_tanggungans from multiple data in array, from input like this
            // name="skck_saudara_yg_menjadi_tanggungans_nama[]"
            // name="skck_saudara_yg_menjadi_tanggungans_alamat[]"
            // but if no data on array, dont insert or skip
            $skck_saudara_yg_menjadi_tanggungans_namas = $request->input('skck_saudara_yg_menjadi_tanggungans_nama');
            $skck_saudara_yg_menjadi_tanggungans_alamats = $request->input('skck_saudara_yg_menjadi_tanggungans_alamat');

            // Use array_filter to remove any null or empty elements from the arrays [prevent insert null to database]
            $skck_saudara_yg_menjadi_tanggungans_namas = array_filter($skck_saudara_yg_menjadi_tanggungans_namas);
            $skck_saudara_yg_menjadi_tanggungans_alamats = array_filter($skck_saudara_yg_menjadi_tanggungans_alamats);

            if (count($skck_saudara_yg_menjadi_tanggungans_namas) > 0) {
                for ($i = 0; $i < count($skck_saudara_yg_menjadi_tanggungans_namas); $i++) {
                    DB::table('skck_saudara_yg_menjadi_tanggungans')->insert([
                        'skck_daftar_diris_id' => $skck_daftar_diris_id,
                        'nama' => $skck_saudara_yg_menjadi_tanggungans_namas[$i],
                        'alamat' => $skck_saudara_yg_menjadi_tanggungans_alamats[$i],
                    ]);
                }
            }

            // step 6: insert into skck_daftar_anaks from multiple data in array, from input like this
            // name="skck_daftar_anaks_nama[]"
            // name="skck_daftar_anaks_umur[]"
            // but if no data on array, dont insert or skip
            $skck_daftar_anaks_namas = $request->input('skck_daftar_anaks_nama');
            $skck_daftar_anaks_umurs = $request->input('skck_daftar_anaks_umur');

            // Use array_filter to remove any null or empty elements from the arrays [prevent insert null to database]
            $skck_daftar_anaks_namas = array_filter($skck_daftar_anaks_namas);
            $skck_daftar_anaks_umurs = array_filter($skck_daftar_anaks_umurs);

            if (count($skck_daftar_anaks_namas) > 0) {
                for ($i = 0; $i < count($skck_daftar_anaks_namas); $i++) {
                    DB::table('skck_daftar_anaks')->insert([
                        'skck_daftar_diris_id' => $skck_daftar_diris_id,
                        'nama' => $skck_daftar_anaks_namas[$i],
                        'umur' => $skck_daftar_anaks_umurs[$i],
                    ]);
                }
            }

            // If everything went well, commit the changes
            // All changes are now committed to the database
            DB::commit();

        } catch (\Illuminate\Database\QueryException $e) {
            // Something went wrong, rollback the transaction
            DB::rollBack();
            // Alert::error($e->getMessage());
            Alert::error('Gagal simpan form skck!');
            return redirect()->route('sipastap.formskck.create');

        } catch (ModelNotFoundException $e) {
            DB::rollBack();
            // Alert::error($e->getMessage());
            Alert::error('Gagal simpan form skck!');
            return redirect()->route('sipastap.formskck.create');

        } catch (\Exception $e) {
            DB::rollBack();
            // Alert::error($e->getMessage());
            Alert::error('Gagal simpan form skck!');
            return redirect()->route('sipastap.formskck.create');

        } catch (PDOException $e) {
            DB::rollBack();
            // Alert::error($e->getMessage());
            Alert::error('Gagal simpan form skck!');
            return redirect()->route('sipastap.formskck.create');

        } catch (Throwable $e) {
            DB::rollBack();
            // Alert::error($e->getMessage());
            Alert::error('Gagal simpan form skck!');
            return redirect()->route('sipastap.formskck.create');
            
        }

        Alert::success('Sukses', 'Formulir laporan kehilangan berhasil ditambahkan.');
        return redirect()->route('sipastap.index');
    }

    public function pdf($id) {
        try {
            $skck_daftar_diris = DB::table('skck_daftar_diris as skck_daftar_diris')
                        ->select(
                        'skck_daftar_diris.id as skck_daftar_diris_id',
                        'skck_daftar_diris.nama as skck_daftar_diris_nama',
                        'skck_daftar_diris.keperluan as skck_daftar_diris_keperluan',
                        'skck_daftar_diris.tempat_lahir as skck_daftar_diris_tempat_lahir',
                        'skck_daftar_diris.tanggal_lahir as skck_daftar_diris_tanggal_lahir',
                        'skck_daftar_diris.umur as skck_daftar_diris_umur',
                        'skck_daftar_diris.kedudukan_dalam_keluarga as skck_daftar_diris_kedudukan_dalam_keluarga',
                        'skck_daftar_diris.agama as skck_daftar_diris_agama',
                        'skck_daftar_diris.kebangsaan as skck_daftar_diris_kebangsaan',
                        'skck_daftar_diris.jenis_kelamin as skck_daftar_diris_jenis_kelamin',
                        'skck_daftar_diris.status_kawin as skck_daftar_diris_status_kawin',
                        'skck_daftar_diris.pekerjaan as skck_daftar_diris_pekerjaan',
                        'skck_daftar_diris.alamat_sekarang as skck_daftar_diris_alamat_sekarang',
                        'skck_daftar_diris.nik as skck_daftar_diris_nik',
                        'skck_daftar_diris.no_passport as skck_daftar_diris_no_passport',
                        'skck_daftar_diris.no_kitas as skck_daftar_diris_no_kitas',
                        'skck_daftar_diris.no_telp as skck_daftar_diris_no_telp',

                        'skck_daftar_diris.rambut as skck_daftar_diris_rambut',
                        'skck_daftar_diris.muka as skck_daftar_diris_muka',
                        'skck_daftar_diris.kulit as skck_daftar_diris_kulit',
                        'skck_daftar_diris.tinggi_badan as skck_daftar_diris_tinggi_badan',
                        'skck_daftar_diris.tanda_istimewa as skck_daftar_diris_tanda_istimewa',
                        'skck_daftar_diris.rumus_sidik_jari as skck_daftar_diris_rumus_sidik_jari',

                        'skck_daftar_diris.suami_atau_istri as skck_daftar_diris_suami_atau_istri',
                        'skck_daftar_diris.nama_pasangan as skck_daftar_diris_nama_pasangan',
                        'skck_daftar_diris.umur_pasangan as skck_daftar_diris_umur_pasangan',
                        'skck_daftar_diris.agama_pasangan as skck_daftar_diris_agama_pasangan',
                        'skck_daftar_diris.kebangsaan_pasangan as skck_daftar_diris_kebangsaan_pasangan',
                        'skck_daftar_diris.pekerjaan_pasangan as skck_daftar_diris_pekerjaan_pasangan',
                        'skck_daftar_diris.alamat_pasangan as skck_daftar_diris_alamat_pasangan',

                        'skck_daftar_diris.nama_bapak as skck_daftar_diris_nama_bapak',
                        'skck_daftar_diris.umur_bapak as skck_daftar_diris_umur_bapak',
                        'skck_daftar_diris.agama_bapak as skck_daftar_diris_agama_bapak',
                        'skck_daftar_diris.kebangsaan_bapak as skck_daftar_diris_kebangsaan_bapak',
                        'skck_daftar_diris.pekerjaan_bapak as skck_daftar_diris_pekerjaan_bapak',
                        'skck_daftar_diris.alamat_bapak as skck_daftar_diris_alamat_bapak',

                        'skck_daftar_diris.nama_ibu as skck_daftar_diris_nama_ibu',
                        'skck_daftar_diris.umur_ibu as skck_daftar_diris_umur_ibu',
                        'skck_daftar_diris.agama_ibu as skck_daftar_diris_agama_ibu',
                        'skck_daftar_diris.kebangsaan_ibu as skck_daftar_diris_kebangsaan_ibu',
                        'skck_daftar_diris.pekerjaan_ibu as skck_daftar_diris_pekerjaan_ibu',
                        'skck_daftar_diris.alamat_ibu as skck_daftar_diris_alamat_ibu',

                        'skck_daftar_diris.riwayat_pekerjaan_lain as skck_daftar_diris_riwayat_pekerjaan_lain',
                        'skck_daftar_diris.negara_yg_pernah_dikunjungi as skck_daftar_diris_negara_yg_pernah_dikunjungi',
                        'skck_daftar_diris.hobi as skck_daftar_diris_hobi',
                        'skck_daftar_diris.no_telp_lain as skck_daftar_diris_no_telp_lain',
                        'skck_daftar_diris.disponsori_oleh as skck_daftar_diris_disponsori_oleh',
                        'skck_daftar_diris.alamat_sponsor as skck_daftar_diris_alamat_sponsor',
                        'skck_daftar_diris.no_telp_sponsor as skck_daftar_diris_no_telp_sponsor',
                        'skck_daftar_diris.fax as skck_daftar_diris_fax',
                        'skck_daftar_diris.jenis_usaha as skck_daftar_diris_jenis_usaha',

                        'skck_daftar_diris.apakah_pernah_tersangkut_perkara_pidana as skck_daftar_diris_apakah_pernah_tersangkut_perkara_pidana',
                        'skck_daftar_diris.dalam_perkara_pidana_apa as skck_daftar_diris_dalam_perkara_pidana_apa',
                        'skck_daftar_diris.bagaimana_putusan_hakim as skck_daftar_diris_bagaimana_putusan_hakim',
                        'skck_daftar_diris.apakah_sedang_dalam_proses_pidana as skck_daftar_diris_apakah_sedang_dalam_proses_pidana',
                        'skck_daftar_diris.sejauh_mana_proses_hukum_pidananya as skck_daftar_diris_sejauh_mana_proses_hukum_pidananya',

                        'skck_daftar_diris.apakah_pernah_tersangkut_perkara_pelanggaran as skck_daftar_diris_apakah_pernah_tersangkut_perkara_pelanggaran',
                        'skck_daftar_diris.dalam_perkara_pelanggaran_apa as skck_daftar_diris_dalam_perkara_pelanggaran_apa',
                        'skck_daftar_diris.sejauh_mana_proses_hukum_pelanggarannya as skck_daftar_diris_sejauh_mana_proses_hukum_pelanggarannya',

                        'skck_daftar_diris.created_at as skck_daftar_diris_created_at',
                        'skck_daftar_diris.updated_at as skck_daftar_diris_updated_at',
                        'skck_daftar_diris.updated_by as skck_daftar_diris_updated_by',

                        'skck_daftar_diris.verified as skck_daftar_diris_verified',
                        'skck_daftar_diris.verified_by as skck_daftar_diris_verified_by',
                        'skck_daftar_diris.verified_at as skck_daftar_diris_verified_at',

                        'skck_daftar_diris.why_rejected as skck_daftar_diris_why_rejected'
                        )
                        ->where('skck_daftar_diris.id', $id)
                        ->get();

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (\Exception $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (PDOException $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (Throwable $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        }

        try {
            $skck_daftar_saudara_kandungs = DB::table('skck_daftar_saudara_kandungs as skck_daftar_saudara_kandungs')
                        ->select(
                        'skck_daftar_saudara_kandungs.id as skck_daftar_saudara_kandungs_id',
                        'skck_daftar_saudara_kandungs.nama as skck_daftar_saudara_kandungs_nama',
                        'skck_daftar_saudara_kandungs.umur as skck_daftar_saudara_kandungs_umur',
                        'skck_daftar_saudara_kandungs.pekerjaan as skck_daftar_saudara_kandungs_pekerjaan',
                        'skck_daftar_saudara_kandungs.alamat as skck_daftar_saudara_kandungs_alamat'
                        )
                        ->where('skck_daftar_saudara_kandungs.skck_daftar_diris_id', $id)
                        ->get();

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (\Exception $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (PDOException $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (Throwable $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        }

        try {
            $skck_riwayat_sekolahs = DB::table('skck_riwayat_sekolahs as skck_riwayat_sekolahs')
                        ->select(
                        'skck_riwayat_sekolahs.id as skck_riwayat_sekolahs_id',
                        'skck_riwayat_sekolahs.nama_pendidikan as skck_riwayat_sekolahs_nama_pendidikan',
                        'skck_riwayat_sekolahs.tahun_lulus as skck_riwayat_sekolahs_tahun_lulus',
                        )
                        ->where('skck_riwayat_sekolahs.skck_daftar_diris_id', $id)
                        ->get();

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (\Exception $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (PDOException $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (Throwable $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        }

        try {
            $skck_saudara_yg_menjadi_tanggungans = DB::table('skck_saudara_yg_menjadi_tanggungans as skck_saudara_yg_menjadi_tanggungans')
                        ->select(
                        'skck_saudara_yg_menjadi_tanggungans.id as skck_saudara_yg_menjadi_tanggungans_id',
                        'skck_saudara_yg_menjadi_tanggungans.nama as skck_saudara_yg_menjadi_tanggungans_nama',
                        'skck_saudara_yg_menjadi_tanggungans.alamat as skck_saudara_yg_menjadi_tanggungans_alamat',
                        )
                        ->where('skck_saudara_yg_menjadi_tanggungans.skck_daftar_diris_id', $id)
                        ->get();

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (\Exception $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (PDOException $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (Throwable $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        }

        try {
            $skck_daftar_anaks = DB::table('skck_daftar_anaks as skck_daftar_anaks')
                        ->select(
                        'skck_daftar_anaks.id as skck_daftar_anaks_id',
                        'skck_daftar_anaks.nama as skck_daftar_anaks_nama',
                        'skck_daftar_anaks.umur as skck_daftar_anaks_umur',
                        )
                        ->where('skck_daftar_anaks.skck_daftar_diris_id', $id)
                        ->get();

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (\Exception $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (PDOException $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (Throwable $e) {
            Alert::error('Gagal download pdf permohonan skck!');
            return redirect()->route('admin.formskck.index');
        }

        $imagePath = asset('assets/images/logo/polantas.png');
 
        return view('mazer_template.admin.form_skck.pdf', compact('imagePath', 'skck_daftar_diris', 'skck_daftar_saudara_kandungs', 'skck_riwayat_sekolahs', 'skck_saudara_yg_menjadi_tanggungans', 'skck_daftar_anaks'));
    }

}