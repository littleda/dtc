
<div class="page-header">
    <h1 class="panel-title"><?php echo CHtml::image('images/report.png'); ?>รายงานโรคที่พบบ่อยในผู้ป่วยนอก</h1>
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

</script>
<?php //        echo 'Startdate before'.$strDate1; echo 'enddate before'.$strDate2;?>
<?php
 
  $str_date = date("Y-m-d",strtotime(str_replace('/', '-',$strDate1))); //นำตัวแปรวันที่มาเข้า Function และหาตัวแปรมารับผลการแปลง
//    echo 'Start Date ='.$str_date; 
  $end_date = date("Y-m-d",strtotime(str_replace('/', '-',$strDate2)));
//  echo 'END Date ='.$end_date;
  
  $sql = "SELECT DI.DIAGCODE As ICDCODE,I.DES As Destination,COUNT(distinct DI.PID)  as จำนวนคน
,COUNT(DI.DIAGCODE) as จำนวนครั้ง 
FROM diagnosis_opd DI 

Left JOIN icd101 I ON I.CODE = DI.DIAGCODE


WHERE  (date_format(DI.D_UPDATE, '%Y-%m-%d')) >= '$str_date' AND (date_format(DI.D_UPDATE, '%Y-%m-%d')) <= '$end_date'
       AND   (SUBSTRING(DI.CLINIC ,1,3) = '001' 
			 OR   SUBSTRING(DI.CLINIC ,1,3) = '002' 
			 OR   SUBSTRING(DI.CLINIC ,1,3) = '003' 
			 OR   SUBSTRING(DI.CLINIC ,1,3) = '004'
			 OR   SUBSTRING(DI.CLINIC ,1,3) = '005'
			 OR   SUBSTRING(DI.CLINIC ,1,3) = '006'
			 OR   SUBSTRING(DI.CLINIC ,1,3) = '007'
			 OR   SUBSTRING(DI.CLINIC ,1,3) = '008'
			 OR   SUBSTRING(DI.CLINIC ,1,3) = '009'
                         OR   SUBSTRING(DI.CLINIC ,1,3) = '010'
                         OR   SUBSTRING(DI.CLINIC ,1,3) = '011'
			 OR   SUBSTRING(DI.CLINIC ,1,3) = '012'
			 OR   SUBSTRING(DI.CLINIC ,1,3) = '014'
			 OR   SUBSTRING(DI.CLINIC ,1,3) = '015'
) AND DI.DIAGCODE !='Z539'
       
GROUP BY DI.DIAGCODE,I.DES
order by  COUNT(DI.DIAGCODE) DESC"; 

$row = Yii::app()->db->createCommand($sql)->queryAll();
?>
<?php
$k = 1;
$x = "";
for ($i = 0; $i < count($row); $i++) {
    if ($k < count($row)) {
        $x .= "'" . $row[$i]['ICDCODE'] . "',";
    } else {
        $x .= "'" . $row[$i]['ICDCODE'] . "'";
    }
    $k++;
}
?>
<?php
$l = 1;
$y = "";

for ($j = 0; $j < count($row); $j++) {
    if ($l < count($row)) {
        $y .= "" . $row[$j]['จำนวนคน'] . ",";
    } else {
        $y .= "" . $row[$j]['จำนวนคน'] . "";
    }
    $l++;
}
?>
<?php Yii::app()->clientScript->registerScriptFile('http://code.highcharts.com/highcharts.js', CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile('http://code.highcharts.com/modules/exporting.js', CClientScript::POS_END); ?>

<div id="chart_container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<?php
////line,pie,column
Yii::app()->clientScript->registerScript('JS', "
        $('#chart_container').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'กราฟแสดง อันดับโรคที่พบบ่อยในผู้ป่วยนอก'
            },
//            subtitle: {
//                text: 'แบ่งตามปีงบประมาณ'
//            },
            xAxis: {
                categories: [" . $x . "]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'จำนวนคน'
                }
            },
            tooltip: {
                headerFormat: '<span style=\"font-size:10px\">{point.key}</span><table>',
                pointFormat: '<tr><td style=\"color:{series.color};padding:0\">{series.name}: </td>' +
                        '<td style=\"padding:0\"><b>{point.y} </b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.1,
                    borderWidth: 0
                }
            },
            series: [{
                    name: 'รหัส ICD10',
                    data: [" . $y . "]
                }]
                
                
        });
");
?>
<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Top Disease_OPD</div>
<!--    <div class="panel-body">
        <p>รายงานอันดับมูลค่าการใช้ยา</p>
    </div>-->

    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>ICODE</th>
                <th>คำอธิบายโรค</th>
                <th>จำนวนคน</th>
                <th>จำนวนครั้ง</th>
              
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
<?php
//$this->widget('zii.widgets.grid.CGridView', array(
//    'id' => 'topten-grid',
//    'dataProvider' => $model,)
//);
?>

