<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'ho_va_ten',
        'so_dien_thoai',
        'email',
        'ten_dang_nhap',
        'mat_khau',
        'hinh_anh',
    ];
}
