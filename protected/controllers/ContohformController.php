<?php
	class ContohformController extends Controller
	{
		public function actionForm()
		{
			if(isset($_POST['nama']))
			{
				echo $_POST['nama'];
				//exit;	
			}
			$this->render("form");
		}
	}
?>