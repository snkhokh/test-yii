<?php
/* @var $this HostipController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Хосты',
);

$this->menu=array(
	array('label'=>'Create Hostip', 'url'=>array('create')),
	array('label'=>'Manage Hostip', 'url'=>array('admin')),
);
?>
<h2>Зарегистрированные хосты</h2>
    <?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'phostip-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		array('value'=>'CHtml::link(long2ip($data->int_ip)."/".$data->mask,Yii::app()->createUrl("/hostip/view",
                    array("id"=>$data->id)))',
                    'type'=>'html',
                    'header' => 'IP адрес',
                    'name' => 'int_ip'),
                'Name::Идентификатор(login)',
		'mac::MAC адрес',
		'flags::Флаги',
                array('header'=>'Абонент',
                    'name'=>'person.Name',
                    'type'=>'html',
                    'value'=>  'isset($data->person->id) ? CHtml::link($data->person->Name,Yii::app()->createUrl("/persons/view",
                    array("id"=>$data->person->id))):""'
                    ),
	),
)); ?>
