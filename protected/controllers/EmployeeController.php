<?php

class EmployeeController extends Controller
{
	public function actionListEmp()
    {
        $search_flag = Yii::app()->request->getParam('search_flag');
        if (!$search_flag) {
            return $this->render('view');
        } else {
            $name = Yii::app()->request->getParam('name');

            echo json_encode($name);
        }
    }
}
