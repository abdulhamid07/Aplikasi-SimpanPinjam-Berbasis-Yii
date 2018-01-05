<?php
	class BarangForm extends CFormModel
	{
		public $kdBarang;
		public $nmBarang;
		public $hrgBarang;
		public $jmlBeli;
		public $bayar;
		public function rules()
		{
			return array(
				array('kdBarang,nmBarang,hrgBarang,jmlBeli','required'),
				array('kdBarang','length','max'=>5),
				array('nmBarang','length','max'=>10),
				array('hrgBarang','length','max'=>11),
				array('jmlBeli','length','max'=>11),
				array('hrgBarang','numerical'),
				array('jmlBeli','numerical'),
				);
		}
		public function attributeLabels()
		{
			return array(
				'kdBarang'=>'Kode Barang',
				'nmBarang'=>'Nama Barang',
				'hrgBarang'=>'Harga Barang',
				'jmlBeli'=>'Jumlah Beli',
				'hrgBarang'=>'Harga Barang',
				'bayar'=>'Total Bayar',
				);
		}
	}
?>