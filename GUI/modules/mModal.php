<div class="col-12 col-lg-6" style="text-align: center;">
        <i class="fa fa-phone"></i> &nbsp;0965521664646
        <span></span>
        <i class="fa fa-envelope"></i> &nbsp; thanhtung@sevenleaves.vn
    </div>
    <div id="Login" class="col-12 col-lg-3" style="text-align: right;">
    <a role="button" data-toggle="modal" data-target="#Modal-form" onclick="login()">Đăng nhập</a>
    &nbsp;
    |
    &nbsp;
    <a role="button" data-toggle="modal" data-target="#Modal-form" onclick="registered()">Đăng ký</a>
</div>

<div id="Modal-form" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered h-auto" style="max-width:360px">
        <div class="modal-content">
            <button type="button" class="close btn" aria-label="Close" data-dismiss="modal">
                <span>x</span>
            </button>
            <div class="form">
                <form id="login-form">
                    <input type="text" placeholder="Tài khoản" name="username" id="username" />
                    <input type="password" placeholder="Mật khẩu" name="password" id="password" />
                    <button type="button" name="login_button" id="login_button">ĐĂNG NHẬP</button>
                    <div class="alert alert-danger invisible mt-2"></div>
                    <p class="message">
                        Chưa đăng kí? <a href="#">Tạo tài khoản</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
