<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index() {
        
        // count total permohonan sidik jari
        $total_permohonan_sidik_jari = DB::table('form_sidik_jaris')->count();

        // count total permohonan sim
        $total_permohonan_sim = DB::table('form_sims')->count();

        // count total laporan kehilangan
        $total_laporan_kehilangan = DB::table('form_laporan_kehilangans')->count();

        // count total tindak kriminal
        $total_tindak_kriminal = DB::table('form_laporan_tindak_kriminals')->count();

        // count total laporan pengaduan masyarakat
        $total_laporan_pengaduan_masyarakat = DB::table('form_laporan_pengaduan_masyarakats')->count();

        // count total permohonan skck
        $total_permohonan_skck = DB::table('skck_daftar_diris')->count();

        return view('mazer_template.admin.home.home', compact('total_permohonan_sidik_jari', 'total_permohonan_sim', 'total_laporan_kehilangan', 'total_tindak_kriminal', 'total_laporan_pengaduan_masyarakat', 'total_permohonan_skck'));
    }

}