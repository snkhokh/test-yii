<?php
$this->breadcrumbs=array(
	'Абоненты'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'Редактировать данные', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Создать нового', 'url'=>array('create')),
	array('label'=>'Перейти к хостам', 'url'=>array('/hostip/persindex','id'=>$model->id)),
	array('label'=>'Перейти к списку абонентов', 'url'=>array('index')),
);
?>

<h2>Абонент <?php echo $model->Name; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Name',
		'FIO',
		'EMail',
		'taxs.Name:text:Тарифный план',
		'PrePayedUnits',
		'Flags',
		'Opt',
	),
)); ?>
