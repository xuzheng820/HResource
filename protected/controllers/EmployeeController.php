<?php

class EmployeeController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionShow()
	{
		$search_flag = Yii::app()->request->getParam('search_flag');
		if (!$search_flag)
			return $this->render('index');
		else{
			return $this->render('index');
		}
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}