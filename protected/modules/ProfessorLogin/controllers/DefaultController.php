<?php

class DefaultController extends Controller
{
    

	

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionViewProfessor($id)
	{
		$this->render('viewProfessor',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Professor;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Professor']))
		{
			$model->attributes=$_POST['Professor'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->emailProfessor));
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

		if(isset($_POST['Professor']))
		{
			$model->attributes=$_POST['Professor'];
			if($model->save())
				$this->redirect(array('viewProfessor','id'=>$model->emailProfessor));
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
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionLoginProfessor()
	{
		$model=new LoginForm('Professor');

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(array('default/index'));
		}
		// display the login form
		$this->render('loginProfessor',array('model'=>$model));
	}
	
	
	public function actionLogout()
	{
		Yii::app()->user->logout(false);
		$this->redirect(Yii::app()->getModule('ProfessorLogin')->user->loginUrl);
	}
	
	
	
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
		public function actionAdmin()
	{
		$model=new Professor('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Professor']))
			$model->attributes=$_GET['Professor'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Professor the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Professor::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Professor $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='professor-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}