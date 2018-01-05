
<?php
/********************************************************
* dibuat oleh    : Badiyanto  
* CRUD generator : Yii Bootstrap                        
* tanggal        :   2017-09-26 04:32:14 
********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Kota'=>array('index'), 'Tambah'),
));
?>
<legend>Masukkan Data Propinsi </legend> 
<?php echo $this->renderPartial('_formPropinsi', array('model'=>$model)); ?>