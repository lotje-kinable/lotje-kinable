<?php

use App\Models\User;
use App\Notifications\NewUser;
use Illuminate\Support\Facades\Route;

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

Route::get('/notification', function () {
    $lotje = User::find(1);


    $lotje->notify(new NewUser());
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tdw', function () {
    return view('welcome');
})->name('tdw');


Route::middleware(['web','auth','verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';
