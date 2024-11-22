<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function showBenihDanPupuk()
    {
        $benihProducts = Product::whereHas('category', function ($query) {
            $query->where('Name', 'Benih Kopi');
        })->get();
    
        $pupukProducts = Product::whereHas('category', function ($query) {
            $query->where('Name', 'Pupuk Kopi');
        })->get();
    
        return view('Benih&Pupuk', compact('benihProducts', 'pupukProducts'));
    }

    public function showPeralatan(){
        $peralatanPascaPanen = Product::whereHas('category', function ($query) {
            $query->where('Name', 'Peralatan Pasca Panen');
        })->get();

        $peralatanProduksi = Product::whereHas('category', function ($query) {
            $query->where('Name', 'Peralatan Produksi');
        })->get();

        $peralatanPengolahan = Product::whereHas('category', function ($query) {
            $query->where('Name', 'Peralatan Pengolahan');
        })->get();

        $peralatanCafe = Product::whereHas('category', function ($query) {
            $query->where('Name', 'Peralatan Cafe');
        })->get();

        return view('Peralatan', compact('peralatanPascaPanen', 'peralatanProduksi', 'peralatanPengolahan', 'peralatanCafe'));
    }

    public function catalog(){
        $robusta = Product::whereHas('category', function ($query) {
            $query->where('Name', 'Robusta');
        })->get();

        $roastedbean = Product::whereHas('category', function ($query) {
            $query->where('Name', 'Roastedbean');
        })->get();
    }
}