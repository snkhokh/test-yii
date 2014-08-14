<?php
/* @var $this HostipController */
/* @var $model Hostip */

$this->breadcrumbs=array(
	'Все хосты'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Редактирование',
);

$this->menu=array(
	array('label'=>'Данные абонента', 'url'=>array('persons/view','id'=>$model->PersonId)),
	array('label'=>'Все хосты абонента', 'url'=>array('persindex','id'=>$model->PersonId)),
	array('label'=>'Создать новый хост', 'url'=>array('create','pid'=>$model->PersonId)),
	array('label'=>'Удалить хост', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h2>Изменение данных хоста абонента <?php echo '"'.$model->person->Name.'"' ?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>