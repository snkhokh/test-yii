<?php
/* @var $this IpPoolsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ip Pools',
);

$this->menu=array(
	array('label'=>'Create IpPools', 'url'=>array('create')),
	array('label'=>'Manage IpPools', 'url'=>array('admin')),
);
?>

<h1>Ip Pools</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
