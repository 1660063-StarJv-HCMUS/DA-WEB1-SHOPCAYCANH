<?php
    include_once __DIR__.'/../../BUS/SanPham_BUS.php';
    include_once __DIR__.'/../../DTO/SanPham_DTO.php';
?>
<!----<div class="container">-->
    <h2>Danh sách sản phẩm</h2>

    <p>
        <form method="POST" id="formSearchPost" onsubmit="return false;">
            <div class="input-group">
                <input type="text" class="form-control" id="kw_search_post" placeholder="Nhập tên sản phẩm...">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                </span>
            </div>
        </form>
    </p>
<div class="table-responsive">
    <table class="table table-hover table table-striped list">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col" class="HinhSP">Hình ảnh</th>
            <th scope="col">Hãng sản xuất</th>
            <th scope="col">Giá(VNĐ)</th>
            <th scope="col">Lượt xem</th>
            <th scope="col">Số lượng tồn</th>
            <th scope="col">Số lượng bán</th>
            <th scope="col">Ngày nhập</th>
            <th scope="col">chức năng</th>
        </tr>
        </thead>
        <tbody>
            
        <?php
        include_once __DIR__.'/../../BUS/HangSanXuat_BUS.php';
        $loadSP = new SanPham_BUS();
        $loadHang = new HangSanXuat_BUS();

        $tmp = $loadHang->LoadTatCaCacHangSanXuat();

        //var_dump($loadHang->LoadTatCaCacHangSanXuat());

        $result = $loadSP->LoadTatCaSanPham();

        foreach ($result as $loadSP){
            $url = $_DOMAIN.'/GUI/modules/upload/'.$loadSP->HinhURL;
            echo '
            <tr>
                <td>
                
                <form method="post" name="main-form" id="main-form" enctype="multipart/form-data" accept-charset="utf-8">
                    <input type="hidden" name="maSanPhamDel" id="maSanPhamDel" value="'.$loadSP->MaSanPham.'">
                    <button id="Xoa" type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                </form>
                </td>
                <td><a>'.$loadSP->TenSanPham.'</a></td>
                <td><img src="'.$url.'" alt="Card image cap" class="thumbnail img-responsive"></td>
                <td><a></a></td>
                <td>'.$loadSP->GiaSanPham.'</td>
                <td>'.$loadSP->SoLuotXem.'</td>
                <td>'.$loadSP->SoLuongTon.'</td>
                <td>'.$loadSP->SoLuongBan.'</td>
                <td>'.$loadSP->NgayNhap.'</td>
                <td>
                    <div class="dropdown chinhsua">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chỉnh sửa</button>
                        <form id="form-chinh-sua-san-pham" method="post" name="main-form" id="main-form" enctype="multipart/form-data" accept-charset="utf-8" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="form-group">
                                <input type="hidden" name="maSanPhamEdit" id="maSanPhamEdit" value="'.$loadSP->MaSanPham.'">
                            </div>
                            <div class="form-group">
                                <span>Tên sản phẩm</span>
                                <input type="text" name="tenSanPhamEdit" class="form-control" id="tenHangSanPhamEdit" value="'.$loadSP->TenSanPham.'">
                            </div>
                            <div class="form-group">
                                <span>Hình ảnh sản phẩm</span>
                                <input type="file" name="file-upload" id="file-upload" />
                            </div>
                            
                            <div class="form-group">
                                <span>Giá</span>
                                <input type="text" name="giaSanPhamEdit" class="form-control" id="giaSanPhamEdit" value="'.$loadSP->GiaSanPham.'"> 
                            </div>
                            <div class="form-group">
                                <span>Số lượng tồn</span>
                                <input type="text" name="soLuongTonEdit" class="form-control" id="soLuongTonEdit" value="'.$loadSP->SoLuongTon.'">
                            </div>
                            
                            <div class="form-group">
                                <span>Ngày nhập</span>
                                <input type="text" name="ngayNhapEdit" class="form-control" id="ngayNhapEdit" value="'.$loadSP->NgayNhap.'">
                            </div>
                            <button type="submit" id="chinhSua" class="btn btn-success">Chỉnh sửa</button>
                        </form>
                    </div>
                </td>
            </tr>
            ';
        }
        ?>
        </tbody>
    </table>
</div>

