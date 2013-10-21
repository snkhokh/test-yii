<?php
/* @var $this PersonsController */
/* @var $model Persons */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'persons-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FIO'); ?>
		<?php echo $form->textField($model,'FIO',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'FIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMail'); ?>
		<?php echo $form->textField($model,'EMail',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'EMail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Bill'); ?>
		<?php echo $form->textField($model,'Bill'); ?>
		<?php echo $form->error($model,'Bill'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BillCh'); ?>
		<?php echo $form->textField($model,'BillCh'); ?>
		<?php echo $form->error($model,'BillCh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UnitRem'); ?>
		<?php echo $form->textField($model,'UnitRem',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'UnitRem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UnitRemOut'); ?>
		<?php echo $form->textField($model,'UnitRemOut',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'UnitRemOut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TaxRateId'); ?>
		<?php echo $form->textField($model,'TaxRateId'); ?>
		<?php echo $form->error($model,'TaxRateId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PrePayedUnits'); ?>
		<?php echo $form->textField($model,'PrePayedUnits',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'PrePayedUnits'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Flags'); ?>
		<?php echo $form->textField($model,'Flags',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'Flags'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Opt'); ?>
		<?php echo $form->textArea($model,'Opt',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Opt'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->