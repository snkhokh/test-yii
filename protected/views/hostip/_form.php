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

	<?php echo $form->errorSummary($model); 

        ?>
         
        <div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="row">
            <div id="dynBat">
            <?php $this->widget('zii.widgets.jui.CJuiButton',array(
                'buttonType'=>'checkbox',
                'model'=>$model,
                'attribute'=>'dynamic',
                'caption'=>$model->dynamic ? 'Динамический':'Статический',
                'options'=>array('icons'=>array('primary'=>'ui-icon-'.($model->dynamic ? 'unlocked':'locked'))),
                'onclick'=>new CJavaScriptExpression('
                function(){if ($("#Hostip_dynamic").prop("checked")) {
                    $("label[for=Hostip_dynamic] span.ui-icon-locked").switchClass("ui-icon-locked","ui-icon-unlocked", 10 );
                    $("label[for=Hostip_dynamic] span.ui-button-text").text("Динамический");
                    $(".widget#poolId").removeClass("hide");
                    $(".widget#statIp").addClass("hide");
                } else {
                    $("label[for=Hostip_dynamic] span.ui-icon-unlocked").switchClass("ui-icon-unlocked","ui-icon-locked", 10 );
                    $("label[for=Hostip_dynamic] span.ui-button-text").text("Статический");
                    $(".widget#statIp").removeClass("hide");
                    $(".widget#poolId").addClass("hide");
                }
                return true;}'),
                ));
            ?>
            </div>
            <div id="statIp" class="widget <?php echo $model->dynamic ?"hide":""; ?>">
                <div class="whead">
                    <?php echo $form->labelEx($model,'int_ip_s')."/".$form->labelEx($model,'mask'); ?>
                </div>
                <div>
                    <?php echo $form->textField($model,'int_ip_s',array('size'=>15,'maxlength'=>15)); ?> / 
                    <?php echo $form->textField($model,'mask',array('size'=>2)); ?>
                    <?php echo $form->error($model,'int_ip_s'); ?>
                    <?php echo $form->error($model,'mask'); ?>
                </div>
            </div>
            <div id="poolId" class="widget <?php echo $model->dynamic ?"":"hide"; ?>">
                <div class="whead">
                    <?php echo $form->labelEx($model,'int_ip_s'); ?>
                </div>
                <div>
		<?php echo $form->dropDownList($model,'int_ip',CHtml::listData(IpPools::model()->findAll(),'id','name')); ?>
                    <?php echo $form->error($model,'int_ip'); ?>
                </div>
            </div>
            
	</div>

	 <div  class="row">
		<?php echo $form->labelEx($model,'flag_block'); ?>
		<?php echo $form->checkBox($model,'flag_block'); ?>
		<?php echo $form->error($model,'flag_block'); ?>
	</div>
        
        <div class="form">
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

    </div>
  <?php $this->endWidget(); ?>

</div><!-- form -->