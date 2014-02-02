<?php
/* @var $this IpPoolsController */
/* @var $model IpPools */

$this->breadcrumbs=array(
	'Пулы IP адресов',
);

$this->menu=array(
	array('label'=>'Создать новый пул', 'url'=>array('create')),
);

//@todo в списке пулов - от -до, кол-во, группировка по насам...
    $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ip-pools-grid',
        'filter'=>$model,'dataProvider'=>$dataProvider,
	'columns'=>array(
            array('value'=>'long2ip($data->first)." - ".long2ip($data->first+$data->number-1)." (".$data->number.")"',
                'name' => 'first',
                'header'=>'IP адреса пула'),	
            'name',
            array('class'=>'CButtonColumn','buttons'=>array('view'=>array('visible'=>'FALSE'))),
	),
)); ?>
