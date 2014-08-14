<?php
/* @var $this TaxRatesController */
/* @var $model TaxRates */

$this->breadcrumbs=array(
	'Tax Rates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TaxRates', 'url'=>array('index')),
	array('label'=>'Manage TaxRates', 'url'=>array('admin')),
);
?>

<h1>Create TaxRates</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>