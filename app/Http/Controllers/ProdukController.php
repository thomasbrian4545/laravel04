<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function __invoke()
    {
        return "Method __invoke() milik ProdukController dijalankan";
    }
}
