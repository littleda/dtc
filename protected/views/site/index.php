<!--<div><h1><center>พื้นที่แสดงเนื้อหาหน้าแรก</center></h1></div>-->
<?php
date_default_timezone_set("Asia/Bangkok");

function DateThai($strDate) {
    $strYear = date("Y", strtotime($strDate)) + 543;
    $strMonth = date("n", strtotime($strDate));
    $strDay = date("j", strtotime($strDate));
    $strMonthCut = Array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
    $strMonthThai = $strMonthCut[$strMonth];
    return "$strDay $strMonthThai $strYear";
}
?>

<marquee direction="left" height="50" onmouseout="this.start()" onmouseover="this.stop()" scrollamount="5" width="100%" style="height: 50px; width: 100%;">
    <b><font size="2" face="Arial" color="#100C7F"><?php
        $strdate = date("d-m-Y H:i:s");
        //$eng_date = strtotime($date);
        //echo thai_date($eng_date); 
        echo "วันที่ " . DateThai($strdate) . " เวลา " . date("H:i") . " น. "
        ?></font></b>
    <font size="4" face=" sans-serif" color="#100C7F"> ## ยินดีต้อนรับเข้าสู่ ระบบ Datacenter โรงพยาบาลพังงา ##</font>
</marquee>
<br>
<div class="col-md-12">

    <!-- Success box -->

    <div class="box box-solid box-default">
        <div class="box-header">
            <!--            <div class="box-tools pull-right">
                            <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-chevron-down"></i></button>
                        </div>-->

            <h3 class="box-title"><i class="glyphicon glyphicon-bullhorn"></i> ข่าวประชาสัมพันธ์ </h3>
        </div>
        <div class="box-body">
            <table class="table table-hover">
                <tbody><tr> 
                        <td>
                            <span class="label label-primary">01 พ.ค. 58</span> &nbsp;&nbsp;                    
                            <strong> <a href="#">ระบบ datacenter โรงพยาบาลพังงา เปิดทดลองใช้งาน</a> </strong>
                            <h6>
                                <font color="#696969"> 
                                <p>เจ้าหน้าที่ในโรงพยาบาลสามารถล็อคอินเข้าใช้ระบบได้ มีปัญหาการใช้งานติดต่อเจ้าหน้าที่ศูนย์คอมพิวเตอร์ โทร.3007</p>
                                <p>คู่มือการใช้งานระบบ <a href="<?php echo Yii::app()->theme->baseUrl; ?>/doc/datacenter_manual.pdf" target="_blank">ดาวโหลดที่นี่</a></p>
                                </font>
                            </h6>
                        </td>

                    </tr>                      
                    <tr> 
                        <td>
                            <span class="label label-primary">04 มิ.ย. 58</span> &nbsp;&nbsp;                    
                            <strong> <a href="#">KPI Template ทดลองกรอกข้อมูลผ่านระบบ</a> </strong>
                            <h6><font color="#696969"> 
                                <p>หน่วยงานที่เกี่ยวข้องสามารถเข้าใช้งานด้วยบัญชี Gmail ที่แจ้งไว้ ผ่านเมนู KPI->KPI Template </p>
                                <p>คู่มือการกรอก KPI Template ผ่านระบบ Datacenter <a href="<?php echo Yii::app()->theme->baseUrl; ?>/doc/KPI_Template_manual.pdf" target="_blank">ดาวโหลดที่นี่</a></p>
                                </font>
                            </h6>
                        </td>
                    </tr>                      
                    <tr> 
                        <td>
                            <span class="label label-primary">25 พ.ย. 58</span> &nbsp;&nbsp;                    
                            <strong> <a href="#">บันทึกเวรตรวจการพยาบาล</a> </strong>
                            <h6><font color="#696969"> 
                                <p>หน่วยงานที่เกี่ยวข้องสามารถเข้าใช้งานด้วยบัญชี Gmail ที่แจ้งไว้ ผ่านเมนู บันทึกเวรตรวจการ->เลือกเดือนที่จะบันทึกข้อมูล</p>
                                <p>คู่มือบันทึกเวรตรวจการพยาบาล<a href="<?php echo Yii::app()->theme->baseUrl; ?>/doc/nurselog_manual.pdf" target="_blank">ดาวโหลดที่นี่</a></p>
                                </font>
                            </h6>
                        </td>
                    </tr>   
                </tbody></table>                             
        </div><!-- /.box-body -->          
    </div><!-- /.box -->          
</div>
<!--<h1 class="page-header">Dashboard</h1>

<div class="row placeholders">
    <div class="col-xs-6 col-sm-3 placeholder">
        <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4>Label</h4>

        <span class="text-muted">Something else</span>
    </div>
    <div class="col-xs-6 col-sm-3 placeholder">
        <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4>Label</h4>
        <span class="text-muted">Something else</span>
    </div>
    <div class="col-xs-6 col-sm-3 placeholder">
        <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4>Label</h4>
        <span class="text-muted">Something else</span>
    </div>
    <div class="col-xs-6 col-sm-3 placeholder">
        <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4>Label</h4>
        <span class="text-muted">Something else</span>
    </div>
</div>

<h2 class="sub-header">Section title</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td>sit</td>
            </tr>
            <tr>
                <td>1,002</td>
                <td>amet</td>
                <td>consectetur</td>
                <td>adipiscing</td>
                <td>elit</td>
            </tr>
            <tr>
                <td>1,003</td>
                <td>Integer</td>
                <td>nec</td>
                <td>odio</td>
                <td>Praesent</td>
            </tr>
            <tr>
                <td>1,003</td>
                <td>libero</td>
                <td>Sed</td>
                <td>cursus</td>
                <td>ante</td>
            </tr>
            <tr>
                <td>1,004</td>
                <td>dapibus</td>
                <td>diam</td>
                <td>Sed</td>
                <td>nisi</td>
            </tr>
            <tr>
                <td>1,005</td>
                <td>Nulla</td>
                <td>quis</td>
                <td>sem</td>
                <td>at</td>
            </tr>
            <tr>
                <td>1,006</td>
                <td>nibh</td>
                <td>elementum</td>
                <td>imperdiet</td>
                <td>Duis</td>
            </tr>
            <tr>
                <td>1,007</td>
                <td>sagittis</td>
                <td>ipsum</td>
                <td>Praesent</td>
                <td>mauris</td>
            </tr>
            <tr>
                <td>1,008</td>
                <td>Fusce</td>
                <td>nec</td>
                <td>tellus</td>
                <td>sed</td>
            </tr>
            <tr>
                <td>1,009</td>
                <td>augue</td>
                <td>semper</td>
                <td>porta</td>
                <td>Mauris</td>
            </tr>
            <tr>
                <td>1,010</td>
                <td>massa</td>
                <td>Vestibulum</td>
                <td>lacinia</td>
                <td>arcu</td>
            </tr>
            <tr>
                <td>1,011</td>
                <td>eget</td>
                <td>nulla</td>
                <td>Class</td>
                <td>aptent</td>
            </tr>
            <tr>
                <td>1,012</td>
                <td>taciti</td>
                <td>sociosqu</td>
                <td>ad</td>
                <td>litora</td>
            </tr>
            <tr>
                <td>1,013</td>
                <td>torquent</td>
                <td>per</td>
                <td>conubia</td>
                <td>nostra</td>
            </tr>
            <tr>
                <td>1,014</td>
                <td>per</td>
                <td>inceptos</td>
                <td>himenaeos</td>
                <td>Curabitur</td>
            </tr>
            <tr>
                <td>1,015</td>
                <td>sodales</td>
                <td>ligula</td>
                <td>in</td>
                <td>libero</td>
            </tr>
        </tbody>
    </table>
</div>-->


<!--<div class="nav navbar-left ">
   
         
    <li><a class="navbar-brand" href="index.php?r=course/View"><font color = "ORANGE">Hospital Profile</font></a></li>
    <li><a class="navbar-brand" href="index.php?r=course/View"><font color = "ORANGE">รายงานประจำปี</font></a></li>
    <li><a class="navbar-brand" href="index.php?r=course/View"><font color = "ORANGE">ข้อมูลทรัพยากรสุขภาพ</font></a></li>
    <li><a class="navbar-brand" href="http://www.iphdc.net/th/"><font color = "ORANGE"> KPI Template </font></a></li>
    
    <li><a class="navbar-brand navbar-text" ><font color = "Black">Web Link </font></a></li>
    <li><a class="navbar-brand" href="index.php?r=course/View"><font color = "ORANGE">ศูนย์มาตรฐานรหัส</font></a></li>
    <li><a class="navbar-brand" href="index.php?r=course/View"><font color = "ORANGE">รหัสสถานบริการ</font></a></li>
    <li><a class="navbar-brand" href="index.php?r=course/View"><font color = "ORANGE">รหัสมาตรฐาน รพ.สต.ฝศมช.</font></a></li>
    <li><a class="navbar-brand" href="index.php?r=course/View"><font color = "ORANGE">ICD 10</font></a></li>
    <li><a class="navbar-brand" href="index.php?r=course/View"><font color = "ORANGE">HDC สสจ.พังงา</font></a></li>
    
    </div>-->
<!-- Main jumbotron for a primary marketing message or call to action -->
<!--      <div class="jumbotron">
        <h1>Hello, พังงา</h1>
        <p>DATACENTER PHANG-NGA HOSPITAL</p>
       <p><a href="#" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p> 
      </div>-->
