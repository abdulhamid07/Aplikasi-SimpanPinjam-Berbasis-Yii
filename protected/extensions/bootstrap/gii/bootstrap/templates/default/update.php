<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
 echo "<?php\n";
 echo "/********************************************************\n";
 echo " * dibuat oleh : Badiyanto   \n";
 echo " * tanggal     : " . date('Y-m-d H:i:s') . "\n"; 
 echo " ********************************************************/\n";

$nameColumn = $this->guessNameColumn($this->tableSchema->columns);
$label = $this->pluralize($this->class2name($this->modelClass));
echo "\$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('". $this->modelClass ."'=>array('index'), 'Ubah Data'),
));\n"; 
?>
?>
<legend>Mengubah Data <?php echo $this->modelClass; ?></legend> <?php echo "\n";?>
<?php echo "<?php echo \$this->renderPartial('_form',array('model'=>\$model)); ?>"; ?>