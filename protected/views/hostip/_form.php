<?php
/* @var $this HostipController */
/* @var $model Hostip */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hostip-form',
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
		<?php echo $form->textField($model,'Name',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'int_ip'); ?>
		<?php echo $form->textField($model,'int_ip',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'int_ip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ext_ip'); ?>
		<?php echo $form->textField($model,'ext_ip',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ext_ip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mask'); ?>
		<?php echo $form->textField($model,'mask'); ?>
		<?php echo $form->error($model,'mask'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mac'); ?>
		<?php echo $form->textField($model,'mac',array('size'=>17,'maxlength'=>17)); ?>
		<?php echo $form->error($model,'mac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PersonId'); ?>
		<?php echo $form->textField($model,'PersonId'); ?>
		<?php echo $form->error($model,'PersonId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flags'); ?>
		<?php echo $form->textField($model,'flags',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'flags'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>24,'maxlength'=>24)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inact_timeout'); ?>
		<?php echo $form->textField($model,'inact_timeout',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'inact_timeout'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ch_status'); ?>
		<?php echo $form->textField($model,'ch_status'); ?>
		<?php echo $form->error($model,'ch_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->