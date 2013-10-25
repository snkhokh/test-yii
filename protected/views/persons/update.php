<?php
/* @var $this PersonsController */
/* @var $model Persons */

$this->breadcrumbs=array(
	'Абоненты'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Редактирование',
);

$this->menu=array(
	array('label'=>'List Persons', 'url'=>array('index')),
	array('label'=>'Create Persons', 'url'=>array('create')),
	array('label'=>'View Persons', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Persons', 'url'=>array('admin')),
);
?>

<h2>Редактирование данных абонента <?php echo $model->Name." (id:".$model->id.")"; ?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>