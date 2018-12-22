<?php
/**
 * Created by PhpStorm.
 * User: phuon
 *
 */

class DonHang
{
    var $MaDonHang;
    var $MaTaiKhoan;
    var $NgayLap;
    var $TongThanhTien;
    var $MaTinhTrang;

    public function __construct()
    {
        $this->MaDonHang    = 0;
        $this->MaTaiKhoan   =0;
        $this->NgayLap      = "2017-02-19";
        $this->TongThanhTien= 0;
    }
}
?>