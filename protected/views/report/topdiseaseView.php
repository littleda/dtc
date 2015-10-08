<?php
echo CHtml::scriptFile('js/jquery-1.11.1.js');
echo CHtml::scriptFile('js/autocomplete.js');
echo CHtml::cssFile('css/autocomplete.css');
//echo CHtml::scriptFile('js/changeyear.js');
?>
<?php
echo CHtml::form('');
$icdcode = null;
$icddes = null;
if (!empty($_POST)) {
    $icdcode = $_POST['h_arti_id'];
    $icddes = $_POST['show_arti_topic'];
}
?> 
<div class="page-header">
    <h1 class="panel-title"><?php echo CHtml::image('images/report.png'); ?>รายงานโรคที่พบ</h1>
</div>
<div class="alert alert-danger fade in">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
    <h4> Top Disease</h4>
</div>
<div class="well">
    <div class="panel-heading">
        <div class = "form-group">
            <div class="row">
                <div class="col-md-2 col-xs-5" style="text-align:right"><label>1. ระบุชื่อโรค</label></div>
                <div class=" col-md-10">
                    <?php if (empty($icdcode)):
                        ?>
                        <input name="h_arti_id" type="hidden" id="h_arti_id" value="" />      
                        <input class="form-control" name="show_arti_topic" type="text" id="show_arti_topic"  />                                
                    <?php else: ?>
                        <input name="h_arti_id" type="hidden" id="h_arti_id" value="<?php echo $icdcode ?>" />      
                        <input class="form-control" name="show_arti_topic" type="text" id="show_arti_topic" value="<?php echo $icddes ?>" /> 
                    <?php endif; ?>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-2 col-xs-5" style="text-align:right"><label>2. ตั้งแต่วันที่</label></div>
            <div class="col-md-4"> <input class="form-control" type="date" /> </div>
            <div class="col-md-2 col-xs-5" style="text-align:right"><label>ถึงวันที่</label></div>
            <div class="col-md-4"><input class="form-control" type="date" /></div>
        </div>
    </div>
    <div align="right">
        <?php
        echo CHtml::submitButton('ค้นหา..', array('class' => 'btn btn-default'));
        echo CHtml::endForm();
        ?>
    </div> 
</div>
<div class="panel panel-default">
    <div class="panel-heading">Top Disease_IPD</div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>ICODE</th>
                <th>คำอธิบายโรค</th>          
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($icddes)) {
                $sql = "select * from icd101 where DES ='$icddes'";
                $list = Yii::app()->db->createCommand($sql)->query();
                $row = 1;
                foreach ($list as $ds) {
                    ?>
                    <tr>
                        <td><?= $row ?></td>
                        <td><?= $ds['CODE'] ?></td>
                        <td><?= $ds['DES'] ?></td>
                    </tr>
                    <?php
                    $row++;
                }
            }
            ?>
        </tbody>
    </table>
</div>
<script type="text/javascript">
    function make_autocom(autoObj, showObj) {
        var mkAutoObj = autoObj;
        var mkSerValObj = showObj;
        new Autocomplete(mkAutoObj, function () {
            this.setValue = function (id) {
                document.getElementById(mkSerValObj).value = id;
            }
            if (this.isModified)
                this.setValue("");
            if (this.value.length < 1 && this.isNotClick)
                return;
            return "<?php echo Yii::app()->theme->baseUrl; ?>/a/gicddata.php?q=" + encodeURIComponent(this.value);
        });
    }

    // การใช้งาน  
    // make_autocom(" id ของ input ตัวที่ต้องการกำหนด "," id ของ input ตัวที่ต้องการรับค่า");  
    make_autocom("show_arti_topic", "h_arti_id");

</script> 