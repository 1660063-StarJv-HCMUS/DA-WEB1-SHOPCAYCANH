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
        <div id="topbar">
            <?php
                include 'GUI/modules/mTopBar.php'
            ?>
        </div>
        <div id="header">
            <?php
                include 'GUI/modules/mHeader.php'
            ?>
        </div>
        <div id="container">
            <?php
                $a=1;
                if(isset($_GET["a"])){
                    $a=$_GET["a"];
                }
                switch ($a) {
                    case 1:
                        # code...
                        include 'GUI/modules/mBanner.php';
                        include ('GUI/modules/mTrangChu.php');
                        break;
                    case 2:
                        # code...
                        include ('GUI/pages/pTieuCanh.php');
                        break;
                    case 3:
                        # code...
                        include ('GUI/pages/pXuongRong.php');
                        break;
                    case 4:
                        # code...
                        include ('GUI/pages/pSenDa.php');
                        break;
                    default:
                        # code...
                        include ('GUI/pages/pERROR.php');
                        break;
                }
            ?>
        </div>

        <div id="footer">
            <?php
                include 'GUI/modules/mFooter.php';
            ?>
        </div>    
    <script src="GUI/js/jquery-3.2.1.min.js"></script>
    <script src="GUI/js/bootstrap.js"></script>
    <script src="GUI/js/custom.js"></script>
</body>
</html>