<?php
/********************************************************
 * dibuat oleh    : Badiyanto   
 * CRUD generator : Yii Bootstrap  
 * tanggal        : 2017-10-10 03:40:36
 ********************************************************/
?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'anggota-form',
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
)); ?>
<br>
<p class="help-block">Yang bertanda  <span class="required">*</span> isian tidak boleh kosong.</p>
<br>

<?php echo $form->errorSummary($model); ?>
	
	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>60)); ?>
	<?php echo $form->textAreaRow($model,'alamat',array('class'=>'span5','maxlength'=>75)); ?>
	<!--Jenis Kelamin -->
	<?php echo $form->radioButtonListRow($model,'jenis_kelamin',
										array('L'=>'Laki-laki','P'=>'Perempuan')); ?>
	<?php echo $form->datePickerRow($model,'tanggal_lahir',
									array('options'=>array('format'=>'yyyy-mm-dd')),
									array('prepend'=>'<i class="icon icon-calendar"></i>')
									); ?>
	<?php echo $form->dropDownListRow($model,'agama_id',
									array('1'=>'Islam',
									'2'=>'Katolik',
									'3'=>'Protestan',
									'4'=>'Hindu',
									'5'=>'Buddha',
									'6'=>'Lainnya'),
									array('prompt'=>'- Pilihan Agama -')
									); ?>
	<?php echo $form->dropDownListRow($model,'pekerjaan_id',
				CHtml::listData(Pekerjaan::model()->findAll(),'id','pekerjaan'),
				array('prompt'=>'- Pilihan Pekerjaan -'),
				array('class'=>'span5','maxlength'=>1)); ?>
	<?php echo $form->textFieldRow($model,'penghasilan_perbulan',array('class'=>'span5')); ?>
 
<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'S i m p a n' : 'U p d a t e',
		)); ?>
</div> 	

<?php $this->endWidget(); ?>
