<?php
/* @var $this AddressController */
/* @var $model Address */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'address-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'HOSPCODE'); ?>
		<?php echo $form->textField($model,'HOSPCODE',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'HOSPCODE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PID'); ?>
		<?php echo $form->textField($model,'PID',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'PID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ADDRESSTYPE'); ?>
		<?php echo $form->textField($model,'ADDRESSTYPE',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'ADDRESSTYPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOUSE_ID'); ?>
		<?php echo $form->textField($model,'HOUSE_ID',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'HOUSE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOUSETYPE'); ?>
		<?php echo $form->textField($model,'HOUSETYPE',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'HOUSETYPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ROOMNO'); ?>
		<?php echo $form->textField($model,'ROOMNO',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ROOMNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CONDO'); ?>
		<?php echo $form->textField($model,'CONDO',array('size'=>60,'maxlength'=>75)); ?>
		<?php echo $form->error($model,'CONDO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOUSENO'); ?>
		<?php echo $form->textField($model,'HOUSENO',array('size'=>60,'maxlength'=>75)); ?>
		<?php echo $form->error($model,'HOUSENO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SOISUB'); ?>
		<?php echo $form->textField($model,'SOISUB',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'SOISUB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SOIMAIN'); ?>
		<?php echo $form->textField($model,'SOIMAIN',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'SOIMAIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ROAD'); ?>
		<?php echo $form->textField($model,'ROAD',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ROAD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VILLANAME'); ?>
		<?php echo $form->textField($model,'VILLANAME',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'VILLANAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VILLAGE'); ?>
		<?php echo $form->textField($model,'VILLAGE',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'VILLAGE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TAMBON'); ?>
		<?php echo $form->textField($model,'TAMBON',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'TAMBON'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AMPUR'); ?>
		<?php echo $form->textField($model,'AMPUR',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'AMPUR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CHANGWAT'); ?>
		<?php echo $form->textField($model,'CHANGWAT',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'CHANGWAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TELEPHONE'); ?>
		<?php echo $form->textField($model,'TELEPHONE',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'TELEPHONE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MOBILE'); ?>
		<?php echo $form->textField($model,'MOBILE',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'MOBILE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'D_UPDATE'); ?>
		<?php echo $form->textField($model,'D_UPDATE'); ?>
		<?php echo $form->error($model,'D_UPDATE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->