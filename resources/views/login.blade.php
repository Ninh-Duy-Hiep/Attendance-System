<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/login.css')
    <title>Đăng nhập</title>
</head>
<body>
    <div class="login">
        <div class="login-left">
            <img src="{{ Vite::asset('resources/images/image-login.avif') }}" alt="">   
        </div>

        <div class="login-right">
            <h2>HỆ THỐNG QUẢN LÝ</h2>
            <img src="{{ Vite::asset('resources/images/logo-login.png') }}" alt="logo">
            <form  method="POST">
                @csrf
                <input type="text" id="username" name="username" placeholder="Tên Đăng Nhập" required><br>
                <input type="password" id="password" name="password" placeholder="Mật Khẩu" required><br>
                <button type="submit">Đăng nhập</button>
            </form>
        </div>
    </div>
</body>
</html>