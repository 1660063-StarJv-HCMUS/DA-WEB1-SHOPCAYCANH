<?php
/**
 * Created by PhpStorm.
 * User: phuon
 *
 */

//echo '<pre>';
//print_r($_FILES);
//echo '</pre>';
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
                echo 'upload không thành công';
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

