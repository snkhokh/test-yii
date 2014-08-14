<?php
/* @var $this TaxRatesController */
/* @var $model TaxRates */

$this->breadcrumbs=array(
	'Tax Rates'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TaxRates', 'url'=>array('index')),
	array('label'=>'Create TaxRates', 'url'=>array('create')),
	array('label'=>'View TaxRates', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TaxRates', 'url'=>array('admin')),
);
?>

<h1>Update TaxRates <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>