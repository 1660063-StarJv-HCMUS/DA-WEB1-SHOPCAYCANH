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

        case 2:
            include_once __DIR__.'/../../BUS/TaiKhoan/Them.php';
            break;
        case 3:
             include_once  __DIR__.'/../../BUS/LoaiSanPham/Them.php';
            break;
        case 4:
            include_once __DIR__.'/../../BUS/HangSanPham/Them.php';
            break;
        case 5:
            include_once __DIR__.'/../../BUS/SanPham/Them.php';
            break;

        default:
            //include 'pError.php';
    }
?>