<?php
/**
 * Created by PhpStorm.
 * User: phuon
 * Date: 12/16/2018
 * Time: 4:28 PM
 */

class TaiKhoan
{
    var $MaTaiKhoan;
    var $TenDangNhap;
    var $MatKhau;
    var $TenHienThi;
    var $DiaChi;
    var $DienThoai;
    var $Emal;
    var $BiXoa;
    var $MaLoaiTaiKhoan;

    public function __construct()
    {
        $this->MaLoaiTaiKhoan = 0;
        $this->BiXoa = 0;
    }
}