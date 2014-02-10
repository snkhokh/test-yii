<?php
/* @var $this HostipController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Все хосты',
);

$this->menu=array(
	array('label'=>'Создать хост', 'url'=>array('create')),
);
?>
<h2>Зарегистрированные в системе хосты</h2>
    <?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'phostip-grid',
	'dataProvider'=>$dataProvider,
        'filter'=>$model,
	'columns'=>array(
		array(
                    'value'=>'isset($data->dynamic) && isset($data->ippool->first)?'.
                    'CHtml::link("IP пул:".$data->ippool->name,Yii::app()->createUrl("/hostip/update",array("id"=>$data->id))):'.
                    'CHtml::link(long2ip($data->int_ip)."/".$data->mask,Yii::app()->createUrl("/hostip/update",array("id"=>$data->id)))',
                    'type'=>'html',
                    'header' => 'IP адрес',
                    'name' => 'int_ip'),
                'Name::Идентификатор(login)',
		'flag_block:boolean',
                array('header'=>'Абонент',
                    'name'=>'PName',
                    'type'=>'html',
                    'value'=>  'isset($data->person->id) ? CHtml::link($data->person->Name,Yii::app()->createUrl("/persons/view",
                    array("id"=>$data->person->id))):""',
                    ),
	),
)); ?>
