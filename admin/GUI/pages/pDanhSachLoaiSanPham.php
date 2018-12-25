<?php
include_once __DIR__.'/../../BUS/LoaiSanPham_BUS.php';
?>
<h2>Danh sách loại sản phẩm</h2>

<table class="table table-hover">
    <thead>
    <tr>
        <th></th>
        <th>Tên loại sản phẩm</th>
        <th>chức năng</th>
    </tr>
    </thead>
    <tbody>
    <?php

    $loadLoai = new LoaiSanPham_BUS();

    $result = $loadLoai->LoadTatCaCacLoaiSanPham();

    foreach ($result as $loadLoai){
        echo '
            <tr>
                <td><input type="checkbox"></td>
                <td><a>'.$loadLoai->TenLoaiSanPham.'</a></td>
                <td>
                    <a href="#" title="">Chỉnh sửa</a>
                </td>
            </tr>
            ';
    }
    ?>
    </tbody>
</table>