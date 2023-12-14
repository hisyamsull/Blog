<?php

use App\Http\Controllers\categoriesController;
use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "nama" => "Hisyam Setiawan",
        "umur" => 22,
        "alamat" => "RT2/2 Desa Kalijoyo, Kecamatan Kajen, Kabupaten Pekalongan"
    ]);
});
Route::get('/posts', [postController::class, 'index']);
Route::get('/posts/{post:slug}', [postController::class, 'show']);
Route::get('/categories/{category:slug}', [categoriesController::class, 'show']);
Route::get('/categories', [categoriesController::class, 'index']);
