<h1>Quản lý đơn hàng</h1>
<table class="table table-hover table-bordered">
    <thead>
        <th scope="col">Tên người mua</th>
        <th scope="col">Tổng thành tiền</th>
        <th scope="col">Ngày đặt hàng</th>
        <th scope="col">Trạng thái</th>
        <th scope="col"></th>
    </thead>
    <tbody>
        <tr>
        	<?php
                include_once __DIR__.'/../../BUS/DonHang_BUS.php';
                include_once __DIR__.'/../../BUS/TaiKhoan_BUS.php';
                $loadDH = new DonHang_BUS();
                $loadTenTK = new TaiKhoanBUS();
                $result =  $loadDH->LoadTatCaCacDonHang();

                foreach($result as $DH)
                {
                    $select1 = "";
                    $select2 = "";
                    $select3 = "";
                    switch($DH->MaTinhTrang)
                    {
                        case 1:
                            $select1 = "selected";
                            break;
                        case 2:
                            $select2 = "selected";
                            break;
                        case 3:
                            $select3 = "selected";
                            break;
                    }
                    echo '
                        <tr>
                            <td>
                                '. $loadTenTK->getTenTaiKhoanTheoID($DH->MaTaiKhoan) .'
                            </td>
                            <td>
                                '. $DH->TongThanhTien .'
                            </td>
                            <td>
                                '. $DH->NgayLap .'
                            </td>
                            <td>
                                
                                <select class="custom-select" name="hangSanXuat">
                                    <option value="1" '. $select1 .' >Đang giao</option>
                                    <option value="2" '. $select2 .' >Đã giao</option>
                                    <option value="3" '. $select3 .' >Hủy</option>                                    
                                </select>
                            </td>
                            <td>
                                <button class="btn btn-success" type="button" aria-haspopup="true" aria-expanded="false">cập nhật</button>
                            </td>
                        </tr>
                        ';    
                }

                
            ?>
        </tr>
    </tbody>
</table>