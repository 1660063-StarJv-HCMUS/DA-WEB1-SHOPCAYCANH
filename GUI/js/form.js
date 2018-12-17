// Đăng nhập
$("#login-form button").on('click', function () {
    // Gán các giá trị trong các biến
    $user_signin = $('#login-form  #username').val();
    $pass_signin = $('#login-form  #password').val();
    // Nếu các giá trị rỗng
    if ($user_signin == '' || $pass_signin == '') {
        $("#login-form .alert").removeClass("invisible");
        $("#login-form .alert").html("Vui lòng điền đầy đủ thông tin.");
    }
    // Ngược lại
    else {
        $.ajax({
            url: "GUI/modules/mCheckLogin.php",
            //type: "POST",
            method:"POST",
            data: {
                user_signin : $user_signin,
                pass_signin : $pass_signin,
            },
            success: function (data) {
                $("#login-form .alert").removeClass("invisible");
                $("#login-form .alert").html(data);
                delay
                location.reload();
            },
            error: function () {
                $("#login-form .alert").removeClass("invisible");
                $("#login-form .alert").html("Không thể đăng nhập vào lúc này, hãy thử lại sau.");
            }
        });
    }
});