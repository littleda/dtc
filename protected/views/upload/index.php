

<?php echo 'เลือกแฟ้มข้อมูล' ?><br /> 
<br>
<?php if($uploaded):?>
<p>File <?php echo $dir ?> was import to database .</p>
<?php endif ?>
<?php  echo CHtml::beginForm('','post',array 
   ('enctype'=>'multipart/form-data')) ?> 
   <?php echo CHtml::error($model, 'file')?>
  <?php echo CHtml::activeFileField($model, 'file')?><br>
    <?php  echo CHtml::submitButton('Import') ?>
<?php echo CHtml::endForm()?>