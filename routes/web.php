<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
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
Route::get('/loginn', function () {
    return view('pengguna.login');
});

// LOGIN
Route::get('/login', [LoginController::class, 'postlogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Registrasi
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/simpan-registrasi', [LoginController::class, 'simpanRegistrasi'])->name('simpanRegister');


Route::get('/', [RegistrasiController::class, 'beranda'])->name('beranda');
Route::get('/beranda', [RegistrasiController::class, 'beranda'])->name('beranda2');
Route::get('/registrasi', [RegistrasiController::class, 'create'])->name('create');
Route::post('/registrasi', [RegistrasiController::class, 'store'])->name('store');
Route::get('/data-registrasi', [RegistrasiController::class, 'dataRegistrasi'])->name('data-registrasi');
Route::get('/print/{id}', [RegistrasiController::class, 'print'])->name('print');


Route::prefix('/admin')->name('admin.')->group(function () {

    Route::prefix('/registrasi')->name('registrasi.')->group(function () {
        Route::get('/index', [RegistrasiController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [RegistrasiController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [RegistrasiController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [RegistrasiController::class, 'destroy'])->name('destroy');
        Route::get('/print', [RegistrasiController::class, 'printAll'])->name('printAll');
    });
});