
<?php
/**
 * Created by PhpStorm.
 * User: phuon
 *
 */

include_once __DIR__.'/../../DTO/SanPham_DTO.php';
include_once __DIR__.'/../../BUS/SanPham_BUS.php';
include_once __DIR__.'/../../DTO/HangSanXuat_DTO.php';

///////////////////////Thêm sản phẩm mới////////////////////////////////////////

    $sp = new SanPham();
    $sp->TenSanPham     = $_POST['tenSanPham'];
    $sp->GiaSanPham     = $_POST['giaSanPham'];
    $sp->MaHangSanXuat  = $_POST['hangSanXuat'];
    $sp->SoLuongTon     = $_POST['soLuong'];
    $sp->NgayNhap       = date("Y/m/d");
    $sp->MoTa           = $_POST['moTa'];
    $sp->HinhURL        = UploadHinhAnh();
    $sp->MaLoaiSanPham  = $_POST['loaiSanPham'];
    $sp_BUS = new SanPham_BUS();
    $result = $sp_BUS->ThemSanPham($sp);

    ///////////////////////////////upload hình ảnh sản phẩm//////////////////////////////
function UploadHinhAnh()
{
    //sử dụng move_upload_file để upload tập tin $fileName vào vị trí $destination
    $fileUpload = $_FILES['file-upload'];


    if ($fileUpload['name'] != null) {
        $filename = $fileUpload['tmp_name'];
        //random tên file
        $random = RandomString(6);//random 6 ký tự
        //chỉ cho phép upload file có size từ 50kB - 5MB
        $flagsize = CheckSize($fileUpload['size'], 5 * 1024, 5 * 1024 * 1024);

        //chỉ cho phép upload file định dạng hình ảnh jpg, png, JPEG
        $flagextension = CheckExtension($fileUpload['name'], array('jpg', 'png', 'JPEG'));

        $tenHinh = null;

        if ($flagsize == true && $flagextension == true) {

            $tenHinh = $random . $fileUpload['name'];

            $destination = __DIR__ . '/uploads/' . $tenHinh;//chuỗi random + tên file để khi upload không bị trùng tên(cơ hội bị trùng tên rất ít)

            move_uploaded_file($filename, $destination);
        }

        return $tenHinh;
    }
}
//random string
    function RandomString($length = 5){
        $arrCharacter = array_merge(range('A','Z'), range('a', 'z'), range(0,9));
        $arrCharacter = implode($arrCharacter, '');
        $arrCharacter = str_shuffle($arrCharacter);

        $result = substr($arrCharacter, 0, $length);
        return $result;
    }
//checksize của file, check định dạng file
    function CheckSize($size, $min, $max){
        $flag = false;
        if($size >= $min && $size <= $max) $flag = true;
        return $flag;
    }

    function CheckExtension($fileName, $arrExtension){
        $ext = pathinfo($fileName, PATHINFO_EXTENSION);
        $flag = false;
        if(in_array(strtolower($ext), $arrExtension)==true) $flag = true;
        return $flag;
    }