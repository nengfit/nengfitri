<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuKaryawanController;
use App\Http\Controllers\MenuAdministratorController;

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

//Route::get('/', function () {
//return view('login');
//});

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
    Route::get('/menu/karyawan', [MenuKaryawanController::class, 'menukaryawan']);
    Route::get('/menu/administrator', [MenuAdministratorController::class, 'menuadministrator']);
});

Route::get('/home', function () {
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/administrator', [AdminController::class, 'administrator'])->middleware('userAkses:administrator');
    Route::get('/admin/karyawan', [AdminController::class, 'karyawan'])->middleware('userAkses:karyawan');
    Route::get('/logout', [SesiController::class, 'logout']);
    
});