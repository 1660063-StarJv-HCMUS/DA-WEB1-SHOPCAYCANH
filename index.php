<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./GUI/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="./GUI/css/topbar.css">
    <title>Document</title>
</head>
<body>
    <div id="container">
        <div id="topbar">
            <?php
                include './GUI/mTopBar.php';
            ?>
        </div>
        <div id="header">
        
        </div>
        <div id="nav"></div>
        <div id="content"></div>
        <div id="footer"></div>
    </div>
    <script src="./GUI/bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="./GUI/bootstrap/js/bootstrap.js"></script>
    <script src="./GUI/js/topbar.js"></script>
</body>
</html>