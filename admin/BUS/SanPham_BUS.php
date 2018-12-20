<?php
/**
 * Created by PhpStorm.
 * User: phuon
 * Date: 12/18/2018
 * Time: 5:31 PM
 */

include_once __DIR__.'/../../DAO/SanPham_DAO.php';
include_once __DIR__.'/../../DTO/SanPham_DTO.php';

class SanPham_BUS
{
    public function LoadSanPhamByMaLoai($maLoaiSP)
    {
        $loadSP_MaLoai = new SanPham_DAO();

        $result = $loadSP_MaLoai->LoadSanPhamByMaLoai($maLoaiSP);

        $danhSachSanPham = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $sp = new SanPham();
                $sp->setTenSanPham($row['TenSanPham']);
                $sp->setHinhURL($row['HinhURL']);
                $sp->setGiaSanPham($row['GiaSanPham']);
                $danhSachSanPham[] = $sp;
            }
        }
        return $danhSachSanPham;
    }

    public function LoadTatCaSanPham()
    {
        $loadSP_MaLoai = new SanPham_DAO();

        $result = $loadSP_MaLoai->LoadTatCaSanPham();

        $danhSachSanPham = array();

        if ($result->num_rows > 0)
        {
            // output data of each row
            while($row = $result->fetch_assoc())
            {
                $sp = new SanPham();
                $sp->setTenSanPham($row['TenSanPham']);
                $sp->setHinhURL($row['HinhURL']);
                $sp->setGiaSanPham($row['GiaSanPham']);
                $danhSachSanPham[] = $sp;
            }
        }
        return $danhSachSanPham;
    }
}