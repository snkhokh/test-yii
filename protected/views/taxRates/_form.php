<?php
/* @var $this TaxRatesController */
/* @var $model TaxRates */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tax-rates-form',
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
		<?php echo $form->labelEx($model,'TrafUnit'); ?>
		<?php echo $form->textField($model,'TrafUnit',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'TrafUnit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PrePayedUnits'); ?>
		<?php echo $form->textField($model,'PrePayedUnits',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'PrePayedUnits'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dir'); ?>
		<?php echo $form->checkBoxList($model,'dir',array('in'=>'Входящий','out'=>'Исходящий'),array(
                    'separator'=>' ','labelOptions'=>array('style'=>'display:inline'),
                )); ?>
		<?php echo $form->error($model,'dir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flag'); ?>
		<?php echo $form->dropDownList($model,'flag',array('norm'=>'Не наш случай','day_limit'=>'Лимит на день',
                    'mon_limit'=>'Лимит на месяц','just_count'=>'Только учет')); ?>
		<?php echo $form->error($model,'flag'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->