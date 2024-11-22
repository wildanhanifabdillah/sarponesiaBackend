<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function showPerawatanKebun(){
        $perawatanKebun = Service::whereHas('category', function ($query) {
            $query->where('Name', 'Perawatan Kebun');
        })->get();

        return view('JasaKebunKopi_perawatan', compact('perawatanKebun'));
    }
    public function showPelatihan(){
        $logoAndBranding = Service::whereHas('category', function ($query) {
            $query->where('Name', 'Logo dan Branding');
        })->get();

        $baristaAndRoastery = Service::whereHas('category', function ($query) {
            $query->where('Name', 'Barista dan Roastery');
        })->get();

        $latihanPerawatanKebun = Service::whereHas('category', function ($query) {
            $query->where('Name', 'Pelatihan Perawatan Kebun');
        })->get();

        $pengolahanPascaPanen = Service::whereHas('category', function ($query) {
            $query->where('Name', 'Pengolahan Pasca Panen');
        })->get();

        return view('Pelatihan', compact('perawatanKebun'));

    }
}
