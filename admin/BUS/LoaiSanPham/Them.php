<?php
/**
 * Created by PhpStorm.
 * User: phuon
 *
 */
include_once __DIR__.'/../../DTO/LoaiSanPham_DTO.php';
include_once __DIR__.'/../../BUS/LoaiSanPham_BUS.php';


///////////////////////Thêm sản phẩm mới////////////////////////////////////////

$loai = new LoaiSanPham();
$loai->TenLoaiSanPham = $_POST['tenLoaiSanPham'];

$loai_BUS = new LoaiSanPham_BUS();
$result = $loai_BUS->ThemLoaiSanPham($loai);