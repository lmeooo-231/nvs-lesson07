<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//khoa
Route::get('/khoas',
        [NvsKhoaController::class,'nvsGetAllKhoa'])->name('nvskhoa.nvsgetallkhoa');
//khoa detail
Route::get('/khoas/detail/{makh}',
        [NvsKhoaController::class,'nvsGetKhoa'])->name('nvskhoa.nvsgetkhoa');
//khoa edit
Route::get('/khoas/edit/{makh}',
        [NvsKhoaController::class,'nvsEdit'])->name('nvskhoa.nvsEdit');
Route::get('/khoas/edit',
        [NvsKhoaController::class,'nvsEditSubmit'])->name('nvskhoa.nvsEditSubmit');
//khoa - insert
Route::get('/khoas/insert',
        [NvsKhoaController::class,'nvsInsert'])->name('nvskhoa.nvsInsert');
Route::post('/khoas/insert',
        [NvsKhoaController::class,'nvsInsertSubmit'])->name('nvskhoa.nvsInsertSubmit');
//khoa - delete
Route::get('/khoas/delete/{makh}',
        [NvsKhoaController::class,'nvsDelete'])->name('nvskhoa.nvsDelete');
// mon hoc
Route::get('/monhocs',
        [NvsMonHocController::class,'nvsList'])->name('nvsmonhoc.nvsList');