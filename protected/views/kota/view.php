<?php
/********************************************************
* dibuat oleh    : Badiyanto
* CRUD generator : Yii Bootstrap  \n";
* tanggal        : 2017-09-26 04:32:14
********************************************************/

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Kota'=>array('index'), $model->id),
));
?>

<legend>Informasi Detail Kota #<?php echo $model->id; ?></legend>

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
			'name'=>'propinsi_id',
			'type'=>'html',
			'value'=>$model->propinsi_id,
		   ),
 
		 array(
			'name'=>'nama_kota',
			'type'=>'html',
			'value'=>$model->nama_kota,
		   ),
   ),
)); ?>
 



