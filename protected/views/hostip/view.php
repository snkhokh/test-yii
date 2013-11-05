<?php
/* @var $this HostipController */
/* @var $model Hostip */

$this->breadcrumbs=array(
    'Все хосты'=>array('index'),
    'Хосты абонента "'.$model->person->Name.'"'=>array('persindex','id'=>$model->PersonId),
    'Хост "'.$model->Name.'"',
);

$this->menu=array(
	array('label'=>'Данные абонента', 'url'=>array('persons/view','id'=>$model->PersonId)),
	array('label'=>'Все хосты абонента', 'url'=>array('persindex','id'=>$model->PersonId)),
	array('label'=>'Создать новый хост', 'url'=>array('create','pid'=>$model->PersonId)),
	array('label'=>'Изменить данные хоста', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить хост', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	);
?>

<h2>Данные хоста абонента <?php echo '"'.$model->person->Name.'"'; ?></h2>

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
