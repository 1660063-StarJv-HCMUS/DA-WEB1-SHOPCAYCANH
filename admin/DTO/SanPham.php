<?php
class SanPham
{
    private $MaSanPham;
    private $TenSanPham;
    private $URL;
    private $GiaSanPham;
    private $NgayNhap;
    private $MoTa;

    /**
     * @return mixed
     */

    public function __construct($tenSP, $link, $gia, $ngaynhap, $mota)
    {
        $this->TenSanPham = $tenSP;
        $this->URL = $link;
        $this->GiaSanPham = $gia;
        $this->NgayNhap = $ngaynhap;
        $this->MoTa = $mota;
    }
}
