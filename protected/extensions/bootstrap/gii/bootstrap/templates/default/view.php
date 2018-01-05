<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php echo "<?php\n";?>
/********************************************************
* dibuat oleh    : Badiyanto
* CRUD generator : Yii Bootstrap  \n";
* tanggal        : <?php echo date('Y-m-d H:i:s') ."\n"; ?>
********************************************************/

<?php


$nameColumn = $this->guessNameColumn($this->tableSchema->columns);
$label = $this->pluralize($this->class2name($this->modelClass));

echo "\$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('". $this->modelClass ."'=>array('index'), \$model->{$nameColumn}),
));\n"; 
?>
?>

<legend>Informasi Detail <?php echo $this->modelClass . " #<?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?></legend>

<?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbDetailView',array(
   'data'=>$model,
   'type'=>'bordered striped condensed',
   'attributes'=>array(
<?php
foreach ($this->tableSchema->columns as $column) { ?> 
		 array(
			'name'=>'<?php echo $column->name;?>',
			'type'=>'html',
			'value'=>$model-><?php echo $column->name;?>,
		   ),
<?php } ?>
   ),
)); ?>
 



