<ul>
    <li><a href="index.php?a=1"><i class="fa fa-chart-line"></i> Dashboard</a></li>
    <li><a href="index.php?a=2"><i class="fa fa-users"></i> Danh sách tài khoản</a></li>
    <li><a href="index.php?a=3"><i class="fa fa-clipboard-list"></i> Danh sách loại sản phẩm</a></li>
    <li><a href="index.php?a=4"><i class="fa fa-building"></i> Danh sách hãng sản phẩm</a></li>
    <li><a href="index.php?a=5"><i class="fas fa-gift"></i> Danh sách sản phẩm</a></li>
    <li><a href="index.php?a=6"><i class="fa fa-cart-arrow-down"></i> Danh sách đơn hàng</a></li>
</ul>

<?php 
	$a = 1;
	if(isset($_GET["a"])){
        $a = $_GET["a"];
    }

    switch($a){
        case 1:
            //include 'pDashboard.php';
            break;
        case 2:
            //include 'pDanhSachTaiKhoan.php';
            
             echo '

            	<h3>Thêm tài khoản mới</h3>
            	<form action="./BUS/TaiKhoan_BUS.php" method="post" accept-charset="utf-8">
		            <div class="form-group">
		                <span>Tên hiển thị </span>
		                <input type="text" class="form-control" id="tenHienThi" placeholder="Tên tên hiển thị">
		            </div>
		        
		            <div class="form-group">
		                <span>Địa chỉ </span>
		                <input type="text" class="form-control" id="diaChi" placeholder="Địa chỉ">
		            </div>
		            <div class="form-group">
		                <span>Số điện thoại </span>
		                <input type="text" class="form-control" id="soDienThoai" placeholder="Số điện thoại">
		            </div>
		            <div class="form-group">
		                <span>Email </span>
		                <input type="text" class="form-control" id="email" placeholder="Email">
		            </div>
		            <div class="form-group">
		                <span>Tên đăng nhập </span>
		                <input type="text" class="form-control" id="tenDangNhap" placeholder="Tên đăng nhập">
		            </div>

		            <div class="form-group">
		                <span>Mật khẩu </span>
		                <input type="text" class="form-control" id="matKhau" placeholder="Mật khẩu">
		            </div>

		            <div class="form-group">
		                <span>Loại tài khoản </span>
		                <input type="text" class="form-control" id="loaiTaiKhoan" placeholder="Loại tài khoản(Admin hoặc thường)">
		            </div>

		            <input type="submit" name="Thêm" id="themSanPham">
        		</form>
            ';
            break;
        case 3:
            //include 'pDanhSachLoaiSanPham.php';
             echo '

            	<h3>Thêm loại sản phẩm mới</h3>
            	<form action="./BUS/LoaiSanPham_BUS.php" method="post" accept-charset="utf-8">
		            <div class="form-group">
		                <span>Tên loại sản phẩm </span>
		                <input type="text" class="form-control" id="tenSanPham" placeholder="Tên sản phẩm">
		            </div>
		            
		            <input type="submit" name="Thêm" id="themLoaiSanPham">
        		</form>
            ';
            break;
        case 4:
            //include 'pDanhSachHangSanPham.php';
            echo '

            	<h3>Thêm hãng sản phẩm mới</h3>
            	<form action="./BUS/HangSanXuat_BUS.php" method="post" accept-charset="utf-8">
		            <div class="form-group">
		                <span>Tên hãng sản phẩm </span>
		                <input type="text" class="form-control" id="tenHangSanPham" placeholder="Tên hãng sản phẩm">
		            </div>
		            <div class="form-group">
		                <span>Logo hãng </span>
		                <form action="UploadFile.php" method="post" name="main-form" id="main-form" enctype="multipart/form-data"><!--bắt buộc phải có enctype-->
		                    <input type="file" name="file-upload"/>
		                </form>
		            </div>

		            <input type="submit" name="Thêm" id="themHangSanPham">
        		</form>
            ';
            break;
        case 5:
            //include 'pDanhSachSanPham.php';
            echo '

            	<h3>Thêm sản phẩm mới</h3>
            	<form action="./BUS/SanPham_BUS.php" method="post" accept-charset="utf-8">
		            <div class="form-group">
		                <span>Tên sản phẩm </span>
		                <input type="text" class="form-control" id="tenSanPham" placeholder="Tên sản phẩm">
		            </div>
		            <div class="form-group">
		                <span>Hình ảnh sản phẩm </span>
		                <form action="UploadFile.php" method="post" name="main-form" id="main-form" enctype="multipart/form-data"><!--bắt buộc phải có enctype-->
		                    <input type="file" name="file-upload"/>
		                </form>
		            </div>
		            <div class="form-group">
		                <span>Giá sản phẩm </span>
		                <input type="text" class="form-control" id="giaSanPham" placeholder="Giá sản phẩm">
		            </div>
		            <div class="form-group">
		                <span>Hãng sản xuất </span>
		                <input type="text" class="form-control" id="hangSanXuat" placeholder="Hãng sản xuất">
		            </div>
		            <div class="form-group">
		                <span>Ngày nhập </span>
		                <input type="text" class="form-control" id="ngayNhap" placeholder="Ngày nhập">
		            </div>
		            <div class="form-group">
		                <span>Mô tả </span>
		                <input type="text" class="form-control" id="moTa" placeholder="Mô tả">
		            </div>

		            <input type="submit" name="Thêm" id="themSanPham">
        		</form>
            ';
            break;
        case 6:
            //include 'pQuanLyDonHang.php';
            break;
        default:
            //include 'pError.php';
    }
?>