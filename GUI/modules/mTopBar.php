<div class="row">
    <div class="col-12 col-lg-3">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-youtube"></i>
    </div>
    <div class="col-12 col-lg-6" style="text-align: center;">
        <i class="fa fa-phone"></i> &nbsp;0965521664646
        <span></span>
        <i class="fa fa-envelope"></i> &nbsp; thanhtung@sevenleaves.vn
    </div>

    <div id="Login" class="col-12 col-lg-3" style="text-align: right;">
        <a role="button" data-toggle="modal" data-target="#loginModal" onclick="login()">Đăng nhập</a>
        &nbsp;
        |
        &nbsp;
        <a role="button" data-toggle="modal" data-target="#loginModal" onclick="registered()">Đăng ký</a>
    </div>
</div>
</div>
<div id="loginModal" class="modal fade" role="dialog">
<div class="modal-dialog modal-dialog-centered h-auto" style="max-width:360px">
    <div class="modal-content">
        <button type="button" class="close btn" aria-label="Close" data-dismiss="modal">
            <span>x</span>
        </button>
        <div class="form">
            <form id="register-form">
                <input type="text" name="hoTen" placeholder="Họ tên" />
                <input type="text" name="" placeholder="Tên đăng nhập">
                <input type="password" name="matKhau" placeholder="Mật khẩu" />
                <input type="text" name="diaChi" placeholder="Địa chỉ">
                <input type="text" placeholder="Email" />
                <button>TẠO TÀI KHOẢN</button>
                <p class="message">Đã có tài khoản? <a href="#">Đăng Nhập</a></p>
            </form>
            <form id="login-form">
                <input type="text" placeholder="Tài khoản" />
                <input type="password" placeholder="Mật khẩu" />
                <button>ĐĂNG NHẬP</button>
                <p class="message">
                    Chưa đăng kí? <a href="#">Tạo tài khoản</a>
                </p>
            </form>
        </div>
    </div>
</div>
