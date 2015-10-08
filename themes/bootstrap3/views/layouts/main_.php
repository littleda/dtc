<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Datacenter Phangnga Hospital</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/dashboard.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body role="document">

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">
                <!--                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>-->
                <a class="navbar-brand" href="#">Phangnga Hospital Web Service</a>
            </div>
            <div class="container-fluid">                
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left">
                       
                            <li><a href="#">ข้อมูลทรัพยากรสุขภาพ</a></li>
                            <li><a href="#">ข้อมูลเครือข่ายบริการสุขภาพ</a></li>

                           
                            <li><a href="#">รายงาน 43 แฟ้ม</a></li>
                            <!--                        <li><a href="index.php?r=Request/Index">ขอรายงาน</a></li>
                                                    <li><a href="index.php?r=Request/View">ตรวจสอบคำขอรายงาน</a></li>-->
                            <li class="dropdown">
                                <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                    ขอรายงาน      
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?r=Request/Index">ฟอร์มขอรายงาน</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?r=Request/View">ตรวจสอบคำขอรายงาน</a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown">
                                <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                    จัดการ
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?r=User/Adduser">จัดการข้อมูลผู้ใช้</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">จัดการฐานข้อมูล43แฟ้ม</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">จัดการอัพเดทข้อมูล</a></li>
                                </ul>
                            </li>

                    </ul>
                    <div class="navbar-form navbar-right">
                        <?php
                        if (empty(Yii::app()->session["member_user_login"])) {
                            echo CHtml::form(array("User/Check"));
                            ?>
                            <div class="form-group">
                                <input type="text" placeholder="Username" name="Username" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" name="Password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">Sign in</button>
                            <?php
                            echo CHtml::endForm();
                        } else {
                            ?>
                            <p class="btn btn-warning">
                                <img src="images/admin.png" width="20">
                                <?php echo Yii::app()->session["member_fullname"] ?> </p> <!-- สร้างปุ่มชื่อนามสกุล เมื่อ login -->
                            <a onclick="javascript:return confirm('ต้องการออกจากโปรแกรม?')"href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/User/Logout"  class="btn btn-danger">Log out</a>
                            <?php
                        }
                        ?>

                    </div>
                </div>

            </div>

        </nav>
        <div class="container-fluid" role="main">
            <div class="row">              
                <div class="col-sm-3 col-md-2 sidebar">
                    <!--                    <div class="list-group-item " role="tab">
                                            <a href="#" class="list-group-item">รายงานประจำปี</a>
                                            <a href="#" class="list-group-item">KPI</a>  
                                            <a href="#" class="list-group-item">ข้อมูลทรัพยากรสุขภาพ</a>  
                                            <a href="#" class="list-group-item">ข้อมูลเครือข่ายบริการสุขภาพ</a> 
                                            <a href="#weblink" class="list-group-item" data-toggle="collapse" aria-controls="weblink">Web Link</a>
                                        </div>
                                        <div class="collapse" id="weblink">
                                            <div class="list-group-item " role="tab"> <a href="#" class="list-group-item">ทดสอบ</a></div>
                    
                                        </div>-->

                    <ul class="nav nav-sidebar">
                        <li class="active"><a href="index.php">หน้าหลัก<span class="sr-only">(current)</span></a></li>                                              
                    </ul>
                    <ul class="nav nav-sidebar">
                        <li><a href="#">รายงานประจำปี</a></li>                    
                    </ul>
                    <ul class="nav nav-sidebar">
                        <li><a href="<?php echo Yii::app()->theme->baseUrl; ?>/doc/hospital_profile.pdf" target="_blank">Hospital Profile</a></li>                    
                    </ul>
                    <ul class="nav nav-sidebar">
                        <li href="#KPI" aria-expanded="false" data-toggle="collapse" aria-controls="KPI"><a href="#">KPI</a></li>                      
                    </ul>
                    <ul class="collapse"  id="KPI">
                        <li><a href="#">ดัชนีชี้วัดการตรวจราชการประจำปี</a></li>
                        <li><a href="#">ดัชนีชี้วัด Service Plan 12 สาขา</a></li>
                        <li><a href="http://www.iphdc.net/th/index.php/kpi57-4">KPI Template</a></li>
                        <li><a href="#">ดัชนีชี้วัดกลุ่มวินิจฉัยโรคร่วม DRG INDEX</a></li>
                        <li><a href="<?php echo Yii::app()->theme->baseUrl; ?>/doc/indicator.xlsx">ดัชนีชี้วัดคุณภาพทีมนำพัฒนาคุณภาพโรงพยาบาล</a></li>
                        <li><a href="#">ดัชนีชี้วัดคุณภาพ PCT</a></li>
                    </ul>
                    <!--                    <ul class="nav nav-sidebar">
                                            <li><a href="#Health_Resources" aria-expanded="false" data-toggle="collapse" aria-controls="Health_Resources">ข้อมูลทรัพยากรสุขภาพ</a></li>                     
                                        </ul>
                                        <ul class="collapse"  id="Health_Resources">
                                            <li><a href="#">ข้อมูลด้านบุคลากร</a></li>
                                            <li><a href="#">ข้อมูลด้านการเงิน</a></li>
                                            <li><a href="#">ข้อมูลครภัณฑ์ ที่ดิน สิ่งก่อสร้าง</a></li>
                                        </ul>-->
                    <ul class="nav nav-sidebar">
                        <li><a href="#Health_Status" aria-expanded="false" data-toggle="collapse" aria-controls="Health_Status">ข้อมูลสถานะสุขภาพ</a></li>
                    </ul>
                    <ul class="collapse"  id="Health_Status">
                        <li><a href="http://www.pngo.moph.go.th/index.php/2014-02-20-06-43-01/96-pnho/data-content/population/76" target="_blank">ข้อมูลประชากร</a></li>
                        <li><a href="http://www.pngo.moph.go.th/index.php/2014-02-20-06-43-01/116-pnho/data-content/health-status/81" target="_blank">ข้อมูลสถิติชีพ</a></li>
                        <li><a href="http://www.pngo.moph.go.th/index.php/2014-02-20-06-43-01/116-pnho/data-content/health-status/82" target="_blank">ข้อมูลการป่วย</a></li>                       
                    </ul>
                    <!--                    <ul class="nav nav-sidebar">
                                            <li><a href="#Health_Network" aria-expanded="false" data-toggle="collapse" aria-controls="Health_Network">ข้อมูลเครือข่ายบริการสุขภาพ</a></li>
                                        </ul>
                                        <ul class="collapse"  id="Health_Network">
                                            <li><a href="#">ข้อมูลประชากรอำเภอเมือง</a></li>
                                            <li><a href="#">ข้อมูลผลงานการให้บริการ จำแนกตามรพ.สต.</a></li>
                                            <li><a href="#">ข้อมูลการใช้ยาและเวชภัณฑ์</a></li>
                                            <li><a href="#">ข้อมูลการจัดสรรเงินเครือข่าย</a></li>
                                        </ul>-->
                    <ul class="nav nav-sidebar">
                        <li><a href="#Web_Link" aria-expanded="false" data-toggle="collapse" aria-controls="Web_Link">Web Link</a></li>
                    </ul>                
                    <ul class="collapse"  id="Web_Link">
                        <li><a href="http://www.thcc.or.th" target="_blank">ศูนย์มาตรฐานรหัสและข้อมูลสุขภาพแห่งชาติ</a></li>
                        <li><a href="http://www.this.or.th" target="_blank">ศูนย์พัฒนามาตรฐานระบบข้อมูลสุขภาพไทย</a></li>
                        <li><a href="http://www.tmi.or.th" target="_blank">สมาคมเวชสารสนเทศไทย</a></li>
                        <li><a href="http://www.iphdc.net" target="_blank">HCD สสจ.พังงา</a></li>
                    </ul>
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <?php
                    echo $content;
                    ?>
                </div>

                <!-- Main jumbotron for a primary marketing message or call to action -->
                <!--            <div class="jumbotron">
                                <h1>Theme example</h1>
                                <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
                            </div>-->

            </div>

        </div>
        <!--        <footer class="bs-docs-footer" role="contentinfo">
                    <center>
                        <p>Copyright ©2015. All rights reserved. |  by Comcenter</p>                
                        <p>Contact information: Tel.3007</p>
                        <p>Currently V.1 beta</p>
                    </center>               
        
                </footer>-->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/holder.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
