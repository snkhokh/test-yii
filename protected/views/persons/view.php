<?php
$this->breadcrumbs=array(
	'Все абоненты'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'Редактировать данные', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить абонента', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Абонент "'.$model->Name.'" будет удален. Вы уверены ?')),
	array('label'=>'Создать нового абонента', 'url'=>array('create')),
	array('label'=>'Перейти к хостам', 'url'=>array('hostip/persindex','id'=>$model->id)),
	array('label'=>'Создать новый хост', 'url'=>array('hostip/create','pid'=>$model->id)),
);?>

<h2>Абонент <?php echo '"'.$model->Name.'"'; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Name',
		'FIO',
		'EMail',
		'taxs.Name:text:Трафик-план',
		'PrePayedUnits',
		'Flags',
		'Opt',
	),
)); ?>
