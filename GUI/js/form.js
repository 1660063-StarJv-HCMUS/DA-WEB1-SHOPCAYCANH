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
            url: "DAO/Login.php",
            type: "POST",
            //method: "POST",
            data: {
                user_signin: $user_signin,
                pass_signin: $pass_signin,
            },
            success: function (data) {
                if (data != 'User') {
                    $('#login-form .alert').removeClass('invisible');
                    $('#login-form .alert').html(data);
                } else {
                    $('#login-form').hide();
                    location.reload();
                }
            },
            error: function () {
                $("#login-form .alert").removeClass("invisible");
                $("#login-form .alert").html("Không thể đăng nhập vào lúc này, hãy thử lại sau.");
            }
        });
    }
});
$('#logout, #logout-destop').on('click', function () {
    var action = "logout";
    $.ajax({
        url: "DAO/Login.php",
        method: "POST",
        data: {
            action: action
        },
        success: function () {``
            location.reload();
        }
    });
});

//Đăng kí
$("#register-form button").on('click', function () {
    // Gán các giá trị trong các biến
    $name_info = $('#register-form  #name').val();
    $username_info = $('#register-form  #username').val();
    $password_info = $('#register-form  #password').val();
    $address_info = $('#register-form  #address').val();
    $phone_number_info = $('#register-form  #phone_number').val();
    $email_info = $('#register-form  #email').val();
    // Nếu các giá trị rỗng
    if ($name_info == '' || $username_info == '' || $password_info == ''|| $address_info == ''|| $phone_number_info == ''|| $email_info == '') {
        $("#register-form .alert").removeClass("invisible");
        $("#register-form .alert").html("Vui lòng điền đầy đủ thông tin.");
    }
    else
    {
        $.ajax({
            url: "DAO/Register.php",
            type: "POST",
            //method: "POST",
            data: {
                name_info: $name_info,
                username_info: $username_info,
                password_info:$password_info,
                address_info:$address_info,
                phone_number_info:$phone_number_info,
                email_info:$email_info,
            },
            success: function (data) {
                $('#register-form .alert').removeClass('invisible');
                $('#register-form .alert').html(data);
            },
            error: function () {
                $("#register-form .alert").removeClass("invisible");
                $("#register-form .alert").html("Không thể đăng ký vào lúc này, hãy thử lại sau.");
            }
        });
    }
});