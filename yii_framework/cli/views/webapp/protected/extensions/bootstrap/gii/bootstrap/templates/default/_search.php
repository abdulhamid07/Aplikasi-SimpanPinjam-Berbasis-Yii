<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php echo "<?php 
/********************************************************
* dibuat oleh : Badiyanto 
* CRUD generator : Yii Bootstrap  
* tanggal     : ". date('Y-m-d H:i:s') . "\n" .
"********************************************************/
?>
<br>
<?php 
\$form=\$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'type'=>'horizontal',
	'action'=>Yii::app()->createUrl(\$this->route),
	'method'=>'get',
  )); ?>\n"; ?>

<?php foreach ($this->tableSchema->columns as $column)
{ ?>
<?php
	$field = $this->generateInputField($this->modelClass, $column);
	if (strpos($field, 'password') !== false) {
		continue;
	}
?>
<?php
	if ($column->autoIncrement) 
		continue;
    echo "    <?php echo " . $this->generateActiveRow($this->modelClass, $column) . "; ?>\n"; ?>

<?php } //endforeach; ?>
	
	<div class="form-actions">
		<?php echo "<?php \$this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'C a r i',
		)); ?>\n"; ?>
	</div>

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>