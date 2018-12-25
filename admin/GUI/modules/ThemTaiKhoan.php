<div class="dropdown themmoi">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thêm tài khoản mới</button>
    <form id="form-them-tai-khoan" accept-charset="utf-8" class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
        <div class="form-group">
            <span>Tên hiển thị </span>
            <input type="text" name="tenHienThi" class="form-control" id="tenHienThi" placeholder="Tên tên hiển thị">
        </div>

        <div class="form-group">
            <span>Địa chỉ </span>
            <input type="text" name="diaChi" class="form-control" id="diaChi" placeholder="Địa chỉ">
        </div>
        <div class="form-group">
            <span>Số điện thoại </span>
            <input type="text" name="dienThoai" class="form-control" id="soDienThoai" placeholder="Số điện thoại">
        </div>
        <div class="form-group">
            <span>Email </span>
            <input type="text" name="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <span>Tên đăng nhập </span>
            <input type="text" name="tenDangNhap" class="form-control" id="tenDangNhap" placeholder="Tên đăng nhập">
        </div>

        <div class="form-group">
            <span>Mật khẩu </span>
            <input type="text" name="matKhau" class="form-control" id="matKhau" placeholder="Mật khẩu">
        </div>

        <div class="form-group">
            <span>Loại tài khoản </span>
            <input type="text" name="loaiTaiKhoan" class="form-control" id="loaiTaiKhoan" placeholder="Loại tài khoản(Admin hoặc thường)">
        </div>
        <div class="alert alert-danger invisible mt-2 mb-0"></div>
        <button type="submit" id="themTaiKhoan" class="btn btn-success">Thêm tài khoản</button>
    </form>
</div>


<?php
    //include_once __DIR__.'/../../BUS/TaiKhoan_BUS.php';
    //include_once __DIR__.'/../../DTO/TaiKhoan_DTO.php';
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
    /*$taiKhoan = new TaiKhoan();

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
    */
?>
