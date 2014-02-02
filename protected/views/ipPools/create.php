<?php
/* @var $this IpPoolsController */
/* @var $model IpPools */

$this->breadcrumbs=array(
	'Пулы IP адресов'=>array('admin'),
	'Создать новый пул',
);

$this->renderPartial('_form', array('model'=>$model)); ?>