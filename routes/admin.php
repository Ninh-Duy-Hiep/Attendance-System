<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Quản lí tài khoản
Route::get('/admin_account_management', [AdminController::class, 'account_management'])->name('admin.account_management');
// Quản lí lịch học 
Route::get('/admin_schedule_management', [AdminController::class, 'schedule_management'])->name('admin.schedule_management');
// Kết quả điểm danh
Route::get('/admin_attendance_results', [AdminController::class, 'attendance_results'])->name('admin.attendance_results');
// Quản lí hòm thư
Route::get('/admin_mailbox_management', [AdminController::class, 'mailbox_management'])->name('admin.mailbox_management');

