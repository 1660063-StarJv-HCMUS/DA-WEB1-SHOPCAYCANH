<?php
    include_once 'DB.php';
    class SanPham_DAO{
        public function LoadSanPhamByMaLoai($loaisp){
            $truyvan = 'select TenSanPham, HinhURL, GiaSanPham, MoTa, MaSanPham, MaLoaiSanPham from sanpham where MaLoaiSanPham ='.$loaisp;

            $db = new DB();
            $ketQua = $db->ExcuteQuery($truyvan);

            return $ketQua;
        }

        public function LoadTatCaSanPham(){
            $truyvan = 'select TenSanPham, HinhURL, GiaSanPham, MoTa, MaSanPham, MaLoaiSanPham from sanpham';

            $db = new DB();
            $ketQua = $db->ExcuteQuery($truyvan);

            return $ketQua;
        }

        public function LoadSanPhamNhieuTieuChi($where)
        {
            $sql = 'select TenSanPham, HinhURL, GiaSanPham, MoTa, MaSanPham, MaLoaiSanPham from sanpham where '.implode('and ', $where);

            $db = new DB();
            $ketQua = $db->ExcuteQuery($sql);
            return $ketQua;
        }

        public function getTenLoaiSanPham($MaLoai)
        {
            $sql = 'SELECT TenLoaiSanPham FROM loaisanpham WHERE MaLoaiSanPham='.$MaLoai;
            $db = new DB();
            $ketQua = $db->ExcuteQuery($sql);
            $row = $ketQua->fetch_assoc();
            return $row['TenLoaiSanPham'];
        }
    }

?>