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
            <p>Hệ thống quản lý</p>
            <hr style="margin: 25px 0px">
            <ul>
                <li>Quản lí tài khoản</li>
                <li>Quản lí lịch học</li>
                <li>Kết quả điểm danh</li>
                <li>Hòm thư</li>
            </ul>
            <form action="" method="POST">
                @csrf
                <button type="submit">Đăng xuất</button>
            </form>
        </div>
        <div class="content">
            
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
    </main>
</body>
</html>