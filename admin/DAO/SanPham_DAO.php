<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Minh Chien
 *
 *
 */
include_once 'DB.php';
include_once __DIR__.'/../DTO/SanPham_DTO.php';

class SanPham_DAO extends DB
{
    public function PostInput($string)
    {
        return isset($_POST[$string]) ? $_POST[$string] : '';
    }

    public function  GetInput($string)
    {
        return isset($_GET[$string]) ? $_GET[$string] : '';
    }

    public function LoadSanPhamByMaLoai($loaisp){
        $truyvan = 'select TenSanPham, HinhURL, GiaSanPham from sanpham where MaLoaiSanPham = $loaisp ';

        $ketQua = $this->ExcuteQuery($truyvan);

        return $ketQua;
    }

    //load tất cả các sản phẩm
    public function LoadTatCaSanPham(){
        $truyvan = 'select TenSanPham, HinhURL, GiaSanPham from sanpham';

        $ketQua = $this->ExcuteQuery($truyvan);

        return $ketQua;
    }

    //xóa một sản phẩm dựa trên tên của sản phẩm
    public function XoaSanPham($TenSanPham){
        $truyvan = 'delete from sanpham where TenSanPham = $TenSanPham';
        $this->ExecuteQuery($truyvan);
    }

    //thêm một sản phẩm mới
    public function ThemSanPham($sp){
        $truyvan = 'insert into sanpham(TenSanPham, HinhURL, GiaSanPham, MaLoaiSanPham, MaSanPham, MoTa, SoLuongTon, NgayNhap, MaHangSanXuat) 
        VALUE ($sp->TenSanPham, $sp->HinhURL, $sp->GiaSanPham, $sp->MaLoaiSanPham, $sp->MoTa, $sp->SoLuongTon, $sp->NgayNhap, $sp->MaHangSanXuat)';

        $this->ExecuteQuery($truyvan);

        $truyvan2 = 'select MaSanPham from sanpham where TenSanPham = $sp->TenSanPham';

        $result =  $this->num_rows($truyvan2);
        if($result > 0)
            return true;//nếu thêm sản phẩm thành công thì trả về true
        return false;//nếu thêm không thành công trả về false
    }

    //tìm kiếm một sản phẩm dựa trên tên sản phẩm
    public function TimKiem($Search)
    {
        $sql = "SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,XuatXu,BiXoa,MaLoaiSanPham,MaHangSanXuat from SanPham where TenSanPham like '%$Search%'";
        $result = $this->ExecuteQuery($sql);
        if($result == null)
            return null;
        $row = mysqli_fetch_array($result);
        $sanPham = new SanPham();
        $sanPham->MaSanPham     = $row['MaSanPham'];
        $sanPham->TenSanPham    = $row['TenSanPham'];
        $sanPham->AnhURL        = $row['HinhURL'];
    $sanPham->GiaSanPham        = $row['GiaSanPham'];
        $sanPham->SoLuongBan    = $row['SoLuongBan'];
        $sanPham->SoLuotXem     = $row['SoLuotXem'];
        $sanPham->MoTa          = $row['MoTa'];
        $sanPham->XuatXu        = $row['XuatXu'];
        $sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
        $sanPham->MaHangSanXuat =$row['MaHangSanXuat'];
        $sanPham->NgayNhap      = $row['NgayNhap'];
        $sanPham->SoLuongTon    = $row['SoLuongTon'];
        return $sanPham;
    }
}
