<?php
/* @var $this PersonsController */
/* @var $model Persons */

$this->breadcrumbs=array(
	'Persons'=>array('index'),
	'Create',
);

$this->menu=array(
        array('label'=>'Все абоненты', 'url'=>array('index')),
	array('label'=>'Все хосты', 'url'=>array('hostip/index')),
);
?>

<h2>Новый абонент системы учета трафика</h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>