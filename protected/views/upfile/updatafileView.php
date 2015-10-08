
<div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">อัพเดตไฟล์ข้อมูล</h3>
            </div>
    <div class="panel-body"> 
    
    <?php
$model = new UploadFile();
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'file-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'), // จุดสำคัญ ห้ามลืมใส่ กรณี "อัพโหลดไฟล์ทุกชนิด"
));
 
echo $form->label($model,'fileField');
echo $form->fileField($model,'fileField');
echo $form->error($model,'fileField');
 
echo '<hr>';
echo CHtml::submitButton('อัพโหลดไฟล์');
 
$this->endWidget();
 
echo '<hr>';
 
// ตรวจสอบการ Submit
if(isset($_POST['UploadFile'])){    
    $path = Yii::app()->basePath.'/../doc/'; // ตำแหน่งที่เก็บไฟล์ /var/www/html/yii-dtc/themes/bootstrap3/doc
    $file = CUploadedFile::getInstance($model,'fileField'); // ดึง Object CUploadFile ของ Field "fileField"
    if (is_object($file) && get_class($file)==='CUploadedFile'){
        $file->saveAs($path . $file->name); // บันทึกไฟล์ลงในโฟล์เดอร์ /var/www/html/yii-dtc/themes/bootstrap3/doc
        // ตรวจสอบไฟล์ที่อัพโหลด
        if(is_file($path . $file->name)){
            echo 'อัพโหลดไฟล์สำเร็จ ';
            $pathImg = Yii::app()->baseUrl.'/doc/' . $file->name;
            echo CHtml::link('ดูไฟล์อัพโหลด', $pathImg, array('target' => '_blank'));
        }else{
            echo 'อัพโหลดไฟล์ไม่สำเร็จ';
        }
    }else{
        echo 'ไม่พบไฟล์';
    }
}

?>
    
    
    
    </div>







