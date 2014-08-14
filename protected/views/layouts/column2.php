<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
            <?php
            $messages = Yii::app()->user->getFlashes();
            if ($messages) {
                foreach ($messages as $key => $message) {
                    echo '<div class="flash-' . $key . '">' . $message . "</div>";
                }
            }
            ?>
     <?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Операции',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
    <?php
    Yii::app()->clientScript->registerScript(
            'myHideEffect', '$("div[class^=flash-]").animate({opacity: 1.0}, 5000).fadeOut("slow");', CClientScript::POS_READY);
    ?>

    <?php $this->endContent(); ?>