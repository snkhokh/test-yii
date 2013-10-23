<?php
/* @var $this HostipController */
/* @var $data Hostip */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('int_ip')); ?>:</b>
	<?php echo CHtml::encode($data->int_ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext_ip')); ?>:</b>
	<?php echo CHtml::encode($data->ext_ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mask')); ?>:</b>
	<?php echo CHtml::encode($data->mask); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mac')); ?>:</b>
	<?php echo CHtml::encode($data->mac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PersonId')); ?>:</b>
	<?php echo CHtml::encode($data->PersonId); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('flags')); ?>:</b>
	<?php echo CHtml::encode($data->flags); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inact_timeout')); ?>:</b>
	<?php echo CHtml::encode($data->inact_timeout); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ch_status')); ?>:</b>
	<?php echo CHtml::encode($data->ch_status); ?>
	<br />

	*/ ?>

</div>