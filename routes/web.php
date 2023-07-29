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
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\SubkriteriaController;
use App\Http\Controllers\SmartController;
use App\Http\Controllers\SuratController;

Route::get('/test1', function () {
    return view('test1');
});

route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
route::get('/',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');


Route::get('sethaversine', function() {
    getlocationhaversine($_GET['latitude'], $_GET['longitude']);
});

Route::group(['middleware' => ['auth','ceklevel:admin,mahasiswa,dosen']], function () {
    route::get('/home',[HomeController::class,'index'])->name('home');
    route::get('/haversine',[HomeController::class,'haversine'])->name('haversine');
    route::get('/absen-masuk',[AbsensiController::class,'index'])->name('absen-masuk');
    route::post('/updatehaversine',[HomeController::class,'updatehaversine']);
    route::post('/absen-masuk/cek',[CekController::class,'index'])->name('cek');
    route::get('/simpan-masuk',[AbsensiController::class,'store'])->name('simpan-masuk');
    route::post('/data-matkul',[AbsensiController::class,'datamatkul'])->name('data-matkul');
});

Route::group(['middleware' => ['auth','ceklevel:admin,dosen']], function () {
    Route::get('filter-data/',[AbsensiController::class,'halamanrekap'])->name('filter-data');
    route::get('filter-data/{tglawal}/{tglakhir}/{matkul_id}',[AbsensiController::class,'tampildatakeseluruhan'])->name('filter-data-keseluruhan');
    Route::resource('mulai','App\Http\Controllers\MulaiController', ['except' => ['show']]);

    Route::get('/valpresensi',[ValPresensiController::class,'index'])->name('valpresensi');
    Route::get('/valpresensi/{id}/hadir', [ValPresensiController::class, 'hadir']);
    Route::get('/valpresensi/{id}/sakit', [ValPresensiController::class, 'sakit']);
    Route::get('/valpresensi/{id}/sakit2', [ValPresensiController::class, 'sakit2']);
    Route::get('/valpresensi/{id}/sakit3', [ValPresensiController::class, 'sakit3']);
    Route::get('/valpresensi/{id}/ijin', [ValPresensiController::class, 'ijin']);
    Route::get('/valpresensi/{id}/ijin2', [ValPresensiController::class, 'ijin2']);
    Route::get('/valpresensi/{id}/ijin3', [ValPresensiController::class, 'ijin3']);
    Route::get('/valpresensi/alfa', [ValPresensiController::class, 'alfa']);

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
    route::get('/edit-dosen/{nidn}',[DosenController::class,'edit'])->name('edit-dosen');
    route::post('/update-dosen/{nidn}',[DosenController::class,'update'])->name('update-dosen');
    route::get('/delete-dosen/{nidn}',[DosenController::class,'destroy'])->name('delete-dosen');

});
Route::group(['middleware' => ['auth','ceklevel:mahasiswa']], function () {
    route::get('/krs',[KrsController::class,'index'])->name('krs');
    route::get('/create-krs',[KrsController::class,'create'])->name('create-krs');
    route::post('/simpan-krs',[KrsController::class,'store'])->name('simpan-krs');
    route::get('/delete-krs/{id}',[KrsController::class,'destroy'])->name('delete-krs');

    route::get('/ijin',[AbsensiController::class,'index1'])->name('ijin');
    route::post('/simpan-ijin',[AbsensiController::class,'store1'])->name('simpan-ijin');
});

Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    route::get('/smart',[SmartController::class,'index'])->name('smart');
    route::get('/smart/rekap',[SmartController::class,'rekap'])->name('rekap');
    route::get('/smart/cetak',[SmartController::class,'cetak'])->name('cetak');

    route::get('/kriteria',[KriteriaController::class,'index'])->name('kriteria');
    route::post('/simpan-kriteria',[KriteriaController::class,'store'])->name('simpan-kriteria');
    route::get('/tambah-kriteria',[KriteriaController::class,'create'])->name('tambah-kriteria');
    route::get('/hapus-kriteria/{id}',[kriteriaController::class,'destroy'])->name('hapus-kriteria');
    // route::get('/edit-kriteria/{id}',[KriteriaController::class,'edit'])->name('edit-kriteria');
    // route::post('/update-kriteria',[KriteriaController::class,'update'])->name('update-kriteria');

    route::get('/subkriteria',[SubkriteriaController::class,'index'])->name('subkriteria');
    route::post('/simpan-subkriteria',[SubkriteriaController::class,'store'])->name('simpan-subkriteria');
    route::get('/tambah-subkriteria',[SubkriteriaController::class,'create'])->name('tambah-subkriteria');
    route::get('/hapus-subkriteria/{id}',[subkriteriaController::class,'destroy'])->name('hapus-subkriteria');
    route::get('/edit-subkriteria/{id}', [SubkriteriaController::class,'edit'])->name('edit-subkriteria');
    route::post('/update-subkriteria/{id}', [SubkriteriaController::class,'update'])->name('update-subkriteria');

    route::get('/surat',[SuratController::class,'index'])->name('surat');
    route::post('/simpan-surat',[SuratController::class,'store'])->name('simpan-surat');
    route::get('/tambah-surat',[SuratController::class,'create'])->name('tambah-surat');
    route::get('/hapus-surat/{id}',[SuratController::class,'destroy'])->name('hapus-surat');
    route::get('/edit-surat/{id}', [SuratController::class,'edit'])->name('edit-surat');
    route::post('/update-surat/{id}', [SuratController::class,'update'])->name('update-surat');
});
// Route::get('/validasi', function () {
//     return view('validasi.presensi');
// });

/*Route::get('create-mulai',[MulaiController::class,'create'])->name('create-mulai');
route::post('simpan-mulai',[MulaiController::class,'store'])->name('simpan-mulai');*/