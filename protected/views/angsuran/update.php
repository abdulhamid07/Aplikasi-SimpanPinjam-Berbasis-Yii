<?php
/********************************************************
 * dibuat oleh : Badiyanto   
 * tanggal     : 2010-01-01 17:18:12
 ********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Angsuran'=>array('index'), 'Ubah Data'),
));
?>
<legend>Mengubah Data Angsuran</legend> 
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>