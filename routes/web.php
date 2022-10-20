<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CekController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\IjinController;
use App\Http\Controllers\MulaiController;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\ValPresensiController;
use App\Http\Controllers\ValIjinController;
use App\Http\Controllers\UploadfileController;


// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
route::get('/',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth','ceklevel:admin,mahasiswa,dosen']], function () {
    route::get('/home',[HomeController::class,'index'])->name('home');
    route::get('/absen-masuk',[AbsensiController::class,'index'])->name('absen-masuk');
    route::post('/absen-masuk/cek',[CekController::class,'index'])->name('cek');
    route::post('/simpan-masuk',[AbsensiController::class,'store'])->name('simpan-masuk');
    route::post('/data-matkul',[AbsensiController::class,'datamatkul'])->name('data-matkul');
});

Route::group(['middleware' => ['auth','ceklevel:admin,dosen']], function () {
    Route::get('filter-data/',[AbsensiController::class,'halamanrekap'])->name('filter-data');
    route::get('filter-data/{tglawal}/{tglakhir}/{matkul_id}',[AbsensiController::class,'tampildatakeseluruhan'])->name('filter-data-keseluruhan');
    Route::resource('mulai','App\Http\Controllers\MulaiController', ['except' => ['show']]);

    Route::get('/valpresensi',[ValPresensiController::class,'index'])->name('valpresensi');
    Route::get('/valpresensi/{id}/hadir', [ValPresensiController::class, 'hadir']);
    Route::get('/valpresensi/{id}/tidak', [ValPresensiController::class, 'tidak']);
    Route::get('/valpresensi/{id}/ijin', [ValPresensiController::class, 'ijin']);

});

Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    route::get('/filter-matkul/{id}',[MatkulController::class,'show'])->name('detail-matkul');
    route::get('/data-matkul',[MatkulController::class,'index'])->name('data-matkul');
    route::get('/create-matkul',[MatkulController::class,'create'])->name('create-matkul');
    route::post('/simpan-matkul',[MatkulController::class,'store'])->name('simpan-matkul');
    route::get('/edit-matkul/{id}',[MatkulController::class,'edit'])->name('edit-matkul');
    route::post('/update-matkul/{id}',[MatkulController::class,'update'])->name('update-matkul');
    route::get('/delete-matkul/{id}',[MatkulController::class,'destroy'])->name('delete-matkul');

    route::get('/detail-dosen/{id}',[DosenController::class,'show'])->name('detail-dosen');
    route::get('/data-dosen',[DosenController::class,'index'])->name('data-dosen');
    route::get('/create-dosen',[DosenController::class,'create'])->name('create-dosen');
    route::post('/simpan-dosen',[DosenController::class,'store'])->name('simpan-dosen');
    route::get('/edit-dosen/{id}',[DosenController::class,'edit'])->name('edit-dosen');
    route::post('/update-dosen/{id}',[DosenController::class,'update'])->name('update-dosen');
    route::get('/delete-dosen/{id}',[DosenController::class,'destroy'])->name('delete-dosen');

});
Route::group(['middleware' => ['auth','ceklevel:mahasiswa']], function () {
    route::get('/krs',[KrsController::class,'index'])->name('krs');
    route::get('/create-krs',[KrsController::class,'create'])->name('create-krs');
    route::post('/simpan-krs',[KrsController::class,'store'])->name('simpan-krs');
    route::get('/delete-krs/{id}',[KrsController::class,'destroy'])->name('delete-krs');

    route::get('/ijin',[AbsensiController::class,'index1'])->name('ijin');
    route::post('/simpan-ijin',[AbsensiController::class,'store1'])->name('simpan-ijin');
});

// Route::get('/validasi', function () {
//     return view('validasi.presensi');
// });

/*Route::get('create-mulai',[MulaiController::class,'create'])->name('create-mulai');
route::post('simpan-mulai',[MulaiController::class,'store'])->name('simpan-mulai');*/