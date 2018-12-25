<?php
/**
 * Created by PhpStorm.
 * User: phuon
 *
 */
include_once __DIR__.'/../DAO/TaiKhoan_DAO.php';
include_once __DIR__.'/../DTO/TaiKhoan_DTO.php';

//print_r($_POST);
/*
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

//var_dump($taiKhoan);
*/
class TaiKhoanBUS
{
    public function LoadTatCaTaiKhoan()
	{
		$loadTK = new TaiKhoanDAO();

		$result = $loadTK->LoadTatCaTaiKhoan();

        $danhSachTaiKhoan = array();
        if ($result->num_rows > 0)
        {
            // output data of each row
            while($row = $result->fetch_assoc())
            {
                $tk = new TaiKhoan();

                $tk->TenDangNhap    = $row['TenDangNhap'];
                $tk->TenHienThi     = $row['TenHienThi'];
                $tk->DienThoai      = $row['DienThoai'];
                $tk->email          = $row['Email'];
                $tk->DiaChi         = $row['DiaChi'];
                $tk->LoaiTK         = $row['MaLoaiTaiKhoan'];
                $tk->MatKhau        = $row['MatKhau'];

                $danhSachTaiKhoan[] = $tk;
            }
        }
        return $danhSachTaiKhoan;
	}

    public function ThemTaiKhoan($tk){

        //var_dump($tk);

        $taiKhoanDAO = new TaiKhoanDAO();

        $taiKhoanDAO->ThemTaiKhoan($tk);

    }
}