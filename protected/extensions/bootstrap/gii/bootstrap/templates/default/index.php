<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php echo "<?php\n";
 echo "/********************************************************\n";
 echo " * dibuat oleh : Badiyanto  \n";
 echo " * CRUD generator : Yii Bootstrap  \n";
 echo " * tanggal     : " . date('Y-m-d H:i:s') . "\n"; 
 echo " ********************************************************/\n";
 echo "?>\n";
 ?>
<?php
echo "<?php\n";
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('$label'),
));\n";
?>
?>
<?php echo "<div class=\"form\">\n";?> 
<?php echo "<center>\n";?>
<?php echo "<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/admin.png'),
            array('admin'),array('title'=>'Manajemen Data')); ?>\n";?> 

<?php echo "<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/tambah.png'),
            array('create'),array('title'=>'Menambah Data')); ?>\n";?> 
			
<?php echo "</center>\n";?>
<?php echo "</div>\n";?>

<legend>
<?php echo $label; ?>
</legend>
<?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
