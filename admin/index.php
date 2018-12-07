<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8"/>
    <title>Administration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <link rel="stylesheet" href="./GUI/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="./GUI/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="./GUI/css/admin.css">
</head>
<body>
    <?php
        if(false)//chưa đăng nhập
        {
            include './GUI/pDangNhap.php';
        }
        else//đã đăng nhập
        {
            include './GUI/pIndex.php';
        }
    ?>
<script src="./GUI/bootstrap/js/bootstrap.js"></script>
<script src="./GUI/bootstrap/js/jquery-3.3.1.min.js"></script>
</body>
</html>
