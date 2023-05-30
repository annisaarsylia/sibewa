<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
