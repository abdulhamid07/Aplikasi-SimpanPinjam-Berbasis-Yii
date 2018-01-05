<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>

<?php
echo "<?php\n";
?>
/********************************************************
* dibuat oleh    : Badiyanto  
* CRUD generator : Yii Bootstrap                        
* tanggal        :   <?php echo date('Y-m-d H:i:s');?> 
********************************************************/
<?php  
$label = $this->pluralize($this->class2name($this->modelClass));
echo "\$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('". $this->modelClass ."'=>array('index'), 'Tambah'),
));\n"; 
echo "?>"; 
?>

<legend>Masukkan Data <?php echo $this->modelClass; ?> </legend> <?php echo "\n";?>
<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
