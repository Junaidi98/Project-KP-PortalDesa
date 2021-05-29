<?php

namespace App\Http\Controllers;

use App\Models\Bupati;
use Illuminate\Http\Request;
use App\Models\Desa;
use App\Models\Sekda;
use App\Models\Tentang;
use App\Models\Wabup;

class HomeController extends Controller
{
    public function index(){

        $data['desas'] = Desa::orderBy('namadesa','desc')->get();
        $data['bupatis']= Bupati::orderBy('nama','desc')->get();
        $data['sekdas']= Sekda::orderBy('nama','desc')->get();
        $data['wabups']= Wabup::orderBy('nama','desc')->get();
        $data['tentangs']= Tentang::orderBy('konten')->get();
        return view('layouts.home', $data);
    }
}
