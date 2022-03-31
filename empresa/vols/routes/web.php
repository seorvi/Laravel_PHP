<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
}); 

Route::resource('vols', ControladorVol::class);
Route::resource('clients', ControladorClient::class);
Route::resource('usuaris', ControladorUsuaris::class);
Route::resource('reservas', ControladorReserva::class);

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email_usuari' => 'required | email',
        'password' => 'required'
    ]);

    if (Auth::attempt($credentials)) {
        if(Auth::user()->tipus == 'cap_departament') {
            return redirect('/welcome');
        } else if (Auth::user()->tipus == 'treballador') {
            return redirect('/welcometreballador');
        }
    }

    return redirect()->back()->withErrors([
        'credentials' => 'No s\'ha pogut iniciar la sessió'
    ]);
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/welcometreballador', function () {
    return view('welcometreballador');
});
