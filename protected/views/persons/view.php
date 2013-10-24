<?php
/* @var $this PersonsController */
/* @var $model Persons */

$this->breadcrumbs=array(
	'Persons'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Persons', 'url'=>array('index')),
	array('label'=>'Create Persons', 'url'=>array('create')),
	array('label'=>'Update Persons', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Persons', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Persons', 'url'=>array('admin')),
);
?>

<h2>Абонент <?php echo $model->Name; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Name',
		'FIO',
		'EMail',
		'Bill',
		'TaxRateId',
		'PrePayedUnits',
		'Flags',
		'Opt',
	),
)); ?>
