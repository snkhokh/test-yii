<?php
/* @var $this IpPoolsController */
/* @var $model IpPools */

$this->breadcrumbs=array(
	'Пулы IP адресов'=>array('admin'),
	'Изменение параметров пула',
);

$this->menu=array(
	array('label'=>'Создать новый пул', 'url'=>array('create')),
);
$this->renderPartial('_form', array('model'=>$model)); ?>