<?php

include_once __DIR__.'/../../BUS/SanPham_BUS.php';
$a=1;
if(isset($_GET["a"]))
{
    $a = $_GET["a"];
}
$loadSP = new SanPham_BUS();
$result = $loadSP->LoadSanPhamByMaLoai($a);

foreach ($result as $loadSP) {
    echo'
            <div class="card border-secondary product">
            <img class="card-img-top" src="GUI/images/'.$loadSP->getHinhURL().'" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" style="color:#056526; font-style: normal">'.$loadSP->getTenSanPham().'</h5>
                <h6 class="card-subtitle mb-2 text-muted" style="font-size:0.9rem">Tiểu cảnh</h6>
                <div class="price-wrap h5">
                    <span>'.$loadSP->getGiaSanPham().' VNĐ</span> <del class="float-right" style="color: #999;">190.000 VNĐ</del>
                </div> <!-- price-wrap.// -->
                <a href="#" class="btn btn-primary float-right">XEM NHANH</a>
            </div>
        </div>
            ';
}
