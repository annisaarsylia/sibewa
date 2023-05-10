<?php

namespace App\Http\Controllers;

use App\Models\BeasiswaUser;
use App\Models\Beasiswa;
use Illuminate\Http\Request;

class BeasiswaUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $beasiswas = Beasiswa::all();
        return view('dashboard.index-0', compact('beasiswas'));
    }

    public function view()
    {
        return view('dashboard.list-pendaftar',[
            'beasiswa_users' => BeasiswaUser::all(),
            
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
        //
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
    public function destroy($id)
    {
        //
    }
}