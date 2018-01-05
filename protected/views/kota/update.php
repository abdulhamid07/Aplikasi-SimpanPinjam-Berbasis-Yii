<?php
/********************************************************
 * dibuat oleh : Badiyanto   
 * tanggal     : 2017-09-26 04:32:14
 ********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Kota'=>array('index'), 'Ubah Data'),
));
?>
<legend>Mengubah Data Kota</legend> 
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>