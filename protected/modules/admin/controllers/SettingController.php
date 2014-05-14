<?php

class SettingController extends Controller
{
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
	public function accessRules()

	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index'),
				'roles'=>array('2'),
			),

			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionIndex()

	{
		$model=Setting::model()->findByPk(1);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Setting']))
		{
			$model->attributes=$_POST['Setting'];
			if($model->save())
			
                {
                 Yii::app()->user->setFlash('setting','Сохранение удачно');  
                    
                }
		}

		$this->render('index',array(
			'model'=>$model,
		));
	}
	
}
