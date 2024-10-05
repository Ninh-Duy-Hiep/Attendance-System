<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/admin_dashboard', function () {
    return view('admin.admin_dashboard');
});
