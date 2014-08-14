<?php
/* @var $this NasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nases',
);

$this->menu=array(
	array('label'=>'Create Nas', 'url'=>array('create')),
	array('label'=>'Manage Nas', 'url'=>array('admin')),
);
?>

<h1>Nases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
