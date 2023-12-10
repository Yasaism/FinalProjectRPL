<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth\register');
    }

    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8',
            'role' => 'required|in:petugas,pemain',
        ]);

        // Save user data to the database
        $user = User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => $request->input('role'),
        ]);

        // In case sudah ada table/model database-nya, 
        // yang $user di atas pas bisa di comment terus yang dibawah ini di uncomment

        // Save user data to the database using DB::table
        // $userId = DB::table('users')->insertGetId([
        //     'username' => $request->input('username'),
        //     'email' => $request->input('email'),
        //     'password' => Hash::make($request->input('password')),
        //     'role' => $request->input('role'),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // Retrieve the user data
        // $user = DB::table('users')->find($userId);

        // Redirect to success page with a delay
        return redirect()->route('register.success')->with('user', $user);
    }

    public function success()
    {
        return view('register_success');
    }
}
