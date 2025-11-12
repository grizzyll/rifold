<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        $produk = [
            ['id' => 1, 'nama' => 'Tonepop Oversized Tee', 'kategori' => 'Tonepop', 'harga' => 199000, 'gambar' => 'tonepop1.jpg'],
            ['id' => 2, 'nama' => 'Flannel Regular', 'kategori' => 'Flannel', 'harga' => 179000, 'gambar' => 'flannel1.jpg'],
            ['id' => 3, 'nama' => 'Overcool Boxy Tee', 'kategori' => 'Overcool', 'harga' => 189000, 'gambar' => 'overcool1.jpg'],
        ];

        return view('katalog', compact('produk'));
    }

    public function show($id)
    {
        $produk = [
            1 => [
                'nama' => 'Tonepop Oversized Tee',
                'deskripsi' => 'Kaos oversized premium berbahan cotton combed 24s yang lembut, adem, dan nyaman digunakan.',
                'gambar' => 'tonepop1.jpg',
                'harga' => 199000,
                'kategori' => 'Tonepop',
                'fit' => 'Oversized Fit',
                'bahan' => 'Cotton Combed 24s'
            ],
            2 => [
                'nama' => 'Flannel Regular',
                'deskripsi' => 'Kemeja flanel dengan potongan regular fit, ideal untuk gaya kasual harian.',
                'gambar' => 'flannel1.jpg',
                'harga' => 179000,
                'kategori' => 'Flannel',
                'fit' => 'Regular Fit',
                'bahan' => 'Flannel Cotton'
            ],
            3 => [
                'nama' => 'Overcool Boxy Tee',
                'deskripsi' => 'Kaos boxy fit dengan desain minimalis dan bahan adem cocok untuk tampilan santai.',
                'gambar' => 'overcool1.jpg',
                'harga' => 189000,
                'kategori' => 'Overcool',
                'fit' => 'Boxy Fit',
                'bahan' => 'Cotton Combed 20s'
            ],
        ];

        if (!array_key_exists($id, $produk)) {
            abort(404);
        }

        $detail = $produk[$id];
        return view('detail', compact('detail'));
    }
}
