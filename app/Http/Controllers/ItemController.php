<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ItemController extends Controller
{
    /**
     * Handle the incoming request.
     */
    // public function __invoke(Request $request): string
    // public function __invoke(Request $request): View
    public function __invoke(): Response
    {
        // return "Method __invoke() milik ItemController dijalankan";
        $arrMahasiswa = [
            "Risa Lestari", "Rudi Hermawan", "Bambang Kusumo",
            "Lisa Permata"
        ];

        // return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
        return response()->view('mahasiswa', ['mahasiswa' => $arrMahasiswa]);
    }
}
