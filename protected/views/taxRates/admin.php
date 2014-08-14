<?php
/* @var $this TaxRatesController */
/* @var $model TaxRates */

$this->breadcrumbs=array(
	'Tax Rates'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TaxRates', 'url'=>array('index')),
	array('label'=>'Create TaxRates', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tax-rates-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tax Rates</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tax-rates-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Name',
		'AbonCharge',
		'TrafUnit',
		'PrePayedUnits',
		'dir',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
