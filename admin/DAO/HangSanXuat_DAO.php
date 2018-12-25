<?php
/**
 * Created by PhpStorm.
 * User: phuon
 *
 *
 */

include_once 'DB.php';
include_once __DIR__.'/../DTO/HangSanXuat_DTO.php';

class HangSanXuatDAO
{
    public function LoadTatCaHangSanXuat()
    {
        $db = new Database();
        $truyvan ="SELECT MaHangSanXuat ,TenHangSanXuat,LogoURL from hangsanxuat";
        $result = $db->ExecuteQuery($truyvan);
        return $result;
    }

    //load mã hãng sản xuất bởi tên nhà sản xuất
    public function LoadMaHangByTen($tenNhaSanXuat){
        $db = new Database();
        $truyvan = "SELECT MaHangSanXuat,TenHangSanXuat,LogoURL,BiXoa FROM hangsanxuat WHERE TenHangSanXuat = '$tenNhaSanXuat'";
        $rs = $db->ExecuteQuery($truyvan);
        return $rs;
    }

    public function ThemHangSanXuat($hangSX)
    {
        $db = new Database();
        $truyvan = "INSERT INTO hangsanxuat(TenHangSanXuat,LogoURL,BiXoa) values('$hangSX->TenHangSanXuat','$hangSX->LogoURL','$hangSX->BiXoa')";
        $db->ExecuteQuery($truyvan);
    }
    /*
    //load hãng sản xuất bởi ID hãng
    public function LoadTenHangByID($MaHangSanXuat )
    {
        $db = new Database();
        $truyvan = "SELECT TenHangSanXuat,LogoURL,BiXoa FROM hangsanxuat WHERE MaHangSanXuat = '$MaHangSanXuat'";
        $rs = $db->ExecuteQuery($truyvan);
        return $rs;
    }

    //Thêm mới hãng sản xuất
    public function ThemHangSanXuat($hangSX)
    {
        $db = new Database();
        $truyvan = "INSERT INTO hangsanxuat(TenHangSanXuat,LogoURL,BiXoa) values('$hangSX->TenHangSanXuat','$hangSX->LogoURL','$hangSX->BiXoa')";
        $db->ExecuteQuery($truyvan);
    }

    //xóa một hãng sản xuất
    public function XoaHangSanXuat ($MaHangSanXuat )
    {
        $db = new Database();
        $truyvan = 'DELETE FROM hangsanxuat WHERE MaHangSanXuat = $MaHangSanXuat';
        $db->ExecuteQuery($truyvan);
    }
    //chỉnh sửa hãng sản xuất
    public function ChinhSuaHangSanXuat($hangSX)
    {
        $db = new Database();
        $truyvan="UPDATE hangsanxuat SET TenHangSanXuat='$hangSX->TenHangSanXuat',LogoURL='$hangSX->LogoURL',BiXoa=$hangSX->BiXoa WHERE MaHangSanXuat=$hangSX->MaHangSanXuat";
        $db->ExecuteQuery($truyvan);
    }*/
}