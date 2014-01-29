<?php
/* @var $this IpPoolsController */
/* @var $model IpPools */

$this->breadcrumbs=array(
	'Ip Pools'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List IpPools', 'url'=>array('index')),
	array('label'=>'Create IpPools', 'url'=>array('create')),
	array('label'=>'View IpPools', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage IpPools', 'url'=>array('admin')),
);
?>

<h1>Update IpPools <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>