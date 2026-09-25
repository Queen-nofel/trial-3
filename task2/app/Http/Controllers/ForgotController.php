<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;


class ForgotController extends Controller
{
    public function SendResetLink(Request $request)
    {
        $email = $request->email;

         $user = DB::table('structures')
        ->where('email', $email)
        ->first();

    if (!$user) {
        return "Email not found.";
    }

        $resetLink = url('/reset-password?email=' . $email);

         Mail::raw(
        "Your password reset link is: " . $resetLink,
        function ($message) use ($email) {
            $message->to($email)
                    ->subject('Password Reset');
        }
    );

        return "Reset link has been sent to your email.";


    }

    public function resetPassword(Request $request)
{
    $request->validate([
        'password' => 'required|confirmed|min:8',
    ]);

    DB::table('structures')
        ->where('email', $request->email)
        ->update([
            'password' => Hash::make($request->password),
        ]);

    return "Password changed successfully!";
}
}
