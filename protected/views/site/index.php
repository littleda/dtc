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



<!--<div class="col-md-8">
    <div class="list-group">
        <a href="#" class="list-group-item active">
            <h4 class="list-group-item-heading">List group item heading</h4>
            <p class="list-group-item-text">...</p>
        </a>
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">List group item heading</h4>
            <p class="list-group-item-text">...</p>
        </a> <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">List group item heading</h4>
            <p class="list-group-item-text">...</p>
        </a>
    </div>
</div>
<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" data-src="holder.js/300x300/auto" alt="300x300" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzUwMHg1MDAvYXV0bwpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE1MmVkZGUxYzYxIHRleHQgeyBmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTUyZWRkZTFjNjEiPjxyZWN0IHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjRUVFRUVFIi8+PGc+PHRleHQgeD0iMTg1LjEyNSIgeT0iMjYxLjEiPjUwMHg1MDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
    </div>
</div>
<hr class="featurette-divider">-->

<div class="col-md-12 col-md-offset-0"> 
    <div class="box-header">
        <h3 class="box-title"><i class="glyphicon glyphicon-bullhorn"></i> ข่าวประชาสัมพันธ์ </h3>
    </div>
    <div class="panel panel-default pre-scrollable">

        <!-- Success box -->
        <div class="box box-solid box-default">

            <div class="box-body">
                <table class="table table-hover">
                    <tbody> 
                        <tr> 
                            <td>
                                <blockquote> 
                                    <span class="label label-primary">18 ก.พ. 59</span> &nbsp;&nbsp;                    
                                    <font color="#104E8B"><strong> แจ้งปรับเปลี่ยนเมนูเข้าใช้งาน</strong></font>
                                    <h6>
                                        <font color="#696969"> 
                                        <p>เนื่องจากมีการเพิ่มขึ้นของขอบเขตข้อมูลเกินกว่าที่ทีมพัฒนาได้ออกแบบไว้ในเบื้องต้น ทำให้ข้อมูลที่อยู่บนหน้าเว็บกระจัดการจายไม่เป็นไปในทิศทางเดียวกัน จึงจำเป็นต้องปรับเมนูเข้าใช้งานเพื่อจัดกลุ่มข้อมูล ดังนี้</p>
                                        <ul>                    
                                            <li><b>ตัวชี้วัดTHIP </b><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> อยู่ในเมนู "KPI"</li>
                                            <li><b>ตัวชี้วัดตรวจราชการและนิเทศงาน </b><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> อยู่ในเมนู "KPI"</li>
                                            <font color="#FF0000"> <li><b>บันทึกเวรตรวจการ </b><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> อยู่ในเมนู "บันทึกข้อมูล" ทางซ้ายมือ</li></font>                    
                                            <li><b>เฝ้าระวังผู้ป่วยติดเชื้อในโรงพยาบาล </b><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> อยู่ในเมนู "บันทึกข้อมูล" </li>
                                            <li><b>สถิติตึก </b><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> อยู่ในเมนู "บันทึกข้อมูล"</li>
                                        </ul>
                                        <p class="text-right">--- ทีมพัฒนา ---</p>
                                        </font>
                                    </h6>
                                </blockquote>
                            </td>
                        </tr> 
                        <tr> 
                            <td>
                                <blockquote> 
                                    <span class="label label-primary">18 ก.พ. 59</span> &nbsp;&nbsp;                    
                                    <font color="#104E8B"><strong>ปัญหาการบันทึกข้อมูล</strong></font>
                                    <h6>
                                        <font color="#696969"> 
                                        <p>คุณกำลังประสบปัญหาการใช้ Excel Sheet อยู่รึป่าว?<a href="<?php echo Yii::app()->baseUrl; ?>/doc/excelsheet_prob.pdf" target="_blank"> อ่านตรงนี้ก่อน</a></p>
                                        <p>ตรวจสอบบัญชีgmailที่มีสิทธิ์ใช้บันทึกข้อมูลของแต่ละหน่วยงาน<a href="<?php echo Yii::app()->baseUrl; ?>/doc/dept_gmail.pdf" target="_blank"> ที่นี่..</a></p>
                                        <p>หากปฏิบัติตามแนวทางที่แนะนำไม่ได้ ติดต่อเจ้าหน้าที่ศูนย์คอมพิวเตอร์ โทร.3007</p>
                                        <p class="text-right">--- ทีมพัฒนา ---</p>
                                        </font>
                                    </h6>
                                </blockquote>
                            </td>
                        </tr>  
                        <tr> 
                            <td>
                                <blockquote> 
                                    <span class="label label-primary">01 พ.ค. 58</span> &nbsp;&nbsp;                    
                                    <font color="#104E8B"><strong>ระบบ datacenter โรงพยาบาลพังงา เปิดทดลองใช้งาน</strong></font>
                                    <h6>
                                        <font color="#696969"> 
                                        <p>เจ้าหน้าที่ในโรงพยาบาลสามารถเข้าใช้ระบบได้ มีปัญหาการใช้งานติดต่อเจ้าหน้าที่ศูนย์คอมพิวเตอร์ โทร.3007</p>
                                        <p>Datacenter มีอะไร? <a href="<?php echo Yii::app()->baseUrl; ?>/doc/datacenter_plan.pdf" target="_blank">Follow me</a></p>
                                        <p class="text-right">--- ทีมพัฒนา ---</p>
                                        </font>
                                    </h6>
                                </blockquote>
                            </td>
                        </tr>                   
                    </tbody>
                </table>                             
            </div>        
        </div>      
    </div>  
</div>



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
