<?php
/* @var $this NasController */
/* @var $model Nas */

$this->breadcrumbs=array(
	'Nases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Nas', 'url'=>array('index')),
	array('label'=>'Create Nas', 'url'=>array('create')),
	array('label'=>'View Nas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Nas', 'url'=>array('admin')),
);
?>

<h1>Update Nas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>