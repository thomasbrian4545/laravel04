<?php

namespace App\Http\Controllers;

class PageController extends Controller {
    public function index() {
        // return "Halaman Home";
        return view('welcome');
    }

    public function tampil() {
        // return "Data Mahasiswa";
        $arrMahasiswa = ['Thomas Brian', 'Dewi Sartika Sadodolu', 'Camilla Ava Debriana'];
        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }
}
