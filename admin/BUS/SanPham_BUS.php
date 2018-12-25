<?php
/**
 * Created by PhpStorm.
 * User: phuon
 * 
 */

include_once __DIR__.'/../DAO/SanPham_DAO.php';
include_once __DIR__.'/../DTO/SanPham_DTO.php';
include_once __DIR__.'/../DAO/HangSanXuat_DAO.php';

class SanPham_BUS
{

    public function LoadSanPhamByMaLoai($maLoaiSP)
    {
        $loadSP_MaLoai = new SanPhamDAO();

        $result = $loadSP_MaLoai->LoadSanPhamByMaLoai($maLoaiSP);

        $danhSachSanPham = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $sp = new SanPham();
                $sp->TenSanPham = ($row['TenSanPham']);
                $sp->HinhURL = ($row['HinhURL']);
                $sp->GiaSanPham = ($row['GiaSanPham']);
                $sp->NgayNhap = ($row['NgayNhap']);
                $sp->MaHangSanXuat = ($row['MaHangSanXuat']);
                $danhSachSanPham[] = $sp;
            }
        }
        return $danhSachSanPham;
    }

    public function LoadTatCaSanPham()
    {
        $loadSP = new SanPhamDAO();

        $result = $loadSP->LoadTatCaSanPham();

        $danhSachSanPham = array();

        if ($result->num_rows > 0)
        {
            // output data of each row
            while($row = $result->fetch_assoc())
            {
                $sp = new SanPham();
                $sp->TenSanPham = $row['TenSanPham'];
                $sp->HinhURL    = $row['HinhURL'];
                $sp->GiaSanPham = $row['GiaSanPham'];
                $sp->NgayNhap   = $row['NgayNhap'];
                $sp->SoLuotXem  = $row['SoLuotXem'];
                $sp->SoLuongTon = $row['SoLuongTon'];
                $sp->SoLuongBan = $row['SoLuongBan'];
                $tmp = new HangSanXuatDAO();
                $sp->MaHangSanXuat = $tmp->LoadMaHangByTen($row['MaHangSanXuat']);
                $sp->MoTa = $row['MoTa'];
                $danhSachSanPham[]  = $sp;
            }
        }
        return $danhSachSanPham;
    }

    public function ThemSanPham($sp){
        $sanphamDAO = new SanPhamDAO();
        $sanphamDAO->ThemSanPham($sp);
    }

}