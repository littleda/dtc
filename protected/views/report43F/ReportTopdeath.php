<div class="alert alert-danger fade in">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4> Top Death </h4>
</div>

<div class="well">

    <?php
   
    echo CHtml::form('');
    
    if (!empty($_POST['datepicker1'])){
    $strDate1 = $_POST['datepicker1'];
    }
    
    if (!empty($_POST['datepicker1'])){
    $strDate2 = $_POST['datepicker2'];
    }

    if (empty($strDate1)) {
        if (!empty($_POST['date1'])){        
        $strDate1 = $_GET['date1'];
        }else{
          $strDate1='';  
        }
    }

    if (empty($strDate2)) {
        if (!empty($_POST['date2'])){   
        $strDate2 = $_GET['date2'];
        }else{
         $strDate2='';   
        }
    }
    ?>
    
    <!--<div class="input-append date span4" id="dp31"  data-date-format="yyyy-mm-dd">-->
        <label>จากวันที่</label>
        <input class="span6" size="16" type="text" name="datepicker1" id="datepicker1" value="<?php  echo $strDate1; ?>" >
        <span class="add-on"><i class="icon-th"></i></span>
    <!--</div>-->

    <!--<div class="input-append date span4" id="dp32"   data-date-format="yyyy-mm-dd">-->
        <label>ถึงวันที่</label>
        <input class="span6" size="16" type="text" name="datepicker2" id="datepicker2" value="<?php echo $strDate2; ?>" >
        <span class="add-on"><i class="icon-th"></i></span>
    <!--</div>-->

    <br>
    
    
    <div>
        <?php
        echo CHtml::submitButton('ค้นหา..', '', array('class' => 'btn btn-danger', "data-mini" => "true", "data-inline" => "true"));
        echo CHtml::endForm();
        ?>
    </div>
    <hr>
</div>

<link href="<?php echo Yii::app()->theme->baseUrl; ?>/datepicker/css/jquery-ui.min.css" rel="stylesheet">
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/datepicker/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/datepicker/js/jquery-ui.min.js"></script>

<script>
    $("#datepicker1").datepicker({dateFormat: 'dd/mm/yy',
      
    });

    $("#datepicker2").datepicker({dateFormat: 'dd/mm/yy',

    });
//
//    $("#datepicker1").change(function () {
//        var cutdate = $("#datepicker1").val().split("/");
//        if (parseInt(cutdate[2]) < "2500") {
//            var year = parseInt(cutdate[2]);
//            $("#datepicker1").val(cutdate[0] + "/" + cutdate[1] + "/" + year);
//            //alert(year);
//        }
//    });
//    $("#datepicker2").change(function () {
////        var cutdate = $("#datepicker2").val().split("/");
////        if (parseInt(cutdate[2]) < "2500") {
////            var year = parseInt(cutdate[2]);
////            $("#datepicker2").val(cutdate[0] + "/" + cutdate[1] + "/" + year);
////            //alert(year);
////        }
//    });
</script>
<?php //        echo 'Startdate before'.$strDate1; echo 'enddate before'.$strDate2;?>
<?php
 
  $str_date = date("Y-m-d",strtotime(str_replace('/', '-',$strDate1))); //นำตัวแปรวันที่มาเข้า Function และหาตัวแปรมารับผลการแปลง
//    echo 'Start Date ='.$str_date; 
  $end_date = date("Y-m-d",strtotime(str_replace('/', '-',$strDate2)));
//  echo 'END Date ='.$end_date;

$sql = "SELECT D.DIAGCODE As ICDCODE ,I.DES As Destination ,COUNT(distinct D.PID)  as จำนวนคน,COUNT(D.DIAGCODE) as จำนวนครั้ง
FROM diagnosis_ipd D
Left JOIN admission A ON A.PID = D.PID AND A.AN = D.AN 
LEFT JOIN icd101 I on I.`CODE` = D.DIAGCODE
WHERE  (date_format(A.DATETIME_DISCH, '%Y-%m-%d')) >= '$str_date' AND (date_format(A.DATETIME_DISCH, '%Y-%m-%d')) <= '$end_date'
				AND D.DIAGTYPE = '1'
				AND A.DISCHSTATUS = '9'
GROUP BY D.DIAGCODE,I.DES
order by  จำนวนครั้ง DESC ";

$row = Yii::app()->db->createCommand($sql)->queryAll();
?>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Top Death</div>
    <div class="panel-body">
        <!--<p>รายงานอันดับมูลค่าการใช้ยา</p>-->
    </div>

    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>ICODE</th>
                <th>คำอธิบายโรค</th>
                <th>จำนวนครั้ง</th>
                <th>จำนวนคน</th>
            </tr>
        </thead>
        <tbody>

            <?php
//            echo 'strdate1' . $strDate1;
//            echo 'strdate2' . $strDate2;
            $list = Yii::app()->db->createCommand($sql)->query();
            $row = 1;
            foreach ($list as $ds) {
                ?>
                <tr>
                    <!--<td><?= $row ?></td>-->
                    <td><?= $ds['ICDCODE'] ?></td>
                    <td><?= $ds['Destination'] ?></td>
                    <td><?= $ds['จำนวนคน'] ?></td>
                    <td><?= $ds['จำนวนครั้ง'] ?></td>
                </tr>
                <?php
                $row++;
            }
            ?>
        </tbody>
    </table>
</div>
<hr>









