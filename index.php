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
<?php
    include 'GUI/modules/mHeaderMobi.php';
?>
    <div class="desktop-screen">
<?php
include_once 'GUI/modules/mTopBar.php';
?>
    </div>
</div>
    <div id="header">
<?php
include 'GUI/modules/mHeader.php';
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
    case 4:
        # code...
        include 'GUI/pages/pCheckOut.php';
        break;
    case 5:
        # code...
        include 'GUI/pages/pHoanTat.php';
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
include_once 'GUI/modules/mModal.php';
include 'GUI/modules/mPruductDetails.php';
include 'GUI/modules/mFooter.php';
include_once 'GUI/modules/mShoppingCart.php';
?>
</div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="GUI/js/jquery-3.2.1.min.js"></script>
    <script src="GUI/js/bootstrap.js"></script>
    <script src="GUI/js/custom.js"></script>
    <script src="GUI/js/form.js"></script>
    <script src="GUI/js/cart.js"></script>
    <script src="GUI/js/CheckOut.js"></script>
</body>
</html>