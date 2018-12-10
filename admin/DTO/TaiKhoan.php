<?php
/**
 * Created by PhpStorm.
 * User: phuon
 * Date: 12/09/2018
 * Time: 8:39 PM
 */

class DTO_TaiKhoan extends DAO_DBConnection
{
    protected $tableName = 'taikhoan';
    public $MaTaiKhoan;
    public $TenHienThi;
    public $TenDangNhap;
    public $MaLoaiTaiKhoan;
    public $Email;
    public $DienThoai;
    public $DiaChi;
    public $MatKhau;
    public $BiXoa;
}