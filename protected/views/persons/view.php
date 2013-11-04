<?php
$this->breadcrumbs=array(
	'Все абоненты'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'Редактировать данные', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Удалить ajax', 'url'=>'#', 'linkOptions'=>array('ajax'=>
            array('type'=>'GET','data'=>array('id'=>$model->id),
                'url'=>array('delete')),
            'confirm'=>'Подтвердите удаление абонента '.$model->Name)),
	array('label'=>'Перейти к хостам', 'url'=>array('/hostip/persindex','id'=>$model->id)),
	array('label'=>'Создать нового', 'url'=>array('create')),
);



Yii::app()->clientScript->registerScript( 
    'myHideEffect', 
    '$("div[class^=flash-]").animate({opacity: 1.0}, 5000).fadeOut("slow");',
    CClientScript::POS_READY 
);

$messages = Yii::app()->user->getFlashes();  
if ($messages) {  
    foreach($messages as $key => $message) {  
        echo '<div class="flash-' . $key . '">' . $message . "</div>";  
    }  
} 
?>

<h2>Абонент <?php echo $model->Name; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Name',
		'FIO',
		'EMail',
		'taxs.Name:text:Трафик-план',
		'PrePayedUnits',
		'Flags',
		'Opt',
	),
)); ?>
