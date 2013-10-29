<?php
/* @var $this HostipController */


$this->breadcrumbs=array(
	'Hostips'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Hostip', 'url'=>array('index')),
	array('label'=>'Create Hostip', 'url'=>array('create')),
);

?>

<h2>Хосты абонента <?php //echo $model->person->Name; ?></h2>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'phostip-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
    		array('value'=>'CHtml::link($data->int_ip_s."/".$data->mask,Yii::app()->createUrl("/hostip/view",
                    array("id"=>$data->id)))',
                    'type'=>'html',
                    'header' => 'IP адрес',
                    'name' => 'int_ip'),
		'Name', 'password','mac','flags',
                
		
	),

)); ?>
