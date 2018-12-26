<div class="row">
    <a class="col-3 text-center logo" href="index.php?a=0">
        <img src="GUI/images/logo-header.png" />
    </a>
    <div class="col-6">
        <nav class="menutop">
            <ul>
                <li>
                    <a href="index.php?a=0">Trang chủ</a>
                </li>
                <li>
                    <a href="index.php?a=1">Tiểu cảnh</a>                  
                </li>
                <li>
                    <a href="index.php?a=3">Xương rồng</a>
                </li>
                <li>
                    <a href="index.php?a=2">Sen đá</a>
                </li>
                <li>
                    <a href="#" class="scroll-bottom">Liên hệ</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="col-3">
        <div class="icon-header">
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
                                        <h6 for="filter">Xuất xứ</h6>
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
            <span class="linedivide"></span>
            <div id="cart-icon" style="float: right; cursor: pointer;">
                <span class="my-cart-icon" data-toggle="modal" data-target="#my-cart-modals">
                    <i class="fa fa-shopping-cart"></i>
                </span>
            </div>
        </div>
    </div>
</div>
