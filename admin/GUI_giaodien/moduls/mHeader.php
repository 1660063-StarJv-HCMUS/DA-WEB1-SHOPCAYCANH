<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../index.php">Trở lại trang mua sắm</a>
    </div>
    <!-- /.navbar-header -->
    <?php
    $a = 1;
    if(isset($_GET["a"])){
        $a = $_GET["a"];
    }

    switch($a){
        case 1:
            include 'pDashboard.php';
            break;
        case 2:
            include './pages/pListOfProduct.php';
            break;
        case 3:
            include './pages/pDetail.php';
            break;
        default:
            include './pages/pError.php';
    }
    ?>
    <!-- /.navbar-static-side -->
</nav>