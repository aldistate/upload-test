<?php

use App\Http\Controllers\AnnualLeaveController;
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

Route::get('/', function () {
    return view('welcome');
});

// menampilkan view test-grid dengan end point /test-grid
Route::get('/test-grid', function() {
    return view('test-grid');
});

// menampilkan view test-flex dengan end point /test-flex
Route::get('/test-flex', function() {
    return view('test-flex');
});

// Untuk membuat permohonan cuti baru
Route::post('/annual-leaves', [AnnualLeaveController::class, 'create'])->name('cuti_create');

// Untuk menampilkan list permohonan cuti yang sudah masuk
Route::get('/annual-leaves', [AnnualLeaveController::class, 'index'])->name('cuti_index');

// Untuk menampilkan satu data permohonan izin sesuai dengan id cuti
Route::get('/annual-leaves/{id}', [AnnualLeaveController::class, 'show'])->name('cuti_show');