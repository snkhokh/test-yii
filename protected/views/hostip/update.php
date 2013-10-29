<?php
/* @var $this HostipController */
/* @var $model Hostip */

$this->breadcrumbs=array(
	'Все хосты'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Редактирование',
);

$this->menu=array(
	array('label'=>'Создать хост', 'url'=>array('create')),
	array('label'=>'Просмотр данных', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Update Hostip <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>