<?php

class PepatahController extends Controller
{
	public function actionIndex()
	{
		$this->layout='column2';
		$this->render('index');
	}
	public function actionKataPepatah()
	{
		$this->layout='column2';
		$this->render('kataPepatah');
	}
	public function actionKataPepatah1()
	{
		$ang[]=1;
		$ang[]=2;
		$ang[]=3;
		$ang[]=4;
		$this->layout='column2';
		$this->render('kataPepatah1',array('ang'=>$ang));
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