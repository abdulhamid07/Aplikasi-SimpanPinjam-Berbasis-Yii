<?php
/********************************************************
 * dibuat oleh    : Badiyanto   
 * CRUD generator : Yii Bootstrap  
 * tanggal        : 2010-01-01 17:18:12
 ********************************************************/
?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'angsuran-form',
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
<?php //$model->anggota_id=Anggota::model()->findByPk($model->anggota_id)->nama; ?>
<?php echo $form->errorSummary($model); ?>
	
	<?php echo $form->textFieldRow($model,'pinjaman_id',array('class'=>'span5','readOnly'=>true)); ?>
	<?php echo $form->textFieldRow($model,'anggota_id',array('class'=>'span5','readOnly'=>true)); ?>
	<?php echo $form->textFieldRow($model,'angsuran_ke',array('class'=>'span5','readOnly'=>true)); ?>
	<?php echo $form->textFieldRow($model,'besar_angsuran',array('class'=>'span5','readOnly'=>true)); ?>
	<?php echo $form->textFieldRow($model,'tanggal_jatuh_tempo',array('class'=>'span5','readOnly'=>true)); ?>
	<?php echo $form->textFieldRow($model,'tanggal_bayar',array('class'=>'span5','readOnly'=>true)); ?>
	<?php //echo $form->textFieldRow($model,'status_bayar',array('class'=>'span5')); ?>
	<?php echo $form->radioButtonListRow($model,'status_bayar',
										array('0'=>'Belum Bayar','1'=>'Sudah Bayar')); ?>
 
<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'S i m p a n' : 'U p d a t e',
		)); ?>
</div> 	

<?php $this->endWidget(); ?>
