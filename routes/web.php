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