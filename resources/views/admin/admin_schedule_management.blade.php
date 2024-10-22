<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/admin_account_management.css')
    <title>Quản lí lịch học</title>
</head>

<body>
    <main>
        <div class="sidebar">
            <img src="{{Vite::asset('resources/images/logo-sidebar.png')}}">
            <h3>Hệ thống quản lý</h3>
            <hr style="margin: 25px 0px;border:1px solid black">
            <ul>
                <li>
                    <a href="{{route('admin.index_account_management')}}">
                        <img src="{{Vite::asset('resources/images/account-management.png')}}">
                        <p>Quản lí tài khoản</p>
                    </a>
                </li>
                <li style="background-color:#58a6b2;">
                    <a href="{{route('admin.index_schedule_management')}}">
                        <img src="{{Vite::asset('resources/images/school-schedule.png')}}">
                        <p>Quản lí lịch học</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{Vite::asset('resources/images/result.png')}}">
                        <p>Kết quả điểm danh</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{Vite::asset('resources/images/mailbox.png')}}">
                        <p>Hòm thư</p>
                    </a>
                </li>
            </ul>
            <form action="" method="POST">
                @csrf
                <button type="submit">Đăng xuất</button>
            </form>
        </div>
        <div class="content">
        </div>
    </main>
</body>

</html>