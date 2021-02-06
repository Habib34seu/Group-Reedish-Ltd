<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index_rkl(){
        return view('business_units.rkl');
    }
    public function index_rsl(){
        return view('business_units.rsl');
    }
    public function index_rtsl(){
        return view('business_units.rtsl');
    }
    public function index_paknit(){
        return view('business_units.paknit');
    }
    public function index_rppl(){
        return view('business_units.rppl');
    }
    public function index_rbyl(){
        return view('business_units.rbyl');
    }
    public function index_rfbl(){
        return view('business_units.rfbl');
    }
    
}
