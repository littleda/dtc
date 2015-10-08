
<div class="page-header">
    <h1 class="panel-title"><?php echo CHtml::image('images/report.png'); ?> รายงานโรคหลักที่พบบ่อยในผู้ป่วยใน</h1>
</div>
<?php
//$this->widget('zii.widgets.grid.CGridView', array(
//    'id' => 'topten-grid',
//    'dataProvider' => $model,)
//);
?>

<div class="alert alert-danger fade in">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4> Top Disease_IPD </h4>
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

<?php
 
  $str_date = date("Y-m-d",strtotime(str_replace('/', '-',$strDate1))); //นำตัวแปรวันที่มาเข้า Function และหาตัวแปรมารับผลการแปลง
    //echo 'Start Date ='.$str_date; 
  $end_date = date("Y-m-d",strtotime(str_replace('/', '-',$strDate2)));
  //echo 'END Date ='.$end_date;
  
  $sql = "SELECT DIP.DIAGCODE As ICDCODE,I.DES As Destination,COUNT(distinct DIP.PID) as จำนวนคน
,COUNT(DIP.DIAGCODE) as จำนวนครั้ง

FROM diagnosis_ipd DIP
Left JOIN icd101 I ON I.CODE = DIP.DIAGCODE

WHERE  DIP.DIAGTYPE = '1' AND   (date_format(DIP.D_UPDATE, '%Y-%m-%d')) >= '$str_date' AND (date_format(DIP.D_UPDATE, '%Y-%m-%d')) <= '$end_date'
GROUP BY DIP.DIAGCODE,I.DES
order by  COUNT(DIP.DIAGCODE) DESC"; 

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
                text: 'กราฟแสดง อันดับโรคหลักที่พบบ่อยในผู้ป่วยใน'
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
    <div class="panel-heading">Top Disease_IPD</div>

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
<!--                    <td><?= $row ?></td>-->
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









