<?php
/* @var $this TaxRatesController */
/* @var $model TaxRates */

$this->breadcrumbs=array(
	'Все трафик-планы'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'Создать новый', 'url'=>array('create')),
	array('label'=>'Редактировать этот', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить этот', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Данные трафик-плана <?php echo $model->Name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Name',
		'TrafUnit',
		'PrePayedUnits',
		'dir',
		'flag',
	),
)); ?>
