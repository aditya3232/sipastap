<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert as Alert;
use App\Models\SkckDaftarDiri;
use App\Models\SkckDaftarBapak;
use App\Models\SkckDaftarIbu;
use App\Models\SkckDaftarIstri;
use App\Models\SkckDaftarSuami;
use App\Models\SkckDaftarPelanggaran;
use App\Models\SkckDaftarPidana;
use App\Models\SkckDaftarSaudara;


class SkckOnlineController extends Controller
{
    
    public function index() { 
        return view('mazer_template.admin.skck.daftar_skck');
    }

    public function create() {
        return view('mazer_template.dilan_polres.form_skck.create');
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
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'nik' => 'required|unique:nik',
            'pekerjaan' => 'required',
            'kebangsaan' => 'required',
            'status_perkawinan' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'email' => 'required',
            'no_passport' => 'required',
            'no_kitas_kitap' => 'required',
            'keperluan_skck' => 'required',
            // 'riwayat_sd' => 'required',
            // 'tangggal_lulus_sd' => 'required',
            // 'riwayat_smp' => 'required',
            // 'tangggal_lulus_smp' => 'required',
            // 'riwayat_sma' => 'required',
            // 'tangggal_lulus_sma' => 'required',
            // 'riwayat_s1' => 'required',
            // 'tangggal_lulus_s1' => 'required',
            // 'riwayat_s2' => 'required',
            // 'tangggal_lulus_s2' => 'required',
            // 'riwayat_s3' => 'required',
            // 'tangggal_lulus_s3' => 'required',

            'skck_daftar_bapaks_nama' => 'required',
            'skck_daftar_bapaks_tempat_lahir' => 'required',
            'skck_daftar_bapaks_tanggal_lahir' => 'required',
            'skck_daftar_bapaks_jenis_kelamin' => 'required',
            'skck_daftar_bapaks_nik' => 'required',
            'skck_daftar_bapaks_pekerjaan' => 'required',
            'skck_daftar_bapaks_kebangsaan' => 'required',
            'skck_daftar_bapaks_status_perkawinan' => 'required',
            'skck_daftar_bapaks_agama' => 'required',
            'skck_daftar_bapaks_alamat' => 'required',
            'skck_daftar_bapaks_no_telepon' => 'required',
            // 'skck_daftar_bapaks_email' => 'required',

            'skck_daftar_ibus_nama' => 'required',
            'skck_daftar_ibus_tempat_lahir' => 'required',
            'skck_daftar_ibus_tanggal_lahir' => 'required',
            'skck_daftar_ibus_jenis_kelamin' => 'required',
            'skck_daftar_ibus_nik' => 'required',
            'skck_daftar_ibus_pekerjaan' => 'required',
            'skck_daftar_ibus_kebangsaan' => 'required',
            'skck_daftar_ibus_status_perkawinan' => 'required',
            'skck_daftar_ibus_agama' => 'required',
            'skck_daftar_ibus_alamat' => 'required',
            'skck_daftar_ibus_no_telepon' => 'required',
            // 'skck_daftar_ibus_email' => 'required',

            'skck_daftar_istris_nama' => 'required',
            'skck_daftar_istris_tempat_lahir' => 'required',
            'skck_daftar_istris_tanggal_lahir' => 'required',
            'skck_daftar_istris_jenis_kelamin' => 'required',
            'skck_daftar_istris_nik' => 'required',
            'skck_daftar_istris_pekerjaan' => 'required',
            'skck_daftar_istris_kebangsaan' => 'required',
            'skck_daftar_istris_status_perkawinan' => 'required',
            'skck_daftar_istris_agama' => 'required',
            'skck_daftar_istris_alamat' => 'required',
            'skck_daftar_istris_no_telepon' => 'required',
            // 'skck_daftar_istris_email' => 'required',

            'skck_daftar_suamis_nama' => 'required',
            'skck_daftar_suamis_tempat_lahir' => 'required',
            'skck_daftar_suamis_tanggal_lahir' => 'required',
            'skck_daftar_suamis_jenis_kelamin' => 'required',
            'skck_daftar_suamis_nik' => 'required',
            'skck_daftar_suamis_pekerjaan' => 'required',
            'skck_daftar_suamis_kebangsaan' => 'required',
            'skck_daftar_suamis_status_perkawinan' => 'required',
            'skck_daftar_suamis_agama' => 'required',
            'skck_daftar_suamis_alamat' => 'required',
            'skck_daftar_suamis_no_telepon' => 'required',
            // 'skck_daftar_suamis_email' => 'required',

            'skck_daftar_saudaras_nama' => 'required',
            'skck_daftar_saudaras_tempat_lahir' => 'required',
            'skck_daftar_saudaras_tanggal_lahir' => 'required',
            'skck_daftar_saudaras_jenis_kelamin' => 'required',
            'skck_daftar_saudaras_nik' => 'required',
            'skck_daftar_saudaras_pekerjaan' => 'required',
            'skck_daftar_saudaras_kebangsaan' => 'required',
            'skck_daftar_saudaras_status_perkawinan' => 'required',
            'skck_daftar_saudaras_agama' => 'required',
            'skck_daftar_saudaras_alamat' => 'required',
            'skck_daftar_saudaras_no_telepon' => 'required',
            // 'skck_daftar_saudaras_email' => 'required',

            'skck_daftar_pelanggarans_pelanggaran_apa' => 'required',
            'skck_daftar_pelanggarans_sejauhmana_proseshukumnya' => 'required',

            'skck_daftar_pidanas_pidana_apa' => 'required',
            'skck_daftar_pidanas_sejauhmana_proseshukumnya' => 'required',
        ],$messages);

        if($validator->fails()) {
            Alert::error('please validate the captcha, thanks !');
            return redirect()->route('dilanpolres.daftarskck')->withErrors($validator->errors())->withInput();
        }

        // post data diri
        SkckDaftarDiri::insert([
            'nama' => $request->input('nama'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'nik' => $request->input('nik'),
            'pekerjaan' => $request->input('pekerjaan'),
            'kebangsaan' => $request->input('kebangsaan'),
            'status_perkawinan' => $request->input('status_perkawinan'),
            'agama' => $request->input('agama'),
            'alamat' => $request->input('alamat'),
            'no_telepon' => $request->input('no_telepon'),
            'email' => $request->input('email'),
        ]);

        // // select id where nik = request, and created_at where nik = request, created at in latest
        // $created_at = SkckDaftarDiri::where('nik', $request->input('nik'))->latest()->first()->created_at;
        // $skck_daftar_diri_id = SkckDaftarDiri::where('nik', $request->input('nik'))->where('created_at', $created_at)->first()->id;


        // post data bapak, disini memanggil relasi dari skck_daftar_diri_id
        SkckDaftarBapak::skckDaftarBapak()->insert([
            // 'skck_daftar_diri_id' => $skck_daftar_diri_id,
            'skck_daftar_bapaks_nama' => $request->input('skck_daftar_bapaks_nama'),
            'skck_daftar_bapaks_tempat_lahir' => $request->input('skck_daftar_bapaks_tempat_lahir'),
            'skck_daftar_bapaks_tanggal_lahir' => $request->input('skck_daftar_bapaks_tanggal_lahir'),
            'skck_daftar_bapaks_jenis_kelamin' => $request->input('skck_daftar_bapaks_jenis_kelamin'),
            'skck_daftar_bapaks_nik' => $request->input('skck_daftar_bapaks_nik'),
            'skck_daftar_bapaks_pekerjaan' => $request->input('skck_daftar_bapaks_pekerjaan'),
            'skck_daftar_bapaks_kebangsaan' => $request->input('skck_daftar_bapaks_kebangsaan'),
            'skck_daftar_bapaks_status_perkawinan' => $request->input('skck_daftar_bapaks_status_perkawinan'),
            'skck_daftar_bapaks_agama' => $request->input('skck_daftar_bapaks_agama'),
            'skck_daftar_bapaks_alamat' => $request->input('skck_daftar_bapaks_alamat'),
            'skck_daftar_bapaks_no_telepon' => $request->input('skck_daftar_bapaks_no_telepon'),
            'skck_daftar_bapaks_email' => $request->input('skck_daftar_bapaks_email'),
        ]);

        // post data ibu
        SkckDaftarIbu::skckDaftarIbu()->insert([
            // 'skck_daftar_diri_id' => $skck_daftar_diri_id,
            'skck_daftar_ibus_nama' => $request->input('skck_daftar_ibus_nama'),
            'skck_daftar_ibus_tempat_lahir' => $request->input('skck_daftar_ibus_tempat_lahir'),
            'skck_daftar_ibus_tanggal_lahir' => $request->input('skck_daftar_ibus_tanggal_lahir'),
            'skck_daftar_ibus_jenis_kelamin' => $request->input('skck_daftar_ibus_jenis_kelamin'),
            'skck_daftar_ibus_nik' => $request->input('skck_daftar_ibus_nik'),
            'skck_daftar_ibus_pekerjaan' => $request->input('skck_daftar_ibus_pekerjaan'),
            'skck_daftar_ibus_kebangsaan' => $request->input('skck_daftar_ibus_kebangsaan'),
            'skck_daftar_ibus_status_perkawinan' => $request->input('skck_daftar_ibus_status_perkawinan'),
            'skck_daftar_ibus_agama' => $request->input('skck_daftar_ibus_agama'),
            'skck_daftar_ibus_alamat' => $request->input('skck_daftar_ibus_alamat'),
            'skck_daftar_ibus_no_telepon' => $request->input('skck_daftar_ibus_no_telepon'),
            'skck_daftar_ibus_email' => $request->input('skck_daftar_ibus_email'),
        ]);

        // post data istri
        SkckDaftarIstri::skckDaftarIstri()->insert([
            // 'skck_daftar_diri_id' => $skck_daftar_diri_id,
            'skck_daftar_istris_nama' => $request->input('skck_daftar_istris_nama'),
            'skck_daftar_istris_tempat_lahir' => $request->input('skck_daftar_istris_tempat_lahir'),
            'skck_daftar_istris_tanggal_lahir' => $request->input('skck_daftar_istris_tanggal_lahir'),
            'skck_daftar_istris_jenis_kelamin' => $request->input('skck_daftar_istris_jenis_kelamin'),
            'skck_daftar_istris_nik' => $request->input('skck_daftar_istris_nik'),
            'skck_daftar_istris_pekerjaan' => $request->input('skck_daftar_istris_pekerjaan'),
            'skck_daftar_istris_kebangsaan' => $request->input('skck_daftar_istris_kebangsaan'),
            'skck_daftar_istris_status_perkawinan' => $request->input('skck_daftar_istris_status_perkawinan'),
            'skck_daftar_istris_agama' => $request->input('skck_daftar_istris_agama'),
            'skck_daftar_istris_alamat' => $request->input('skck_daftar_istris_alamat'),
            'skck_daftar_istris_no_telepon' => $request->input('skck_daftar_istris_no_telepon'),
            'skck_daftar_istris_email' => $request->input('skck_daftar_istris_email'),
        ]);

        // post data suami
        SkckDaftarSuami::skckDaftarSuami()->insert([
            // 'skck_daftar_diri_id' => $skck_daftar_diri_id,
            'skck_daftar_suamis_nama' => $request->input('skck_daftar_suamis_nama'),
            'skck_daftar_suamis_tempat_lahir' => $request->input('skck_daftar_suamis_tempat_lahir'),
            'skck_daftar_suamis_tanggal_lahir' => $request->input('skck_daftar_suamis_tanggal_lahir'),
            'skck_daftar_suamis_jenis_kelamin' => $request->input('skck_daftar_suamis_jenis_kelamin'),
            'skck_daftar_suamis_nik' => $request->input('skck_daftar_suamis_nik'),
            'skck_daftar_suamis_pekerjaan' => $request->input('skck_daftar_suamis_pekerjaan'),
            'skck_daftar_suamis_kebangsaan' => $request->input('skck_daftar_suamis_kebangsaan'),
            'skck_daftar_suamis_status_perkawinan' => $request->input('skck_daftar_suamis_status_perkawinan'),
            'skck_daftar_suamis_agama' => $request->input('skck_daftar_suamis_agama'),
            'skck_daftar_suamis_alamat' => $request->input('skck_daftar_suamis_alamat'),
            'skck_daftar_suamis_no_telepon' => $request->input('skck_daftar_suamis_no_telepon'),
            'skck_daftar_suamis_email' => $request->input('skck_daftar_suamis_email'),
        ]);

        // post data saudara
        SkckDaftarSaudara::skckDaftarSaudara()->insert([
            // 'skck_daftar_diri_id' => $skck_daftar_diri_id,
            'skck_daftar_saudaras_nama' => $request->input('skck_daftar_saudaras_nama'),
            'skck_daftar_saudaras_tempat_lahir' => $request->input('skck_daftar_saudaras_tempat_lahir'),
            'skck_daftar_saudaras_tanggal_lahir' => $request->input('skck_daftar_saudaras_tanggal_lahir'),
            'skck_daftar_saudaras_jenis_kelamin' => $request->input('skck_daftar_saudaras_jenis_kelamin'),
            'skck_daftar_saudaras_nik' => $request->input('skck_daftar_saudaras_nik'),
            'skck_daftar_saudaras_pekerjaan' => $request->input('skck_daftar_saudaras_pekerjaan'),
            'skck_daftar_saudaras_kebangsaan' => $request->input('skck_daftar_saudaras_kebangsaan'),
            'skck_daftar_saudaras_status_perkawinan' => $request->input('skck_daftar_saudaras_status_perkawinan'),
            'skck_daftar_saudaras_agama' => $request->input('skck_daftar_saudaras_agama'),
            'skck_daftar_saudaras_alamat' => $request->input('skck_daftar_saudaras_alamat'),
            'skck_daftar_saudaras_no_telepon' => $request->input('skck_daftar_saudaras_no_telepon'),
            'skck_daftar_saudaras_email' => $request->input('skck_daftar_saudaras_email'),
        ]);

        // post data pelanggaran
        SkckDaftarPelanggaran::skckDaftarPelanggaran()->insert([
            // 'skck_daftar_diri_id' => $skck_daftar_diri_id,
            'skck_daftar_pelanggarans_pelanggaran_apa' => $request->input('skck_daftar_pelanggarans_pelanggaran_apa'),
            'skck_daftar_pelanggarans_sejauhmana_proseshukumnya' => $request->input('skck_daftar_pelanggarans_sejauhmana_proseshukumnya'),
        ]);

        // post data pidana
        SkckDaftarPidana::skckDaftarPidana()->insert([
            // 'skck_daftar_diri_id' => $skck_daftar_diri_id,
            'skck_daftar_pidanas_pidana_apa' => $request->input('skck_daftar_pidanas_pidana_apa'),
            'skck_daftar_pidanas_sejauhmana_proseshukumnya' => $request->input('skck_daftar_pidanas_sejauhmana_proseshukumnya'),
        ]);
            
        return redirect()->route('dilanpolres.index')->alert()->success('SuccessAlert','Data Daftar Skck Online Berhasil Dikirim');;
    }
    

    public function dataTable(Request $request) {
        $columns = array( 
                            0 =>'id', 
                            1 =>'nama',
                            2 => 'no_telepon',
                            3 => 'alamat',
                            4 => 'keperluan_skck',
                            5 => 'created_at',
                            6 => 'id', //action
                        );
  
        $totalData = SkckDaftarDiri::count();
            
        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
            
        if(empty($request->input('search.value')))
        {            
            $SkckDaftarDiris = SkckDaftarDiri::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 

            $SkckDaftarDiris =  SkckDaftarDiri::where('id','LIKE',"%{$search}%")
                            ->orWhere('nama', 'LIKE',"%{$search}%")
                            ->orWhere('no_telepon', 'LIKE',"%{$search}%")
                            ->orWhere('alamat', 'LIKE',"%{$search}%")
                            ->orWhere('keperluan_skck', 'LIKE',"%{$search}%")
                            ->orWhere('created_at', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

            $totalFiltered = SkckDaftarDiri::where('id','LIKE',"%{$search}%")
                             ->orWhere('nama', 'LIKE',"%{$search}%")
                             ->orWhere('no_telepon', 'LIKE',"%{$search}%")
                             ->orWhere('alamat', 'LIKE',"%{$search}%")
                             ->orWhere('keperluan_skck', 'LIKE',"%{$search}%")
                             ->orWhere('created_at', 'LIKE',"%{$search}%")
                             ->count();
        }

        $data = array();
        if(!empty($SkckDaftarDiris))
        {
            foreach ($SkckDaftarDiris as $SkckDaftarDiri)
            {
                $detail =  route('admin.skck.detail',$SkckDaftarDiri->id);
                // $edit =  route('SkckDaftarDiris.edit',$SkckDaftarDiri->id);

                $nestedData['id'] = $SkckDaftarDiri->id;
                $nestedData['nama'] = $SkckDaftarDiri->nama;
                $nestedData['no_telepon'] = $SkckDaftarDiri->no_telepon;
                $nestedData['alamat'] = $SkckDaftarDiri->alamat;
                $nestedData['keperluan_skck'] = substr(strip_tags($SkckDaftarDiri->keperluan_skck),0,50)."...";
                $nestedData['created_at'] = date('j M Y h:i a',strtotime($SkckDaftarDiri->created_at));
                // $nestedData['options'] = "&emsp;<a href='{$show}' title='SHOW' ><span class='glyphicon glyphicon-list'></span></a>
                //                           &emsp;<a href='{$edit}' title='EDIT' ><span class='glyphicon glyphicon-edit'></span></a>";
                $nestedData['options'] = "&emsp;<a href='{$detail}' title='SHOW' class='btn btn-info' target='_blank'>Detail</a>";
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
        $SkckDaftarDiri = (new SkckDaftarDiri)->getTable();
        $SkckDaftarBapak = (new SkckDaftarBapak)->getTable();
        $SkckDaftarIbu = (new SkckDaftarIbu)->getTable();
        $SkckDaftarIstri = (new SkckDaftarIstri)->getTable();
        $SkckDaftarSuami = (new SkckDaftarSuami)->getTable();
        $SkckDaftarPelanggaran = (new SkckDaftarPelanggaran)->getTable();
        $SkckDaftarPidana = (new SkckDaftarPidana)->getTable();
        $SkckDaftarSaudara = (new SkckDaftarSaudara)->getTable();
        

        $SkckDaftarDiriDetail = DB::table($SkckDaftarDiri)
        ->leftJoin($SkckDaftarBapak, $SkckDaftarBapak . '.skck_daftar_diri_id', '=', $SkckDaftarDiri . '.id')
        ->leftJoin($SkckDaftarIbu, $SkckDaftarIbu . '.skck_daftar_diri_id', '=', $SkckDaftarDiri . '.id')
        ->leftJoin($SkckDaftarIstri, $SkckDaftarIstri . '.skck_daftar_diri_id', '=', $SkckDaftarDiri . '.id')
        ->leftJoin($SkckDaftarSuami, $SkckDaftarSuami . '.skck_daftar_diri_id', '=', $SkckDaftarDiri . '.id')
        ->leftJoin($SkckDaftarPelanggaran, $SkckDaftarPelanggaran . '.skck_daftar_diri_id', '=', $SkckDaftarDiri . '.id')
        ->leftJoin($SkckDaftarPidana, $SkckDaftarPidana . '.skck_daftar_diri_id', '=', $SkckDaftarDiri . '.id')
        ->leftJoin($SkckDaftarSaudara, $SkckDaftarSaudara . '.skck_daftar_diri_id', '=', $SkckDaftarDiri . '.id')
        ->select($SkckDaftarDiri . '.*', 
                $SkckDaftarBapak . '.nama as ' . $SkckDaftarBapak . '_nama',
                $SkckDaftarBapak . '.tempat_lahir as ' . $SkckDaftarBapak . '_tempat_lahir',
                $SkckDaftarBapak . '.tanggal_lahir as ' . $SkckDaftarBapak . '_tanggal_lahir',
                $SkckDaftarBapak . '.jenis_kelamin as ' . $SkckDaftarBapak . '_jenis_kelamin',
                $SkckDaftarBapak . '.nik as ' . $SkckDaftarBapak . '_nik',
                $SkckDaftarBapak . '.pekerjaan as ' . $SkckDaftarBapak . '_pekerjaan',
                $SkckDaftarBapak . '.kebangsaan as ' . $SkckDaftarBapak . '_kebangsaan',
                $SkckDaftarBapak . '.status_perkawinan as ' . $SkckDaftarBapak . '_status_perkawinan',
                $SkckDaftarBapak . '.agama as ' . $SkckDaftarBapak . '_agama',
                $SkckDaftarBapak . '.alamat as ' . $SkckDaftarBapak . '_alamat',
                $SkckDaftarBapak . '.no_telepon as ' . $SkckDaftarBapak . '_no_telepon',
                $SkckDaftarBapak . '.email as ' . $SkckDaftarBapak . '_email',
                $SkckDaftarIbu . '.nama as ' . $SkckDaftarIbu . '_nama',
                $SkckDaftarIbu . '.tempat_lahir as ' . $SkckDaftarIbu . '_tempat_lahir',
                $SkckDaftarIbu . '.tanggal_lahir as ' . $SkckDaftarIbu . '_tanggal_lahir',
                $SkckDaftarIbu . '.jenis_kelamin as ' . $SkckDaftarIbu . '_jenis_kelamin',
                $SkckDaftarIbu . '.nik as ' . $SkckDaftarIbu . '_nik',
                $SkckDaftarIbu . '.pekerjaan as ' . $SkckDaftarIbu . '_pekerjaan',
                $SkckDaftarIbu . '.kebangsaan as ' . $SkckDaftarIbu . '_kebangsaan',
                $SkckDaftarIbu . '.status_perkawinan as ' . $SkckDaftarIbu . '_status_perkawinan',
                $SkckDaftarIbu . '.agama as ' . $SkckDaftarIbu . '_agama',
                $SkckDaftarIbu . '.alamat as ' . $SkckDaftarIbu . '_alamat',
                $SkckDaftarIbu . '.no_telepon as ' . $SkckDaftarIbu . '_no_telepon',
                $SkckDaftarIbu . '.email as ' . $SkckDaftarIbu . '_email',
                $SkckDaftarIstri . '.nama as ' . $SkckDaftarIstri . '_nama',
                $SkckDaftarIstri . '.tempat_lahir as ' . $SkckDaftarIstri . '_tempat_lahir',
                $SkckDaftarIstri . '.tanggal_lahir as ' . $SkckDaftarIstri . '_tanggal_lahir',
                $SkckDaftarIstri . '.jenis_kelamin as ' . $SkckDaftarIstri . '_jenis_kelamin',
                $SkckDaftarIstri . '.nik as ' . $SkckDaftarIstri . '_nik',
                $SkckDaftarIstri . '.pekerjaan as ' . $SkckDaftarIstri . '_pekerjaan',
                $SkckDaftarIstri . '.kebangsaan as ' . $SkckDaftarIstri . '_kebangsaan',
                $SkckDaftarIstri . '.status_perkawinan as ' . $SkckDaftarIstri . '_status_perkawinan',
                $SkckDaftarIstri . '.agama as ' . $SkckDaftarIstri . '_agama',
                $SkckDaftarIstri . '.alamat as ' . $SkckDaftarIstri . '_alamat',
                $SkckDaftarIstri . '.no_telepon as ' . $SkckDaftarIstri . '_no_telepon',
                $SkckDaftarIstri . '.email as ' . $SkckDaftarIstri . '_email',
                $SkckDaftarSuami . '.nama as ' . $SkckDaftarSuami . '_nama',
                $SkckDaftarSuami . '.tempat_lahir as ' . $SkckDaftarSuami . '_tempat_lahir',
                $SkckDaftarSuami . '.tanggal_lahir as ' . $SkckDaftarSuami . '_tanggal_lahir',
                $SkckDaftarSuami . '.jenis_kelamin as ' . $SkckDaftarSuami . '_jenis_kelamin',
                $SkckDaftarSuami . '.nik as ' . $SkckDaftarSuami . '_nik',
                $SkckDaftarSuami . '.pekerjaan as ' . $SkckDaftarSuami . '_pekerjaan',
                $SkckDaftarSuami . '.kebangsaan as ' . $SkckDaftarSuami . '_kebangsaan',
                $SkckDaftarSuami . '.status_perkawinan as ' . $SkckDaftarSuami . '_status_perkawinan',
                $SkckDaftarSuami . '.agama as ' . $SkckDaftarSuami . '_agama',
                $SkckDaftarSuami . '.alamat as ' . $SkckDaftarSuami . '_alamat',
                $SkckDaftarSuami . '.no_telepon as ' . $SkckDaftarSuami . '_no_telepon',
                $SkckDaftarSuami . '.email as ' . $SkckDaftarSuami . '_email',
                $SkckDaftarSaudara . '.nama as ' . $SkckDaftarSaudara . '_nama',
                $SkckDaftarSaudara . '.tempat_lahir as ' . $SkckDaftarSaudara . '_tempat_lahir',
                $SkckDaftarSaudara . '.tanggal_lahir as ' . $SkckDaftarSaudara . '_tanggal_lahir',
                $SkckDaftarSaudara . '.jenis_kelamin as ' . $SkckDaftarSaudara . '_jenis_kelamin',
                $SkckDaftarSaudara . '.nik as ' . $SkckDaftarSaudara . '_nik',
                $SkckDaftarSaudara . '.pekerjaan as ' . $SkckDaftarSaudara . '_pekerjaan',
                $SkckDaftarSaudara . '.kebangsaan as ' . $SkckDaftarSaudara . '_kebangsaan',
                $SkckDaftarSaudara . '.status_perkawinan as ' . $SkckDaftarSaudara . '_status_perkawinan',
                $SkckDaftarSaudara . '.agama as ' . $SkckDaftarSaudara . '_agama',
                $SkckDaftarSaudara . '.alamat as ' . $SkckDaftarSaudara . '_alamat',
                $SkckDaftarSaudara . '.no_telepon as ' . $SkckDaftarSaudara . '_no_telepon',
                $SkckDaftarSaudara . '.email as ' . $SkckDaftarSaudara . '_email',
                $SkckDaftarPelanggaran . '.pelanggaran_apa as ' . $SkckDaftarPelanggaran . '_pelanggaran_apa',
                $SkckDaftarPelanggaran . '.sejauhmana_proseshukumnya as ' . $SkckDaftarPelanggaran . '_sejauhmana_proseshukumnya',
                $SkckDaftarPidana . '.pidana_apa as ' . $SkckDaftarPidana . '_pidana_apa',
                $SkckDaftarPidana . '.sejauhmana_proseshukumnya as ' . $SkckDaftarPidana . '_sejauhmana_proseshukumnya',
                )
        ->where($SkckDaftarDiri . '.id', $id)
        ->get(); 

        // dd($SkckDaftarDiriDetail);
        
        return view('mazer_template.admin.skck.detail_skck', compact('SkckDaftarDiriDetail'));
    }

    public function post(Request $request) {
        $messages = [
        'required' => ':attribute wajib diisi.',
        'min' => ':attribute harus diisi minimal :min karakter.',
        'max' => ':attribute harus diisi maksimal :max karakter.',
        'size' => ':attribute harus diisi tepat :size karakter.',
        'unique' => ':attribute sudah terpakai.',
        ];

        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'nik' => 'required|unique:nik',
            'pekerjaan' => 'required',
            'kebangsaan' => 'required',
            'status_perkawinan' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'email' => 'required',
            'no_passport' => 'required',
            'no_kitas_kitap' => 'required',
            'keperluan_skck' => 'required',
            // 'riwayat_sd' => 'required',
            // 'tangggal_lulus_sd' => 'required',
            // 'riwayat_smp' => 'required',
            // 'tangggal_lulus_smp' => 'required',
            // 'riwayat_sma' => 'required',
            // 'tangggal_lulus_sma' => 'required',
            // 'riwayat_s1' => 'required',
            // 'tangggal_lulus_s1' => 'required',
            // 'riwayat_s2' => 'required',
            // 'tangggal_lulus_s2' => 'required',
            // 'riwayat_s3' => 'required',
            // 'tangggal_lulus_s3' => 'required',

            'skck_daftar_bapaks_nama' => 'required',
            'skck_daftar_bapaks_tempat_lahir' => 'required',
            'skck_daftar_bapaks_tanggal_lahir' => 'required',
            'skck_daftar_bapaks_jenis_kelamin' => 'required',
            'skck_daftar_bapaks_nik' => 'required',
            'skck_daftar_bapaks_pekerjaan' => 'required',
            'skck_daftar_bapaks_kebangsaan' => 'required',
            'skck_daftar_bapaks_status_perkawinan' => 'required',
            'skck_daftar_bapaks_agama' => 'required',
            'skck_daftar_bapaks_alamat' => 'required',
            'skck_daftar_bapaks_no_telepon' => 'required',
            // 'skck_daftar_bapaks_email' => 'required',

            'skck_daftar_ibus_nama' => 'required',
            'skck_daftar_ibus_tempat_lahir' => 'required',
            'skck_daftar_ibus_tanggal_lahir' => 'required',
            'skck_daftar_ibus_jenis_kelamin' => 'required',
            'skck_daftar_ibus_nik' => 'required',
            'skck_daftar_ibus_pekerjaan' => 'required',
            'skck_daftar_ibus_kebangsaan' => 'required',
            'skck_daftar_ibus_status_perkawinan' => 'required',
            'skck_daftar_ibus_agama' => 'required',
            'skck_daftar_ibus_alamat' => 'required',
            'skck_daftar_ibus_no_telepon' => 'required',
            // 'skck_daftar_ibus_email' => 'required',

            'skck_daftar_istris_nama' => 'required',
            'skck_daftar_istris_tempat_lahir' => 'required',
            'skck_daftar_istris_tanggal_lahir' => 'required',
            'skck_daftar_istris_jenis_kelamin' => 'required',
            'skck_daftar_istris_nik' => 'required',
            'skck_daftar_istris_pekerjaan' => 'required',
            'skck_daftar_istris_kebangsaan' => 'required',
            'skck_daftar_istris_status_perkawinan' => 'required',
            'skck_daftar_istris_agama' => 'required',
            'skck_daftar_istris_alamat' => 'required',
            'skck_daftar_istris_no_telepon' => 'required',
            // 'skck_daftar_istris_email' => 'required',

            'skck_daftar_suamis_nama' => 'required',
            'skck_daftar_suamis_tempat_lahir' => 'required',
            'skck_daftar_suamis_tanggal_lahir' => 'required',
            'skck_daftar_suamis_jenis_kelamin' => 'required',
            'skck_daftar_suamis_nik' => 'required',
            'skck_daftar_suamis_pekerjaan' => 'required',
            'skck_daftar_suamis_kebangsaan' => 'required',
            'skck_daftar_suamis_status_perkawinan' => 'required',
            'skck_daftar_suamis_agama' => 'required',
            'skck_daftar_suamis_alamat' => 'required',
            'skck_daftar_suamis_no_telepon' => 'required',
            // 'skck_daftar_suamis_email' => 'required',

            'skck_daftar_saudaras_nama' => 'required',
            'skck_daftar_saudaras_tempat_lahir' => 'required',
            'skck_daftar_saudaras_tanggal_lahir' => 'required',
            'skck_daftar_saudaras_jenis_kelamin' => 'required',
            'skck_daftar_saudaras_nik' => 'required',
            'skck_daftar_saudaras_pekerjaan' => 'required',
            'skck_daftar_saudaras_kebangsaan' => 'required',
            'skck_daftar_saudaras_status_perkawinan' => 'required',
            'skck_daftar_saudaras_agama' => 'required',
            'skck_daftar_saudaras_alamat' => 'required',
            'skck_daftar_saudaras_no_telepon' => 'required',
            // 'skck_daftar_saudaras_email' => 'required',

            'skck_daftar_pelanggarans_pelanggaran_apa' => 'required',
            'skck_daftar_pelanggarans_sejauhmana_proseshukumnya' => 'required',

            'skck_daftar_pidanas_pidana_apa' => 'required',
            'skck_daftar_pidanas_sejauhmana_proseshukumnya' => 'required',
        ],$messages);

        if($validator->fails()) {
            Alert::error('please validate the captcha, thanks !');
            return redirect()->route('dilanpolres.daftarskck')->withErrors($validator->errors())->withInput();
        }

        // post data diri
        SkckDaftarDiri::insert([
            'nama' => $request->input('nama'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'nik' => $request->input('nik'),
            'pekerjaan' => $request->input('pekerjaan'),
            'kebangsaan' => $request->input('kebangsaan'),
            'status_perkawinan' => $request->input('status_perkawinan'),
            'agama' => $request->input('agama'),
            'alamat' => $request->input('alamat'),
            'no_telepon' => $request->input('no_telepon'),
            'email' => $request->input('email'),
        ]);

        // // select id where nik = request, and created_at where nik = request, created at in latest
        // $created_at = SkckDaftarDiri::where('nik', $request->input('nik'))->latest()->first()->created_at;
        // $skck_daftar_diri_id = SkckDaftarDiri::where('nik', $request->input('nik'))->where('created_at', $created_at)->first()->id;


        // post data bapak, disini memanggil relasi dari skck_daftar_diri_id
        SkckDaftarBapak::skckDaftarBapak()->insert([
            // 'skck_daftar_diri_id' => $skck_daftar_diri_id,
            'skck_daftar_bapaks_nama' => $request->input('skck_daftar_bapaks_nama'),
            'skck_daftar_bapaks_tempat_lahir' => $request->input('skck_daftar_bapaks_tempat_lahir'),
            'skck_daftar_bapaks_tanggal_lahir' => $request->input('skck_daftar_bapaks_tanggal_lahir'),
            'skck_daftar_bapaks_jenis_kelamin' => $request->input('skck_daftar_bapaks_jenis_kelamin'),
            'skck_daftar_bapaks_nik' => $request->input('skck_daftar_bapaks_nik'),
            'skck_daftar_bapaks_pekerjaan' => $request->input('skck_daftar_bapaks_pekerjaan'),
            'skck_daftar_bapaks_kebangsaan' => $request->input('skck_daftar_bapaks_kebangsaan'),
            'skck_daftar_bapaks_status_perkawinan' => $request->input('skck_daftar_bapaks_status_perkawinan'),
            'skck_daftar_bapaks_agama' => $request->input('skck_daftar_bapaks_agama'),
            'skck_daftar_bapaks_alamat' => $request->input('skck_daftar_bapaks_alamat'),
            'skck_daftar_bapaks_no_telepon' => $request->input('skck_daftar_bapaks_no_telepon'),
            'skck_daftar_bapaks_email' => $request->input('skck_daftar_bapaks_email'),
        ]);

        // post data ibu
        SkckDaftarIbu::skckDaftarIbu()->insert([
            // 'skck_daftar_diri_id' => $skck_daftar_diri_id,
            'skck_daftar_ibus_nama' => $request->input('skck_daftar_ibus_nama'),
            'skck_daftar_ibus_tempat_lahir' => $request->input('skck_daftar_ibus_tempat_lahir'),
            'skck_daftar_ibus_tanggal_lahir' => $request->input('skck_daftar_ibus_tanggal_lahir'),
            'skck_daftar_ibus_jenis_kelamin' => $request->input('skck_daftar_ibus_jenis_kelamin'),
            'skck_daftar_ibus_nik' => $request->input('skck_daftar_ibus_nik'),
            'skck_daftar_ibus_pekerjaan' => $request->input('skck_daftar_ibus_pekerjaan'),
            'skck_daftar_ibus_kebangsaan' => $request->input('skck_daftar_ibus_kebangsaan'),
            'skck_daftar_ibus_status_perkawinan' => $request->input('skck_daftar_ibus_status_perkawinan'),
            'skck_daftar_ibus_agama' => $request->input('skck_daftar_ibus_agama'),
            'skck_daftar_ibus_alamat' => $request->input('skck_daftar_ibus_alamat'),
            'skck_daftar_ibus_no_telepon' => $request->input('skck_daftar_ibus_no_telepon'),
            'skck_daftar_ibus_email' => $request->input('skck_daftar_ibus_email'),
        ]);

        // post data istri
        SkckDaftarIstri::skckDaftarIstri()->insert([
            // 'skck_daftar_diri_id' => $skck_daftar_diri_id,
            'skck_daftar_istris_nama' => $request->input('skck_daftar_istris_nama'),
            'skck_daftar_istris_tempat_lahir' => $request->input('skck_daftar_istris_tempat_lahir'),
            'skck_daftar_istris_tanggal_lahir' => $request->input('skck_daftar_istris_tanggal_lahir'),
            'skck_daftar_istris_jenis_kelamin' => $request->input('skck_daftar_istris_jenis_kelamin'),
            'skck_daftar_istris_nik' => $request->input('skck_daftar_istris_nik'),
            'skck_daftar_istris_pekerjaan' => $request->input('skck_daftar_istris_pekerjaan'),
            'skck_daftar_istris_kebangsaan' => $request->input('skck_daftar_istris_kebangsaan'),
            'skck_daftar_istris_status_perkawinan' => $request->input('skck_daftar_istris_status_perkawinan'),
            'skck_daftar_istris_agama' => $request->input('skck_daftar_istris_agama'),
            'skck_daftar_istris_alamat' => $request->input('skck_daftar_istris_alamat'),
            'skck_daftar_istris_no_telepon' => $request->input('skck_daftar_istris_no_telepon'),
            'skck_daftar_istris_email' => $request->input('skck_daftar_istris_email'),
        ]);

        // post data suami
        SkckDaftarSuami::skckDaftarSuami()->insert([
            // 'skck_daftar_diri_id' => $skck_daftar_diri_id,
            'skck_daftar_suamis_nama' => $request->input('skck_daftar_suamis_nama'),
            'skck_daftar_suamis_tempat_lahir' => $request->input('skck_daftar_suamis_tempat_lahir'),
            'skck_daftar_suamis_tanggal_lahir' => $request->input('skck_daftar_suamis_tanggal_lahir'),
            'skck_daftar_suamis_jenis_kelamin' => $request->input('skck_daftar_suamis_jenis_kelamin'),
            'skck_daftar_suamis_nik' => $request->input('skck_daftar_suamis_nik'),
            'skck_daftar_suamis_pekerjaan' => $request->input('skck_daftar_suamis_pekerjaan'),
            'skck_daftar_suamis_kebangsaan' => $request->input('skck_daftar_suamis_kebangsaan'),
            'skck_daftar_suamis_status_perkawinan' => $request->input('skck_daftar_suamis_status_perkawinan'),
            'skck_daftar_suamis_agama' => $request->input('skck_daftar_suamis_agama'),
            'skck_daftar_suamis_alamat' => $request->input('skck_daftar_suamis_alamat'),
            'skck_daftar_suamis_no_telepon' => $request->input('skck_daftar_suamis_no_telepon'),
            'skck_daftar_suamis_email' => $request->input('skck_daftar_suamis_email'),
        ]);

        // post data saudara
        SkckDaftarSaudara::skckDaftarSaudara()->insert([
            // 'skck_daftar_diri_id' => $skck_daftar_diri_id,
            'skck_daftar_saudaras_nama' => $request->input('skck_daftar_saudaras_nama'),
            'skck_daftar_saudaras_tempat_lahir' => $request->input('skck_daftar_saudaras_tempat_lahir'),
            'skck_daftar_saudaras_tanggal_lahir' => $request->input('skck_daftar_saudaras_tanggal_lahir'),
            'skck_daftar_saudaras_jenis_kelamin' => $request->input('skck_daftar_saudaras_jenis_kelamin'),
            'skck_daftar_saudaras_nik' => $request->input('skck_daftar_saudaras_nik'),
            'skck_daftar_saudaras_pekerjaan' => $request->input('skck_daftar_saudaras_pekerjaan'),
            'skck_daftar_saudaras_kebangsaan' => $request->input('skck_daftar_saudaras_kebangsaan'),
            'skck_daftar_saudaras_status_perkawinan' => $request->input('skck_daftar_saudaras_status_perkawinan'),
            'skck_daftar_saudaras_agama' => $request->input('skck_daftar_saudaras_agama'),
            'skck_daftar_saudaras_alamat' => $request->input('skck_daftar_saudaras_alamat'),
            'skck_daftar_saudaras_no_telepon' => $request->input('skck_daftar_saudaras_no_telepon'),
            'skck_daftar_saudaras_email' => $request->input('skck_daftar_saudaras_email'),
        ]);

        // post data pelanggaran
        SkckDaftarPelanggaran::skckDaftarPelanggaran()->insert([
            // 'skck_daftar_diri_id' => $skck_daftar_diri_id,
            'skck_daftar_pelanggarans_pelanggaran_apa' => $request->input('skck_daftar_pelanggarans_pelanggaran_apa'),
            'skck_daftar_pelanggarans_sejauhmana_proseshukumnya' => $request->input('skck_daftar_pelanggarans_sejauhmana_proseshukumnya'),
        ]);

        // post data pidana
        SkckDaftarPidana::skckDaftarPidana()->insert([
            // 'skck_daftar_diri_id' => $skck_daftar_diri_id,
            'skck_daftar_pidanas_pidana_apa' => $request->input('skck_daftar_pidanas_pidana_apa'),
            'skck_daftar_pidanas_sejauhmana_proseshukumnya' => $request->input('skck_daftar_pidanas_sejauhmana_proseshukumnya'),
        ]);
            
        return redirect()->route('dilanpolres.index')->alert()->success('SuccessAlert','Data Daftar Skck Online Berhasil Dikirim');;
    }

}
    