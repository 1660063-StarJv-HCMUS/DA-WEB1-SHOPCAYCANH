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
        	echo '
            
            <td>
                tên người mua
            </td>
            <td>
            	Tổng thành tiền
            </td>
            <td>
                ngày đặt hàng
            </td>
            <td>
            	<select class="custom-select" name="hangSanXuat">
            		<option value="1">Đang giao</option>
            		<option value="2">Đã giao</option>
            		<option value="3" >Hủy</option>
            		    
            	</select>
            </td>
            <td>
            	<button class="btn btn-success" type="button" aria-haspopup="true" aria-expanded="false">cập nhật</button>
            </td>
            ';
            ?>
        </tr>
    </tbody>
</table>