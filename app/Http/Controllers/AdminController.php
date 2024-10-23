<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Quản lí tài khoản
    public function account_management()
    {
        // Lấy tất cả giáo viên và sinh viên
        $teachers = Teacher::paginate(5);
        $students = Student::paginate(5);

        // Kết hợp dữ liệu vào một mảng
        $accounts = $teachers->map(function($teacher) {
            return [
                'ho_va_ten' => $teacher->ho_va_ten,
                'email' => $teacher->email,
                'so_dien_thoai' => $teacher->so_dien_thoai,
                'ma_dinh_danh' => $teacher->ma_dinh_danh_gv,
                'hinh_anh' => $teacher->hinh_anh,
                'id'=>$teacher->id_gv,
                'type' => 'teacher',
            ];
        })->concat($students->map(function($student) {
            return [
                'ho_va_ten' => $student->ho_va_ten,
                'email' => $student->email,
                'so_dien_thoai' => $student->so_dien_thoai,
                'ma_dinh_danh' => $student->ma_dinh_danh_sv,
                'hinh_anh'=> $student->hinh_anh,
                'id'=>$student->id_sv,
                'type' => 'student',
            ];
        }));

        // Xáo trộn mảng để ngẫu nhiên
        $accounts = $accounts->shuffle();

        // Truyền dữ liệu đến view
        return view('admin.admin_account_management', compact('accounts'));
    }

    // Quản lí lịch học
    public function schedule_management() 
    {
        return view('admin.admin_schedule_management');
    }
    public function attendance_results() 
    {
        return view('admin.admin_attendance_results');
    }
    public function mailbox_management() 
    {
        return view('admin.admin_mailbox_management');
    }
    
}
