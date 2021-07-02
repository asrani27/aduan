<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AduanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KustomerController;
use App\Http\Controllers\RegisterController;


Route::get('/', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/login', function(){
    return redirect('/');
})->name('login');


Route::group(['middleware' => ['auth', 'role:superadmin|user']], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/logout', [LoginController::class, 'logout']);
});

Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/aduan/respon/{id}', [AduanController::class, 'solusi']);
        Route::get('/aduan/respon/{id}/delete', [AduanController::class, 'deleteSolusi']);
        Route::post('/aduan/respon/{id}/solusi', [AduanController::class, 'storeSolusi']);
        Route::resource('aduan', AduanController::class);
        
        Route::resource('pegawai', PegawaiController::class);
        
        Route::get('/customer', [KustomerController::class, 'index']);
        Route::delete('/customer/delete/{id}', [KustomerController::class, 'destroy']);
        Route::get('/lap_aduan', [LaporanController::class, 'aduan']);
        Route::get('/lap_pegawai', [LaporanController::class, 'pegawai']);
        Route::get('/lap_kustomer', [LaporanController::class, 'kustomer']);
        Route::get('/lap_solusi', [LaporanController::class, 'solusi']);
        
        Route::get('/lap_aduan_pdf', [LaporanController::class, 'printaduan']);
        Route::get('/lap_pegawai_pdf', [LaporanController::class, 'printpegawai']);
        Route::get('/lap_kustomer_pdf', [LaporanController::class, 'printkustomer']);
        Route::get('/lap_solusi_pdf', [LaporanController::class, 'printsolusi']);
    });
});

Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::prefix('user')->group(function () {
        Route::get('/aduan', [UserController::class, 'aduan']);
        Route::get('/aduan/create', [UserController::class, 'createAduan']);
        Route::get('/aduan/respon/{id}', [UserController::class, 'respon']);
        Route::post('/aduan/create', [UserController::class, 'storeAduan']);
        Route::get('/aduan/destroy/{id}', [UserController::class, 'destroyAduan']);
        Route::get('/aduan/edit/{id}', [UserController::class, 'editAduan']);
        Route::post('/aduan/edit/{id}', [UserController::class, 'updateAduan']);
        Route::post('/profil', [UserController::class, 'updateProfil']);
    });
});