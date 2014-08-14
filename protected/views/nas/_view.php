<?php
/* @var $this NasController */
/* @var $data Nas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip_addr')); ?>:</b>
	<?php echo CHtml::encode($data->ip_addr); ?>
	<br />


</div>