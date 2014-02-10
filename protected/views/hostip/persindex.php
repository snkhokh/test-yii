<?php
/* @var $this HostipController */


$this->breadcrumbs=array(
	'Все хосты'=>array('index'),
	'Хосты абонента "'.$person.'"',
);

$this->menu=array(
	array('label'=>'Данные абонента', 'url'=>array('persons/view','id'=>$pid)),
	array('label'=>'Создать новый хост', 'url'=>array('create','pid'=>$pid)),
);

?>

<h2>Хосты абонента <?php echo '"'.$person.'"' ?></h2>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'phostip-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
    		array('value'=>'$data->dynamic && isset($data->ippool->first)?'.
                    'CHtml::link("IP пул:".$data->ippool->name,Yii::app()->createUrl("/hostip/update",array("id"=>$data->id))):'.
                    'CHtml::link(long2ip($data->int_ip)."/".$data->mask,Yii::app()->createUrl("/hostip/update",array("id"=>$data->id)))',
                    'type'=>'html',
                    'header' => 'IP адрес',
                    'name' => 'int_ip'),
                    'Name', 'password','mac','flags',
                
		
	),

)); ?>
