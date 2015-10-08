<?php
/* @var $this AddressController */
/* @var $model Address */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'HOSPCODE'); ?>
		<?php echo $form->textField($model,'HOSPCODE',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PID'); ?>
		<?php echo $form->textField($model,'PID',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADDRESSTYPE'); ?>
		<?php echo $form->textField($model,'ADDRESSTYPE',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOUSE_ID'); ?>
		<?php echo $form->textField($model,'HOUSE_ID',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOUSETYPE'); ?>
		<?php echo $form->textField($model,'HOUSETYPE',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ROOMNO'); ?>
		<?php echo $form->textField($model,'ROOMNO',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CONDO'); ?>
		<?php echo $form->textField($model,'CONDO',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOUSENO'); ?>
		<?php echo $form->textField($model,'HOUSENO',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SOISUB'); ?>
		<?php echo $form->textField($model,'SOISUB',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SOIMAIN'); ?>
		<?php echo $form->textField($model,'SOIMAIN',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ROAD'); ?>
		<?php echo $form->textField($model,'ROAD',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VILLANAME'); ?>
		<?php echo $form->textField($model,'VILLANAME',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VILLAGE'); ?>
		<?php echo $form->textField($model,'VILLAGE',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TAMBON'); ?>
		<?php echo $form->textField($model,'TAMBON',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AMPUR'); ?>
		<?php echo $form->textField($model,'AMPUR',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CHANGWAT'); ?>
		<?php echo $form->textField($model,'CHANGWAT',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TELEPHONE'); ?>
		<?php echo $form->textField($model,'TELEPHONE',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MOBILE'); ?>
		<?php echo $form->textField($model,'MOBILE',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'D_UPDATE'); ?>
		<?php echo $form->textField($model,'D_UPDATE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->