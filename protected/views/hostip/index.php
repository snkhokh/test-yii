<?php
/* @var $this HostipController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hostips',
);

$this->menu=array(
	array('label'=>'Create Hostip', 'url'=>array('create')),
	array('label'=>'Manage Hostip', 'url'=>array('admin')),
);
?>

<h1>Hostips</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
