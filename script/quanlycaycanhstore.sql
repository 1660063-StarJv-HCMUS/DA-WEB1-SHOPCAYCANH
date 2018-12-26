-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 10:45 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlycaycanhstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MaChiTietDonDatHang` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiaBan` int(11) NOT NULL,
  `MaDonDatHang` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaSanPham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDonHang` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayLap` date NOT NULL,
  `TongThanhTien` int(11) NOT NULL,
  `MaTaiKhoan` int(11) NOT NULL,
  `MaTinhTrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hangsanxuat`
--

CREATE TABLE `hangsanxuat` (
  `MaHangSanXuat` int(11) NOT NULL,
  `TenHangSanXuat` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LogoURL` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BiXoa` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hangsanxuat`
--

INSERT INTO `hangsanxuat` (`MaHangSanXuat`, `TenHangSanXuat`, `LogoURL`, `BiXoa`) VALUES
(1, 'cayxinh.vn', 'zFrMjbxuong-rong-trung-chim.jpg', 0),
(2, 'thienduongcayxanh.com', 'gn7Q8Sthien-duong-cay-xanh-logo.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLoaiSanPham` int(11) NOT NULL,
  `TenLoaiSanPham` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BiXoa` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoaiSanPham`, `TenLoaiSanPham`, `BiXoa`) VALUES
(1, 'Tiểu Cảnh', 0),
(2, 'Sen đá', 0),
(3, 'Xương rồng', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaitaikhoan`
--

CREATE TABLE `loaitaikhoan` (
  `MaLoaiTaiKhoan` int(11) NOT NULL,
  `TenLoaiTaiKhoan` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaitaikhoan`
--

INSERT INTO `loaitaikhoan` (`MaLoaiTaiKhoan`, `TenLoaiTaiKhoan`) VALUES
(0, 'ADMIN'),
(1, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhURL` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GiaSanPham` int(11) NOT NULL,
  `NgayNhap` date NOT NULL,
  `SoLuongTon` int(11) NOT NULL,
  `SoLuongBan` int(11) NOT NULL,
  `SoLuotXem` int(11) NOT NULL,
  `MoTa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `BiXoa` int(11) NOT NULL,
  `MaLoaiSanPham` int(11) NOT NULL,
  `MaHangSanXuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `TenSanPham`, `HinhURL`, `GiaSanPham`, `NgayNhap`, `SoLuongTon`, `SoLuongBan`, `SoLuotXem`, `MoTa`, `BiXoa`, `MaLoaiSanPham`, `MaHangSanXuat`) VALUES
(3, 'Tiểu cảnh 01', 'uKR0wgtieu-canh-1.jpg', 75000, '2018-12-05', 12, 0, 0, '', 0, 1, 1),
(15, 'sen đá hàn quốc', 'oarpbfsen-đá-hàn-quốc-300x300.jpg', 10000, '2018-12-25', 10, 0, 0, 'sen đá hàn quốc', 0, 2, 1),
(18, 'sen đá sừng hươu', 'obBPyaSen-đá-sừng-hươu-300x300.jpg', 75000, '2018-12-25', 10, 0, 0, 'sen đá sừng hươu', 0, 2, 1),
(26, 'sen đá lá nhung', 'cv3RmFsen-đá-nhung.jpg', 60000, '2018-12-26', 20, 0, 0, 'sen đá lá nhung', 0, 2, 1),
(29, 'sen đá phật bà', 'Lhl7Nesen-phật-bà-đẹp-2-300x300.jpg', 75000, '2018-12-26', 10, 0, 0, 'sen đá phật bà', 0, 2, 1),
(30, 'Xương rồng gymno', 'pdTkrLxuong-rong-gymno.jpg', 75000, '2018-12-26', 10, 0, 0, 'xương rồng gymno', 0, 3, 1),
(31, 'Xương rồng thần long', 'GqBRDhxuong-rong-than-long.jpg', 100000, '2018-12-26', 20, 0, 0, 'xương rồng thần long', 0, 3, 1),
(32, 'Tiểu cảnh 3', 'IFBzJstieu-canh-3.jpg', 200000, '2018-12-26', 5, 0, 0, 'Tiểu cảnh trang trí góc làm việc', 0, 1, 2),
(33, 'Tiểu cảnh 25', 'PySbaMtieu-canh-25.jpg', 1750000, '2018-12-26', 10, 0, 0, 'Tiểu cảnh trang trí góc làm việc', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTaiKhoan` int(11) NOT NULL,
  `TenDangNhap` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenHienThi` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DienThoai` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BiXoa` tinyint(1) NOT NULL,
  `MaLoaiTaiKhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaTaiKhoan`, `TenDangNhap`, `MatKhau`, `TenHienThi`, `DiaChi`, `DienThoai`, `Email`, `BiXoa`, `MaLoaiTaiKhoan`) VALUES
(1, 'sa', 'sa', 'ADMIN', '', '', '', 0, 0),
(2, 'test', '123', 'Hải', '', '', '', 0, 1),
(4, 'haha1', '123', 'haha', 'ho chi minh', '01234556789', 'ahaha@gmail.com', 0, 1),
(6, 'admin', '123', 'Minh Chiến', 'Hồ Chí Minh', '021313', 'midfsadf@gmail.com', 0, 1),
(7, 'superadmin', '123', 'Chiến', 'Gia Lai', '0399115999', 'thanhcong.hahaha@gmail.com', 0, 1),
(8, 'thanhhai', '123', 'Thanh Hải', 'Đồng Nai', '1234123421', 'hahhahaha', 0, 1),
(9, 'superadmin1', '123456789', 'Minh Chiến', '135B Trần Hưng Đạo', '0399115999', 'thisisadmin@gmail.com', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `MaTinhTrang` int(11) NOT NULL,
  `TenTinhTrang` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD KEY `Fk_MaDonHang` (`MaDonDatHang`),
  ADD KEY `FK_MaSanPham` (`MaSanPham`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDonHang`),
  ADD KEY `FK_MaTaiKhoan` (`MaTaiKhoan`),
  ADD KEY `FK_TinhTrang` (`MaTinhTrang`);

--
-- Indexes for table `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  ADD PRIMARY KEY (`MaHangSanXuat`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLoaiSanPham`);

--
-- Indexes for table `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  ADD PRIMARY KEY (`MaLoaiTaiKhoan`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `FK_MaHangSanXuat` (`MaHangSanXuat`),
  ADD KEY `FK_LoaiSanPham` (`MaLoaiSanPham`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTaiKhoan`),
  ADD KEY `FK_LoaiTaiKhoan` (`MaLoaiTaiKhoan`);

--
-- Indexes for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`MaTinhTrang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  MODIFY `MaHangSanXuat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLoaiSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `FK_MaSanPham` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`),
  ADD CONSTRAINT `Fk_MaDonHang` FOREIGN KEY (`MaDonDatHang`) REFERENCES `donhang` (`MaDonHang`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `FK_MaTaiKhoan` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `taikhoan` (`MaTaiKhoan`),
  ADD CONSTRAINT `FK_TinhTrang` FOREIGN KEY (`MaTinhTrang`) REFERENCES `tinhtrang` (`MaTinhTrang`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_LoaiSanPham` FOREIGN KEY (`MaLoaiSanPham`) REFERENCES `loaisanpham` (`MaLoaiSanPham`),
  ADD CONSTRAINT `FK_MaHangSanXuat` FOREIGN KEY (`MaHangSanXuat`) REFERENCES `hangsanxuat` (`MaHangSanXuat`);

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `FK_LoaiTaiKhoan` FOREIGN KEY (`MaLoaiTaiKhoan`) REFERENCES `loaitaikhoan` (`MaLoaiTaiKhoan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
