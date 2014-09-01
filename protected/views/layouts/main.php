<?php
/* @var $this Controller */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" ng-app="myApp" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" ng-app="myApp" class="no-js"> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo Yii::app()->charset; ?>" />
    <meta name="language" content="<?php echo Yii::app()->language; ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main_1.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/app.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <base href="<?php echo Yii::app()->createAbsoluteUrl('/'); ?>/">
<?php
    Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl."/js/modernizr-2.6.2.min.js", CClientScript::POS_HEAD);
    Yii::app()->bootstrap->register();
?>
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
