<?php

class ProfessorLoginModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'ProfessorLogin.models.*',
			'ProfessorLogin.components.*',
		));
		
		$this->setComponents(array(
            'errorHandler' => array(
                'errorAction' => 'ProfessorLogin/default/error'),
            'user' => array(
                'class' => 'CWebUser',             
                'loginUrl' => Yii::app()->createUrl('ProfessorLogin/default/loginProfessor'),
            )
        ));
 
        Yii::app()->user->setStateKeyPrefix('_ProfessorLogin');
	}

	public function beforeControllerAction($controller, $action) {
        if (parent::beforeControllerAction($controller, $action)) {
            // this method is called before any module controller action is performed
            // you may place customized code here
            $route = $controller->id . '/' . $action->id;
           // echo $route;
            $publicPages = array(
                'default/loginProfessor',
                'default/error',
            );
            if (Yii::app()->user->isGuest && !in_array($route, $publicPages)){            
                Yii::app()->getModule('ProfessorLogin')->user->loginRequired();                
            }
            else
                return true;
        }
        else
            return false;
    }

    
}
