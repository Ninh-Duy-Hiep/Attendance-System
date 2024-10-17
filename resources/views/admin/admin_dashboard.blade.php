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

            <div class="function-content">
                <select name="role" id="options">
                    <option value="option1">Tất cả vai trò</option>
                    <option value="option2">Giảng viên</option>
                    <option value="option3">Sinh Viên</option>
                </select>

                <form action="" method="GET">
                    @csrf
                    <input type="text" name="find" placeholder="  Tìm kiếm...">
                </form>
            </div>

            <div class="display-content">
                @if($accounts->isEmpty())
                <p>Không có tài khoản nào.</p>
                @else
                <table style="border-collapse: collapse;">
                    <thead>
                        <tr>
                            <td></td>
                            <td style="padding-bottom: 10px;font-weight:bold;">Tên</td>
                            <td style="padding-bottom: 10px;font-weight:bold;">Mã định danh</td>
                            <td style="padding-bottom: 10px;font-weight:bold;">Số điện thoại</td>
                            <td style="padding-bottom: 10px;font-weight:bold;">Vai trò</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($accounts as $account)
                        <tr>
                            <td style="text-align: start"><img src="{{$account['hinh_anh'] }}" width="65" height="auto"></td>
                            <td>{{$account['ho_va_ten']}}</td>
                            <td>{{$account['ma_dinh_danh']}}</td>
                            <td>{{$account['so_dien_thoai']}}</td>
                            <td>{{$account['type'] === 'teacher' ? 'Giáo viên' : 'Sinh viên'}}</td>
                            <td><a href=""><img src="{{Vite::asset('resources/images/editing.png')}}" width="20px" height="auto"></a></td>
                            <td><a href=""><img src="{{Vite::asset('resources/images/delete.png')}}" width="20px" height="auto"></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="next-previous-page">
                    <a href=""><img src="{{Vite::asset('resources/images/arrow-left.png')}}" width="15px" height="auto"></a>
                    <span style="font-weight: bold;margin:0px 15px;font-size:18px">1</span>
                    <a href=""><img src="{{Vite::asset('resources/images/right-arrow.png')}}" width="15px" height="auto"></a>
                </div>
                @endif
            </div>
        </div>
    </main>
</body>

</html>