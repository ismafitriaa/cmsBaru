<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

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

// //PRAKTIKUM 1
// //nomor1
// Route::get('/', function () {
//     echo "Hi! Selamat Datang di Website Laravel";
// });
// //nomor2
// Route::get('/about', function () {
//     echo "NIM   : 2041720033 <br>";
//     echo "NAMA  : Isma Fitria Risnandari <br>";
//     echo "KELAS : TI-2G";
// });
// //nomor3
// Route::get('/articles/{id}', function ($id) {
//     echo "Ini adalah halaman Artikel dengan ID: ".$id;
// });


//PRAKTIKUM 2
// //nomor1
// Route::get('/', [PageController::class, 'index']);
// //nomor2
// Route::get('/about', [PageController::class, 'about']);
// //nomor3
// Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);
