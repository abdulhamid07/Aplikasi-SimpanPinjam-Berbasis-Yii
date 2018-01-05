<?php
	class MahasiswaController extends Controller
	{
		public function actionIndex()
		{
			$model=new MahasiswaForm;
			if(isset($_POST['MahasiswaForm']))
			{
				$model->attributes=$_POST['MahasiswaForm'];
				if($model->validate())
				{
					$this->render('tampil',array('model'=>$model));
				}else{
					foreach ($model->errors() as $pesan) {
						foreach ($pesan as $pesan2) {
							echo $pesan2;
						}
					}
				}
			}else{
				$this->render('index',array('model'=>$model));
			}
		}
	}
?>