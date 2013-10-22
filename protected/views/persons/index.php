<?php
/* @var $this PersonsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Persons',
);

$this->menu=array(
	array('label'=>'Create Persons', 'url'=>array('create')),
	array('label'=>'Manage Persons', 'url'=>array('admin')),
);
?>

<h1>Persons</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
        'columns'=>array(
		'Name',
		'FIO',
		array(
                'class'=>'CLinkColumn',
            // @todo найти как установить заголовок колонки с этим классом
                'labelExpression'=>'count($data->hosts)." хостов"',
                'urlExpression' => '"index.php?r=persons/view&id=".$data->id' 
                ),
        )
    )
); ?>
