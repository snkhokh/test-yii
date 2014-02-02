<?php
/* @var $this IpPoolsController */
/* @var $model IpPools */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ip-pools-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля обозначенные <span class="required">*</span> заполнять обязательно.</p>

	<?php echo $form->errorSummary($model); ?>

        <div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
        

        <div class="row">
	        <?php echo $form->labelEx($model,'nas_id'); ?>
		<?php echo $form->dropDownList($model,'nas_id',CHtml::listData(Nas::model()->findAll(),'id','name')); ?>
		<?php echo $form->error($model,'nas_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_s'); ?>
		<?php echo $form->textField($model,'first_s',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'first_s'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ttl'); ?>
		<?php echo $form->textField($model,'ttl'); ?>
		<?php echo $form->error($model,'ttl'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->