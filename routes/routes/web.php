<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Dashboardcontroller;

//  jika user belum login
Route::get('/', function () {
    return view('menu');
});
Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'dologin']);

});

// untuk superadmin dan pegawai
Route::group(['middleware' => ['auth', 'checkrole:1,2']], function() {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);
});


// untuk superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/admin', [SuperadminController::class, 'index']);
    Route::get('/admin/berkas', [SuperadminController::class, 'indexberkas']);
    Route::post('/input/{id}/tanggalujian',[SuperadminController::class,'inserttanggalujian']);
    Route::get('/detailujianpeserta', [SuperadminController::class, 'DetailSoal']);
    Route::get('/daftarberkas/tolak/{id}',[SuperadminController::class,'tolakberkas']);
    Route::get('/listpeserta/inputtanggal/{id}',[SuperadminController::class,'inputtanggal']);
    Route::get('/inputsoal',[SuperadminController::class,'inputsoal']);
    Route::get('/pilihsoal/{id}',[SuperadminController::class,'pilihsoal']);
    Route::get('/daftarberkas/terima/{id}',[SuperadminController::class,'indexverif']);
    Route::post('/daftarberkas/terimajadwal',[SuperadminController::class,'updateverif'])->name('updateverif');
    Route::get('/daftartanggalujian',[SuperadminController::class,'indexujian']);
    Route::get('/admin/listpeserta', [SuperadminController::class, 'indexdatapeserta']);
    Route::get('/listpeserta/edit/{id}',[SuperadminController::class,'indexupdatepeserta']);
    Route::post('/listpeserta/updatepeserta',[SuperadminController::class,'actionupdatepeserta'])->name('actionupdatepeserta');
    Route::get('/listpeserta/delete/{id}',[SuperadminController::class,'pesertadelete']);
    Route::post('/input/soal',[SuperadminController::class,'insertsoal']);
    Route::post('/input/pilih',[SuperadminController::class,'insertpilihsoal']);
    Route::get('/inputnilai/{idjawaban}', [SuperadminController::class, 'lihatjawaban']);
    Route::get('/detailjawaban', [SuperadminController::class, 'jawaban']);
    Route::post('/input/nilai', [SuperadminController::class, 'nilai']);

    Route::get('/search', [SuperadminController::class, 'indexdatapesertasearch']);


});

// untuk peserta
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/Peserta', [PegawaiController::class, 'index']);
    Route::get('/nilai', [PegawaiController::class, 'nilaipeserta']);
    Route::get('/lapperiode/cetak', [PegawaiController::class, 'cetakberkas']);
    // Route::get('/detailhasil', [PegawaiController::class, 'Detailjawaban']);
    Route::post('/input/jawaban', [PegawaiController::class, 'updatejawaban']);
    Route::get('/Soal/Ujian/{id}',[PegawaiController::class,'Halamansoal']);
    Route::get('/Peserta/berkas', [PegawaiController::class, 'indexberkas']);
    Route::get('/Peserta/tanggal', [PegawaiController::class, 'detailtanggalujian']);
    Route::get('/Peserta/berkasupload', [PegawaiController::class, 'indexuploadberkas']);
    Route::post('actionberkas',[PegawaiController::class,'actionberkasku'])->name('actionberkas');
});

Route::get('/registerPeserta',[AuthController::class,'registerPesertaIndex']);
Route::get('/registerAdmin',[AuthController::class,'registerAdminIndex']);

Route::post('actionRegPeserta',[AuthController::class,'registerPesertaAction'])->name('actionRegPeserta');
Route::post('actionRegAdmin',[AuthController::class,'registerAdminAction'])->name('actionRegAdmin');
