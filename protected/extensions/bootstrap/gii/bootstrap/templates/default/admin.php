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


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('<?php echo $this->class2id($this->modelClass); ?>-grid', {
		data: $(this).serialize()
	});
	return false;
});
");

$this->beginWidget('zii.widgets.jui.CJuiDialog', array( // the dialog
    'id'=>'helpdialog',
    'options'=>array(
        'title'=>'Bantuan',
        'autoOpen'=>false,
        'modal'=>true,
        'show'=>'slide',
		'hide'=>'slide',
    ),
));
echo $this->renderPartial('_help');
$this->endWidget();
?>

<legend>
Menampilkan Data  <?php echo $this->pluralize($this->class2name($this->modelClass)) ."\n"; ?>
</legend>
<?php echo "<div class=\"form\">\n";?> 
<?php echo "<center>\n";?>
<?php echo "<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/daftar.png'),
            array('index'),array('title'=>'Daftar Detail')); ?>\n";?> 			
<?php echo "<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/cari.png'),'#',
            array('class'=>'search-button','title'=>'Pencarian Data')); ?>\n";?> 
<?php echo "<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/petunjuk.png'),'#',
            array('title'=>'Bantuan','onclick'=>\"$('#helpdialog').dialog('open')\",)); ?>\n ";?>
<?php echo "<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/tambah.png'),
            array('create'),array('title'=>'Menambah Data')); ?>\n";?> 			
<?php echo "</center>\n";?>
<?php echo "</div>\n";?>

<div class="search-form" style="display:none">
<?php echo "<?php \$this->renderPartial('_search',array(
	'model'=>\$model,
)); ?>\n"; ?>
</div><!-- search-form -->

<?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
	'type'=>'bordered striped condensed',
	'dataProvider'=>$model->search(),
	'selectableRows'=>2,
	'template'=>'{items}{summary}{pager}',
	'columns'=>array(
	     array( //nomor urut
	       'header'=>'NO',
		   'value'=>'$this->grid->dataProvider->pagination->currentPage * 
		   $this->grid->dataProvider->pagination->pageSize + ($row+1)',
		   'htmlOptions'=>array('width'=>'3%','style'=>'text-align:center'),
		),
<?php
$count=0;
foreach($this->tableSchema->columns as $column)
{
	if($count==7)
		echo "\t\t/*\n";
?>
		array(
			'name'=>'<?php echo $column->name;?>',
			'type'=>'raw',
			'value'=>'CHtml::encode($data-><?php echo $column->name;?>)',
			'htmlOptions'=>array('width'=>''),
		),
<?php
	$count++;
}
if($count > 7)
	echo "\t\t*/\n";
?>
		array(
		    'header'=>'AKSI',
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width:50px','style'=>'text-align:center'),
        ),
		
	),
)); ?>

