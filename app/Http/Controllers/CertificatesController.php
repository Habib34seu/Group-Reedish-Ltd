<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificatesController extends Controller
{
    public function index_rkl(){
        return view('certificates.rkl_cr');
    }
    public function index_paknit_cr(){
        return view('certificates.paknit_cr');
    }
    public function index_rsl_cr(){
        return view('certificates.rsl_cr');
    }
    public function index_rtsl_cr(){
        return view('certificates.rtsl_cr');
    }
    public function index_rppl_cr(){
        return view('certificates.rppl_cr');
    }
}
