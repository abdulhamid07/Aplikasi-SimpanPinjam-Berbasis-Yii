<?php
/********************************************************
* dibuat oleh    : Badiyanto
* CRUD generator : Yii Bootstrap  \n";
* tanggal        : 2010-01-01 18:06:28
********************************************************/

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Users'=>array('index'), $model->id),
));
?>

<legend>Informasi Detail Users #<?php echo $model->id; ?></legend>

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
			'name'=>'full_name',
			'type'=>'html',
			'value'=>$model->full_name,
		   ),
 
		 array(
			'name'=>'username',
			'type'=>'html',
			'value'=>$model->username,
		   ),
		/*
		 array(
			'name'=>'password',
			'type'=>'html',
			'value'=>$model->password,
		   ),
		*/
		 array(
			'name'=>'email',
			'type'=>'html',
			'value'=>$model->email,
		   ),
 
		 array(
			'name'=>'Status',
			'type'=>'html',
			'value'=>$model->active ? "Aktif" : "Tidak Aktif",
		   ),
   ),
));?>
<div class="form-actions">
	<?php echo CHtml::Button('Cancel',array('submit'=>'admin.html','class'=>'btn btn-primary')); ?>
	<?php echo CHtml::Button('Update',array('submit'=>'update/'.$model->id.'.html','class'=>'btn btn-primary')); ?>
</div> 
 



