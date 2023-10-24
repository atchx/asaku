<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkawController;
use App\Http\Controllers\SkkbController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SrkipController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\HasilController;

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

Route::get('/', [DetailController::class, 'index']);
Route::get('/product/{id}', [DetailController::class, 'detail']);
Route::post('/permohonan-status', [DetailController::class, 'status']);

Route::get('/permohonan-coba', [PermohonanController::class, 'indexCoba']);
Route::post('/permohonan-coba', [PermohonanController::class, 'storeCoba']);

Route::get('/permohonan-skkb', [PermohonanController::class, 'indexSkkb']);
Route::post('/permohonan-skkb', [PermohonanController::class, 'storeSkkb']);

Route::get('/permohonan-srkip', [PermohonanController::class, 'indexSrkip']);
Route::post('/permohonan-srkip', [PermohonanController::class, 'storeSrkip']);

Route::get('/permohonan-skaw', [PermohonanController::class, 'indexSkaw']);
Route::post('/permohonan-skaw', [PermohonanController::class, 'storeSkaw']);

Route::get('/permohonan-selesai', function () {
    return view('permohonan.selesai');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');
Route::resource('/dashboard/product', ProductController::class)->middleware('auth');

Route::resource('/dashboard/skkb', SkkbController::class)->middleware('auth');
Route::get('/dashboard/skkb/print/{id}', [PrintController::class, 'printSkkb'])->middleware('auth');
Route::get('/dashboard/skkb/hasil/{id}', [HasilController::class, 'uploadSkkb'])->middleware('auth');
Route::post('/dashboard/skkb/hasil', [HasilController::class, 'hasilSkkb'])->middleware('auth');

Route::resource('/dashboard/srkip', SrkipController::class)->middleware('auth');
Route::get('/dashboard/srkip/print/{id}', [PrintController::class, 'printSrkip'])->middleware('auth');
Route::get('/dashboard/srkip/hasil/{id}', [HasilController::class, 'uploadSrkip'])->middleware('auth');
Route::post('/dashboard/srkip/hasil', [HasilController::class, 'hasilSrkip'])->middleware('auth');

Route::resource('/dashboard/skaw', SkawController::class)->middleware('auth');
Route::get('/dashboard/skaw/print/{id}', [PrintController::class, 'printSkaw'])->middleware('auth');
Route::get('/dashboard/skaw/hasil/{id}', [HasilController::class, 'uploadSkaw'])->middleware('auth');
Route::post('/dashboard/skaw/hasil', [HasilController::class, 'hasilSkaw'])->middleware('auth');

Route::get('/linkproduk', function () {
    $targetFolder = base_path() . '/storage/app/public/product-images';
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage/product-images';
    symlink($targetFolder, $linkFolder);
});

Route::get('/linkberkas', function () {
    $targetFolder = base_path() . '/storage/app/public/berkas-persyaratan';
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage/berkas-persyaratan';
    symlink($targetFolder, $linkFolder);
});
