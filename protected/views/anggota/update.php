<?php
/********************************************************
 * dibuat oleh : Badiyanto   
 * tanggal     : 2017-10-10 03:40:36
 ********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Anggota'=>array('index'), 'Ubah Data'),
));
?>
<legend>Mengubah Data Anggota</legend> 
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>