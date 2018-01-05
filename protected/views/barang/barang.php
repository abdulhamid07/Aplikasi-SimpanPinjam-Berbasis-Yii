<?php
	$this->pageTitle=Yii::app()->name . ' - Barang';
	$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Barang'),
));
?>
<h1>Form Barang</h1>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'contact-form',
	'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<?php echo $form->textFieldRow($brg,'kdBarang',array("placeholder"=>"Masukkan Kode Barang","class"=>"span5")); ?>
<?php echo $form->error($brg,'kdBarang',array("class"=>"span5")); ?>

<?php echo $form->textFieldRow($brg,'nmBarang',array("placeholder"=>"Masukkan Nama Barang","class"=>"span5")); ?>
<?php echo $form->error($brg,'nmBarang',array("class"=>"span5")); ?>

<?php echo $form->textFieldRow($brg,'hrgBarang',array("placeholder"=>"Masukkan Harga Barang","class"=>"span5")); ?>
<?php echo $form->error($brg,'hrgBarang',array("class"=>"span5")); ?>

<?php echo $form->textFieldRow($brg,'jmlBeli',array("placeholder"=>"Masukkan Jumlah Barang","class"=>"span5")); ?>
<?php echo $form->error($brg,'jmlBeli',array("class"=>"span5")); ?>
   <div class="form-actions"> 

	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'T a m p i l',
		)); ?>
	
   </div>
<?php $this->endWidget(); ?>

