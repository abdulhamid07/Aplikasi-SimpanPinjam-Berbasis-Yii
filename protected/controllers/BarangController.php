<?php
	class BarangController extends Controller
	{
		public function actionBarang()
		{
			$brg=new BarangForm;
			if(isset($_POST['BarangForm']))
			{
				$brg->kdBarang=$_POST['BarangForm']['kdBarang'];
				$brg->nmBarang=$_POST['BarangForm']['nmBarang'];
				$brg->hrgBarang=$_POST['BarangForm']['hrgBarang'];
				$brg->jmlBeli=$_POST['BarangForm']['jmlBeli'];
				$brg->bayar=$brg->hrgBarang*$brg->jmlBeli;
				if($brg->validate())
				{
					$this->render('hasil',array('brg'=>$brg));
				}else{
					foreach ($brg->errors() as $pesan) {
						foreach ($pesan as $pesan2) {
							echo $pesan2;
						}
					}
				}
			}else{
				$this->render('barang',array('brg'=>$brg));
			}
		}
	}
?>
