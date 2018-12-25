<?php
    include_once 'GUI/modules/mBanner.php';
?>
<div class="content">
    <form action="" >
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Thông tin khách hàng</h3>
                </div>
                <div class="form-group">
                    <p>Họ và tên:</p>
                    <input class="input" type="text" name="first-name" placeholder="" value="Trần Hữu Dũng" >
                </div>
                <div class="form-group">
                    <p>Email:</p>
                    <input class="input" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" placeholder="" value="Tranhuudung1@gmail.com">
                </div>
                <div class="form-group">
                    <p>Địa chỉ:</p>
                    <input class="input" type="text" name="address" placeholder="" value="123/123">
                </div>
                <div class="form-group">
                    <p>Thành phố:</p>
                    <input class="input" type="text" name="city" placeholder="" value="Hồ Chí Minh">
                </div>
                <div class="form-group">
                    <p>Số điện thoại:</p>
                    <input class="input" type="tel" name="tel" placeholder="" value="123456798">
                </div>
                <button id="btn">Sửa thông tin</button>
            </div>          
        </div>
    </form>           
</div>
