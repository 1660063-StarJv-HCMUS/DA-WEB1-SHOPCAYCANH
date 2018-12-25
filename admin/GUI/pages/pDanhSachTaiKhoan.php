<h1>Danh sách tài khoản</h1>
<table class="table table-hover">
    <thead>
        <tr>
            <th></th>
          <th>Tên đăng nhập</th>
          <th>Tên hiển thị</th>
          <th>Số điện thoại</th>
          <th>Email</th>
          <th>Địa chỉ</th>
          <th>Loại tài khoản</th>
          <th>Chức năng</th>
        </tr>
    </thead>
    <tbody>
    <?php
include_once __DIR__ . '/../../BUS/TaiKhoan_BUS.php';

$loadTK = new TaiKhoanBUS();

$result = $loadTK->LoadTatCaTaiKhoan();

foreach ($result as $loadTK) {
    if ($loadTK->LoaiTK == 0) {
        $loai = 'Admin';
    } else {
        $loai = 'Thường';
    }

    echo '
            <tr>
                <td><input type="checkbox" name="id_TaiKhoan[]" value="'.$loadTK->MaTaiKhoan.'"></td>
                <td>'.$loadTK->TenDangNhap.'</td>
                <td>'.$loadTK->TenHienThi.'</td>
                <td>'.$loadTK->DienThoai.'</td>
                <td>'.$loadTK->email.'</td>
                <td>'.$loadTK->DiaChi.'</td>
                <td>'.$loai.'</td>
                <td>
                    <a href="#" title="">Chỉnh sửa</a>
                </td>
            </tr>
            ';
}
?>
    </tbody>
</table>