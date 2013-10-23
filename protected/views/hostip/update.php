<?php
/* @var $this HostipController */
/* @var $model Hostip */

$this->breadcrumbs=array(
	'Hostips'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hostip', 'url'=>array('index')),
	array('label'=>'Create Hostip', 'url'=>array('create')),
	array('label'=>'View Hostip', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Hostip', 'url'=>array('admin')),
);
?>

<h1>Update Hostip <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>