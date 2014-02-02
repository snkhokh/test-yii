<?php
/* @var $this IpPoolsController */
/* @var $model IpPools */

$this->breadcrumbs=array(
	'Ip Pools'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List IpPools', 'url'=>array('index')),
	array('label'=>'Create IpPools', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ip-pools-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ip Pools</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">

</div><!-- search-form -->

<?php
//@todo в списке пулов - от -до, кол-во, группировка по насам...
    $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ip-pools-grid',
        'filter'=>$model,'dataProvider'=>$dataProvider,
	'columns'=>array(
		'nas.name',
	array('value'=>'long2ip($data->first)',
                    'name' => 'first'),	
            'number',
		'ttl',
		'name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
