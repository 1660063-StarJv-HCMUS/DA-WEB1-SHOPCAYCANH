<?php
include_once 'DB.php';
include_once __DIR__.'/../DTO/TaiKhoan.php';
class TaiKhoan_DAO //extends DB
{
    public function GetUserInfo($username)
    {
        $sql = "select 	TenHienThi, DiaChi, Email, BiXoa, MaLoaiTaiKhoan from taikhoan where TenDangNhap ='$username'";

        //$result = $this->ExecuteQuery($sql);
        $db = new DB();
        $result = $db->ExcuteQuery($sql);

        if ($result == null) {
            return 0;
        }
        $row = mysqli_fetch_array($result);
        $taiKhoan = new TaiKhoan();
        $taiKhoan->TenNguoiDung = $row['TenHienThi'];
        $taiKhoan->DiaChi = $row['DiaChi'];
        $taiKhoan->email = $row['Email'];
        $taiKhoan->BiXoa = $row['BiXoa'];
        $taiKhoan->LoaiTK = $row['MaLoaiTaiKhoan'];
        
        return $taiKhoan;
    }

    public function checkAccount($tenDangNhap, $MatKhau)
    {
        $sql = "SELECT* from TaiKhoan where TenDangNhap = '$tenDangNhap' and MatKhau ='$MatKhau'";
        $db = new DB();
        $result = $db->ExcuteQuery($sql);
        //$result = $this->ExecuteQuery($sql);
        $SoDong = mysqli_num_rows($result);
        return $SoDong;
    }

    public function checkAdmin($tenDangNhap, $MatKhau)
    {
        $sql = "SELECT* from TaiKhoan where TenDangNhap = '$tenDangNhap' and MatKhau ='$MatKhau' and MaLoaiTaiKhoan = 0";
        $db = new DB();
        $result = $db->ExcuteQuery($sql);
        //$result = $this->ExecuteQuery($sql);
        $SoDong = mysqli_num_rows($result);
        return $SoDong;
    }

    public function checkUsername($tenDangNhap)
    {
        $sql = "SELECT* from TaiKhoan where TenDangNhap = '$tenDangNhap'";
        $db = new DB();
        $result = $db->ExcuteQuery($sql);
        //$result = $this->ExecuteQuery($sql);
        $SoDong = mysqli_num_rows($result);
        return $SoDong;
    }

    public function AddTK($taiKhoan)
    {
        $sql = "INSERT into TaiKhoan(TenHienThi, TenDangNhap, DiaChi, Email, MatKhau, BiXoa ) values('$taiKhoan->TenNguoiDung','$taiKhoan->TenDangNhap','$taiKhoan->DiaChi','$taiKhoan->email','$taiKhoan->MatKhau','$taiKhoan->BiXoa')";
        $db = new DB();
        return $result = $db->ExcuteQuery($sql);
        //$result = $this->ExecuteQuery($sql);
    }
}