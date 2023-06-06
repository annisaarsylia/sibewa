<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ListRegisterController extends Controller
{
    //
    public function index() {
        if(Auth::user()->role == 4) return redirect('/beasiswa');
        if(Auth::user()->role == 3) return redirect('/dashboard');
        return view('dashboard.list-register',[
            "users" => User::all()
        ]);
    }
    public function registeradmin() {
        if(Auth::user()->role == 4) return redirect('/beasiswa');
        if(Auth::user()->role == 3) return redirect('/dashboard');
        if(Auth::user()->role == 2) return redirect('/dashboard');
        return view('dashboard.list-register-admin',[
            "users" => User::all()
        ]);
    }

    public function edit($id)
    {
        $data = User::findOrFail($id);

        return response()->json(['result' => $data]);
    }

    public function update(Request $request, $id)
    {
        Validator::make($request->all(), [
            'role' => 'required|in:1,2,3,4',
        ]);

        $data = [
            'role' => $request->role
        ];

        User::where('id', $id)->update($data);
        return response()->json(['success' => "Data Updated Successfully"]);
    }
}
