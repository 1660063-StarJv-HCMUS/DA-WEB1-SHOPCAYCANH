<?php
    //if (!defined('IN_SITE')) die ('The request not found');
    include_once 'DAO/init.php';
    include_once __DIR__.'../../BUS/session.php';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8"/>
    <title>Administration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <link rel="stylesheet" href="GUI/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="GUI/css/admin.css">
</head>
<body>
    <?php
        $session = new Session();
        $admin = $session->getAdmin();
        if(!$admin)//chưa đăng nhập
        {
            //include 'GUI/modules/mDangNhap.php';
            // PHP permanent URL redirection
            //how to delay
            header("Location: http://localhost/DA-WEB1-SHOPCAYCANH/", true, 301);
        }
        else//đã đăng nhập
        {
            include 'GUI/pages/pIndex.php';
        }
    ?>
<script src="<?php echo $_DOMAIN; ?>GUI/js/form.js"></script>
<script src="./GUI/bootstrap/js/bootstrap.js"></script>
<script src="./GUI/bootstrap/js/jquery-3.3.1.min.js"></script>
</body>
</html>
