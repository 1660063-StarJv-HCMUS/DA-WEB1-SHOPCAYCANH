<?php
/**
 * Created by PhpStorm.
 * User: phuon
 *
 *
 */

include_once 'DB.php';
include_once __DIR__.'/../DTO/HangSanXuat_DTO.php';

class HangSanXuatDAO extends Database
{
    public function LoadTatCaHangSanXuat()
    {
        $sql ="SELECT TenHangSanXuat,LogoURL from hangsanxuat";
        $result = $this->ExecuteQuery($sql);
        return $result;
    }

    //load hãng sản xuất bởi tên nhà sản xuất
    public function LoadHangByTen($tenNhaSanXuat){
        $sql = 'SELECT MaHangSanXuat,TenHangSanXuat,LogoURL,BiXoa FROM hangsanxuat WHERE TenHangSanXuat like $MaHangSanXuat ';
        $rs = $this->ExecuteQuery($sql);
        if($rs==null)
            return null;

        $row = mysqli_fetch_array($rs);
        extract($row);

        $hangSX= new HangSanXuat();
        $hangSX->MaHangSanXuat  = $row['MaHangSanXuat'];
        $hangSX->TenHangSanXuat = $row['TenHangSanXuat'];
        $hangSX->LogoURL        = $row['LogoURL'];
        $hangSX->BiXoa          =$row['BiXoa'];
        return $hangSX;
    }

    //load hãng sản xuất bởi ID
    public function LoadHangByID($MaHangSanXuat )
    {
        $sql = "SELECT  MaHangSanXuat,TenHangSanXuat,LogoURL,BiXoa FROM hangsanxuat WHERE MaHangSanXuat = $MaHangSanXuat ";
        $rs=$this->ExecuteQuery($sql);
        if($rs==null)
            return null;

        $row = mysqli_fetch_array($rs);
        extract($row);

        $hangSX= new HangSanXuat();
        $hangSX->MaHangSanXuat  = $row['MaHangSanXuat'];
        $hangSX->TenHangSanXuat = $row['TenHangSanXuat'];
        $hangSX->LogoURL        = $row['LogoURL'];
        $hangSX->BiXoa          =$row['BiXoa'];
        return $hangSX;
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
    //Thêm mới hãng sản xuất
    public function ThemHangSanXuat($hangSX)
    {
        $sql = "INSERT INTO hangsanxuat(TenHangSanXuat,LogoURL,BiXoa) values('$hangSX->TenHangSanXuat','$hangSX->LogoURL','$hangSX->BiXoa')";
        $result = $this->ExecuteQuery($sql);
    }
    //xóa một hãng sản xuất
    public function XoaHangSanXuat ($MaHangSanXuat )
    {

        $sql = 'DELETE FROM hangsanxuat WHERE MaHangSanXuat = $MaHangSanXuat';
        $this->ExecuteQuery($sql);
    }

    //chỉnh sửa hãng sản xuất
    public function ChinhSuaHangSanXuat($hangSX)
    {

        $sql="UPDATE hangsanxuat SET TenHangSanXuat='$hangSX->TenHangSanXuat',LogoURL='$hangSX->LogoURL',BiXoa=$hangSX->BiXoa WHERE MaHangSanXuat=$hangSX->MaHangSanXuat";
        $this->ExecuteQuery($sql);
    }
}