<?php
    include_once __DIR__.'/../../BUS/SanPham_BUS.php';
    include_once __DIR__.'/../../DTO/SanPham_DTO.php';
?>
<div class="container">
    <h2>Danh sách sản phẩm</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Hãng sản xuất</th>
            <th>Giá</th>
            <th>Số lượt xem</th>
            <th>Số lượng tồn</th>
            <th>Số lượng bán</th>
            <th>Ngày nhập</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $a=1;
        if(isset($_GET["a"]))
        {
            $a = $_GET["a"];
        }
        $loadSP = new SanPham_BUS();

        $result = $loadSP->LoadSanPhamByMaLoai($a);

        foreach ($result as $loadSP){
            echo '
            <tr>
                <td><a>'.$loadSP->TenSanPham.'</a></td>
                <td><a>'.$loadSP->HinhURL.'</a></td>
                <td><a>'.$loadSP->HangSanXuat.'</a></td>
                <td>'.$loadSP->GiaSanPham.'</td>
                <td>'.$loadSP->SoLuotXem.'</td>
                <td>'.$loadSP->SoLuongTon.'</td>
                <td>'.$loadSP->SoLuongBan.'</td>
                <td>'.$loadSP->NgayNhap.'</td>
            </tr>
            ';
        }
        ?>
        </tbody>
    </table>
</div>