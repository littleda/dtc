<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Datacenter Phang-nga</title>
<!--        <a href="index.php"> <img src="images/logo png.png"align ="left"></a>-->

        <!-- Bootstrap core CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-theme.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/theme.css" rel="stylesheet">

        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/ie-emulation-modes-warning.js"></script>
    </head>


    <body>
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top na" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <ul class="navbar navbar-nav">

                            <li><a class="navbar-brand"  href="index.php"><font color = "ORANGE">หน้าหลัก</font></a></li>
                            <li><a class="navbar-brand" href="index.php?r=Example/Index"><font color = "ORANGE">ข้อมูลเครือข่ายบริการสุขภาพ</font></a></li>
                            <li><a class="navbar-brand" href="index.php?r=Regis/Index"><font color = "ORANGE">ข้อมูลสถานะสุขภาพ</font></a></li>
                            <li><a class="navbar-brand" href="index.php?r=F43/Report43F"><font color = "ORANGE"> รายงาน 43 แฟ้ม </font></a></li>
                            <li><a class="navbar-brand" href="index.php?r=teacher/View"><font color = "ORANGE">ความต้องการใช้ข้อมูลสารสนเทศ</font></a></li>
                            <!--                        <li><a class="navbar-brand" href="index.php?r=course/View"><font color = "ORANGE">จัดการระบบ</font></a></li>-->

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">จัดการระบบ <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="index.php?r=Teacher/Index">จัดการข้อมูลผู้ใช้</a></li>
                                    <li><a href="index.php?r=Upload/index">จัดการฐานข้อมูล43แฟ้ม</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
            </nav>
        </header>




        <div class="container theme-showcase" role="main">

            <?php
            echo $content;
            ?>

        </div>


        <!-- Bootstrap core JavaScript
               ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/docs.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>


