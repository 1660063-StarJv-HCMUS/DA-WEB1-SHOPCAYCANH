<?php
    /*include './DAO/DB.php';
    include './DTO/SanPham_DTO';

    $sql = 'SELECT TenSanPham, HinhURL FROM sanpham WHERE MaLoaiSanPham = 1';

    $db = new DB();

    $result = $db->ExcuteQuery($sql);

    $loadSP[] = '';

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            $sp = new SanPham();

            $sp->HinhURL = $row["HinhURL"];
            $sp->TenSanPham = $row["TenSanPham"];

            array_push($loadSP, $sp);

            echo'
            <div class="card border-secondary product">
            <img class="card-img-top" src="'.$row["HinhURL"].'" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" style="color:#056526; font-style: normal">'.$row["TenSanPham"].'</h5>
                <h6 class="card-subtitle mb-2 text-muted" style="font-size:0.9rem">Tiểu cảnh</h6>
                <div class="price-wrap h5">
                    <span>120.000 VNĐ</span> <del class="float-right" style="color: #999;">190.000 VNĐ</del>
                </div> <!-- price-wrap.// -->
                <a href="#" class="btn btn-primary float-right">XEM NHANH</a>
            </div>
        </div>
            ';
        }
    } else {
        echo "0 results";
    }
    */
    /*echo '
    <div class="card border-secondary product">
    <img class="card-img-top" src="'.$url.'" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title" style="color:#056526; font-style: normal">'.$tensanpham.'</h5>
        <h6 class="card-subtitle mb-2 text-muted" style="font-size:0.9rem">Tiểu cảnh</h6>
        <div class="price-wrap h5">
            <span>120.000 VNĐ</span> <del class="float-right" style="color: #999;">190.000 VNĐ</del>
        </div> <!-- price-wrap.// -->
        <a href="#" class="btn btn-primary float-right">XEM NHANH</a>
    </div>
</div>
    ';

*/

include_once __DIR__.'/../../BUS/SanPham_BUS.php';

$loadSP = new SanPham_BUS();

$result = $loadSP->LoadSanPhamByMaLoai(1);

foreach ($result as $loadSP) {
    echo'
            <div class="card border-secondary product">
            <img class="card-img-top" src="'.$loadSP->getHinhURL().'" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" style="color:#056526; font-style: normal">'.$loadSP->getTenSanPham().'</h5>
                <h6 class="card-subtitle mb-2 text-muted" style="font-size:0.9rem">Tiểu cảnh</h6>
                <div class="price-wrap h5">
                    <span>120.000 VNĐ</span> <del class="float-right" style="color: #999;">190.000 VNĐ</del>
                </div> <!-- price-wrap.// -->
                <a href="#" class="btn btn-primary float-right">XEM NHANH</a>
            </div>
        </div>
            ';
}
