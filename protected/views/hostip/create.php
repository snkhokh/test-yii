<?php
/* @var $this HostipController */
/* @var $model Hostip */

$this->breadcrumbs=array(
    'Все хосты'=>array('index'),
    'Хосты абонента "'.$model->person->Name.'"'=>array('persindex','id'=>$model->PersonId),
    'Создать хост',
);

$this->menu=array(
	array('label'=>'Данные абонента', 'url'=>array('persons/view','id'=>$model->PersonId)),
	array('label'=>'Все хосты абонента', 'url'=>array('persindex','id'=>$model->PersonId)),
);
?>

<h2>Новый хост для абонента <?php echo '"'.$model->person->Name.'"' ?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>