<?php
/**
 * Created by PhpStorm.
 * User: Nguyen  Minh Chien
 * 
 * 
 */

class SanPham
{
    var $TenSanPham;
    var $HinhURL;
    var $GiaSanPham;
    var $MaLoaiSanPham;
    var $MaSanPham;
    var $MoTa;
    var $BiXoa;
    var $SoLuotXem;
    var $SoLuongTon;
    var $soLuongBan;
    var $NgayNhap;
    var $MaHangSanXuat;

    public function __construct()
    {
        $this->GiaSanPham = 0;
        $this->SoLuongTon = 0;
        $this->BiXoa = 0;
        $this->SoLuotXem = 0;
    }
}