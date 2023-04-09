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

    public function store(Request $request){
        $data = collect($request)->toArray();
        // dd(collect($request));
        $result = Beasiswa::create($data);
        return redirect()->route('beasiswa.index');
    }

    public function destroy(Beasiswa $beasiswa){
        $beasiswa->delete();

        return redirect()->route('beasiswa.index')
        ->with('successDelete', 'Beasiswa Berhasil dihapus');
    }
}
