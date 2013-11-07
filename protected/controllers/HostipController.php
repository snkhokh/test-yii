<?php

class HostipController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', 
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($pid)
	{
            $person = Persons::model()->findByPk($pid);
            if($person===null)
                throw new CHttpException(404,'Запрошенного ресурса не существует.');

            $model=new Hostip;
             $model->PersonId = $person->id;   

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Hostip']))
		{
			$model->attributes=$_POST['Hostip'];
			if($model->save()) {
                            Flags::model()->ServerReload();
                            $this->redirect(array('persindex','id'=>$model->PersonId));
                            
                        }
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Hostip']))
		{
			$model->attributes=$_POST['Hostip'];
			if($model->save()) {
                            Flags::model()->ServerReload();
                            $this->redirect(array('persindex','id'=>$model->PersonId));
                        
                        }
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
            $target = $this->loadModel($id);
            $pid = $target->PersonId;
            $target->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax'])) {
                    Flags::model()->ServerReload();
                    $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('persindex','id'=>$pid));

                }
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
                $model = Hostip::model()->with('person');
                $dataProvider=new CActiveDataProvider($model,array(
                    'sort'=>array('attributes'=>array('person.Name','Name','int_ip','mac','flags')),
                    'pagination'=>array('pageSize'=>20),
                ));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
                        'model'=>$model,
		));
	}

	public function actionPersIndex($id)
	{
		$rec = Persons::model()->findByPk($id);
                $person = (isset($rec->Name)) ? $rec->Name : '';
                $dataProvider=new CActiveDataProvider('Hostip',array('criteria' =>
                    array('condition' => 'PersonId = '.$id),
                    'pagination'=>array('pageSize'=>20),));
		$this->render('persindex',array(
                    'dataProvider'=>$dataProvider,
                    'person'=>$person,
                    'pid'=>$id,
		));
	}
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Hostip('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Hostip']))
			$model->attributes=$_GET['Hostip'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Hostip the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Hostip::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Hostip $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='hostip-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
