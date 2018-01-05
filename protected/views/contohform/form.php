<?php
	echo CHtml::beginForm();
	echo CHtml::label("Nama Mahasiswa","nama",array('style'=>'color:teal;'));
	echo CHtml::textField("nama","",array('placeholder'=>"Masukkan Nama Mahasiswa"));
	echo "</br>";
	echo CHtml::label("Nama Jurusan","jurusan",array('style'=>'color:maroon;'));
	$dataJurusan=array(
						""=>"- Pilih Jurusan -",
						"TI"=>"Teknik Informatika",
						"SI"=>"Sistem Informasi",
						"TK"=>"Teknik Komputer",
						"MI"=>"Manajemen Informatika",
						"KA"=>"Komputerisasi Akuntansi"
						);
	echo CHtml::dropDownList("jurusan","",$dataJurusan,array('style'=>'color:blue;'));
	echo "</br>";
	echo CHtml::submitButton("Tampilkan");
	echo CHtml::resetButton("RESET");
	echo CHtml::endForm();
?>