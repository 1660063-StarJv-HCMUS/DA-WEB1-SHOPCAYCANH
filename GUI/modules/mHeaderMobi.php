<div class="mobi-header">
    <a href="index.php?a=0">
        <img src="GUI/images/logo-header.png" />
    </a>
    <div id="search" >
    <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default pt-0" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-search"></i>
                            </button>                       
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form" type="post">
                                    <div class="from-group">
                                        <h6>Tìm kiếm:</h6>
                                        <div class="price col-12 p-0">
                                            <input class="form-control" type="text" min=0 name="minPrice">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h6 for="filter">Loại cây</h6>
                                        <select class="form-control" name="LoaiCay">
                                            <option value="" selected>Tất cả</option>
                                            <option value="1">Cây tiểu cảnh</option>
                                            <option value="2">Sen đá</option>
                                            <option value="3">Xương rồng</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h6 for="filter">Hãng</h6>
                                        <select class="form-control" name = "XuatXu">
                                            <option value="" selected>Tất cả</option>
                                            <option value="1">cayxinh.vn</option>
                                            <option value="2">thienduongcayxanh.com</option>
                                            <!-- <option value="3">Thái Lan</option> -->
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <div class="price col-6 pl-0">
                                            <h6>Giá từ:</h6>
                                            <input class="form-control" type="number" min=0 name="minPrice">
                                        </div>
                                        <div class="price col-6 pr-0">
                                            <h6>Đến:</h6>
                                            <input class="form-control" type="number" min=0 name="maxPrice">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn" id="btn-search"><i style="color:#FFF"class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>            
    </div>
    <nav class="navbar navbar-dark" style="text-align: right;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentNV"
            aria-controls="navbarSupportedContentNV" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContentNV">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?a=0">Trang chủ <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNV" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Cây
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownNV">
                        <a class="dropdown-item" href="index.php?a=3">Xương rồng</a>
                        <a class="dropdown-item" href="index.php?a=2">Sen đá</a>
                        <a class="dropdown-item" href="index.php?a=1">Tiểu cảnh</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNV" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Hãng
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownNV">
                        <a class="dropdown-item" href="index.php?a=3">CayXinh.vn</a>
                        <a class="dropdown-item" href="index.php?a=2">Sen đá</a>
                        <a class="dropdown-item" href="index.php?a=1">Tiểu cảnh</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll-bottom" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll-bottom" href="#">Liên hệ</a>
                </li>

<?php
    if ($user) {
?>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNV" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span>Xin chào, <?php echo $user; ?></span>
                        </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownNV">
<?php
    if ($admin) {
?>
                        <a class="dropdown-item" href="admin/">Admin</a>
<?php
    }
?>
                        <a class="dropdown-item" href="index.php?a=6">Thông tin tài khoản</a>
                        <a class="dropdown-item" href="index.php?a=7">Kiểm tra đơn hàng</a>
                        <a class="dropdown-item" href="#" id="logout">Đăng xuất</a>
                    </div>
                </li>
<?php
}
else {
?>
    <li class="nav-item">
        <div class="nav-link">
            <a role="button" data-toggle="modal" data-target="#Modal-form" onclick="login()">Đăng nhập</a>
                &nbsp;
                |
                &nbsp;
            <a role="button" data-toggle="modal" data-target="#Modal-form" onclick="registered()">Đăng ký</a>
        </div>
    </li>
<?php
}
?>
            </ul>
        </div>
    </nav>
</div>
