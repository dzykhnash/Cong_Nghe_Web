<?php
// TODO 1: Khởi động session
session_start();

// TODO 2: Kiểm tra xem người dùng đã gửi form hay chưa
if (isset($_POST['username'])) {

    // TODO 3: Lấy dữ liệu từ form
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // TODO 4: Kiểm tra đăng nhập
    if ($user === 'admin' && $pass === '123') {

        // TODO 5: Lưu username vào SESSION
        $_SESSION['username'] = $user;

        // TODO 6: Chuyển hướng sang trang chào mừng
        header('Location: welcome.php');
        exit;
    } else {
        // Sai thông tin → quay về login.html
        header('Location: login.html?error=1');
        exit;
    }

} else {
    // TODO 7: Người dùng truy cập trực tiếp → đá về trang login
    header('Location: login.html');
    exit;
}
