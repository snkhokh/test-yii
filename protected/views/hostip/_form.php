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

	<p class="note">Поля, отмеченные <span class="required">*</span> заполнять обязательно.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'int_ip_s'); ?>
		<?php echo $form->textField($model,'int_ip_s',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'int_ip_s'); ?>
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
		<?php echo $form->labelEx($model,'flag_block'); ?>
		<?php echo $form->checkBox($model,'flag_block'); ?>
		<?php echo $form->error($model,'flag_block'); ?>
	</div>
        
        <div class="row">
		<?php $rbutton_param = array('X'=>'Строгий','Y'=>'Рабочий','Z'=>'Слабый',''=>'Отсутствует'); ?>
		<?php echo $form->labelEx($model,'traf_filter'); ?>
                <?php echo $form->radioButtonList($model,'traf_filter',$rbutton_param, array('separator'=>' ',
                        'labelOptions'=>array('style'=>'display:inline'),
                    )); ?>
		<?php echo $form->error($model,'traf_filter'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->textField($model,'password',array('size'=>24,'maxlength'=>24)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->