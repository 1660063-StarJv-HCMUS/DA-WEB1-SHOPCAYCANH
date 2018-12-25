<?php
/**
 * Created by PhpStorm.
 * User: phuon
 * Date: 12/22/2018
 * Time: 11:45 AM
 */

include_once __DIR__.'/../DAO/HangSanXuat_DAO.php';
include_once __DIR__.'/../DTO/HangSanXuat_DTO.php';

class HangSanXuat_BUS
{
    public function LoadTatCaCacHangSanXuat(){
        $loadHangSX = new HangSanXuatDAO();
        $result = $loadHangSX->LoadTatCaHangSanXuat();
        $danhSachHangSX = array();
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $hangSX = new HangSanXuat();
                $hangSX->MaHangSanXuat  = $row['MaHangSanXuat'];
                $hangSX->TenHangSanXuat = $row['TenHangSanXuat'];
                $hangSX->LogoURL        = $row['LogoURL'];
                $danhSachHangSX[] = $hangSX;
            }
        }
        return $danhSachHangSX;
    }

    public function ThemHangSanXuat($hang){
        $hangDAO = new HangSanXuatDAO();
        $hangDAO->ThemHangSanXuat($hang);
    }

    public function LoadMaHangByTenHang($tenHang){
        $loadHangSX = new HangSanXuatDAO();
        $result = $loadHangSX->LoadMaHangByTen($tenHang);
        $row = $result->fetch_assoc();

        return $row['MaHang'];
    }
}