<?php
/* @var $this NasController */
/* @var $model Nas */

$this->breadcrumbs=array(
	'Nases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Nas', 'url'=>array('index')),
	array('label'=>'Manage Nas', 'url'=>array('admin')),
);
?>

<h1>Create Nas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>