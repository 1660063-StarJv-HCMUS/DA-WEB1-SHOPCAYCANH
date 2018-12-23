<?php
    include_once 'DB.php';
    class SanPham_DAO{
        public function LoadSanPhamByMaLoai($loaisp){
            $truyvan = 'select TenSanPham, HinhURL, GiaSanPham, MoTa, MaSanPham from sanpham where MaLoaiSanPham ='.$loaisp;

            $db = new DB();
            $ketQua = $db->ExcuteQuery($truyvan);

            return $ketQua;
        }

        public function LoadTatCaSanPham(){
            $truyvan = 'select TenSanPham, HinhURL, GiaSanPham, MoTa, MaSanPham from sanpham';

            $db = new DB();
            $ketQua = $db->ExcuteQuery($truyvan);

            return $ketQua;
        }
    }

?>