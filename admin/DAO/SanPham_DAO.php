<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Minh Chien
 *
 *
 */
include_once 'DB.php';
include_once __DIR__.'/../DTO/SanPham_DTO.php';

class SanPhamDAO
{

    public function LoadSanPhamByMaLoai($loaisp)
    {
        $db = new Database();
        $truyvan = 'select TenSanPham, HinhURL, GiaSanPham from sanpham where MaLoaiSanPham = $loaisp ';

        $ketQua = $db->ExcuteQuery($truyvan);

        return $ketQua;
    }

    //load tất cả các sản phẩm
    public function LoadTatCaSanPham()
    {
        $db = new Database();
        $truyvan = 'select TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, 
        SoLuongBan, SoLuotXem, MoTa, MaHangSanXuat from sanpham';

        $ketQua = $db->ExecuteQuery($truyvan);

        return $ketQua;
    }

    //xóa một sản phẩm dựa trên tên của sản phẩm
    public function XoaSanPham($TenSanPham)
    {
        $db = new Database();
        $truyvan = 'delete from sanpham where TenSanPham = $TenSanPham';
        $db->ExecuteQuery($truyvan);
    }

    //thêm một sản phẩm mới
    public function ThemSanPham($sp)
    {
        $db = new Database();
        $truyvan = "INSERT INTO `sanpham`(`TenSanPham`, `HinhURL`, `GiaSanPham`, `NgayNhap`, `SoLuongTon`, `SoLuongBan`, `SoLuotXem`, `MoTa`, `BiXoa`, `MaLoaiSanPham`, `MaHangSanXuat`) 
        VALUES ('$sp->TenSanPham', '$sp->HinhURL', '$sp->GiaSanPham', '$sp->NgayNhap', '$sp->SoLuongTon', '$sp->SoLuongBan', '$sp->SoLuotXem', '$sp->MoTa', '$sp->BiXoa', '$sp->MaLoaiSanPham', '$sp->MaHangSanXuat')";


        $db->ExecuteQuery($truyvan);

        //$truyvan2 = 'select MaSanPham from sanpham where TenSanPham = $sp->TenSanPham';

        //$result =  $this->num_rows($truyvan2);
        //if($result > 0)
        //    return true;//nếu thêm sản phẩm thành công thì trả về true
        //return false;//nếu thêm không thành công trả về false
    }

    //tìm kiếm một sản phẩm dựa trên tên sản phẩm
    public function TimKiem($Search)
    {
        $db = new Database();
        $sql = "SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,XuatXu,BiXoa,MaLoaiSanPham,MaHangSanXuat from SanPham where TenSanPham like '%$Search%'";
        $result = $db->ExecuteQuery($sql);
        if ($result == null)
            return null;
        $row = mysqli_fetch_array($result);
        $sanPham = new SanPham();
        $sanPham->MaSanPham = $row['MaSanPham'];
        $sanPham->TenSanPham = $row['TenSanPham'];
        $sanPham->AnhURL = $row['HinhURL'];
        $sanPham->GiaSanPham = $row['GiaSanPham'];
        $sanPham->SoLuongBan = $row['SoLuongBan'];
        $sanPham->SoLuotXem = $row['SoLuotXem'];
        $sanPham->MoTa = $row['MoTa'];
        $sanPham->XuatXu = $row['XuatXu'];
        $sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
        $sanPham->MaHangSanXuat = $row['MaHangSanXuat'];
        $sanPham->NgayNhap = $row['NgayNhap'];
        $sanPham->SoLuongTon = $row['SoLuongTon'];
        return $sanPham;
    }
}
