<?php
/* @var $this TaxRatesController */
/* @var $dataProvider CActiveDataProvider */
Yii::app()->clientScript->registerCoreScript('tableForm');

$this->breadcrumbs=array(
	'Все трафик-планы',
);

$this->menu=array(
	array('label'=>'Создать новый', 'url'=>array('create')),
);
?>

<h2>Трафик-планы</h2>
<table class="list">
    
<?php foreach ($dataProvider->getData() as $row) {?>
    <tr class="odd">
    <td><?php echo $row->name ?></td>
    <td><?php echo $row->tp_class_name ?></td>
    <td><?php echo $row->param?></td>
</tr>
<?php } ?>
</table>
