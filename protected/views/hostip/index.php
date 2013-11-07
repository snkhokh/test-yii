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
		array('value'=>'CHtml::link(long2ip($data->int_ip)."/".$data->mask,Yii::app()->createUrl("/hostip/view",
                    array("id"=>$data->id)))',
                    'type'=>'html',
                    'header' => 'IP адрес',
                    'name' => 'int_ip'),
                'Name::Идентификатор(login)',
		'mac::MAC адрес',
		'flag_block:boolean',
                array('header'=>'Абонент',
                    'name'=>'person.Name',
                    'type'=>'html',
                    'value'=>  'isset($data->person->id) ? CHtml::link($data->person->Name,Yii::app()->createUrl("/persons/view",
                    array("id"=>$data->person->id))):""',
                    'filter'=>'<input type="text" maxlength="50" name="Hostip[PName]">',
                    ),
	),
)); ?>
