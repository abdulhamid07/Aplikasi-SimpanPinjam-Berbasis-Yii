
<?php
/********************************************************
* dibuat oleh    : Badiyanto  
* CRUD generator : Yii Bootstrap                        
* tanggal        :   2010-01-01 18:06:28 
********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Users'=>array('index'), 'Tambah'),
));
?>
<legend>Masukkan Data Users </legend> 
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>