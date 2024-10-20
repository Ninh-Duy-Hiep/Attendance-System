<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/admin_account_management', [AdminController::class, 'index'])->name('admin.index');
