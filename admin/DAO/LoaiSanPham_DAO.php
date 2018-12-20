<?php
/**
 * Created by PhpStorm.
 * User: phuon
 *
 */
include_once 'DB.php';

class LoaiSanPham_DAO extends DB
{
    public function LoadTatCaLoaiSanPham()
    {
        $sql = "SELECT MaLoaiSanPham, TenLoaiSanPham,BiXoa from loaisanpham";
        $result = $this->ExecuteQuery($sql);
        $lstLoaiSanPham = array();
        while($row = mysqli_fetch_array($result))
        {
            $loaiSanPham = new LoaiSanPham();
            $loaiSanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
            $loaiSanPham->TenLoaiSanPham = $row['TenLoaiSanPham'];
            $loaiSanPham->BiXoa = $row['BiXoa'];
            $lstLoaiSanPham[] = $loaiSanPham;
        }
        return $lstLoaiSanPham;

    }
    public function LoadSanPhamByID($MaLoaiSanPham )
    {
        $sql = "SELECT  MaLoaiSanPham,TenLoaiSanPham,BiXoa FROM loaisanpham WHERE MaLoaiSanPham = $MaLoaiSanPham ";
        $rs=$this->ExecuteQuery($sql);
        if($rs==null)
            return null;

        $row = mysqli_fetch_array($rs);

        $sanPham= new LoaiSanPham();
        $sanPham->TenLoaiSanPham= $row['TenLoaiSanPham'];
        $sanPham->BiXoa= $row['BiXoa'];
        $sanPham->MaLoaiSanPham=$row['MaLoaiSanPham'];
        return $sanPham;
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
    public function ThemLoaiSanPham($loaisanpham)
    {
        $sql = "INSERT INTO loaisanpham(TenLoaiSanPham,BiXoa) values('$loaisanpham->TenLoaiSanPham','$loaisanpham->BiXoa')";
        $result = $this->ExecuteQuery($sql);
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