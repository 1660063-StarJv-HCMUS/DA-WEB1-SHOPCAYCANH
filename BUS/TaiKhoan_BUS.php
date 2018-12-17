<?php
include_once __DIR__.'/../DAO/TaiKhoan_DAO.php';
//include_once './DTO/TaiKhoan_DTO.php';
    class TaiKhoan_BUS{
        public $taiKhoan;
        public function __construct()
        {
            $this->taiKhoan = new TaiKhoan_DAO();
        }
        public function GetUserInfo($username)
        {
            return $this->taiKhoan->GetUserInfo($username);
        }
        //tra ve so luong tai khoan trung username va mk
        public function checkRow($tenDangNhap, $MatKhau)
        {
            return $this->taiKhoan->checkRow($tenDangNhap, $MatKhau);
        }
    }
?>