<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs',array('links'=>array('Form Hitung')));
?>
<legend>Hitung Luas</legend>
<?php
	echo $this->renderPartial('_form',array('model'=>$model));
?>