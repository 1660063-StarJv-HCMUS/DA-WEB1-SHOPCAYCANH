<?php
/**
 * Created by PhpStorm.
 * User: phuon
 *
 */
include_once 'DB.php';

class TaiKhoan_DAO extends DB
{
    public function LoadTatCaTaiKhoan()
    {
        $sql = "SELECT MaNguoiDung,TenNguoiDung,TenDangNhap,NgaySinh,NoiSinh,MatKhau,SDT,BiXoa from taikhoan";
        $result = $this->ExecuteQuery($sql);
        $lstTaiKhoan = array();
        while($row = mysqli_fetch_array($result))
        {
            $taiKhoan = new TaiKhoan();
            $taiKhoan->MaNguoiDung  = $row['MaNguoiDung'];
            $taiKhoan->TenNguoiDung = $row['TenNguoiDung'];
            $taiKhoan->TenDangNhap  = $row['TenDangNhap'];
            $taiKhoan->NgaySinh     = $row['NgaySinh'];
            $taiKhoan->NoiSinh      = $row['NoiSinh'];
            $taiKhoan->MatKhau      = $row['MatKhau'];
            $taiKhoan->SDT          = $row['SDT'];
            $taiKhoan->BiXoa  		  = $row['BiXoa'];
            $lstTaiKhoan[]          = $taiKhoan;

        }
        return $lstTaiKhoan;
    }
    public function LoadTaiKhoanByID($MaTaiKhoan )
    {
        $sql = "SELECT  MaNguoiDung,TenNguoiDung,TenDangNhap,NgaySinh,DiaChi,MatKhau,SoDienThoai,BiXoa FROM taikhoan WHERE MaNguoiDung = $MaTaiKhoan ";
        $rs=$this->ExecuteQuery($sql);
        if($rs==null)
            return null;

        $row = mysqli_fetch_array($rs);

        $sanPham= new TaiKhoan();
        $sanPham->MaNguoiDung=$row['MaTaiKhoan'];
        $sanPham->TenNguoiDung= $row['TenNguoiDung'];
        $sanPham->TenDangNhap= $row['TenDangNhap'];
        $sanPham->NgaySinh=$row['NgaySinh'];
        $sanPham->NoiSinh=$row['DiaChi'];
        $sanPham->MatKhau=$row['MatKhau'];
        $sanPham->SDT=$row['SoDienThoai'];
        $sanPham->BiXoa=$row['BiXoa'];
        return $sanPham;
    }
    public function postInput($string)
    {
        $xxx = $string.'';
        return isset($_POST[$string]) ? $_POST[$string] : '';
    }

    public function  getInput($string)
    {
        return isset($_GET[$string]) ? $_GET[$string] : '';
    }
    public function ThemTaiKhoan($taikhoan)
    {
        $sql = "INSERT INTO taikhoan(TenNguoiDung,TenDangNhap,NgaySinh,NoiSinh,MatKhau,SDT)
			values('$taikhoan->TenNguoiDung','$taikhoan->TenDangNhap','$taikhoan->NgaySinh','$taikhoan->DiaChi','$taikhoan->MatKhau','$taikhoan->SoDienThoai')";
        $result = $this->ExecuteQuery($sql);
    }
    public function XoaTaiKhoan ($MaTaiKhoan )
    {

        $sql = "DELETE FROM taikhoan WHERE MaNguoiDung = $MaTaiKhoan  ";
        $this->ExecuteQuery($sql);
    }
    public function ChinhSuaTaiKhoan($taikhoan)
    {
        $sql="UPDATE sanpham 
			 set TenLoaiSanPham='$taikhoan->TenLoaiSanPham',BiXoa=$taikhoan->BiXoa 
			 Where MaLoaiSanPham=$taikhoan->MaLoaiSanPham";
        $this->ExecuteQuery($sql);
    }
}