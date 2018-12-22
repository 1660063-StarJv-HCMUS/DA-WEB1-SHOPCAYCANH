<div class="container-fluid">
    <div class="header col-lg-12 col-md-12 col-sm-12">
        <a href="../" class="trangchu"><i class="fa fa-home"></i> Trở về trang mua sắm</a>
        <div class="thongtin dropdown-menu">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> thông tin
                <i class="fas fa-user-circle"></i>
                <i class="fas fa-sort-down"></i>
                <span class="caret"></span>
            </button>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fas fa-user"></i> Thông tin cá nhân</a></li>
                    <li><a href="#"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a></li>
                </ul>
        </div>
    </div>
    <div class="nav col-lg-3 col-md-3 col-sm-12">
        <?php
            include __DIR__.'/../modules/mMenu.php';
        ?>
    </div>
    <div class="content col-lg-9 col-md-9 col-sm-12">
        <?php
            $a = 1;
            if(isset($_GET["a"])){
                $a = $_GET["a"];
            }

            switch($a){
                case 1:
                    include 'pDashboard.php';
                    break;
                case 2:
                    include 'pDanhSachTaiKhoan.php';
                    break;
                case 3:
                    include 'pDanhSachLoaiSanPham.php';
                    break;
                case 4:
                    include 'pDanhSachHangSanPham.php';
                    break;
                case 5:
                    include 'pDanhSachSanPham.php';
                    break;
                case 6:
                    include 'pQuanLyDonHang.php';
                    break;
                default:
                    include 'pError.php';
            }
        ?>
    </div>
</div>