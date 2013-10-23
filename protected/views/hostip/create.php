<?php
/* @var $this HostipController */
/* @var $model Hostip */

$this->breadcrumbs=array(
	'Hostips'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hostip', 'url'=>array('index')),
	array('label'=>'Manage Hostip', 'url'=>array('admin')),
);
?>

<h1>Create Hostip</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>