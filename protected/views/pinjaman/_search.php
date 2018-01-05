<?php 
/********************************************************
* dibuat oleh : Badiyanto 
* CRUD generator : Yii Bootstrap  
* tanggal     : 2017-10-10 05:51:21
********************************************************/
?>
<br>
<?php 
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'type'=>'horizontal',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
  )); ?>

    <?php echo $form->dropDownListRow($model,'anggota_id',
				CHtml::listData(Anggota::model()->findAll(),'id','nama'),array('prompt'=>'- Nama Anggota -','class'=>'span5')); ?>

    <?php //echo $form->textFieldRow($model,'jenis_pinjaman_id',array('class'=>'span5')); ?>

    <?php //echo $form->textFieldRow($model,'besar_pinjaman',array('class'=>'span5')); ?>

    <?php //echo $form->textFieldRow($model,'diangsur_kali',array('class'=>'span5')); ?>

    <?php //echo $form->textFieldRow($model,'tanggal_jatuh_tempo',array('class'=>'span5')); ?>

    <?php //echo $form->textFieldRow($model,'pokok_dibayar',array('class'=>'span5')); ?>

    <?php //echo $form->textFieldRow($model,'tanggal',array('class'=>'span5')); ?>

	
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'C a r i',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
