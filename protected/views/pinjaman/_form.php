<?php
/********************************************************
 * dibuat oleh    : Badiyanto   
 * CRUD generator : Yii Bootstrap  
 * tanggal        : 2017-10-10 05:51:21
 ********************************************************/
?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'pinjaman-form',
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
<?php //if(Yii::app()->user->hasFlash('error')) : ?>
<!--<div class="flash-error">
	<?php //echo Yii::app()->user->getFlash('error'); ?>
</div>-->
<?php echo $form->errorSummary($model); ?>
	
	<?php echo $form->dropDownListRow($model,'anggota_id',
				CHtml::listData(Anggota::model()->findAll(),'id','nama'),
				array('prompt'=>'- Nama Anggota -'),
				array('class'=>'span5','maxlength'=>1)); ?>
	<?php echo $form->dropDownListRow($model,'jenis_pinjaman_id',
				CHtml::listData(JenisPinjaman::model()->findAll(),'id','jenis_pinjaman'),
				array('prompt'=>'- Jenis Pinjaman -','style'=>'width:300px;','onChange'=>"{selectBunga();}")); ?>
	
	<?php 
		if(!$model->isNewRecord)
		{
			$model->bunga=JenisPinjaman::model()->findByPk($model->jenis_pinjaman_id)->bunga;
			$model->besar_angsuran=($model->besar_pinjaman+($model->besar_pinjaman*$model->bunga/100))/$model->diangsur_kali;
		}
	 ?>
	<?php echo $form->textFieldRow($model,'bunga',array('style'=>'text-align: right',
	                  'readOnly'=>true,'class'=>'span5')); ?>
					  
	<?php echo $form->textFieldRow($model,'besar_pinjaman',array('class'=>'span5')); ?>
	<?php echo $form->textFieldRow($model,'diangsur_kali',array('class'=>'span5')); ?>
	<?php echo $form->textFieldRow($model,'pokok_dibayar',array('class'=>'span5')); ?>
	<?php echo $form->textFieldRow($model,'besar_angsuran',array('class'=>'span5')); ?>
	<?php echo $form->datePickerRow($model,'tanggal_jatuh_tempo',array('options'=>array('format'=>'yyyy-mm-dd'),),
									array('prepend'=>'<i class="icon icon-calendar"></i>')); ?>
<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'S i m p a n' : 'U p d a t e',
		)); ?>
</div> 	

<?php $this->endWidget(); ?>
<script type="text/javascript">

function selectBunga()
{
	
var data = "id="+$('#Pinjaman_jenis_pinjaman_id').val() ;
//  alert(data);
jQuery.ajax({
        'type':'GET',
        'url':'<?php echo CController::createUrl('pilihBunga');?>',
        'data': data,
        'success':function(data){
                    $('#Pinjaman_bunga').val(data.bunga);
			        },
		'error': function(data) { // if error occured
             $('#Pinjaman_bunga').val("0");
        },
        'dataType':'json'
      });
}
// mengghitung besar pokok pinjaman//
 $("#Pinjaman_pokok_dibayar").live('blur',
 function(event) 
   {
   var a = $("#Pinjaman_besar_pinjaman").val();
   var b = $("#Pinjaman_bunga").val();
   
   if ((a==0) || (b==0))
      {
	  $('#Pinjaman_pokok_dibayar').val("0");
	  return false;
	  }
  else	  
    {
	var pokok = parseInt(a)+(parseInt(a) * parseInt(b)/100);
    //var p=pokok.toFixed(2); 
      $('#Pinjaman_pokok_dibayar').val(pokok);
	  return false; 
	}   
  }
 );
 
 // mengghitung besar pokok pinjaman//
 $("#Pinjaman_besar_angsuran").live('blur',
 function(event) 
   {
   var a = $("#Pinjaman_pokok_dibayar").val();
   var b = $("#Pinjaman_diangsur_kali").val();
   
   if ((a==0) || (b==0))
      {
	  $('#Pinjaman_besar_angsuran').val("0");
	  return false;
	  }
  else	  
    {
	var ang = parseInt(a)/parseInt(b);
    //var p=pokok.toFixed(2); 
      $('#Pinjaman_besar_angsuran').val(ang);
	  return false; 
	}   
  }
 );
</script>