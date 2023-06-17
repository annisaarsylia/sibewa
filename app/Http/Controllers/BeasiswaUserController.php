<?php

namespace App\Http\Controllers;

use App\Exports\beasiswa_usersExport;
use App\Models\BeasiswaUser;
use App\Models\Beasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class BeasiswaUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role == 2) return redirect('/list-pendaftar');
        if(Auth::user()->role == 3) return redirect('/list-pendaftar');

        $beasiswas = Beasiswa::all();
        return view('dashboard.index-0', compact('beasiswas'));
    }

    public function view(Request $request)
    {
        // if(Auth::user()->role == 4) return redirect('/beasiswa');
        // if(Auth::user()->role == 3) return redirect('/beasiswa');
        $beasiswa_users = BeasiswaUser::all();
        if(isset($request->beasiswa) && $request->beasiswa != '0') $beasiswa_users = $beasiswa_users->where('beasiswa_id', $request->beasiswa);
        if(isset($request->tahun) && $request->tahun != '0') $beasiswa_users = $beasiswa_users->whereBetween('created_at', [$request->tahun.'-01-01 00:00:00', $request->tahun.'-12-31 23:59:59']);
        return view('dashboard.list-pendaftar',[
            'beasiswa_users' => $beasiswa_users,
            'beasiswas' => Beasiswa::all(),
            'request' => $request
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $beasiswaUser = new BeasiswaUser();
        if($request->file('parents_salary_pic')){
            $file = $request->file('parents_salary_pic');
            
            $name = 'file'. rand();
            $extension = $file->getClientOriginalExtension();
            $newName = $name.'.'.$extension;
            $input = 'uploads/'.$newName;
            $file->move(public_path('uploads'), $newName);

            $beasiswaUser->parents_salary_pic = $input;
        }
        if($request->file('motivation_letter')){
            $file = $request->file('motivation_letter');

            $name = 'file'. rand();
            $extension = $file->getClientOriginalExtension();
            $newName = $name.'.'.$extension;
            $input = 'uploads/'.$newName;
            $file->move(public_path('uploads'), $newName);

            $beasiswaUser->motivation_letter = $input;
        }
        if($request->file('achievement')){
            $file = $request->file('achievement');

            $name = 'file'. rand();
            $extension = $file->getClientOriginalExtension();
            $newName = $name.'.'.$extension;
            $input = 'uploads/'.$newName;
            $file->move(public_path('uploads'), $newName);

            $beasiswaUser->achievement = $input;
        }
        $beasiswaUser->nrp = $request->nrp;
        $beasiswaUser->name = $request->name;
        $beasiswaUser->departement_name = $request->departement_name;
        $beasiswaUser->major_name = $request->major_name;
        $beasiswaUser->phone = $request->phone;
        $beasiswaUser->father_job = $request->father_job;
        $beasiswaUser->mother_job = $request->mother_job;
        $beasiswaUser->father_salary = $request->father_salary;
        $beasiswaUser->mother_salary = $request->mother_salary;
        // $beasiswaUser->parents_salary_pic = $request->parents_salary_pic;
        // $beasiswaUser->parents_salary_pic = $request->parents_salary_pic;
        // $beasiswaUser->motivation_le = $request->parents_salary_pic;
        $beasiswaUser->beasiswa_id = $request->beasiswa_id;
        $beasiswaUser->save();
        return redirect('/list-pendaftar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = BeasiswaUser::find($id);
        // dd($user);
        return view("dashboard.detail-pendaftar", [
            'user' => $user 
        ]);
    }

    public function ubahStatus(Request $request){
        $beasiswa = BeasiswaUser::where('id', $request->id)->first();
        $beasiswa->status = $request->status;
        $beasiswa->save();
        return redirect('/list-pendaftar/'.$request->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id){
        $beasiswa_user = BeasiswaUser::where('beasiswa_id', '=' ,$id);
            if(Auth::user()->role == 4) return redirect('/list-pendaftar');
    
            $beasiswa_user->delete();
    
            return redirect()->route('Form-daftar-beasiswa-view')
            ->with('successDelete', 'Pendaftar Berhasil dihapus');
    }
    
    public function exportexcel()
    {
        return Excel::download(new beasiswa_usersExport, 'datapendaftar.xlsx');
    }
    
}