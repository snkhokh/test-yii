<?php
/* @var $this TblUserController */
/* @var $model TblUser */

$this->breadcrumbs=array(
	'Все администраторы'=>array('index'),
	$model->username,
);

$this->menu=array(
	array('label'=>'Создать нового', 'url'=>array('create')),
	array('label'=>'Редактировать этого', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить этого', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Данные администратора <?php echo $model->username; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'username',
		'password',
		'email',
	),
)); ?>
