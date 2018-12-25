<?php
/**
 * Created by PhpStorm.
 * User: phuon
 *
 */

include_once __DIR__.'/../TaiKhoan_BUS.php';
include_once __DIR__.'/../../DTO/TaiKhoan_DTO.php';
/*
if($_POST['tenHienThi']  == "" || $_POST['diaChi'] == "" || $_POST['dienThoai'] == "" || $_POST['email'] || $_POST['tenDangNhap'] || $_POST['matKhau']){
    echo 'Không được bỏ thông tin trống';
}
else {
    $taiKhoan = new TaiKhoan();

    $taiKhoan->TenHienThi = $_POST['tenHienThi'];
    $taiKhoan->DiaChi = $_POST['diaChi'];
    $taiKhoan->DienThoai = $_POST['dienThoai'];
    $taiKhoan->Email = $_POST['email'];
    $taiKhoan->TenDangNhap = $_POST['tenDangNhap'];
    $taiKhoan->MatKhau = $_POST['matKhau'];

    if($_POST['loaiTaiKhoan'] == 'Admin')
        $taiKhoan->MaLoaiTaiKhoan = 0;
    else
        $taiKhoan->MaLoaiTaiKhoan = 1;

    $themTaiKhoan = new TaiKhoanBUS();
    //var_dump ($_POST);

    //print_r($taiKhoan);

    $themTaiKhoan->ThemTaiKhoan($taiKhoan);
}
*/
$taiKhoan = new TaiKhoan();

    $taiKhoan->TenHienThi = $_POST['tenHienThi'];
    $taiKhoan->DiaChi = $_POST['diaChi'];
    $taiKhoan->DienThoai = $_POST['dienThoai'];
    $taiKhoan->Email = $_POST['email'];
    $taiKhoan->TenDangNhap = $_POST['tenDangNhap'];
    $taiKhoan->MatKhau = $_POST['matKhau'];

    if($_POST['loaiTaiKhoan'] == 'Admin')
        $taiKhoan->MaLoaiTaiKhoan = 0;
    else
        $taiKhoan->MaLoaiTaiKhoan = 1;

    $themTaiKhoan = new TaiKhoanBUS();

    $themTaiKhoan->ThemTaiKhoan($taiKhoan);

?>
<script>
function goBack() {
  window.history.back();
}
</script>
