<?php
/**
 * Created by PhpStorm.
 * User: phuon
 *
 */


include_once __DIR__.'/../TaiKhoan_BUS.php';
include_once __DIR__.'/../../DTO/TaiKhoan_DTO.php';

if($_POST['tenHienThi'] == '' || $_POST['diaChi'] == '' || $_POST['dienThoai'] == '' || $_POST['tenDangNhap'] == '' || $_POST['matKhau']){

}
else {
    $taiKhoan = new TaiKhoan();
    include_once __DIR__.'/../admin/BUS/TaiKhoan_BUS.php';
    include_once __DIR__.'/../../admin/DTO/TaiKhoan_DTO.php';

    if(isset($_POST['tenHienThi']) && isset($_POST['diaChi']) && isset($_POST['dienThoai']) && isset($_POST['email']) && isset($_POST['tenDangNhap']) && isset($_POST['matKhau'])){
        $show_alert = '<script>$("#register-form .alert").removeClass("invisible");</script>';
        $hide_alert = '<script>$("#register-form .alert").addClass("invisible");</script>';
        $success = '<script>$("#register-form .alert").attr("class", "alert alert-success mt-2");</script>';

    if(($_POST['tenHienThi']  == "") || ($_POST['diaChi'] == "") || ($_POST['dienThoai'] == "") || ($_POST['email'] = null) || ($_POST['tenDangNhap'] = null) || ($_POST['matKhau'] = null)){
        echo $show_alert . 'Vui lòng điền đầy đủ thông tin.';
    }
    else {
        $taiKhoan = new TaiKhoan();

    if ($_POST['loaiTaiKhoan'] == 'Admin')
        $taiKhoan->MaLoaiTaiKhoan = 0;
    else
        $taiKhoan->MaLoaiTaiKhoan = 1;

        $themTaiKhoan = new TaiKhoanBUS();
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
        echo $show_alert .$success. 'Thêm thành công.';
    }
}
?>
<script>
function goBack() { window.history.back(); }</script>