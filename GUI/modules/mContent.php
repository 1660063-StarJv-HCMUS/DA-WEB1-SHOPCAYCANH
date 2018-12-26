<?php

include_once __DIR__.'/../../BUS/SanPham_BUS.php';
$filter  = array(
    'LoaiCay' => isset($_GET['LoaiCay']) ? $_GET['LoaiCay'] : false,
    'XuatXu'  => isset($_GET['XuatXu']) ? $_GET['XuatXu'] : false,
    'minPrice'=> isset($_GET['minPrice']) ? $_GET['minPrice'] : false,
    'maxPrice'=> isset($_GET['maxPrice']) ? $_GET['maxPrice'] : false
);
// Biến lưu trữ lọc
$where = array();
// Nếu có chọn lọc thì thêm điều kiện vào mảng
if ($filter['LoaiCay']){
    $where[] = "MaLoaiSanPham = '{$filter['LoaiCay']}'";
}
if ($filter['XuatXu']){
    $where[] = "MaHangSanXuat = '{$filter['XuatXu']}'";
}
if ($filter['minPrice']){
    $where[] = "GiaSanPham >= '{$filter['minPrice']}'";
}
if ($filter['maxPrice']){
    $where[] = "GiaSanPham <= '{$filter['maxPrice']}'";
}

$loadSP = new SanPham_BUS();

if ($where)
{
    $result = $loadSP->LoadSanPhamNhieuTieuChi($where);
}
else {
    $a=1;
    if(isset($_GET["a"]))
    {
        $a = $_GET["a"];
    }
    else {
        $a = 0;
    }

    if($a)
    {
        $result = $loadSP->LoadSanPhamByMaLoai($a);
    }
    else {
        $result = $loadSP->LoadTatCaSanPham(); 
    }
}


foreach ($result as $loadSP) {
    echo'
        <div class="card border-secondary product mt-2 mr-2 ml-2 mb-2">
            <img class="card-img-top" src="admin/GUI/modules/upload/'.$loadSP->getHinhURL().'" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" style="color:#056526; font-style: normal">'.$loadSP->getTenSanPham().'</h5>
                <h6 class="card-subtitle mb-2 text-muted" style="font-size:0.9rem">Tiểu cảnh</h6>
                <div class="price-wrap h5">
                    <span>'.$loadSP->getGiaSanPham().' VNĐ</span> <del class="float-right" style="color: #999;">190.000 VNĐ</del>
                </div> <!-- price-wrap.// -->               
                <button type="button" class="btn btn-primary float-right btnDetails" data-toggle="modal"
                        data-target="#details" data-price="'.$loadSP->getGiaSanPham().'" data-price_discount="190000" data-detail="'.$loadSP->getMoTa().'"
                        data-name="'.$loadSP->getTenSanPham().'" data-image="admin/GUI/modules/upload/'.$loadSP->getHinhURL().'" data-id="'.$loadSP->getMaSanPham().'">
                        XEM NHANH
                </button>
            </div>
        </div>
        ';
}
