<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php echo "<?php\n";
 echo "/********************************************************\n";
 echo " * dibuat oleh    : Badiyanto   \n";
 echo " * CRUD generator : Yii Bootstrap  \n";
 echo " * tanggal        : " . date('Y-m-d H:i:s') . "\n"; 
 echo " ********************************************************/\n";
 echo "?>\n";
 ?>
<div class="view">

	<?php
	echo "\t<b><?php echo CHtml::encode(\$data->getAttributeLabel('{$this->tableSchema->primaryKey}')); ?>:</b>\n";
	echo "\t<?php echo CHtml::link(CHtml::encode(\$data->{$this->tableSchema->primaryKey}),array('view','id'=>\$data->{$this->tableSchema->primaryKey})); ?>\n\t<br />\n\n";
	$count = 0;
	foreach ($this->tableSchema->columns as $column) {
		if ($column->isPrimaryKey) {
			continue;
		}
		if (++$count == 7) {
			echo "\t<?php /*\n";
		}
		echo "\t<b><?php echo CHtml::encode(\$data->getAttributeLabel('{$column->name}')); ?>:</b>\n";
		echo "\t<?php echo CHtml::encode(\$data->{$column->name}); ?>\n\t<br />\n\n";
	}
	if ($count >= 7) {
		echo "\t*/ ?>\n";
	}
	?>

</div>