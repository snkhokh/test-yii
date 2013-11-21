<?php
/* @var $this TaxRatesController */
/* @var $dataProvider CActiveDataProvider */
Yii::app()->clientScript->registerCoreScript('tableForm');

$this->breadcrumbs=array(
	'Все трафик-планы',
);

$this->menu=array(
	array('label'=>'Создать новый', 'url'=>array('create')),
);
?>

<h2>Трафик-планы</h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
