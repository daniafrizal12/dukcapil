<?php

use App\Http\Controllers\BantuanController;
use App\Http\Controllers\DatadukungController;
use App\Http\Controllers\Fkelahiran;
use App\Http\Controllers\FkelahiranController;
use App\Http\Controllers\FkematianController;
use App\Http\Controllers\FkiaController;
use App\Http\Controllers\FkonsolidasiController;
use App\Http\Controllers\FlayanankkController;
use App\Http\Controllers\FpindahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KebijakanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StatusController;
use Illuminate\Auth\Events\Login;
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

// Route::get('/', function () {
//     return view('auth');
// });

Route::get('/', [LoginController::class, "index"]);

// Route Register
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login/proses', [RegisterController::class, 'login']);


Route::group(['middleware' => ['auth']], function () {

    // jika levelnya 2
    Route::group(['middleware' => ['cekUserLogin:2']], function () {
        // Route Ke Home
        Route::get('/home', [HomeController::class, 'index']);
    });
});







Route::get('/proses', [LoginController::class, "proses"]);

Route::get('/password', function () {
    return view('password');
});





// Route Ke Form Layanan
Route::get('/fkonsolidasi', [FkonsolidasiController::class, 'index']);

// Route Ke Form Akta Kelahiran
Route::get('/user', function () {
    return view('fkelahiran');
});
Route::get('/fkelahiran', [FkelahiranController::class, 'index']);

// Route Ke Form Kematian
Route::get('/user', function () {
    return view('fkematian');
});
Route::get('/fkematian', [FkematianController::class, 'index']);

// Route Ke Form KIA
Route::get('/user', function () {
    return view('fkia');
});
Route::get('/fkia', [FkiaController::class, 'index']);

// Route Ke Form Layanan KK
Route::get('/user', function () {
    return view('flayanankk');
});
Route::get('/flayanankk', [FlayanankkController::class, 'index']);

// Route Ke Form Pindah
Route::get('/user', function () {
    return view('fpindah');
});
Route::get('/fpindah', [FpindahController::class, 'index']);

// Route Ke Status
Route::get('/user', function () {
    return view('status');
});
Route::get('/status', [StatusController::class, 'index']);


// Route Ke Bantuan
Route::get('/user', function () {
    return view('bantuan');
});
Route::get('/bantuan', [BantuanController::class, 'index']);


// Route Ke Data Dukung
Route::get('/user', function () {
    return view('datadukung');
});
Route::get('/datadukung', [DatadukungController::class, 'index']);


// Route Ke Kebijakan
Route::get('/user', function () {
    return view('kebijakan');
});
Route::get('/kebijakan', [KebijakanController::class, 'index']);
