<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SustainabilityController extends Controller
{
    public function index_sustain(){
        return view('sustainability.sustainablity');
    }
}
