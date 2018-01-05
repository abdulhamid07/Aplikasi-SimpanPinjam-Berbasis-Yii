<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

  <div class="row-fluid">
	<div class="span3">
		<div class="sidebar-nav">
        
		  <?php $this->widget('zii.widgets.CMenu', array(
			/*'type'=>'list',*/
			'encodeLabel'=>false,
			'items'=>array(
				 array('label'=>'SISTEM'),
                        array('label'=>'<i class="icon icon-home"></i> Home', 'url'=>array('site/index')),
                        array('label'=>'<i class="icon icon-user"></i> Users', 'icon'=>'user', 'url'=>array('users/admin')),
                        array('label'=>'<i class="icon icon-pencil"></i> Ganti Password', 'icon'=>'pencil','url'=>array('site/gantiPassword')),
						array('label'=>'MASTER'),
						array('label'=>'<i class="icon icon-user"></i> Anggota','icon'=>'user', 'url'=>array('anggota/admin')),
						array('label'=>'<i class="icon icon-briefcase"></i> Pekerjaan','icon'=>'cog', 'url'=>array('pekerjaan/admin')),
						array('label'=>'<i class="icon icon-download-alt"></i> Pinjaman','icon'=>'th','url'=>array('pinjaman/admin')),
						array('label'=>'<i class="icon icon-check"></i> Angsuran','icon'=>'edit','url'=>array('angsuran/admin')),
                        array('label'=>'<i class="icon icon-info-sign"></i> Help', 'icon'=>'flag', 'url'=>array('site/help')),
				// Include the operations menu
				array('label'=>'OPERATIONS','items'=>$this->menu),
			),
			));?>
		</div>
        <br>
        <table class="table table-striped table-bordered">
          <tbody>
            <tr>
              <td width="50%">Bandwith Usage</td>
              <td>
              	<div class="progress progress-danger">
                  <div class="bar" style="width: 80%"></div>
                </div>
              </td>
            </tr>
            <tr>
              <td>Disk Spage</td>
              <td>
             	<div class="progress progress-warning">
                  <div class="bar" style="width: 60%"></div>
                </div>
              </td>
            </tr>
            <tr>
              <td>Conversion Rate</td>
              <td>
             	<div class="progress progress-success">
                  <div class="bar" style="width: 40%"></div>
                </div>
              </td>
            </tr>
            <tr>
              <td>Closed Sales</td>
              <td>
              	<div class="progress progress-info">
                  <div class="bar" style="width: 20%"></div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
		<div class="well">
        
            <dl class="dl-horizontal">
              <dt>Account status</dt>
              <dd>$1,234,002</dd>
              <dt>Open Invoices</dt>
              <dd>$245,000</dd>
              <dt>Overdue Invoices</dt>
              <dd>$20,023</dd>
              <dt>Converted Quotes</dt>
              <dd>$560,000</dd>
              
            </dl>
      </div>
		
    </div><!--/span-->
    <div class="span9">
    
    <?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
			'homeLink'=>CHtml::link('Dashboard'),
			'htmlOptions'=>array('class'=>'breadcrumb')
        )); ?><!-- breadcrumbs -->
    <?php endif?>
    
    <!-- Include content pages -->
    <?php echo $content; ?>

	</div><!--/span-->
  </div><!--/row-->


<?php $this->endContent(); ?>