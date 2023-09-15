<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $arrMahasiswa = [
            "Risa Lestari", "Rudi Hermawan", "Bambang Kusumo",
            "Lisa Permata"
        ];

        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }

    public function dosen()
    {
        $arrDosen = [
            "Maya Fitrianti, M.M.", "Prof. Silvia Nst, M.Farm.",
            "Dr. Umar Agustinus", "Dr. Syahrial, M.Kom."
        ];

        return view('dosen')->with('dosen', $arrDosen);
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function info($fakultas, $jurusan = null)
    {
        $list_fakultas = ['Teknik', 'Ekonomi'];
        $list_jurusan = ['Fisika', 'Kimia', 'Akuntansi'];

        if ($jurusan == null) {
            if (in_array($fakultas, $list_fakultas)) {
                $jurusan = 'Tanpa Jurusan';
            } elseif (in_array($fakultas, $list_jurusan)) {
                $jurusan = $fakultas;
                $fakultas = 'Tanpa Fakultas';
            }
        }

        return view('informasi', [
            'fakultas' => $fakultas,
            'jurusan' => $jurusan,
        ]);
    }
}
