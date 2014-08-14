<?php
/* @var $this PersonsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Все абоненты',
);

$this->menu=array(
	array('label'=>'Создать абонента', 'url'=>array('create')),
	
);
?>
<h2>Список абонентов</h2>
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'persons-grid',
    'filter'=>$model,
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
