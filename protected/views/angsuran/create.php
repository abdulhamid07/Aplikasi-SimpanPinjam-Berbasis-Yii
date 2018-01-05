
<?php
/********************************************************
* dibuat oleh    : Badiyanto  
* CRUD generator : Yii Bootstrap                        
* tanggal        :   2010-01-01 17:18:12 
********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Angsuran'=>array('index'), 'Tambah'),
));
?>
<legend>Masukkan Data Angsuran </legend> 
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>