<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

	<!-- menu sebelah kanan-->
	<div class="row">
	<div class="span2" id="sidebar">
	 <?php  $this->widget('bootstrap.widgets.TbMenu', array(
          'type'=>'list',
          'items'=>array(
                        array('label'=>'SISTEM'),
                        array('label'=>'Home', 'icon'=>'home', 'url'=>array('site/index')),
                        array('label'=>'User', 'icon'=>'user', 'url'=>array('users/admin')),
                        array('label'=>'Ganti Password', 'icon'=>'pencil','url'=>array('site/gantiPassword')),
                        array('label'=>'Hello','icon'=>'th','url'=>array('site/hello')),
						array('label'=>'MASTER'),
                        array('label'=>'Kota', 'icon'=>'cog', 'url'=>array('kota/admin')),
                        array('label'=>'Propinsi', 'icon'=>'cog', 'url'=>array('propinsi/admin')),
						array('label'=>'Anggota','icon'=>'user', 'url'=>array('anggota/admin')),
						array('label'=>'Pekerjaan','icon'=>'cog', 'url'=>array('pekerjaan/admin')),
						array('label'=>'Pinjaman','icon'=>'th','url'=>array('pinjaman/admin')),
						array('label'=>'Angsuran','icon'=>'edit','url'=>array('angsuran/admin')),
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