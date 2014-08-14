<?php
/* @var $this NasController */
/* @var $model Nas */

$this->breadcrumbs=array(
	'Nases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Nas', 'url'=>array('index')),
	array('label'=>'Create Nas', 'url'=>array('create')),
	array('label'=>'Update Nas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Nas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Nas', 'url'=>array('admin')),
);
?>

<h1>View Nas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ip_addr',
	),
)); ?>
