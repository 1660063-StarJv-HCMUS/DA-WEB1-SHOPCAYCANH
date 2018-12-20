<?php
/**
 * Created by PhpStorm.
 * User: phuon
 * Date: 12/09/2018
 * Time: 9:37 PM
 */
// Lớp session, ghi nhận thông tin đăng nhập
class Session {
    // Hàm bắt đầu session
    public function start()
    {
        session_start();
    }

    // Hàm lưu session
    public function send($user)
    {
        $_SESSION['user'] = $user;
    }

    // Hàm lấy dữ liệu session
    public function get()
    {
        if (isset($_SESSION['user']))
        {
            $user = $_SESSION['user'];
        }
        else
        {
            $user = '';
        }
        return $user;
    }

    // Hàm xoá session
    public function destroy()
    {
        session_destroy();
    }
}

?>