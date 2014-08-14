<?php
/* @var $this TblUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Все администраторы',
);

$this->menu=array(
	array('label'=>'Создать нового', 'url'=>array('create')),
);
?>

<h2>Администраторы системы</h2>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
        'columns'=>array(
                array('name'=>'username',
                    'type'=>'html',
                    'value'=>'CHtml::link($data->username,
                    Yii::app()->createUrl("/tblUser/view",
                    array("id"=>$data->id)))'),
            'email'),
	
)); ?>
