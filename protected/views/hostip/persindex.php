<?php
/* @var $this HostipController */


$this->breadcrumbs=array(
	'Hostips'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Hostip', 'url'=>array('index')),
	array('label'=>'Create Hostip', 'url'=>array('create')),
);

?>

<h2>Хосты абонента</h2>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'phostip-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'id',
		'Name',
		'int_ip',
		'ext_ip',
		'mask',
		'mac',
		/*
		'PersonId',
		'flags',
		'password',
		'inact_timeout',
		'status',
		'ch_status',
		*/
	),
)); ?>
