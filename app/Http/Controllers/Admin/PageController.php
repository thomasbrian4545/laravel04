<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class PageController extends Controller {
    public function index() {
        // return "Halaman Home";
        return view('welcome');
    }

    public function tampil() {
        // return "Data Mahasiswa";
        $arrMahasiswa = ['Thomas Brian', 'Dewi Sartika Sadodolu', 'Camilla Ava Debriana', 'Julianti Sadodolu'];
        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }

    public function cobaFacade() {
        echo Str::snake('SedangBelajarLaravelUncover');
        echo "<br>";
        echo Str::kebab('SedangBelajarLaravelUncover');
    }
}
