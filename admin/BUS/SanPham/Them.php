<div class="dropdown themmoi">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thêm sản phẩm mới</button>
    <form id="form-them-san-pham" method="post" name="main-form" id="main-form" enctype="multipart/form-data" accept-charset="utf-8" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <div class="form-group">
            <span>Tên sản phẩm </span>
            <input type="text" name="tenSanPham" class="form-control" id="tenSanPham" placeholder="Tên sản phẩm">
        </div>
        <div class="form-group">
            <span>Hình ảnh sản phẩm </span>
            <input type="file" name="file-upload"/>
        </div>
        <div class="form-group">
            <span>Hãng sản xuất </span>
            <input type="text" name="hangSanXuat" class="form-control" id="hangSanXuat" placeholder="Hãng sản xuất">
        </div>
        <div class="form-group">
            <span>Giá sản phẩm </span>
            <input type="text" name="giaSanPham" class="form-control" id="giaSanPham" placeholder="Giá sản phẩm">
        </div>
        <div class="form-group">
            <span>Số lượng</span>
            <input type="text" name="soLuong" class="form-control" id="soLuong" placeholder="Số lượng">
        </div>
        <div class="form-group">
            <span>Ngày nhập </span>
            <input type="text" name="ngayNhap" class="form-control" id="ngayNhap" placeholder="Ngày nhập">
        </div>
        <div class="form-group">
            <span>Mô tả </span>
            <input type="text" name="moTa" class="form-control" id="moTa" placeholder="Mô tả">
        </div>

        <button type="submit" name="Thêm" id="themSanPham" class="btn btn-success">Thêm sản phẩm</button>
    </form>
</div>

<?php
/**
 * Created by PhpStorm.
 * User: phuon
 *
 */

include_once __DIR__.'/../../DAO/SanPham_DAO.php';

include_once __DIR__.'/../../DTO/SanPham_DTO.php';

include_once __DIR__.'/../../DAO/HangSanXuat_DAO.php';

include_once __DIR__.'/../../DTO/HangSanXuat_DTO.php';

///////////////////////Thêm sản phẩm mới////////////////////////////////////////

    function ThemSanPham(){
        $sp = new SanPham();
        $sp->TenSanPham     = $_POST['tenSanPham'];
        $sp->HinhURL        = UpLoadHinh();
        $sp->GiaSanPham     = $_POST['giaSanPham'];
        $sp->MaHangSanXuat  = MaNhaSanXuat($_POST['hangSanXuat']);
        $sp->soLuongTon     = $_POST['soLuong'];
        $sp->NgayNhap       = $_POST['ngayNhap'];
        $sp->MoTa           = $_POST['moTa'];

        $sp_DAO = new SanPham_DAO();
        $result = $sp_DAO->ThemSanPham($sp);

        if($result == true)
            return true;//nếu thành công trả về kết quả true
        return false;//nếu không thành công trả về kết quả false
    }

    //////////////////////////////Xử lý tên nhà sản xuất/////////////////////////////////

    function MaNhaSanXuat($tenNhaSX){
        $hangSX =new HangSanXuat();
        $result = new HangSanXuat_DAO();
        $hangSX = $result->LoadHangByTen();
        return $hangSX->MaHangSanXuat;
    }

    ///////////////////////////////upload hình ảnh sản phẩm//////////////////////////////


    function UpLoadHinh(){
        //sử dụng move_upload_file để upload tập tin $fileName vào vị trí $destination
        $fileUpload = $_FILES['file-upload'];

        if($fileUpload['name']!= null){
            $filename   = $fileUpload['tmp_name'];
            //random tên file
            $random     = RandomString(6);//random 6 ký tự
            //chỉ cho phép upload file có size từ 50kB - 5MB
            $flagsize   = CheckSize($fileUpload['size'], 50*1024, 5*1024*1024);
            //chỉ cho phép upload file định dạng hình ảnh jpg, png, JPEG
            $flagextension = CheckExtension($fileUpload['name'], array('jpg', 'png', 'JPEG'));

            if($flagsize == true && $flagextension == true){
                $destination = __DIR__.'/../../GUI/images/'.$random.$fileUpload['name'];//chuỗi random + tên file để khi upload không bị trùng tên(cơ hội bị trùng tên rất ít)

                move_uploaded_file($filename,$destination);

                return $destination;
            }
            else{
                return null;
            }

            //ngoài move upload file ta có thể sử dụng hàm copy($fliename, $destination)-- nó cũng có chức năng tương tự
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
?>