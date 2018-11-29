function registered(){
    var register = document.getElementById("register-form");
    var login = document.getElementById("login-form");
    register.style.display = "block";
    login.style.display = "none";
}

function login()
{
    var register = document.getElementById("register-form");
    var login = document.getElementById("login-form");
    register.style.display = "none";
    login.style.display = "block"; 
}

$('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
 });