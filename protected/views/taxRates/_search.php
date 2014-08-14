<?php
/* @var $this TaxRatesController */
/* @var $model TaxRates */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AbonCharge'); ?>
		<?php echo $form->textField($model,'AbonCharge',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TrafUnit'); ?>
		<?php echo $form->textField($model,'TrafUnit',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PrePayedUnits'); ?>
		<?php echo $form->textField($model,'PrePayedUnits',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dir'); ?>
		<?php echo $form->textField($model,'dir',array('size'=>0,'maxlength'=>0)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fr_1'); ?>
		<?php echo $form->textField($model,'fr_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'to_1'); ?>
		<?php echo $form->textField($model,'to_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in_ch1'); ?>
		<?php echo $form->textField($model,'in_ch1',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'out_ch1'); ?>
		<?php echo $form->textField($model,'out_ch1',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fr_2'); ?>
		<?php echo $form->textField($model,'fr_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'to_2'); ?>
		<?php echo $form->textField($model,'to_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in_ch2'); ?>
		<?php echo $form->textField($model,'in_ch2',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'out_ch2'); ?>
		<?php echo $form->textField($model,'out_ch2',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fr_3'); ?>
		<?php echo $form->textField($model,'fr_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'to_3'); ?>
		<?php echo $form->textField($model,'to_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in_ch3'); ?>
		<?php echo $form->textField($model,'in_ch3',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'out_ch3'); ?>
		<?php echo $form->textField($model,'out_ch3',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fr_4'); ?>
		<?php echo $form->textField($model,'fr_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'to_4'); ?>
		<?php echo $form->textField($model,'to_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in_ch4'); ?>
		<?php echo $form->textField($model,'in_ch4',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'out_ch4'); ?>
		<?php echo $form->textField($model,'out_ch4',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fr_5'); ?>
		<?php echo $form->textField($model,'fr_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'to_5'); ?>
		<?php echo $form->textField($model,'to_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in_ch5'); ?>
		<?php echo $form->textField($model,'in_ch5',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'out_ch5'); ?>
		<?php echo $form->textField($model,'out_ch5',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flag'); ?>
		<?php echo $form->textField($model,'flag',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->