<?php
	$this->pageTitle=Yii::app()->name . ' - Barang';
	$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Barang'),
));
?>
<h1>Data Barang</h1>

<table class="table table-bordered table-striped">
	<tr>
		<th><?php echo $brg->getAttributeLabel('kdBarang') ?></th>
		<td><?php echo $brg->kdBarang; ?></td>
	</tr>
	<tr>
		<th><?php echo $brg->getAttributeLabel('nmBarang') ?></th>
		<td><?php echo $brg->nmBarang; ?></td>
	</tr>
	<tr>
		<th><?php echo $brg->getAttributeLabel('hrgBarang') ?></th>
		<td><?php echo $brg->hrgBarang; ?></td>
	</tr>
	<tr>
		<th><?php echo $brg->getAttributeLabel('jmlBeli') ?></th>
		<td><?php echo $brg->jmlBeli; ?></td>
	</tr>
	<tr>
		<th><?php echo $brg->getAttributeLabel('bayar') ?></th>
		<td>Rp. <?php echo $brg->bayar; ?></td>
	</tr>
</table>
