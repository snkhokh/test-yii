<?php
/* @var $this PersonsController */
/* @var $model Persons */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FIO'); ?>
		<?php echo $form->textField($model,'FIO',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Bill'); ?>
		<?php echo $form->textField($model,'Bill'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TaxRateId'); ?>
		<?php echo $form->textField($model,'TaxRateId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PrePayedUnits'); ?>
		<?php echo $form->textField($model,'PrePayedUnits',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Flags'); ?>
		<?php echo $form->textField($model,'Flags',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Opt'); ?>
		<?php echo $form->textArea($model,'Opt',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->