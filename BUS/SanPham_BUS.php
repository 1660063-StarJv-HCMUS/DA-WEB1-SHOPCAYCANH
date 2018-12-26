<?php
include_once __DIR__ . '/../DAO/SanPham_DAO.php';
include_once __DIR__ . '/../DTO/SanPham_DTO.php';

class SanPham_BUS
{
    public $SP;
    public function __construct()
    {
        $this->SP = new SanPham_DAO();
    }
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
                    $sp->setMoTa($row['MoTa']);
                    $sp->setMaSanPham($row['MaSanPham']);
                    $sp->setMaLoaiSanPham($row['MaLoaiSanPham']);
                    $danhSachSanPham[] = $sp;
                }
            }
            return $danhSachSanPham;
        }
        

    public function LoadTatCaSanPham()
    {
        $loadSP = new SanPham_DAO();

        $result = $loadSP->LoadTatCaSanPham();

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
                $sp->setMoTa($row['MoTa']);
                $sp->setMaSanPham($row['MaSanPham']);
                $sp->setMaLoaiSanPham($row['MaLoaiSanPham']);
                $danhSachSanPham[] = $sp;
            }       
        }
        return $danhSachSanPham;
    }
    public function LoadSanPhamNhieuTieuChi($where)
    {
        $LoadSP = new SanPham_DAO();

        $kq = $LoadSP->LoadSanPhamNhieuTieuChi($where);

        $danhSachSanPham = array();

        if ($kq->num_rows > 0) {
            // output data of each row
            while ($row = $kq->fetch_assoc()) {
                $sp = new SanPham();
                $sp->setTenSanPham($row['TenSanPham']);
                $sp->setHinhURL($row['HinhURL']);
                $sp->setGiaSanPham($row['GiaSanPham']);
                $sp->setMoTa($row['MoTa']);
                $sp->setMaSanPham($row['MaSanPham']);
                $sp->setMaLoaiSanPham($row['MaLoaiSanPham']);
                $danhSachSanPham[] = $sp;
            }
        }
        return $danhSachSanPham;
    }
    public function getTenLoaiSanPham($MaLoai)
    {
        return $this->SP->getTenLoaiSanPham($MaLoai);
    }
}
