<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SipastapController extends Controller
{
    public function index() {
        return view('mazer_template.sipastap.home.home');
        
    }

    public function daftarSkck() {
        return view('mazer_template.sipastap.daftar_skck.create');
    }
     
}