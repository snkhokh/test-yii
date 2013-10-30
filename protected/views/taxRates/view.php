<?php
/* @var $this TaxRatesController */
/* @var $model TaxRates */

$this->breadcrumbs=array(
	'Tax Rates'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List TaxRates', 'url'=>array('index')),
	array('label'=>'Create TaxRates', 'url'=>array('create')),
	array('label'=>'Update TaxRates', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TaxRates', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TaxRates', 'url'=>array('admin')),
);
?>

<h1>View TaxRates #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Name',
		'AbonCharge',
		'TrafUnit',
		'PrePayedUnits',
		'dir',
		'fr_1',
		'to_1',
		'in_ch1',
		'out_ch1',
		'fr_2',
		'to_2',
		'in_ch2',
		'out_ch2',
		'fr_3',
		'to_3',
		'in_ch3',
		'out_ch3',
		'fr_4',
		'to_4',
		'in_ch4',
		'out_ch4',
		'fr_5',
		'to_5',
		'in_ch5',
		'out_ch5',
		'flag',
	),
)); ?>
