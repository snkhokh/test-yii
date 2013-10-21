<?php
/* @var $this PersonsController */
/* @var $data Persons */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIO')); ?>:</b>
	<?php echo CHtml::encode($data->FIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMail')); ?>:</b>
	<?php echo CHtml::encode($data->EMail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Bill')); ?>:</b>
	<?php echo CHtml::encode($data->Bill); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BillCh')); ?>:</b>
	<?php echo CHtml::encode($data->BillCh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UnitRem')); ?>:</b>
	<?php echo CHtml::encode($data->UnitRem); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('UnitRemOut')); ?>:</b>
	<?php echo CHtml::encode($data->UnitRemOut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TaxRateId')); ?>:</b>
	<?php echo CHtml::encode($data->TaxRateId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PrePayedUnits')); ?>:</b>
	<?php echo CHtml::encode($data->PrePayedUnits); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Flags')); ?>:</b>
	<?php echo CHtml::encode($data->Flags); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Opt')); ?>:</b>
	<?php echo CHtml::encode($data->Opt); ?>
	<br />

	*/ ?>

</div>