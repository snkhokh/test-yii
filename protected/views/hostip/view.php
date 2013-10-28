<?php
/* @var $this HostipController */
/* @var $model Hostip */

$this->breadcrumbs=array(
	'Hostips'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Hostip', 'url'=>array('index')),
	array('label'=>'Create Hostip', 'url'=>array('create')),
	array('label'=>'Update Hostip', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Hostip', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hostip', 'url'=>array('admin')),
);
?>

<h1>View Hostip #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Name',
		array('name'=>'int_ip',
                    'value'=>long2ip($model->int_ip)),
		'int_ip_s',
		'mask',
		'mac',
		'PersonId',
		'flags',
		'password',
		'inact_timeout',
		'status',
		'ch_status',
	),
)); ?>
