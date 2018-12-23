<div class="dropdown themmoi">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thêm hãng sản phẩm mới</button>
    <form id="form-them-hang-san-pham" method="post" name="main-form" id="main-form" enctype="multipart/form-data" accept-charset="utf-8" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <div class="form-group">
            <span>Tên hãng sản phẩm </span>
            <input type="text" class="form-control" id="tenHangSanPham" placeholder="Tên hãng sản phẩm">
        </div>
        <div class="form-group">
            <span>Logo hãng </span>
            <input type="file" name="file-upload" id="file-upload"/>
        </div>
        <button type="submit" name="Thêm" id="themHangSanPham" class="btn btn-success">Thêm hãng sản phẩm</button>
    </form>
</div>

<?php
/**
 * Created by PhpStorm.
 * User: phuon
 *
 */
?>