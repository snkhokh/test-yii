<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo Yii::app()->charset; ?>" />
	<meta name="language" content="<?php echo Yii::app()->language; ?>" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenucss">
		<?php
                $this->widget('application.extensions.emenu.EMenu',array('theme'=>'adobe',
			'items'=>array(
				array('label'=>'Абоненты', 'url'=>array('/persons'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Хосты', 'url'=>array('/hostip'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Конфигурация','url'=>'#','vertical'=>true,'visible'=>!Yii::app()->user->isGuest,
                                    'items'=> array(
                                        array('label'=>'Админы', 'url'=>array('/tblUser'),'visible'=>(Yii::app()->user->name == 'admin')),
                			array('label'=>'Трафик-Планы', 'url'=>array('/taxRates')),
                                        array('label'=>'Сервера NAS', 'url'=>array('/nas/admin')),
                                        array('label'=>'Пулы IP адресов', 'url'=>array('/ipPools')),
                                        )),
				array('label'=>'Войти', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Выход ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		));
     
                
                
                ?>
	</div>
        <br/><br/>
        <?php if(isset($this->breadcrumbs)):?>
	<?php $this->widget('zii.widgets.CBreadcrumbs', array(
		'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
        <?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
