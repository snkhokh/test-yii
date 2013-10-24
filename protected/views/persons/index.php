<?php
/* @var $this PersonsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Persons',
);

$this->menu=array(
	array('label'=>'Создать абонента', 'url'=>array('create')),
	array('label'=>'Управление абонентами', 'url'=>array('admin')),
);
?>

<h2>Список абонентов</h2>
$model = new Persons::
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
        'columns'=>array(
		'Name','FIO','PrePayedUnits',array(
                    'name'=>'hostcount',
                    'sortable'=>'true',
                    ),
		array(
                'class'=>'CLinkColumn',
                    // @todo найти как установить заголовок колонки с этим классом
                    // @todo а также можно ли его сортировать 
                'labelExpression'=>'$data->hostcount." хостов"',
                'urlExpression' => '"index.php?r=hostip/persindex&id=".$data->id' 
                ),
        )
    )
); ?>
