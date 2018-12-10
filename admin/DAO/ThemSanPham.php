<?php

try{
    include './DB.php';
    include '../DTO/SanPham.php';
    $truyvan = 'INSERT INTO sanpham (TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, MoTa, MaLoaiSanPham, MaHangSanXuat) VALUES ('Sen đá mặt trời đỏ','75000','2018-12-01', 8, '200', \'Hút tia điện tử từ máy tính và điện thoại, bảo vệ sức khỏe con người.\r\nLàm quà tặng, tốt cho phong thủy của gia chủ.\r\nCây Ngọc Bích mang lại may mắn, tiền tài và thịnh vượng cho chủ nhân.\',)'
    $ketNoiDL = new DB();

    try {
        $ketNoiDL->KetNoiCSDL();
        try{
            $ketNoiDL->Insert($ketNoiDL->ketNoi, $truyvan);
        }
        catch (Exception $e){
            echo $e;
        }
        $ketNoiDL->NgatKetNoiDB();
    }
    catch (Exception $e){
        echo $e;
    }
}
catch (Exception $e){
    echo $e;
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <script type="text/javascript">
        function CheckData(){
            frm=document.form1;
            if(frm.txtTen.value.length==0)
            {
                alert("Tên không hợp lệ!");
                return false;
            }
            if(frm.texttacgia.value.length==0)
            {
                alert("Tác giả không hợp lệ!");
                return false;
            }
            if(frm.textgia.value.length==0)
            {
                alert("Giá không hợp lệ!");
                return false;
            }
            if(frm.select.value=="Chon NXB")
            {
                alert("Nha xuat ban  không hợp lệ!");
                return false;
            }
            if(frm.txtanhbia.value.length==0)
            {
                alert("anh bia không hợp lệ!");
                return false;
            }
            if(frm.txtmota.value.length==0)
            {
                alert("Mô tả không hợp lệ!");
                return false;
            }


            return true;
        }
    </script>
</head>

<body>
<?php
include_once("Dataprovider.php");
$flag=false;
//Chức năng xóa
if(isset($_POST["Xóa"]))
{
    $masach=$_POST["hiddenField"];
    $sql="delete from sach where MaSach=" .$masach;
    Dataprovider::execQuery($sql);
}
//Chức năng sửa

if(isset($_POST["Sửa"]))
{
    $masach=$_POST["hiddenField"];
    $ten=$_POST["txtTen"];
    $tacgia=$_POST["texttacgia"];
    $gia=$_POST["textgia"];
    $mota=$_POST["txtmota"];
    $nxb=$_POST["select"];
    $hinhanh=$_POST["txtanhbia"];
    $sql="update sach set TenSach='".$ten."',TacGia='".$tacgia."',Gia='".$gia."',Cover='".$hinhanh."',MoTa='".$mota."' where MaSach=".$masach."";
    Dataprovider::execQuery($sql);
}
//Chức năng chọn
if(isset($_GET["masach"]))
{
    $flag=true;
    $masach=$_GET["masach"];
    $sql="select * from nxb NhaXB inner join sach S on NhaXB.MaNXB =S.MaNXB where MaSach=" .$masach;
    $list=Dataprovider::execQuery($sql);
    $row=mysqli_fetch_array($list);
    $sach_ten=$row["TenSach"];
    $sach_tacgia=$row["TacGia"];
    $sach_gia=$row["Gia"];
    $sach_tennxb=$row["TenNXB"];
    $sach_hinhanh=$row["Cover"];
    $sach_mota=$row["MoTa"];
    $sach_masach=$row["MaSach"];
}
//Chức năng Thêm
if(isset($_POST["Thêm"]))
{
    $ten=$_POST["txtTen"];
    $tacgia=$_POST["texttacgia"];
    $gia=$_POST["textgia"];
    $mota=$_POST["txtmota"];
    $nxb=$_POST["select"];
    $hinhanh=$_POST["txtanhbia"];
    $sql="insert into sach(TenSach,TacGia,Gia,Cover,MoTa,MaNXB) values('".$ten."','".$tacgia."','".$gia."','".$hinhanh."','".$mota."','".$nxb."')";
    Dataprovider::execQuery($sql);
}
?>
<table width="857" border="1">
    <tr>s
        <td width="108">Mã Sách</td>
        <td width="178" align="center">Tên Sách</td>
        <td width="152"><p>Tác Giả</p></td>
        <td width="111">Giá</td>
        <td width="162">Nhà Xuất Bản</td>
        <td width="106">Chọn</td>
    </tr>
    <?php
    $sql="select * from nxb NhaXB inner join sach S on NhaXB.MaNXB =S.MaNXB";
    $list=Dataprovider::execQuery($sql);
    while($row = mysqli_fetch_array($list))
    {
        ?>
        <tr>
            <td><?php echo $row["MaSach"];?></td>
            <td><?php echo $row["TenSach"];?></td>
            <td><?php echo $row["TacGia"];?></td>
            <td><?php echo $row["Gia"];?></td>
            <td><?php echo $row["TenNXB"];?></td>
            <td><a href="SACH.php?masach=<?php echo $row["MaSach"];?>">Chọn</a></td>
        </tr>
        <?php
    }
    ?>
</table>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="sach.php" onsubmit="return CheckData();">
    <table width="479" border="1">
        <tr>
            <td height="39">&nbsp;</td>
            <td><input type="hidden" name="hiddenField" id="hiddenField"value="<?php if($flag) echo $sach_masach;?>" /></td>
        </tr>
        <tr>
            <td width="187" height="39">Tên Sách</td>
            <td width="276"><input type="text" name="txtTen" id="txtTen" value="<?php if($flag) echo $sach_ten;?>"/></td>
        </tr>
        <tr>
            <td height="44">Tác Giả</td>
            <td><input type="text" name="texttacgia" id="texttacgia"value="<?php if($flag) echo $sach_tacgia;?>" /></td>
        </tr>
        <tr>
            <td height="45">Giá </td>
            <td><input type="text" name="textgia" id="textgia" value="<?php if($flag) echo $sach_gia;?>" /></td>
        </tr>
        <tr>
            <td height="62">Nhà xuất bản</td>
            <td><select name="select" id="select">
                    <option>Chon NXB</option>
                    <?php
                    $sql="select * from nxb";
                    $list=Dataprovider::execQuery($sql);
                    while($row=mysqli_fetch_array($list))
                    {
                        ?>
                        <option <?php if($flag && $sach_tennxb==$row["TenNXB"]) echo "selected";?>  value="<?php echo $row["MaNXB"];?>"><?php echo $row["TenNXB"];?></option>
                        <?php
                    }
                    ?>
                </select></td>
        </tr>
        <tr>
            <td height="47">Ảnh Bìa</td>
            <td><input type="text" name="txtanhbia" id="txtanhbia" value="<?php if($flag) echo"Ảnh Bìa"?>"/><img width="100%" src="<?php if($flag) echo $sach_hinhanh;?>"></img></td>
        </tr>
        <tr>
            <td height="57">Mô tả</td>
            <td><input type="text" name="txtmota" id="txtmota" value="<?php if($flag) echo $sach_mota;?>"/></td>
        </tr>
        <tr>
            <td height="57">&nbsp;</td>
            <td>
                <?php if(!$flag)
                {?><input type="submit" name="Thêm" id="Thêm" value="Thêm" />
                <?php } else if($flag)
                {
                    ?>
                    <input type="submit" name="Xóa" id="Xóa" value="Xóa" />
                    <input type="submit" name="Sửa" id="Sửa" value="Sửa" />
                    <?php
                }
                ?>
            </td>
        </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</form>
</body>
</html>
