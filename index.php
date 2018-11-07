<?php 
session_start();
include_once "views/functions.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/style.css" />
    <script src="/js/main.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <header class="col-sm-12"></header>
        </div>
        <div class="row">
            <nav class="col-sm-12">
            <?php include_once "views/menu.php" ?>
            </nav>
        </div>
        <div class="row">
        <section class="col-sm-12">
        <?php 
        if (isset($_GET['page'])){
            $page= $_GET['page'];
            switch ($page) {
                case '1':
                    include_once "views/tours.php";
                    break;
                    case '2':
                    include_once "views/comments.php";
                    break;
                    case '3':
                    include_once "views/registration.php";
                    break;
                    case '4':
                    include_once "views/admin.php";
                    break;
                default:
                include_once "views/error404.php";
                    break;
            }
        }
        ?>
        </section>
        </div>
    </div>
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>