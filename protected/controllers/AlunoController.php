<?php

class AlunoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('admin','index','view','create', 'projetos', 'redirect'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create', 'admin'  and 'update' actions
				'actions'=>array('update','delete'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform  'delete' actions
				'actions'=>array(),
				'users'=>array('admin'),
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
	
	public function actionProjetos($id)
	{   
		$this->render('projetos',array(
			'model'=>$this->loadModel($id),
		));
	}
	
	public function actionRedirect()
	{   
		$this->render('redirect');
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Aluno;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Aluno']))
		{
			$model->attributes=$_POST['Aluno'];
			$model->imgPerfil=CUploadedFile::getInstance($model, 'imgPerfil');
			
			if($model->save()){
			    if(strlen($model->imgPerfil)>0)
                $model->imgPerfil->saveAs('fotos/'.$model->imgPerfil);
				$this->redirect(array('aluno/redirect'));
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
		if(Yii::app()->user->id == $id){   
		   $model=$this->loadModel($id);

		   // Uncomment the following line if AJAX validation is needed
		  // $this->performAjaxValidation($model);

		   if(isset($_POST['Aluno']))
		   {
			   $model->attributes=$_POST['Aluno'];
			   $model->imgPerfil=CUploadedFile::getInstance($model, 'imgPerfil');

			   if($model->save()){
			       if(strlen($model->imgPerfil)>0)
                   $model->imgPerfil->saveAs('fotos/'.$model->imgPerfil);
				   $this->redirect(array('view','id'=>$model->emailAluno));
			   }
		   }

		   $this->render('update',array(
			   'model'=>$model,
		   ));
		 } else{
		 	throw new CHttpException(403,'Você não pode acessar esta página.');
		 }
	}
	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}
	


	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Aluno');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Aluno('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Aluno']))
			$model->attributes=$_GET['Aluno'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Aluno the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Aluno::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	
	/**
	 * Performs the AJAX validation.
	 * @param Aluno $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='aluno-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
