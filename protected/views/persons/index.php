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

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
        'columns'=>array(
		'Name','FIO','PrePayedUnits','hosts.hostcounter',
		array(
                'class'=>'CLinkColumn',
                    // @todo найти как установить заголовок колонки с этим классом
                    // @todo а также можно ли его сортировать 
                'labelExpression'=>'$data->hosts.hostcounter." хостов"',
                'urlExpression' => '"index.php?r=hostip/persindex&id=".$data->id' 
                ),
        )
    )
); ?>
