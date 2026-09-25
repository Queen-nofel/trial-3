<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateController extends Controller
{
        public function create(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        DB::table('structures')->insert([
            'name'=>$name,
            'email' =>$email,
            'password'=>Hash::make($password),
        ]);
        return redirect('/enter')->with('success','Registration successful');
        }

}
