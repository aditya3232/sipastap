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
                        ->select('
                        skck_daftar_diris.id as skck_daftar_diris_id,
                        skck_daftar_diris.nama as skck_daftar_diris_nama,
                        skck_daftar_diris.keperluan as skck_daftar_diris_keperluan,
                        skck_daftar_diris.tempat_lahir as skck_daftar_diris_tempat_lahir,
                        skck_daftar_diris.tanggal_lahir as skck_daftar_diris_tanggal_lahir,
                        skck_daftar_diris.umur as skck_daftar_diris_umur,
                        skck_daftar_diris.kedudukan_dalam_keluarga as skck_daftar_diris_kedudukan_dalam_keluarga,
                        skck_daftar_diris.agama as skck_daftar_diris_agama,
                        skck_daftar_diris.kebangsaan as skck_daftar_diris_kebangsaan,
                        skck_daftar_diris.jenis_kelamin as skck_daftar_diris_jenis_kelamin,
                        skck_daftar_diris.status_kawin as skck_daftar_diris_status_kawin,
                        skck_daftar_diris.pekerjaan as skck_daftar_diris_pekerjaan,
                        skck_daftar_diris.alamat_sekarang as skck_daftar_diris_alamat_sekarang,
                        skck_daftar_diris.nik as skck_daftar_diris_nik,
                        skck_daftar_diris.no_passport as skck_daftar_diris_no_passport,
                        skck_daftar_diris.no_kitas as skck_daftar_diris_no_kitas,
                        skck_daftar_diris.no_telp as skck_daftar_diris_no_telp,

                        skck_daftar_diris.rambut as skck_daftar_diris_rambut,
                        skck_daftar_diris.muka as skck_daftar_diris_muka,
                        skck_daftar_diris.kulit as skck_daftar_diris_kulit,
                        skck_daftar_diris.tinggi_badan as skck_daftar_diris_tinggi_badan,
                        skck_daftar_diris.tanda_istimewa as skck_daftar_diris_tanda_istimewa,
                        skck_daftar_diris.rumus_sidik_jari as skck_daftar_diris_rumus_sidik_jari,

                        skck_daftar_diris.suami_atau_istri as skck_daftar_diris_suami_atau_istri,
                        skck_daftar_diris.nama_pasangan as skck_daftar_diris_nama_pasangan,
                        skck_daftar_diris.umur_pasangan as skck_daftar_diris_umur_pasangan,
                        skck_daftar_diris.agama_pasangan as skck_daftar_diris_agama_pasangan,
                        skck_daftar_diris.kebangsaan_pasangan as skck_daftar_diris_kebangsaan_pasangan,
                        skck_daftar_diris.pekerjaan_pasangan as skck_daftar_diris_pekerjaan_pasangan,
                        skck_daftar_diris.alamat_pasangan as skck_daftar_diris_alamat_pasangan,

                        skck_daftar_diris.nama_bapak as skck_daftar_diris_nama_bapak,
                        skck_daftar_diris.umur_bapak as skck_daftar_diris_umur_bapak,
                        skck_daftar_diris.agama_bapak as skck_daftar_diris_agama_bapak,
                        skck_daftar_diris.kebangsaan_bapak as skck_daftar_diris_kebangsaan_bapak,
                        skck_daftar_diris.pekerjaan_bapak as skck_daftar_diris_pekerjaan_bapak,
                        skck_daftar_diris.alamat_bapak as skck_daftar_diris_alamat_bapak,

                        skck_daftar_diris.nama_ibu as skck_daftar_diris_nama_ibu,
                        skck_daftar_diris.umur_ibu as skck_daftar_diris_umur_ibu,
                        skck_daftar_diris.agama_ibu as skck_daftar_diris_agama_ibu,
                        skck_daftar_diris.kebangsaan_ibu as skck_daftar_diris_kebangsaan_ibu,
                        skck_daftar_diris.pekerjaan_ibu as skck_daftar_diris_pekerjaan_ibu,
                        skck_daftar_diris.alamat_ibu as skck_daftar_diris_alamat_ibu,

                        skck_daftar_diris.riwayat_pekerjaan_lain as skck_daftar_diris_riwayat_pekerjaan_lain,
                        skck_daftar_diris.negara_yg_pernah_dikunjungi as skck_daftar_diris_negara_yg_pernah_dikunjungi,
                        skck_daftar_diris.hobi as skck_daftar_diris_hobi,
                        skck_daftar_diris.no_telp_lain as skck_daftar_diris_no_telp_lain,
                        skck_daftar_diris.disponsori_oleh as skck_daftar_diris_disponsori_oleh,
                        skck_daftar_diris.alamat_sponsor as skck_daftar_diris_alamat_sponsor,
                        skck_daftar_diris.no_telp_sponsor as skck_daftar_diris_no_telp_sponsor,
                        skck_daftar_diris.fax as skck_daftar_diris_fax,
                        skck_daftar_diris.jenis_usaha as skck_daftar_diris_jenis_usaha,

                        skck_daftar_diris.apakah_pernah_tersangkut_perkara_pidana as skck_daftar_diris_apakah_pernah_tersangkut_perkara_pidana,
                        skck_daftar_diris.dalam_perkara_pidana_apa as skck_daftar_diris_dalam_perkara_pidana_apa,
                        skck_daftar_diris.bagaimana_putusan_hakim as skck_daftar_diris_bagaimana_putusan_hakim,
                        skck_daftar_diris.apakah_sedang_dalam_proses_pidana as skck_daftar_diris_apakah_sedang_dalam_proses_pidana,
                        skck_daftar_diris.sejauh_mana_proses_hukum_pidananya as skck_daftar_diris_sejauh_mana_proses_hukum_pidananya,

                        skck_daftar_diris.apakah_pernah_tersangkut_perkara_pelanggaran as skck_daftar_diris_apakah_pernah_tersangkut_perkara_pelanggaran,
                        skck_daftar_diris.dalam_perkara_pelanggaran_apa as skck_daftar_diris_dalam_perkara_pelanggaran_apa,
                        skck_daftar_diris.sejauh_mana_proses_hukumnya as skck_daftar_diris_sejauh_mana_proses_hukumnya,

                        skck_daftar_diris.created_at as skck_daftar_diris_created_at,
                        skck_daftar_diris.updated_at as skck_daftar_diris_updated_at,
                        skck_daftar_diris.updated_by as skck_daftar_diris_updated_by,

                        skck_daftar_diris.verified as skck_daftar_diris_verified,
                        skck_daftar_diris.verified_by as skck_daftar_diris_verified_by,
                        skck_daftar_diris.verified_at as skck_daftar_diris_verified_at,

                        skck_daftar_diris.why_rejected as skck_daftar_diris_why_rejected,
                        ')
                        ->where('skck_daftar_diris.id', $id)
                        ->get();
            
        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal melihat detail form permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal melihat detail form permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (\Exception $e) {
            Alert::error('Gagal melihat detail form permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (PDOException $e) {
            Alert::error('Gagal melihat detail form permohonan skck!');
            return redirect()->route('admin.formskck.index');
        } catch (Throwable $e) {
            Alert::error('Gagal melihat detail form permohonan skck!');
            return redirect()->route('admin.formskck.index');
        }
        
        return view('mazer_template.admin.form_skck.detail', compact('skck_daftar_diris'));
    }
}