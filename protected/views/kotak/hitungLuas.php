<?php
	$this->widget('bootstrap.widgets.TbBreadcrumbs',array('links'=>array('Hasil Luas')));
?>
<h2>Hasilnya</h2>
<?php
	$model->panjang=$_GET['panjang'];
	$model->lebar=$_GET['lebar'];
	echo "Panjang = ".$model->panjang."</br>";
	echo "Lebar = ".$model->lebar."</br>";
	echo "<b>Luas = </b>".$model->hitungLuas()." cm</br>";
?>