<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Http\Controllers\Coba\Foo;
use App\Http\Controllers\Coba\Buah;
use App\Http\Controllers\Coba\Minuman;

class PageController extends Controller {
    use Minuman;

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

    public function cobaClass() {
        $foo = new Foo();
        echo $foo->bar();
    }

    public function cobaBuah() {
        echo Buah::mangga();
    }

    public function cobaMinuman() {
        echo $this->kopi();
    }
}
