<?php
/* @var $this IpPoolsController */
/* @var $model IpPools */

$this->breadcrumbs=array(
	'Ip Pools'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List IpPools', 'url'=>array('index')),
	array('label'=>'Create IpPools', 'url'=>array('create')),
	array('label'=>'Update IpPools', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete IpPools', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IpPools', 'url'=>array('admin')),
);
?>

<h1>View IpPools #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nas_id',
		'first',
		'number',
		'ttl',
		'name',
	),
)); ?>
