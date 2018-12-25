<?php
    include_once __DIR__.'/../../BUS/SanPham_BUS.php';
    include_once __DIR__.'/../../DTO/SanPham_DTO.php';
?>
<!----<div class="container">-->
    <h2>Danh sách sản phẩm</h2>
    
    <table class="table table-hover">
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
            $url = '../GUI/images/'.$loadSP->HinhURL;
            echo '
            <tr>
                <td><input type="checkbox"></td>
                <td><a>'.$loadSP->TenSanPham.'</a></td>
                <td><img src="'.$url.'" alt="Card image cap" class="thumbnail"></td>
                <td><a></a></td>
                <td>'.$loadSP->GiaSanPham.'</td>
                <td>'.$loadSP->SoLuotXem.'</td>
                <td>'.$loadSP->SoLuongTon.'</td>
                <td>'.$loadSP->SoLuongBan.'</td>
                <td>'.$loadSP->NgayNhap.'</td>
                <td>
                    <a href="#" title="">Chỉnh sửa</a>
                </td>
            </tr>
            ';
        }
        ?>
        </tbody>
    </table>
<!--</div>-->