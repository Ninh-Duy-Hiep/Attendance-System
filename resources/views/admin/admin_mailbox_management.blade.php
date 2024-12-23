<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/admin/admin_mailbox_management.css') }}">
    <title>Hòm thư</title>
</head>

<body>
    <main>
        <div class="sidebar">
            <img src="{{asset('images/logo-sidebar.png')}}">
            <h3>Hệ thống quản lý</h3>
            <hr style="margin: 25px 0px;border:1px solid black">
            <ul>
                <li>
                    <a href="{{route('admin.account_management')}}">
                        <img src="{{asset('images/account-management.png')}}">
                        <p>Quản lí tài khoản</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.schedule_management')}}">
                        <img src="{{asset('images/school-schedule.png')}}">
                        <p>Quản lí lịch học</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.attendance_results')}}">
                        <img src="{{asset('images/result.png')}}">
                        <p>Kết quả điểm danh</p>
                    </a>
                </li>
                <li style="background-color:#58a6b2;">
                    <a href="{{route('admin.mailbox_management')}}">
                        <img src="{{asset('images/mailbox.png')}}">
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
            <div class="function-email">
                <select id="subject">
                    <option value="subject0">Tất cả các môn học</option>
                    <option value="subject1">Hệ nhúng</option>
                    <option value="subject2">Phân tích và thiết kế phần mềm</option>
                    <option value="subject3">Trực quan hóa dữ liệu</option>
                    <option value="subject4">Quản trị dự án CNTT</option>
                    <option value="subject5">Thiết kế web nâng cao</option>
                </select>

                <select id="email-sent-inbox" style="width: 150px">
                    <option value="email-inbox">Hộp thư đến</option>
                    <option value="email-sent">Đã gửi</option>
                </select>

                <div class="email-sent" onclick="openComposeModal()">
                    <img src="{{asset('images/inbox.png')}}">
                    <p>Soạn thư</p>
                </div>

                <!-- Soạn Thư -->
                <div id="composeModal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeComposeModal()">&times;</span>
                        <p>Soạn tin nhắn</p>
                        <hr>
                        {{-- Dữ liệu giả --}}
                        <form>
                            @csrf

                            <label for="classes">Lớp học: </label>
                            <select id="classes">
                                <option value="class1">Chọn lớp học</option>
                                <option value="class2">Trực quan hóa dữ liệu</option>
                                <option value="class3">Hệ nhúng</option>
                                <option value="class4">Quản trị dự án</option>
                            </select>

                            <label for="student-teacher" style="margin-left: 50px">Đến: </label>
                            <select id="student-teacher" onchange="updateOptions()">
                                <option>Đối tượng</option>
                                <option value="student">Học sinh</option>
                                <option value="teacher">Giảng viên</option>
                            </select>
                            {{-- Hiển thị tên đối tượng sau khi chọn --}}
                            <span>Tên đối tượng sau khi chọn</span>
                            <!-- Dữ liệu học sinh giả -->
                            <ul id="student-options" style="display: none;">
                                <li>Trần Minh Hiếu</li>
                                <li>Trần Minh Hiếu</li>
                                <li>Trần Minh Hiếu</li>
                                <li>Trần Minh Hiếu</li>
                                <li>Trần Minh Hiếu</li>
                                <li>Trần Minh Hiếu</li>
                                <li>Trần Minh Hiếu</li>
                                <li>Trần Minh Hiếu</li>
                                <li>Trần Minh Hiếu</li>
                                <li>Trần Minh Hiếu</li>
                                <li>Trần Minh Hiếu</li>
                                <li>Trần Minh Hiếu</li>
                            </ul>
                            <!-- dữ liệu giảng viên giả -->
                            <ul id="teacher-options" style="display: none;">
                                <li>Nguyễn Quang Hệ</li>
                                <li>Nguyễn Quang Hệ</li>
                                <li>Nguyễn Quang Hệ</li>
                                <li>Nguyễn Quang Hệ</li>
                                <li>Nguyễn Quang Hệ</li>
                                <li>Nguyễn Quang Hệ</li>
                                <li>Nguyễn Quang Hệ</li>
                                <li>Nguyễn Quang Hệ</li>
                                <li>Nguyễn Quang Hệ</li>
                                <li>Nguyễn Quang Hệ</li>
                            </ul>
                            <br>
                            <label for="title">Tiêu đề: </label>
                            <input type="text" id="title">
                            <textarea id="main-content" placeholder="Nội dung..."></textarea>
                            <br>
                            <button style="background-color: white;margin:0px 10px 15px 80%;">Hủy</button>
                            <button style="background-color: #58A6B2">Gửi</button>
                        </form>
                    </div>
                </div>

            </div>

            <div class="email">
                {{-- Các email giả để hiển thị --}}
                <div class="container-email-item">
                    @for ($i = 0; $i < 11; $i++) 
                        <div class="email-item" onclick="showEmailContent('{{ $i }}')">
                            <p>20/10</p>
                            <p>Nguyễn Quuang Hê , Trânf Minh Hiếu</p>
                            <p>Tiêu đề của maillllllllllllllllll</p>
                            <p>Nội dungggggggggggggggggggggggggggggggggggggggggggggggg</p>
                        </div>
                    @endfor
                </div>

                {{-- Hiển thị chi tiết email giả --}}
                <div class="display-email-content">
                    @for ($i = 0; $i < 11; $i++) 
                        <div id="email{{ $i }}" class="email-content " >
                            <div class="email-content-detail">
                                <p>Email {{ $i + 1 }}</p>
                                <p>20/10</p>
                                <p>Nguyễn Quuang Hê , Trânf Minh Hiếu</p>
                                <p>Tiêu đề của maillllllllllllllllll</p>
                                <p>alo alo alo alo alo alo alo alo alo alo alo aloalo alo alo alo alo alo alo alo alo alo alo alo alo alo alo alo alo alo alo alo alo alo alo alo</p>
                            </div>

                            <div class="email-reply-delete">
                                <img src="{{asset('images/reply.png')}}" >
                                <img src="{{asset('images/delete.png')}}" >
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

        </div>
    </main>
    <script src="{{ asset('js/admin_mailbox_management.js') }}"></script>
</body>

</html>