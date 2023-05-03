<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ListRegisterController extends Controller
{
    //
    public function index() {
        return view('dashboard.list-register',[
            "users" => User::all()
        ]);
    }
}
