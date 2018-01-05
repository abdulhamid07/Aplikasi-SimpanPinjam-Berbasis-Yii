<?php
/********************************************************
 * dibuat oleh : Badiyanto   
 * tanggal     : 2017-10-10 05:51:21
 ********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Pinjaman'=>array('index'), 'Ubah Data'),
));
?>
<legend>Mengubah Data Pinjaman</legend> 
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>