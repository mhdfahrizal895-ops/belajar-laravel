<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaloController extends Controller
{
    public function index(){
        return "Halo, ini method index dari HaloController!";
    }

    public function sapa($nama){
        return "Halo, $nama! Selamat Datang di Laravel";
    }
}
