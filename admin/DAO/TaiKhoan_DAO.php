<?php
/**
 * Created by PhpStorm.
 * User: phuon
 *
 */
include_once 'DB.php';

class TaiKhoanDAO extends Database
{
    public function LoadTatCaTaiKhoan()
    {
        $sql = "SELECT TenDangNhap, TenHienThi, MatKhau, DiaChi, DienThoai, Email, MaLoaiTaiKhoan FROM taikhoan";
        $result = $this->ExecuteQuery($sql);

        return $result;
    }

    public function postInput($string)
    {
        $xxx = $string.'';
        return isset($_POST[$string]) ? $_POST[$string] : '';
    }

    public function  getInput($string)
    {
        return isset($_GET[$string]) ? $_GET[$string] : '';
    }

}