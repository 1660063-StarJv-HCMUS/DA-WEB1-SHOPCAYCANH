<div class="mobi-header">
        <a href="index.php?a=0">
            <img src="GUI/images/logo-header.png" />
        </a>
        <form class="form-inline my-2 my-lg-0 mt-3">
            <input class="form-control mr-sm-2 col-12" style="width:100%;" type="search" placeholder="Search"
                aria-label="Search">
            <div class="input-group-btn">
                <div class="btn-group" role="group">
                    <div class="dropdown dropdown-lg">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                            aria-expanded="false"><span class="caret"></span></button>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <h6 for="filter">Loại cây</h6>
                                    <select class="form-control">
                                        <option value="0" selected>Tất cả</option>
                                        <option value="1">Cây tiểu cảnh</option>
                                        <option value="2">Cây xương rồng</option>
                                        <option value="3">Cây phong thủy</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h6 for="filter">Xuất xứ</h6>
                                    <select class="form-control">
                                        <option value="0" selected>Tất cả</option>
                                        <option value="1">Việt Nam</option>
                                        <option value="2">Trung Quốc</option>
                                        <option value="3">Thái Lan</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <div class="price col-6 pl-0">
                                        <h6>Giá từ:</h6>
                                        <input class="form-control" type="number">
                                    </div>
                                    <div class="price col-6 pr-0">
                                        <h6>Đến:</h6>
                                        <input class="form-control" type="number">
                                    </div>
                                </div>
                                <button type="submit" class="btn" id="btn-search"><i style="color:#FFF" class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
                        Sản phẩm
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownNV">
                        <a class="dropdown-item" href="index.php?a=3">Xương rồng</a>
                        <a class="dropdown-item" href="index.php?a=2">Sen đá</a>
                        <a class="dropdown-item" href="index.php?a=1">Tiểu cảnh</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog cây cảnh</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="scroll-bottom">Liên hệ</a>
                </li>

<?php
    if ($user) {
?>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNV" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Xin chào, Hữu Dũng
                        </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownNV">
<?php
    if ($admin) {
?>
                        <a class="dropdown-item" href="admin/">Admin</a>
<?php
    }
?>
                        <a class="dropdown-item" href="#">Thông tin tài khoản</a>
                        <a class="dropdown-item" href="#">Lịch sử đơn hàng</a>
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
