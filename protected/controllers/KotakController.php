<?php

class KotakController extends Controller
{
	public function actionIndex()
	{
		$this->layout='column2';
		$this->render('index');
	}
	public function actionFormHitung()
	{
		$model=new Kotak;
		$model->unsetAttributes();
		if(isset($_POST['Kotak']))
		{
			$model->attributes=$_POST['Kotak'];
			$panjang=$_POST['Kotak']['panjang'];
			$lebar=$_POST['Kotak']['lebar'];
			$this->redirect(array('hitungLuas','panjang'=>$panjang,'lebar'=>$lebar));
		}
		$this->layout='column2';
		$this->render('formHitung',array('model'=>$model));
	}
	public function actionHitungLuas()
	{
		$model=new Kotak;
			$this->layout='column2';
			$this->render('hitungLuas',array('model'=>$model));
	
		
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