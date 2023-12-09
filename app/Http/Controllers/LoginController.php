<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth\login');
    }

    public function create(Request $request){
        
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'password']
        ]);
    }

}
