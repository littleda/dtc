<?php
/* @var $this AddressController */
/* @var $model Address */

$this->breadcrumbs=array(
	'Addresses'=>array('index'),
	$model->HOSPCODE,
);

$this->menu=array(
	array('label'=>'List Address', 'url'=>array('index')),
	array('label'=>'Create Address', 'url'=>array('create')),
	array('label'=>'Update Address', 'url'=>array('update', 'id'=>$model->HOSPCODE)),
	array('label'=>'Delete Address', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->HOSPCODE),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Address', 'url'=>array('admin')),
);
?>

<h1>View Address #<?php echo $model->HOSPCODE; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'HOSPCODE',
		'PID',
		'ADDRESSTYPE',
		'HOUSE_ID',
		'HOUSETYPE',
		'ROOMNO',
		'CONDO',
		'HOUSENO',
		'SOISUB',
		'SOIMAIN',
		'ROAD',
		'VILLANAME',
		'VILLAGE',
		'TAMBON',
		'AMPUR',
		'CHANGWAT',
		'TELEPHONE',
		'MOBILE',
		'D_UPDATE',
	),
)); ?>
