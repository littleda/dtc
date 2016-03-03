<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="images/icon.ico">

        <title>Datacenter Phangnga Hospital</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/dashboard.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/ie-emulation-modes-warning.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
            ::-webkit-scrollbar {
                width:12px;
                height:12px;
            }
            ::-webkit-scrollbar-track {
                background:whiteSmoke;
                -webkit-box-shadow:inset 0 0 4px rgba(0,0,0,0.1);
            }
            ::-webkit-scrollbar-thumb {
                background:#c5c5c5;
                border-radius:10px;
                border:whiteSmoke solid 3px;
            }
            ::-webkit-scrollbar-thumb:hover {
                background:#b5b5b5;
            }
            footer { 
                border:0.5px solid #999999;  
                -moz-box-shadow: 0px 1px 5px #ccc;  
                -webkit-box-shadow: 0px 1px 5px #ccc;  
                box-shadow: 0px 1px 5px #ccc;  
                background-color: #ffffff; 
                position:relative; 
                z-index:99999999;
                padding:0.1px; 
            } 
            .menu{
                //background-color: #e0e0e0;
                -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
                box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
                background-image: -webkit-linear-gradient(top, #f5f5f5 0%, #e8e8e8 100%);
                background-image: -o-linear-gradient(top, #f5f5f5 0%, #e8e8e8 100%);
                background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#e8e8e8));
                background-image: linear-gradient(to bottom, #f5f5f5 0%, #e8e8e8 100%);
                background-repeat: repeat-x;
            }
            .submenu{                
                padding: 7px 7px 7px 20px;
                border-top: 1px solid #ccc;
            }


        </style>
    </head>
    <body role="document">
        <script type="text/javascript">
            $(document).ready(function () {
                $(".panel-group .panel-default .panel-heading").hover(function () {
                    //$(this).css("background-color", "#777");
                    $(this).css("background-image", "-webkit-linear-gradient(top, #e0e0e0 0%, #e8e8e8 100%)");
                }, function () {
                    $(this).css("background-image", "-webkit-linear-gradient(top, #f5f5f5 0%, #e8e8e8 100%)");
                    //$(this).css("background-color", "#e0e0e0");
                });

                $(".panel-collapse .panel-body").hover(function () {
                    $(this).css("background-color", "#eee");
                }, function () {
                    $(this).css("background-color", "white");
                });

            });
        </script>
        <header class ="header">          
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>                        
                    </div>
                    <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="active"><a href="index.php"><i class="glyphicon glyphicon-home"></i> หน้าแรก</a></li>                           
                            <li><a href="#">ข้อมูลทรัพยากรสุขภาพ</a></li>
                            <li><a href="#">ข้อมูลเครือข่ายบริการสุขภาพ</a></li>

                            <li class="dropdown">
                                <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                    ขอรายงาน      
                                    <span class="caret"></span>
                                </a><?php //if ((Yii::app()->session["user_typelogin"] == 'USER') || (Yii::app()->session["user_typelogin"] == 'SUPERUSER') || (Yii::app()->session["user_typelogin"] == 'ADMINISTRATOR')) {   ?> <?php //}  ?>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">                                                                                                     
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?r=request/Index">ฟอร์มขอรายงาน</a></li>                                       
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?r=request/View">ตรวจสอบคำขอรายงาน</a></li>
                                </ul>
                            </li>
                            <?php if ((Yii::app()->session["user_typelogin"] == 'ADMINISTRATOR')) { ?>                                              
                                <li class="dropdown">
                                    <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                        จัดการ
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?r=user/view">จัดการข้อมูลผู้ใช้</a></li>
                                        <!--                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">จัดการฐานข้อมูล43แฟ้ม</a></li>-->
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?r=upfile/indexupfile">จัดการอัพเดทข้อมูล</a></li>
                                    </ul>
                                </li>
                            <?php } elseif ((Yii::app()->session["userlogin"] == '3820800015972') || (Yii::app()->session["userlogin"] == '3829900032575')) { ?>                            
                                <li class="dropdown">
                                    <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                        จัดการ
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">                                       
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?r=upfile/indexupfile">จัดการอัพเดทข้อมูล</a></li>
                                    </ul>
                                </li>
                            <?php } ?>
                        </ul>
                        <!--                        <div class="navbar-form navbar-right">
                        <?php
                        //if (empty(Yii::app()->session["userlogin"])) {
                        //     echo CHtml::form(array("user/Check"));
                        ?>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Username" name="Username" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" placeholder="Password" name="Password" class="form-control">
                                                        </div>
                                                        <button type="submit" class="btn btn-success">Sign in</button>
                        <?php
                        //     echo CHtml::endForm();
                        // } else {
                        ?> 
                                                </div>-->
                        <?php
                        if (!empty(Yii::app()->session["userlogin"])) {
                            $attributes = array();
                            $attributes ["username"] = Yii::app()->session["userlogin"];
                            $models = UserModels::model()->findByAttributes($attributes);
                            ?>
                            <ul class="nav navbar-nav navbar-right btn-success">
                                <li class="dropdown">
                                    <a id="drop3" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" >
                                        <img src="images/user.png" width="20"> <?php echo Yii::app()->session["fullname"]; ?> <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?r=user/Insert&id=<?php echo $models->id; ?>">แก้ไขข้อมูลผู้ใช้</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" onclick="javascript:return confirm('ต้องการออกจากโปรแกรม?')" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/user/Logout">ออกจากระบบ</a></li>
                                    </ul>
                                </li>
                            </ul>                                
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </nav>
        </header >
        <div class="container-fluid" role="main" style="min-height: 659px;">
            <aside class="left-side sidebar-offcanvas ">
                <div>
                    <button type="button" class="btn btn-default sidebar-toggle collapsed " data-toggle="collapse" data-target="#sidebar" aria-expanded="false" aria-controls="sidebar">
     <!--                        <i class="glyphicon glyphicon-chevron-down"></i>-->
                        MENU
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                </div>  
                <section  id="sidebar" class="col-sm-3 col-md-2 sidebar">                 
                    <div class="nav nav-sidebar panel-group" id="accordion">

                        <div class="panel panel-primary">
                            <div class="panel-heading">                              
                                <center><b>Datacenter Phangnga Hospital</b></center>                             
                            </div>                           
                        </div>

<!--                        <div class="panel panel-default"  >
                            <a  href="<?php //echo Yii::app()->baseUrl;   ?>/doc/year_report.pdf" target="_blank">
                                <div class="panel-heading menu" >
                                    <h4 class="panel-title">
                                        <i class="glyphicon glyphicon-chevron-right"></i> รายงานประจำปี
                                    </h4>
                                </div>
                            </a>                           
                        </div>
                        <div class="panel panel-default">
                            <a  href="<?php //echo Yii::app()->baseUrl;   ?>/doc/hospital_profile.pdf" target="_blank">
                                <div class="panel-heading menu">
                                    <h4 class="panel-title">
                                        <i class="glyphicon glyphicon-chevron-right"></i> Hospital Profile
                                    </h4>
                                </div>  
                            </a>
                        </div>                                            -->
                        <div class="panel panel-default">
                            <a  href="index.php?r=kpi/index">
                                <div class="panel-heading menu">
                                    <h4 class="panel-title">
                                        <i class="glyphicon glyphicon-chevron-right"></i> KPI
                                    </h4>
                                </div>  
                            </a>
                        </div>
                        <div class="panel panel-default">
                            <a  href="index.php?r=record/index">
                                <div class="panel-heading menu">
                                    <h4 class="panel-title">
                                        <i class="glyphicon glyphicon-chevron-right"></i> บันทึกข้อมูล
                                    </h4>
                                </div>  
                            </a>
                        </div>
                        <div class="panel panel-default">
                            <a  href="index.php?r=doc/index">
                                <div class="panel-heading menu">
                                    <h4 class="panel-title">
                                        <i class="glyphicon glyphicon-chevron-right"></i> Download เอกสาร
                                    </h4>
                                </div>  
                            </a>
                        </div>
                        <div class="panel panel-default">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse0">
                                <div class="panel-heading menu">
                                    <h4 class="panel-title">
                                        <i class="glyphicon glyphicon-chevron-right"></i> ข้อมูลสถิติทางการแพทย์
                                    </h4>
                                </div>
                            </a>
                            <div id="collapse0" class="panel-collapse collapse ">
                                <a href="index.php?r=report/topdiseaseOPD"><div class="panel-body submenu">โรคที่พบบ่อยในผู้ป่วยนอก</div></a>
                                <a href="index.php?r=report/topdiseaseIPD" ><div class="panel-body submenu">โรคที่พบบ่อยในผู้ป่วยใน</div></a>
                                <a href="index.php?r=report/topdiseasefirstIPD" ><div class="panel-body submenu">โรคหลักที่พบบ่อยในผู้ป่วยใน</div></a>
                                <a href="index.php?r=report/topdeadIPD" ><div class="panel-body submenu">โรคที่พบจากการเสียชีวิต</div></a>   
                                <!--                                <a href="index.php?r=report/topdisease" ><div class="panel-body submenu">โรค</div></a>-->
                            </div>                    
                        </div>
                        <div class="panel panel-default">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                <div class="panel-heading menu">
                                    <h4 class="panel-title">
                                        <i class="glyphicon glyphicon-chevron-right"></i> ข้อมูลสถานะสุขภาพ
                                    </h4>
                                </div>
                            </a>
                            <div id="collapse1" class="panel-collapse collapse">
                                <a href="http://www.pngo.moph.go.th/phangnga/index.php/2014-02-20-06-43-01/96-pnho/data-content/population/76" target="_blank"><div class="panel-body submenu">ข้อมูลประชากร</div></a>
                                <a href="http://www.pngo.moph.go.th/phangnga/index.php/2014-02-20-06-43-01/116-pnho/data-content/health-status/81" target="_blank"><div class="panel-body submenu">ข้อมูลสถิติชีพ</div></a>
                                <a href="http://www.pngo.moph.go.th/phangnga/index.php/2014-02-20-06-43-01/116-pnho/data-content/health-status/82" target="_blank"><div class="panel-body submenu">ข้อมูลการป่วย</div></a>
                            </div>                    
                        </div>
                        <div class="panel panel-default">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                <div class="panel-heading menu">
                                    <h4 class="panel-title">
                                        <i class="glyphicon glyphicon-chevron-right"></i> Web Link
                                    </h4>
                                </div>
                            </a>
                            <div id="collapse2" class="panel-collapse collapse">
                                <a href="http://www.thcc.or.th" target="_blank"><div class="panel-body submenu">ศูนย์มาตรฐานรหัสและข้อมูลสุขภาพแห่งชาติ</div></a>
                                <a href="http://www.this.or.th" target="_blank"><div class="panel-body submenu">ศูนย์พัฒนามาตรฐานระบบข้อมูลสุขภาพไทย</div></a>
                                <a href="http://www.tmi.or.th" target="_blank"><div class="panel-body submenu">สมาคมเวชสารสนเทศไทย</div></a>
                                <a href="http://www.iphdc.net" target="_blank"><div class="panel-body submenu"><t>HDC สสจ.พังงา</t></div></a>
                            </div>                    
                        </div>
                        <!--                        <div class="panel panel-default ">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                                        <div class="panel-heading menu">
                                                            <h4 class="panel-title">
                                                                <i class="glyphicon glyphicon-chevron-right"></i> KPI
                                                            </h4>
                                                        </div>
                                                    </a>
                                                    <div id="collapse1" class="panel-collapse collapse">
                                                                                        <a href="#"><div class="panel-body submenu">ดัชนีชี้วัดการตรวจราชการประจำปี</div></a>
                                                                                        <a href="#"><div class="panel-body submenu">ดัชนีชี้วัด Service Plan 12 สาขา</div></a>
                                                        <a href="https://docs.google.com/spreadsheets/d/19GG24dkjr_aKIwGfTNsskdpmxbSbkGb23LMfhq9COcU/edit?usp=sharing" target="_blank"><div class="panel-body submenu">KPI Template 2558</div></a>
                                                        <a href="https://docs.google.com/spreadsheets/d/10CsVOm961AUFPdol1LNhNYQy4na1zOEAoDPlV0gws8I/edit?usp=sharing" target="_blank"><div class="panel-body submenu">ตัวชี้วัดตรวจราชการและนิเทศงาน 2559</div></a>
                                                        <a href="https://docs.google.com/spreadsheets/d/1wLwPD6cNgXrEN9au_Kr392UEDZOhBdjGg5kpbClN_UM/edit?usp=sharing" target="_blank"><div class="panel-body submenu">ตัวชี้วัดภาคบังคับ(THIP) 2559</div></a>
                                                                                        <a href="#"><div class="panel-body submenu">ดัชนีชี้วัดกลุ่มวินิจฉัยโรคร่วม DRG INDEX</div></a>
                                                        <a href="https://docs.google.com/spreadsheets/d/18TcfDKQtRcx3poBki02u47H7K8ikFS0zGF1VQpwfJi4/edit?usp=sharing" target="_blank"><div class="panel-body submenu">ดัชนีชี้วัดคุณภาพทีมนำพัฒนาคุณภาพโรงพยาบาล</div></a>
                                                                                        <a href="#"><div class="panel-body submenu">ดัชนีชี้วัดคุณภาพ PCT</div></a>
                        
                                                    </div>                    
                                                </div>   -->
                        <!--                          <div class="panel panel-default ">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                                                        <div class="panel-heading menu">
                                                            <h4 class="panel-title">
                                                                <i class="glyphicon glyphicon-chevron-right"></i> ตัวชี้วัดศูนย์พัฒนาคุณภาพ
                                                            </h4>
                                                        </div>
                                                    </a>
                                                    <div id="collapse6" class="panel-collapse collapse">
                                                        <a href="#"><div class="panel-body submenu">ตัวชี้วัดภาคบังคับ(THIP)</div></a>
                                                        <a href="#"><div class="panel-body submenu">ตัวชี้วัดคุณภาพโรงพยาบาลพังงา</div></a>                               
                                                    </div>                    
                                                </div>    -->
                        <!--                        <div class="panel panel-default ">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                                        <div class="panel-heading menu">
                                                            <h4 class="panel-title">
                                                                <i class="glyphicon glyphicon-chevron-right"></i> บันทึกเวรตรวจการพยาบาล
                                                            </h4>
                                                        </div>
                                                    </a>
                                                    <div id="collapse4" class="panel-collapse collapse">                                
                                                        <a href="https://drive.google.com/open?id=1vhaV77MVaprl_Px7H0b_hWr8Yf1s56BYiR-sJbKRzWw" target="_blank"><div class="panel-body submenu">ประจำเดือนธันวาคม58</div></a>
                                                        <a href="https://drive.google.com/open?id=1xRvlPbIeJ1mFXIvF2h-wq40XO--rrE92SLgbKlruKck" target="_blank"><div class="panel-body submenu">ประจำเดือนมกราคม59</div></a>
                                                        <a href="https://drive.google.com/open?id=1V-cw9dTPXDxK2k5m2RqGfiWnKy7EUcSa0stpTF60vvc" target="_blank"><div class="panel-body submenu">ประจำเดือนกุมภาพันธ์59</div></a>
                                                    </div>                    
                                                </div>  
                                                <div class="panel panel-default ">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                                                        <div class="panel-heading menu">
                                                            <h4 class="panel-title">
                                                                <i class="glyphicon glyphicon-chevron-right"></i> บันทึกเฝ้าระวังผู้ป่วยติดเชื้อในโรงพยาบาล
                                                            </h4>
                                                        </div>
                                                    </a>
                                                    <div id="collapse7" class="panel-collapse collapse">                          
                                                        <a href="https://docs.google.com/spreadsheets/d/18M_os3m1_b2_QETXaoqRbMzvbhDiHLQrAbnm8ezM1wM/edit?usp=sharing" target="_blank"><div class="panel-body submenu">ประจำเดือนกุมภาพันธ์59</div></a>
                                                    </div>                    
                                                </div>  
                                                <div class="panel panel-default ">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                                                        <div class="panel-heading menu">
                                                            <h4 class="panel-title">
                                                                <i class="glyphicon glyphicon-chevron-right"></i> บันทึกสถิติผู้ป่วยใน
                                                            </h4>
                                                        </div>
                                                    </a>
                                                    <div id="collapse8" class="panel-collapse collapse">                          
                                                        <a href="https://docs.google.com/spreadsheets/d/1fG3qL1HB2G2HTx7eoRJqI_j01XfCqGQX_YMdhwIYmdM/edit?usp=sharing" target="_blank"><div class="panel-body submenu">สถิติตึก59</div></a>
                                                    </div>                    
                                                </div> -->
                        <!--                         <div class="panel panel-default ">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                                        <div class="panel-heading menu">
                                                            <h4 class="panel-title">
                                                                <i class="glyphicon glyphicon-chevron-right"></i> บันทึกสรุปยอดผู้ป่วยในหอผู้ป่วย
                                                            </h4>
                                                        </div>
                                                    </a>
                                                    <div id="collapse5" class="panel-collapse collapse">
                                                        <a href="https://drive.google.com/open?id=1TS3ZHIXL_VnX1O3xvxRbP_IqQEOat13plDyTvWv02co" target="_blank"><div class="panel-body submenu">ประจำเดือนพฤศจิกายน58</div></a>
                                                        <a href="https://drive.google.com/open?id=1ONdBK9nPATX_vdGb1bPhXMYfVI4veVKUtbhw_rO8Gwg" target="_blank"><div class="panel-body submenu">ประจำเดือนธันวาคม58</div></a>
                                                        <a href="https://drive.google.com/open?id=1Z_9ozxINhZPfjYqNxqE8f7mM_rtnmY10SL0xU477IUg" target="_blank"><div class="panel-body submenu">ประจำเดือนมกราคม59</div></a>
                                                    </div>                    
                                                </div>  -->
                    </div>
                    <br><br>
                    <div >
                        <a href="http://www.histats.com" alt="page hit counter" target="_blank">
                            <embed src="http://s10.histats.com/605.swf" flashvars="jver=1&amp;acsid=2599725&amp;domi=4" quality="high" width="195" height="50" name="605.swf" align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" wmode="transparent"></a>
                    </div>
                </section>
            </aside>
            <aside class="right-side">
                <section class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main content">
                    <div class="row">
                        <?php
                        echo $content;
                        ?>
                    </div>
                </section>
            </aside>           
        </div>        
        <footer  role="contentinfo" >
            <center>
                <p>Copyright © 2015. All rights reserved. | Currently V.1 beta [Last update:17022016]  </p>  
                <p>by Comcenter Phangnga Hospital</p>              
                <p>Contact information: Tel.3007 , อีเมล์  <a href="mailto:#">comcenter10379@gmail.com </a></p>                
            </center>        
        </footer>
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
