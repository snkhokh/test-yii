<?php

class PersonsController extends Controller
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
	public function actionCreate()
	{
		$model=new Persons;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Persons']))
		{
			$model->attributes=$_POST['Persons'];
			if($model->validate())
                        {
                            $model->dbConnection->createCommand('LOCK TABLES persons WRITE, persons AS t READ')->execute();
                            $model->version = $this->next_version();
                            $ret = $model->save(false);
                            $model->dbConnection->createCommand('UNLOCK TABLES')->execute();
                            if ($ret)
                                $this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['Persons']))
		{
			$model->attributes=$_POST['Persons'];
			if($model->validate())
                        {
                            $model->dbConnection->createCommand('LOCK TABLES persons WRITE, persons AS t READ')->execute();
                            $model->version = $this->next_version();
                            $ret = $model->save(false);
                            $model->dbConnection->createCommand('UNLOCK TABLES')->execute();
                            if ($ret) 
                                $this->redirect(array('view','id'=>$model->id));
                            
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
            $model=$this->loadModel($id);
            if(count($model->hosts) > 0) {
                $msg = 'У абонента есть хосты, удаление невозможно!';
                Yii::app()->user->setFlash('error', $msg);
                return $this->redirect(array('view','id'=>$id));
            }
            $model->dbConnection->createCommand('LOCK TABLES persons WRITE, persons AS t READ')->execute();
            $model->version = $this->next_version();
            $model->deleted = TRUE;
            $model->save(false);
            $model->dbConnection->createCommand('UNLOCK TABLES')->execute();
            
            $this->redirect(array('persons/index'));
	}

        public function next_version()
        {
            $criteria = new CDbCriteria;
            $criteria->select = 'MAX(version)+1 AS version';
            $r = Persons::model()->find($criteria);
            return $r->version;
        }

        /**
	 * Lists all models.
	 */
	public function actionIndex()
	{
            $model=new Persons('search');
            $model->unsetAttributes();  // clear any default values
            if(isset($_GET['Persons']))
                    $model->attributes=$_GET['Persons'];


            $criteria = new CDbCriteria;
            $criteria -> with = array('hosts');
            $criteria -> select = '*,count(hosts.id) AS hostcount';
            $criteria -> group = 'hosts.PersonId';
            $criteria -> together =true;

//  TODO возможность переключения режима поиска - регистрозависимый/независимый...
            
            $criteria->addCondition('NOT t.deleted','AND');
            $criteria->addSearchCondition('t.Name',$model->Name,true,'AND','COLLATE utf8_general_ci LIKE');
            $criteria->addSearchCondition('t.FIO',$model->FIO,true,'AND','COLLATE utf8_general_ci LIKE');
            $criteria->compare('t.PrePayedUnits',$model->PrePayedUnits,true);
            if ($model->hostcount) {
                $criteria->having = 'count(hosts.id) = :hcnt';
                $criteria->params['hcnt'] = $model->hostcount;
            }

            $dataProvider=new CActiveDataProvider($model,array('criteria' => $criteria,
                'sort'=>array('attributes'=>array('hostcount'=>array(
                    'asc'=>'count(hosts.id)',
                    'desc'=>'count(hosts.id) DESC',
                    'label'=>'Количество хостов'),
                    'Name','FIO','PrePayedUnits',),
                    'defaultOrder'=>'t.Name',
                ),
                'pagination'=>array(
                    'pageSize'=> 20,
                ),
                ));

            $this->render('index',array(
			'dataProvider'=>$dataProvider,
                        'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=Persons::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Persons $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='persons-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
