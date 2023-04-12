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
        $data = new Beasiswa();


        if($request->file('gambar')){
            $file = $request->file('gambar');

                    $name = 'img'. rand();
                    $extension = $file->getClientOriginalExtension();
                    $newName = $name.'.'.$extension;
                    $input = 'uploads/'.$newName;
                    $request->gambar->move(public_path('uploads'), $newName);

                    $data->gambar = $input;
        }

        $data->nama=$request->nama;
        $data->penyelenggara=$request->penyelenggara;
        $data->deadline=$request->deadline;
        $data->sasaran=$request->sasaran;
        $data->ips=$request->ips;
        $data->booklet=$request->booklet;
        $data->detail=$request->detail;
        // $data->gambar=$request->gambar;
        $data->save();
        return redirect()->route('beasiswa.index');
    }
    public function edit(Request $request, $id){
        $data = Beasiswa::where('id',$id)->first();
        view()->share([
            'data'=> $data
        ]);
        // dd($data);
        // $beasiswa->delete();
        return view("dashboard.edit");
    }
    public function detail(Request $request, $id){
        $data = Beasiswa::where('id',$id)->first();
        view()->share([
            'data'=> $data
        ]);
        // dd($data);
        // $beasiswa->delete();
        return view("portfolio-details");
    }
    public function update(Request $request, $id){
        $data = Beasiswa::where('id',$id)->first();
        $data->nama=$request->nama;
        $data->penyelenggara=$request->penyelenggara;
        $data->deadline=$request->deadline;
        $data->sasaran=$request->sasaran;
        $data->ips=$request->ips;
        $data->booklet=$request->booklet;
        $data->detail=$request->detail;
        // $data->gambar=$request->gambar;
        $data->save();
        return redirect()->back();
    }
    public function destroy(Beasiswa $beasiswa){
        $beasiswa->delete();

        return redirect()->route('beasiswa.index')
        ->with('successDelete', 'Beasiswa Berhasil dihapus');
    }
    public function test(Request $request){
        $datas = Beasiswa::orderBy('id', 'DESC')->take(4)->get();
        return view('index', [
            'datas' => $datas
        ]);        
        // $data = Beasiswa::where('id',$id)->first();
        // view()->share([
        //     'data'=> $data
        // ]);
        // // dd($data);
        // // $beasiswa->delete();
        // return view("portfolio-details");
    }
}
