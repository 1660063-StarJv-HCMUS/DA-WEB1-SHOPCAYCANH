<?php
include_once __DIR__.'/../../BUS/HangSanXuat_BUS.php';
include_once __DIR__.'/../../DTO/HangSanXuat_DTO.php';
?>
<h2>Danh sách sản phẩm</h2>

<table class="table table-hover">
    <thead>
    <tr>
        <th>Tên hãng</th>
        <th class="HinhSP">Logo hãng</th>
        <th>chức năng</th>
    </tr>
    </thead>
    <tbody>
    <?php

    $loadHang = new HangSanXuat_BUS();

    $result = $loadHang->LoadTatCaCacHangSanXuat();

    foreach ($result as $loadHang){
        $url = '../GUI/images/'.$loadHang->LogoURL;
        echo '
            <tr>
                <td><a>'.$loadHang->TenHangSanXuat.'</a></td>
                <td><img src="'.$url.'" alt="Card image cap"></td>
                <td>
                    <a href="#" title="">Chỉnh sửa</a>
                    |
                    <a href="#" title="">Xóa</a>
                </td>
            </tr>
            ';
    }
    ?>
    </tbody>
</table>