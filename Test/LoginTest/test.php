<?php
function login($username, $password)
{
    // Kiểm tra tên đăng nhập và mật khẩu
    if ($username === 'admin' && $password === 'password') {
        // Nếu đăng nhập thành công, lưu thông tin đăng nhập vào session
        session_start();
        $_SESSION['logged_in'] = true;
        return true;
    } else {
        return false;
    }
}
