<?php
/* @var $this AddressController */
/* @var $data Address */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOSPCODE')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->HOSPCODE), array('view', 'id'=>$data->HOSPCODE)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PID')); ?>:</b>
	<?php echo CHtml::encode($data->PID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADDRESSTYPE')); ?>:</b>
	<?php echo CHtml::encode($data->ADDRESSTYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOUSE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->HOUSE_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOUSETYPE')); ?>:</b>
	<?php echo CHtml::encode($data->HOUSETYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ROOMNO')); ?>:</b>
	<?php echo CHtml::encode($data->ROOMNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CONDO')); ?>:</b>
	<?php echo CHtml::encode($data->CONDO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('HOUSENO')); ?>:</b>
	<?php echo CHtml::encode($data->HOUSENO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SOISUB')); ?>:</b>
	<?php echo CHtml::encode($data->SOISUB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SOIMAIN')); ?>:</b>
	<?php echo CHtml::encode($data->SOIMAIN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ROAD')); ?>:</b>
	<?php echo CHtml::encode($data->ROAD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VILLANAME')); ?>:</b>
	<?php echo CHtml::encode($data->VILLANAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VILLAGE')); ?>:</b>
	<?php echo CHtml::encode($data->VILLAGE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TAMBON')); ?>:</b>
	<?php echo CHtml::encode($data->TAMBON); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AMPUR')); ?>:</b>
	<?php echo CHtml::encode($data->AMPUR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CHANGWAT')); ?>:</b>
	<?php echo CHtml::encode($data->CHANGWAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TELEPHONE')); ?>:</b>
	<?php echo CHtml::encode($data->TELEPHONE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOBILE')); ?>:</b>
	<?php echo CHtml::encode($data->MOBILE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('D_UPDATE')); ?>:</b>
	<?php echo CHtml::encode($data->D_UPDATE); ?>
	<br />

	*/ ?>

</div>