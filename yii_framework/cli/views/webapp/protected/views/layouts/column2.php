<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

	<!-- menu sebelah kanan-->
	<div class="row">
	<div class="span2" id="sidebar">
	 <?php  $this->widget('bootstrap.widgets.TbMenu', array(
          'type'=>'list',
          'items'=>array(
                        array('label'=>'SISTEM'),
                        array('label'=>'Home', 'icon'=>'home', 'url'=>'#'),
                        array('label'=>'User', 'icon'=>'user', 'url'=>array('site/tblUser')),
                        array('label'=>'Ganti Password', 'icon'=>'pencil','url'=>array('site/gantiPassword')),
                        array('label'=>'MASTER'),
                        array('label'=>'Kota', 'icon'=>'cog', 'url'=>array('site/tblKota')),
                        array('label'=>'Propinsi', 'icon'=>'cog', 'url'=>array('site/tblPropinsi')),
                        array('label'=>'Help', 'icon'=>'flag', 'url'=>array('site/help')),
                ),
            
              )); 
		
	?>
	</div> <!-- sidebar -->
 
	<!-- halaman isi -->
	<div class="span10" id="main-content">
		<?php echo $content; ?>
	</div><!-- content -->
    </div>
   </div>
 <?php $this->endContent(); ?>