<?php
/* @var $this PersonsController */
/* @var $model Persons */

$this->breadcrumbs=array(
	'Абоненты'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Редактирование',
);

$this->menu=array(
	array('label'=>'Перейти к его хостам', 'url'=>array('hostip/persindex','id'=>$model->id)),
	array('label'=>'Удалить этого', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Абонент "'.$model->Name.'" будет удален. Вы уверены ?')),
	array('label'=>'Создать ему новый хост', 'url'=>array('hostip/create','pid'=>$model->id)),
	array('label'=>'Создать нового абонента', 'url'=>array('create')),
        array('label'=>'Все абоненты', 'url'=>array('index')),
	array('label'=>'Все хосты', 'url'=>array('hostip/index')),
);
?>

<h2>Редактирование данных абонента <?php echo '"'.$model->Name.'"'; ?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>