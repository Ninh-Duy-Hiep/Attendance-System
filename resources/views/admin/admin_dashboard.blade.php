<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/admin_dashboard.css')
    <title>Trang chủ Admin</title>
</head>
<body>
    <main>
        <div class="sidebar">
            <img src="{{Vite::asset('resources/images/logo-sidebar.png')}}" >
            <h3>Hệ thống quản lý</h3>
            <hr style="margin: 25px 0px;border:1px solid black">
            <ul>
                <li style="display: flex"><img src="{{Vite::asset('resources/images/account-management.png')}}"><p>Quản lí tài khoản</p></li>
                <li style="display: flex"><img src="{{Vite::asset('resources/images/school-schedule.png')}}" ><p>Quản lí lịch học</p></li>
                <li style="display: flex"><img src="{{Vite::asset('resources/images/result.png')}}" ><p>Kết quả điểm danh</p></li>
                <li style="display: flex"><img src="{{Vite::asset('resources/images/mailbox.png')}}" ><p>Hòm thư</p></li>
            </ul>
            <form action="" method="POST">
                @csrf
                <button type="submit">Đăng xuất</button>
            </form>
        </div>
        <div class="content">
            
            <div class="function-content">
                <select name="role" id="options">
                    <option value="option1">Tất cả vai trò</option>
                    <option value="option2">Giảng viên</option>
                    <option value="option3">Sinh Viên</option>
                </select>
    
                <form action="" method="GET">
                    @csrf
                    <input type="text" name="find" placeholder="Tìm kiếm...">
                </form>
            </div>

            <div class="display-content">
                <h2>Danh sách Tài khoản</h2>
                @if($accounts->isEmpty())
                    <p>Không có tài khoản nào.</p>
                @else
                    <ul>
                        @foreach ($accounts as $account)
                            <li>
                                {{ $account['ho_va_ten'] }} ({{ $account['email'] }}) - 
                                {{ $account['type'] === 'teacher' ? 'Giáo viên' : 'Sinh viên' }}
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </main>
</body>
</html>