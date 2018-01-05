<?php
	$this->pageTitle=Yii::app()->name . ' - Mahasiswa';
	$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Data Mahasiswa'),
));
?>
<h1>Data Mahasiswa</h1>

<table class="table table-bordered table-striped">
	<tr>
		<th><?php echo $model->getAttributeLabel('nim') ?></th>
		<td><?php echo $model->nim; ?></td>
	</tr>
	<tr>
		<th><?php echo $model->getAttributeLabel('nmMhs') ?></th>
		<td><?php echo strtoupper($model->nmMhs); ?></td>
	</tr>
	<tr>
		<th><?php echo $model->getAttributeLabel('alamat') ?></th>
		<td><?php echo ucwords($model->alamat); ?></td>
	</tr>
	<tr>
		<th><?php echo $model->getAttributeLabel('jekel') ?></th>
		<td><?php $jk=$model->jekel;
		if($jk=='L')
		{
			echo "Laki-laki";
		}else{
			echo "Perempuan";
		}
		?></td>
	</tr>
	<tr>
		<th><?php echo $model->getAttributeLabel('jurusan') ?></th>
		<td>
		<?php
		$dataJurusan=array(
						'TI'=>'Teknik Informatika',
						'SI'=>'Sistem Informasi',
						'TK'=>'Teknik Komputer',
						'MI'=>'Manajemen Informatika',
						'KA'=>'Komputerisasi Akuntansi'
						);
			if(!in_array($model->jurusan, $dataJurusan))
			{
				echo $dataJurusan[$model->jurusan];
			}
		?></td>
	</tr>
	<tr>
		<th><?php echo $model->getAttributeLabel('hobi') ?></th>
		<td><?php echo implode(",", $model->hobi); ?></td>
	</tr>
</table>
