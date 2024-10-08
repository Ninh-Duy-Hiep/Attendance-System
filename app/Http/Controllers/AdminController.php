<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Lấy tất cả giáo viên và sinh viên
        $teachers = Teacher::all();
        $students = Student::all();

        // Kết hợp dữ liệu vào một mảng
        $accounts = $teachers->map(function($teacher) {
            return [
                'ho_va_ten' => $teacher->ho_va_ten,
                'email' => $teacher->email,
                'type' => 'teacher',
            ];
        })->concat($students->map(function($student) {
            return [
                'ho_va_ten' => $student->ho_va_ten,
                'email' => $student->email,
                'type' => 'student',
            ];
        }));

        // Xáo trộn mảng để ngẫu nhiên
        $accounts = $accounts->shuffle();

        // Truyền dữ liệu đến view
        return view('admin.admin_dashboard', compact('accounts'));
    }
}
