<?php
include_once __DIR__.'/../../BUS/HangSanXuat_BUS.php';
include_once __DIR__.'/../../DTO/HangSanXuat_DTO.php';
?>
<h2>Danh sách hãng sản phẩm</h2>

<table class="table table-hover">
    <thead>
    <tr>
        <th></th>
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
                <td><input type="checkbox"/></td>
                <td><a>'.$loadHang->TenHangSanXuat.'</a></td>
                <td><img src="'.$url.'" alt="Card image cap" class="thumbnail img-responsive"></td>
                <td>
                    <a href="#" title="">Chỉnh sửa</a>
                </td>
            </tr>
            ';
    }
    ?>
    </tbody>
</table>