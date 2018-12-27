<?php
    include_once 'BUS/HangSanXuat_BUS.php';
    $XuatXu = new HangSanXuat_BUS();
    $ds = $XuatXu->DSXuatXu();
    foreach ($ds as $xuatXu) {
        echo '                        
            <li>
                <a href="index.php?b='.$xuatXu->MaHangSanXuat.'">'.$xuatXu->TenHangSanxuat.'</a>
            </li> ';
    }
?>