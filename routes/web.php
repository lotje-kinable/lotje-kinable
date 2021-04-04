<?php

use App\Http\Controllers\PostController;
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

Route::resources([
//    'photos' => PhotoController::class,
    'posts' => PostController::class,
]);

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

//Route::get('/posts', [PostController::class, 'index'])->name('posts');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
