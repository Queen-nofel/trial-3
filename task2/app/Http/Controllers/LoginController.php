<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = DB::table('showtime')
            ->where('email', $email)
            ->first();

        if ($user && Hash::check($password, $user->password)) {
            return redirect('/showtime');
        }

        return back()->with('error', 'Invalid Email or Password');
    }
}
