<?php
/* @var $this HostipController */
/* @var $model Hostip */

$this->breadcrumbs=array(
	'Все хосты'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'Все хосты абонента', 'url'=>array('persindex','id'=>$model->person->id)),
	array('label'=>'Создать новый', 'url'=>array('create')),
	array('label'=>'Изменить данные', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить хост', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	);
?>

<h1>Данные хоста абонента <?php echo $model->person->Name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Name',
		'int_ip_s',
		'mask',
		'mac',
		'flags',
		'password',
	),
)); ?>
