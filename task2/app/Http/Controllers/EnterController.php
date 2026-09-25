<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EnterController extends Controller
{
    public function enter(Request $request)
    {
        $email = $request->email;
        $password = $request->password;


        $user = DB::table('structures')
           ->where('email', $email)
           ->where('password', $password)
           ->first();
        
        
        if ($user && Hash::check($password, $user->password) ) {
           return redirect('/dashboard');
        } 
        
        return back()->with('error', 'Invalid Email or Password');
    }
}
