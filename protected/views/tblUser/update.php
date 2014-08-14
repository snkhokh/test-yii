<?php
/* @var $this TblUserController */
/* @var $model TblUser */

$this->breadcrumbs=array(
	'Все администраторы'=>array('index'),
	$model->username=>array('view','id'=>$model->id),
	'Редактирование',
);

$this->menu=array(
	array('label'=>'Создать нового', 'url'=>array('create')),
	array('label'=>'Просмотр этого', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Редактирование данных администратора <?php echo $model->username; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>