<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){

        $produk = [
        [
            'nama_produk' => 'laptop',
            'harga' => '1.000.000',
        ]

        ];

        return view('produk',compact('produk'));
    }
}
