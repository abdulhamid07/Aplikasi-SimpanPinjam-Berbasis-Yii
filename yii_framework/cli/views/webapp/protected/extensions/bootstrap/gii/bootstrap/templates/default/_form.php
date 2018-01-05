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
<?php echo "<?php \$form=\$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'" . $this->class2id($this->modelClass) . "-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	'method'=>'post',
            'type'=>'horizontal',
            'clientOptions'=>array(
             'validateOnType'=>true,
             'validateOnChange' => true,
            ),
            'htmlOptions'=>array('enctype'=>'multipart/form-data')
)); ?>\n"; ?>
<br>
<p class="help-block">Yang bertanda  <span class="required">*</span> isian tidak boleh kosong.</p>
<br>

<?php echo "<?php echo \$form->errorSummary(\$model); ?>\n"; ?>
	
<?php
foreach ($this->tableSchema->columns as $column) {
	if ($column->autoIncrement) 
		continue;  
	else if ($column->name==='user_id')
        continue;
	
	?>
	<?php echo "<?php echo " . $this->generateActiveRow($this->modelClass, $column) . "; ?>\n";
  }	?>
 
<div class="form-actions">
	<?php echo "<?php \$this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>\$model->isNewRecord ? 'S i m p a n' : 'U p d a t e',
		)); ?>\n"; ?>
</div> 	

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>
