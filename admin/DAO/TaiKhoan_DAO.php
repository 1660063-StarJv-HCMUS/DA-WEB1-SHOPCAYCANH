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
        $sql = "SELECT MaTaiKhoan ,TenDangNhap, TenHienThi, MatKhau, DiaChi, DienThoai, Email, MaLoaiTaiKhoan FROM taikhoan";
        $result = $this->ExecuteQuery($sql);

        return $result;
    }

    public function ThemTaiKhoan($tk){
        $truyvan = "INSERT INTO taikhoan(TenDangNhap, MatKhau, TenHienThi, DiaChi, DienThoai, Email, BiXoa, MaLoaiTaiKhoan)
                    VALUES ('$tk->TenDangNhap', '$tk->MatKhau', '$tk->TenHienThi', '$tk->DiaChi', '$tk->DienThoai', '$tk->Email', '$tk->BiXoa', '$tk->MaLoaiTaiKhoan')";
        //var_dump($tk);
        $this->ExecuteQuery($truyvan);
    }
}