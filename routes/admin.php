<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Quản lí tài khoản
Route::get('/admin_account_management', [AdminController::class, 'index_account_management'])->name('admin.index_account_management');
// Quản lí lịch học 
Route::get('/admin_schedule_management', [AdminController::class, 'index_schedule_management'])->name('admin.index_schedule_management');
// Kết quả điểm danh
// Quản lí hòm thư

