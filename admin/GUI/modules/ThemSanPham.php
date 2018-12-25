<div class="dropdown themmoi">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thêm sản phẩm mới</button>
    <form action="http://localhost:8080/web1/DA-WEB1-SHOPCAYCANH/admin/BUS/SanPham/Them.php" id="form-them-san-pham" method="post" name="main-form" id="main-form" enctype="multipart/form-data" accept-charset="utf-8" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <div class="form-group">
            <span>Tên sản phẩm </span>
            <input type="text" name="tenSanPham" class="form-control" id="tenSanPham" placeholder="Tên sản phẩm">
        </div>
        <div class="form-group">
            <span>Hình ảnh sản phẩm </span>
            <input type="file" name="file-upload" id="file-upload" />
        </div>

        <div class="form-group">
            <span>Hãng sản xuất </span>
            <select class="custom-select" name="hangSanXuat">

                <?php
                include_once __DIR__.'/../../BUS/HangSanXuat_BUS.php';
                include_once __DIR__.'/../../DTO/HangSanXuat_DTO.php';

                $loadHang = new HangSanXuat_BUS();

                $result = $loadHang->LoadTatCaCacHangSanXuat();

                foreach ($result as $loadHang){
                    echo '
                        <option value="'.$loadHang->MaHangSanXuat.'">'.$loadHang->TenHangSanXuat.'</option>
                    ';
                }
                ?>

            </select>
        </div>

        <div class="form-group">
            <span>Loại sản phẩm </span>
            <select class="custom-select" name="loaiSanPham">

                <?php
                include_once __DIR__.'/../../BUS/LoaiSanPham_BUS.php';


                $loadLoai = new LoaiSanPham_BUS();

                $result = $loadLoai->LoadTatCaCacLoaiSanPham();

                foreach ($result as $loadLoai){
                    echo '
                        <option value="'.$loadLoai->MaLoaiSanPham.'">'.$loadLoai->TenLoaiSanPham.'</option>
                    ';
                }
                ?>

            </select>
        </div>

        <div class="form-group">
            <span>Giá sản phẩm </span>
            <input type="text" name="giaSanPham" class="form-control" id="giaSanPham" placeholder="Giá sản phẩm">
        </div>

        <div class="form-group">
            <span>Số lượng</span>
            <input type="text" name="soLuong" class="form-control" id="soLuong" placeholder="Số lượng">
        </div>
        <div class="form-group">
            <span>Mô tả </span>
            <input type="text" name="moTa" class="form-control" id="moTa" placeholder="Mô tả">
        </div>

        <button type="submit" id="themSanPham" class="btn btn-success">Thêm sản phẩm</button>
    </form>
</div>