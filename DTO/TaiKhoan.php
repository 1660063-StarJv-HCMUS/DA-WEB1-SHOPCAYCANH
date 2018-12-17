<?php
class TaiKhoan
{
    public $TenDangNhap;
    public $TenNguoiDung;
    public $DiaChi;
    public $MatKhau;
    public $email;
    public $BiXoa;
    public $LoaiTK;

    public function __construct()
    {
        $this->TenDangNhap = "";
        $this->MatKhau = "";
        $this->TenNguoiDung = "";
        $this->DiaChi = "";
        $this->email = "";
        $this->BiXoa = 0;
        $this->LoaiTK= 1;
    }

}
