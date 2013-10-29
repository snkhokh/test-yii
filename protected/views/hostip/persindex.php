<?php
/* @var $this HostipController */


$this->breadcrumbs=array(
	'Все хосты'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Создать хост', 'url'=>array('create')),
);

?>

<h2>Хосты абонента <?php echo $person ?></h2>
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
