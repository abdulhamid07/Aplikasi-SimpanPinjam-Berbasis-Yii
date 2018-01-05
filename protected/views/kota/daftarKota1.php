<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Daftar Kota'),
));
	$model=new Kota;
	$id=$_GET['id'];
	$sql="SELECT
		kota.id
		,kota.nama_kota
		,propinsi.nama_propinsi
		FROM
		kota
		INNER JOIN propinsi 
			ON (kota.propinsi_id = propinsi.id)
		WHERE kota.propinsi_id=$id";
	$hasil=Yii::app()->db->createCommand($sql)->query();	
	//$hasil=$model->model()->findAll(array("condition"=>"propinsi_id=$id"));
?>

<legend>Daftar Kota Propinsi <?php $model=Propinsi::model()->findByPk(array('id'=>$id)); echo strtoupper($model->nama_propinsi); ?></legend> 

	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>Nama Propinsi</th>
			<th>Nama Kota</th>
		</tr>
<?php
	foreach($hasil as $hs)
	{
?>	
		<tr>
			<td><?php echo $hs["id"]; ?></td>
			<td><?php echo $hs["nama_propinsi"]; ?></td>
			<td><?php echo $hs["nama_kota"]; ?></td>
		</tr>
<?php
	}
?>
	</table>