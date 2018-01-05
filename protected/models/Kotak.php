<?php
	class Kotak extends CFormModel
	{
		public $panjang;
		public $lebar;
		
		//validasi
		public function rules()
		{
			return array(
				array('panjang,lebar','required'),
				array('panjang,lebar','numerical','integerOnly'=>true),
			);
		}
		//label
		public function attributeLabels()
		{
			return array('panjang'=>'Panjang',
						 'lebar'=>'Lebar');
		}
		//hitung luas
		public function hitungLuas()
		{
			return $this->panjang * $this->lebar;
		}
		//hitung keliling
		public function hitungKeliling()
		{
			return 2*($this->panjang + $this->lebar);
		}
	}
?>