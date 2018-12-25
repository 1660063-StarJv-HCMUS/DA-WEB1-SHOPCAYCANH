<?php
/**
 * Created by PhpStorm.
 * User: phuon
 *
 */
include_once 'DB.php';

class LoaiSanPhamDAO
{
    public function LoadTatCaLoaiSanPham()
    {
        $db = new Database();
        $sql = "SELECT MaLoaiSanPham, TenLoaiSanPham,BiXoa from loaisanpham";
        return $db->ExecuteQuery($sql);
    }
    public function LoadSanPhamByID($MaLoaiSanPham )
    {
        $sql = "SELECT  MaLoaiSanPham,TenLoaiSanPham,BiXoa FROM loaisanpham WHERE MaLoaiSanPham = $MaLoaiSanPham ";
        $rs=$this->ExecuteQuery($sql);
        if($rs==null)
            return null;

        $row = mysqli_fetch_array($rs);

        $sanPham                    = new LoaiSanPham();
        $sanPham->TenLoaiSanPham    = $row['TenLoaiSanPham'];
        $sanPham->BiXoa             = $row['BiXoa'];
        $sanPham->MaLoaiSanPham     =$row['MaLoaiSanPham'];
        return $sanPham;
    }

    public function ThemLoaiSanPham($loaisanpham)
    {
        $db = new Database();
        $sql = "INSERT INTO loaisanpham(TenLoaiSanPham,BiXoa) values('$loaisanpham->TenLoaiSanPham','$loaisanpham->BiXoa')";
        $result = $db->ExecuteQuery($sql);
    }
    public function XoaLoaiSanPham ($MaLoaiSanPham )
    {
        $sql = 'DELETE FROM loaisanpham WHERE MaLoaiSanPham = $MaLoaiSanPham ';
        $this->ExecuteQuery($sql);
    }
    public function ChinhSuaLoaiSanPham($loaisanpham)
    {
        $sql="UPDATE loaisanpham SET TenLoaiSanPham='$loaisanpham->TenLoaiSanPham', BiXoa = $loaisanpham->BiXoa where MaLoaiSanPham = $loaisanpham->MaLoaiSanPham";
        $this->ExecuteQuery($sql);
    }
}