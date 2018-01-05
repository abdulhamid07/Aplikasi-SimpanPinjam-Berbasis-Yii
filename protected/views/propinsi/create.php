
<?php
/********************************************************
* dibuat oleh    : Badiyanto  
* CRUD generator : Yii Bootstrap                        
* tanggal        :   2017-09-26 04:02:22 
********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Propinsi'=>array('index'), 'Tambah'),
));
?>
<legend>Masukkan Data Propinsi </legend> 
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>