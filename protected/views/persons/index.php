<?php
/* @var $this PersonsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Все абоненты',
);

$this->menu=array(
	array('label'=>'Создать абонента', 'url'=>array('create')),
	
);
Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$('#persons-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<h2>Список абонентов</h2>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'persons-grid',
	'dataProvider'=>$dataProvider,
        'columns'=>array(
            array('name'=>'Name',
                'type'=>'html',
                'value'=>'CHtml::link($data->Name,
                    Yii::app()->createUrl("/persons/view",
                    array("id"=>$data->id)))'),
            'FIO','PrePayedUnits',
            array('name'=>'hostcount',
                'type'=>'html',
                'value'=>'CHtml::link($data->hostcount." хостов",
                     Yii::app()->createUrl("/hostip/persindex",
                    array("id"=>$data->id)))',
                ),
	)
    )
); ?>
