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
                <li style="display: flex;background-color:#58a6b2;"><img src="{{Vite::asset('resources/images/account-management.png')}}">
                    <p>Quản lí tài khoản</p>
                </li>
                <li style="display: flex"><img src="{{Vite::asset('resources/images/school-schedule.png')}}">
                    <p>Quản lí lịch học</p>
                </li>
                <li style="display: flex"><img src="{{Vite::asset('resources/images/result.png')}}">
                    <p>Kết quả điểm danh</p>
                </li>
                <li style="display: flex"><img src="{{Vite::asset('resources/images/mailbox.png')}}">
                    <p>Hòm thư</p>
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