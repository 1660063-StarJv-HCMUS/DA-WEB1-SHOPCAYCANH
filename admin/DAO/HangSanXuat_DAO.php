<?php
/**
 * Created by PhpStorm.
 * User: phuon
 *
 *
 */
include_once 'DB.php';

class HangSanXuat_DAO extends DB
{
    public function LoadTatCaHangSanXuat()
    {
        $sql ="SELECT MaHangSanXuat,TenHangSanXuat,LogoURL,BiXoa from hangsanxuat";
        $result = $this->ExecuteQuery($sql);
        $lstHangSanXuat = array();
        while($row = mysqli_fetch_array($result))
        {
            $hangSanXuat                    = new HangSanXuat();
            $hangSanXuat->MaHangSanXuat     = $row['MaHangSanXuat'];
            $hangSanXuat->TenHangSanXuat    = $row['TenHangSanXuat'];
            $hangSanXuat->LogoURL           = $row['LogoURL'];
            $hangSanXuat->BiXoa             = $row['BiXoa'];
            $lstHangSanXuat[] = $hangSanXuat;
        }
        return $lstHangSanXuat;
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