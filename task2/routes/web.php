<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\EnterController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\LoginController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
        $name='aisha';
        return view('home', compact('name'));
});

Route::get('/book',
[BookController::class, 'index']);

Route::get('/dashboard', function(){
        return view('dashboard');
});
Route::get('/enter', function(){
    return view('enter');
});

Route::POST('/enter',
[EnterController::class, 'enter']);


Route::post('/enter', function(){
    $credentials = request()->only('name','email' ,'password');

    if (Auth::attempt($credentials)){
        request() ->session()->regenerate();


    return redirect('/dashboard');
}

return back()->with('error', 'Email or password is incorrect.');
});

Route::get('/create', function(){
     return view('create');
});

Route::POST('/create',
[CreateController::class, 'create']);

Route::get('/forgot', function () {
    return view('forgot');
});

 Route::post('/forgot',
  [ForgotController::class, 'SendResetLink']);

 Route::get('/reset-password', function(){
    return view('reset-password');
 });

 Route::POST('/reset-password',
 [ForgotController::class, 'resetpassword']);

 Route::get('/reset/{token}', function ($token) {
    return view('reset', [
        'token' => $token,
        'email' => request('email')
    ]);
})->name('password.reset');

Route::get('/test', function () {
    return view('test');
});

use Inertia\Inertia;

Route::get('/home', function () {
    return Inertia::render('Home');
});

Route::get('/login', function () {
    return Inertia::render('Login');
});

Route::get('/showtime', function () {
    return Inertia::render('Showtime');
});

Route::post('/login', [LoginController::class, 'login']);