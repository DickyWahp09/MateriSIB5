<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LihatNilaiController extends Controller
{
    //
    public function dataMahasiswa(){
        $mhs1 = 'Dicky'; $asal1 = 'Bojonegoro';
        $mhs2 = 'Erika'; $asal2 = 'Surabaya';
        return view('coba.data ', compact('mhs1', 'mhs2', 'asal1', 'asal2'));
    }
}
