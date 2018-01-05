<?php
	$this->pageTitle=Yii::app()->name . ' - Mahasiswa';
	$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Form Mahasiswa'),
));
?>
<h1>Form Mahasiswa</h1>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'contact-form',
	'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<?php echo $form->textFieldRow($model,'nim',array("placeholder"=>"Masukkan Nomor Induk Mahasiswa","class"=>"span5")); ?>
<?php echo $form->error($model,'nim'); ?>
<?php echo $form->textFieldRow($model,'nmMhs',array("placeholder"=>"Masukkan Nama Mahasiwa","class"=>"span5")); ?>
<?php echo $form->error($model,'nmMhs'); ?>
<?php echo $form->textAreaRow($model,'alamat',array("class"=>"span5")); ?>
<?php echo $form->radioButtonListRow($model,'jekel',
										array('L'=>'Laki-laki','P'=>'Perempuan')); ?>
<?php echo $form->dropDownListRow($model,'jurusan',
									array('TI'=>'Teknik Informatika',
									'SI'=>'Sistem Informasi',
									'MI'=>'Manajemen Informatika',
									'TK'=>'Teknik Komputer',
									'KA'=>'Komputerisasi Akuntansi'),
									array('prompt'=>'- Pilih Jurusan -')
									); ?>
<?php echo $form->checkBoxListRow($model,'hobi',
										array('olahraga'=>'Olah Raga','memasak'=>'Memasak','membaca'=>'Membaca','dll'=>'Dan lain-lain')); ?>
<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'TAMPIL',
		)); ?>
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'reset',
			'type'=>'warning',
			'label'=>'RESET',
		)); ?>
</div>
<?php $this->endWidget(); ?>