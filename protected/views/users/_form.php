<?php
/********************************************************
 * dibuat oleh    : Badiyanto   
 * CRUD generator : Yii Bootstrap  
 * tanggal        : 2010-01-01 18:06:28
 ********************************************************/
?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'users-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>true,
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
	
	<?php echo $form->textFieldRow($model,'full_name',array('class'=>'span5','maxlength'=>50)); ?>
	<?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>30)); ?>
	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>50,'value'=>'')); ?>
	<?php echo $form->passwordFieldRow($model,'password_repeat',array('class'=>'span5','maxlength'=>50)); ?>
	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>100)); ?>
	<?php echo $form->checkBoxRow($model,'active'); ?>
 
<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'S i m p a n' : 'U p d a t e',
		)); ?>
		<?php echo CHtml::Button('Cancel',array('submit'=>'../admin.html','class'=>'btn btn-primary')); ?>
</div> 	

<?php $this->endWidget(); ?>
