<?php
/********************************************************
 * dibuat oleh    : Badiyanto   
 * CRUD generator : Yii Bootstrap  
 * tanggal        : 2017-09-26 04:32:14
 ********************************************************/
?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'kota-form',
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
	
	<?php //echo $form->textFieldRow($model,'propinsi_id',array('class'=>'span5')); ?>
	<?php //echo $form->labelEx($model,'propinsi_id',array('class'=>'span5')); ?>
	<?php  echo $form->dropDownListRow($model,'propinsi_id',
				CHtml::listData(Propinsi::model()->findAll(),'id','nama_propinsi'),
				array('prompt'=>'- Pilihan Propinsi -')); ?>
	<?php echo $form->textFieldRow($model,'nama_kota',array('class'=>'span5','maxlength'=>75)); ?>
 
<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Simpan' : 'Update',
		)); ?>
</div> 	

<?php $this->endWidget(); ?>
