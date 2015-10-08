

<?php echo "เลือก รายงาน  43 แฟ้ม"."<br>"."<br>"; ?>
<?=CHtml::dropDownList('ddname', '', array('1'=>'ACCIDENT','2'=>'ADDRESS','3'=>'ADMISSION',
        '4'=>'ANC','5'=>'APPOINTMENT','6'=>'CARD','7'=>'CHARGE_IPD','8'=>'CHARGE_OPD','9'=>'CHRONICFU',
        '10'=>'DEATH','11'=>'DIAGNOSIS_IPD','12'=>'DIAGNOSIS_OPD','13'=>'DRUG_IPD','14'=>'DRUG_OPD',
        '15'=>'DRUGALLERGY','16'=>'EPI','17'=>'FP','18'=>'HOME','19'=>'LABFU','20'=>'LABOR','21'=>'NEWBORN',
        '22'=>'NEWBORNCARE','23'=>'PERSON','24'=>'POSTNATAL','25'=>'PRENATAL','26'=>'PROCEDURE_IPD',
        '27'=>'PROCEDURE_OPD','28'=>'PROVIDER','29'=>'SERVICE','30'=>'SURVEILLANCE',))?>

<?php echo "วันที่เริ่มต้น"; ?>

<?php
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'datepicker-Start',
    'value'=>date('d-m-Y'),    
    'options'=>array(
        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
        'showButtonPanel'=>true,
    ),
    'htmlOptions'=>array(
        'style'=>''
    ),
));
?>

<?php echo "วันที่สิ้นสุด"; ?>
<?php
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'datepicker-End',
    'value'=>date('d-m-Y'),    
    'options'=>array(
        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
        'showButtonPanel'=>true,
    ),
    'htmlOptions'=>array(
        'style'=>''
    ),
));
?>

<?php echo CHtml::submitButton('บันทึก'); ?>


<!--$dataProvider=new CActiveDataProvider('Post');

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
));

 $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'title',          // display the 'title' attribute
        'category.name',  // display the 'name' attribute of the 'category' relation
        'content:html',   // display the 'content' attribute as purified HTML
        array(            // display 'create_time' using an expression
            'name'=>'create_time',
            'value'=>'date("M j, Y", $data->create_time)',
        ),
        array(            // display 'author.username' using an expression
            'name'=>'authorName',
            'value'=>'$data->author->username',
        ),
        array(            // display a column with "view", "update" and "delete" buttons
            'class'=>'CButtonColumn',
        ),
    ),
));-->

