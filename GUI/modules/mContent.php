<?php

include_once __DIR__.'/../../BUS/SanPham_BUS.php';
$a=1;
if(isset($_GET["a"]))
{
    $a = $_GET["a"];
}
else {
    $a = 0;
}
$loadSP = new SanPham_BUS();
if($a)
{
    $result = $loadSP->LoadSanPhamByMaLoai($a);
}
else {
    $result = $loadSP->LoadTatCaSanPham(); 
}


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
                <button type="button" class="btn btn-primary float-right btnDetails" data-toggle="modal"
                        data-target="#details" data-price="'.$loadSP->getGiaSanPham().'" data-price_discount="190000" data-detail="'.$loadSP->getMoTa().'"
                        data-name="'.$loadSP->getTenSanPham().'" data-image="GUI/images/'.$loadSP->getHinhURL().'" data-id="'.$loadSP->getMaSanPham().'">
                        XEM NHANH
                </button>
            </div>
        </div>
            ';
}
