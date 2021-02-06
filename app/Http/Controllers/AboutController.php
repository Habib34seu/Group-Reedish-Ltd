<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('about.mission.detail_mission');
    }
    public function about_md(){
        return view('about.md.detail_md');
    }
    public function about_management(){
        return view('about.manage_by.management_body');
    }
}
