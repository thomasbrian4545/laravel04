<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

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
}
