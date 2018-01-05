<?php
/********************************************************
 * dibuat oleh : Badiyanto   
 * tanggal     : 2017-09-26 04:02:22
 ********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Propinsi'=>array('index'), 'Ubah Data'),
));
?>
<legend>Mengubah Data Propinsi</legend> 
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>