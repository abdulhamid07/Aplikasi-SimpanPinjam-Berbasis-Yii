<?php
	class MahasiswaForm extends CFormModel
	{
		public $nim;
		public $nmMhs;
		public $alamat;
		public $jekel;
		public $jurusan;
		public $hobi;

		public function rules()
		{
			return array(
					array('nim,nmMhs,alamat,jekel,jurusan,hobi','required'),
					array('nim','numerical','integerOnly'=>true),
					array('nim','length','max'=>10),
					array('nmMhs','length','max'=>50),
					array('alamat','length','max'=>200),
				);
		}
		public function attributeLabels()
		{
			return array(
					'nim'=>'Nomor Mahasiswa',
					'nmMhs'=>'Nama Mahasiswa',
					'alamat'=>'Alamat',
					'jekel'=>'Jenis Kelamin',
					'jurusan'=>'Jurusan',
					'hobi'=>'Hobi',
				);
		}
	}
?>