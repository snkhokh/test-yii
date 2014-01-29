<?php
/* @var $this IpPoolsController */
/* @var $model IpPools */

$this->breadcrumbs=array(
	'Ip Pools'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IpPools', 'url'=>array('index')),
	array('label'=>'Manage IpPools', 'url'=>array('admin')),
);
?>

<h1>Create IpPools</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>