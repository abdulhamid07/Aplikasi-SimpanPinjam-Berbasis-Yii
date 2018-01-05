
<?php
/********************************************************
* dibuat oleh    : Badiyanto  
* CRUD generator : Yii Bootstrap                        
* tanggal        :   2017-10-10 03:40:36 
********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Anggota'=>array('index'), 'Tambah'),
));
?>
<legend>Masukkan Data Anggota </legend> 
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>