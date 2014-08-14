<?php
/* @var $this TaxRatesController */
/* @var $data TaxRates */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TrafUnit')); ?>:</b>
	<?php echo CHtml::encode($data->TrafUnit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PrePayedUnits')); ?>:</b>
	<?php echo CHtml::encode($data->PrePayedUnits); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dir')); ?>:</b>
	<?php echo CHtml::encode($data->dir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flag')); ?>:</b>
	<?php echo CHtml::encode($data->flag); ?>
	<br />

	

</div>