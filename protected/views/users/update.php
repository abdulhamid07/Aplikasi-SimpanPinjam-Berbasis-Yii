<?php
/********************************************************
 * dibuat oleh : Badiyanto   
 * tanggal     : 2010-01-01 18:06:28
 ********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Users'=>array('index'), 'Ubah Data'),
));
?>
<legend>Mengubah Data Users</legend> 
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>