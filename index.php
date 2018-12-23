<!-- hang so bao ve project -->
<?php
    define("IN_SITE", true);
    //chua dung dc
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="GUI/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <link rel="stylesheet" href="GUI/css/DEFAULT.css">
    <title>SEVEN LEAVES</title>
    <link rel="shortcut icon" href="GUI/icon/favicon.ico" type="image/x-icon" />
</head>
<body>
<?php
include_once __DIR__ . '/BUS/session.php';
// Khởi tạo session
$session = new Session();
$session->start();

if ($session->get() != '') {
    $user = $session->get();
    $admin = $session->getAdmin();
} else {
    $user = '';
}
?>
    <div class="desktop-screen">
<?php
include_once 'GUI/modules/mTopBar.php';
if ($user) {
    ?>
    <div class="col-3 user">
        <span>Xin chào, <?php echo $user; ?></span>
        <ul>
            <?php
                if ($admin) {
                    
            ?>
                <li>
                <a href="admin/">Admin</a>
                </li>
            <?php
                }
            ?>
            <li>
                <a href="#">Thông tin tài khoản</a>
            </li>
            <li>
                <a href="#">Kiểm tra đơn hàng</a>
            </li>
            <li  id="logout">
                <a href="#">Đăng xuất</a>
            </li>
        </ul>
    </div>
<?php
}
// Nếu không đăng nhập
else {
    // Hiển thị modal đăng nhập
    include_once 'GUI/modules/mModal.php';
}
?>
    </div>
</div>
    <div id="header">
<?php
include 'GUI/modules/mHeader.php'
?>
    </div>
</div>

        <div id="container">

<?php
$a = 0;
if (isset($_GET["a"])) {
    $a = $_GET["a"];
}
switch ($a) {
    case 0:
        # code...
        include 'GUI/modules/mBanner.php';
        include 'GUI/modules/mTrangChu.php';
        break;
    case 2:
        # code...
        include 'GUI/pages/pTieuCanh.php';
        break;
    case 3:
        # code...
        include 'GUI/pages/pXuongRong.php';
        break;
    case 1:
        # code...
        include 'GUI/pages/pSenDa.php';
        break;
    default:
        # code...
        include 'GUI/pages/pERROR.php';
        break;
}
?>
        </div>

        <div id="footer">
            <?php
include 'GUI/modules/mPruductDetails.php';
include 'GUI/modules/mFooter.php';

?>
        </div>
    <script src="GUI/js/jquery-3.2.1.min.js"></script>
    <script src="GUI/js/bootstrap.js"></script>
    <script src="GUI/js/custom.js"></script>
    <script src="GUI/js/form.js"></script>
</body>
</html>