<?php
/* @var $this TblUserController */
/* @var $model TblUser */

$this->breadcrumbs=array(
	'Все администраторы'=>array('index'),
	'Создание нового',
);

?>

<h1>Ввод данных нового администратора</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>