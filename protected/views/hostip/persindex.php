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

<h2>Хосты абонента</h2>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'phostip-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'Name::Идентификатор (login)',
		'password::Пароль',
                array('value'=>'long2ip($data->int_ip)."/".$data->mask',
                    'header' => 'IP адрес',
                    'name' => 'int_ip'),
		'mac::MAC адрес',
		'flags::Флаги',
	),
)); ?>
