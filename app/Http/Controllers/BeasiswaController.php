<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    //
    public function index() {
        $beasiswa = Beasiswa::all();

        // dd($beasiswa);
        return view('dashboard.beasiswa',[
            'beasiswas' => $beasiswa,
            'num' => 1
        ]);
    }
}
