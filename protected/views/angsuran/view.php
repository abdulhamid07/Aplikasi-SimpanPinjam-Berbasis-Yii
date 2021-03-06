<?php
/********************************************************
* dibuat oleh    : Badiyanto
* CRUD generator : Yii Bootstrap  \n";
* tanggal        : 2010-01-01 17:18:12
********************************************************/

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Angsuran'=>array('index'), $model->id),
));
?>

<legend>Informasi Detail Angsuran #<?php echo $model->id; ?></legend>
<?php
		if($model->status_bayar ==0){
			$status="BELUM BAYAR";
		}else{
			$status="SUDAH BAYAR";
		}
	?>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
   'data'=>$model,
   'type'=>'bordered striped condensed',
   'attributes'=>array(
 
		 array(
			'name'=>'id',
			'type'=>'html',
			'value'=>$model->id,
		   ),
 
		 array(
			'name'=>'pinjaman_id',
			'type'=>'html',
			'value'=>$model->pinjaman_id,
		   ),
 
		 array(
			'name'=>'anggota_id',
			'type'=>'html',
			'value'=>$model->anggota->nama,
		   ),
 
		 array(
			'name'=>'angsuran_ke',
			'type'=>'html',
			'value'=>$model->angsuran_ke,
		   ),
 
		 array(
			'name'=>'besar_angsuran',
			'type'=>'html',
			'value'=>$model->besar_angsuran,
		   ),
 
		 array(
			'name'=>'tanggal_jatuh_tempo',
			'type'=>'html',
			'value'=>$model->tanggal_jatuh_tempo,
		   ),
 
		 array(
			'name'=>'tanggal_bayar',
			'type'=>'html',
			'value'=>$model->tanggal_bayar,
		   ),
 
		 array(
			'name'=>'status_bayar',
			'type'=>'html',
			'value'=>$status,
		   ),
   ),
)); ?>
 



