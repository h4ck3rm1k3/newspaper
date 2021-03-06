
<div class="zipcodes index">
	<h2><?php echo __('Zipcodes'); ?></h2>

<?php
echo $this->Filter->filterForm('ZipCode', array('legend' => 'Search')); 
?>


	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('latitude'); ?></th>
			<th><?php echo $this->Paginator->sort('longitude'); ?></th>
			<th><?php echo $this->Paginator->sort('timezone'); ?></th>
			<th><?php echo $this->Paginator->sort('dst'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>

	</tr>
	<?php foreach ($zipcodes as $zipcode): ?>

	<tr>
		<td><?php echo h($zipcode['Zipcode']['zip']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['city']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['state']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['latitude']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['longitude']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['timezone']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['dst']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $zipcode['Zipcode']['zip'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $zipcode['Zipcode']['zip'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $zipcode['Zipcode']['zip']), null, __('Are you sure you want to delete # %s?', $zipcode['Zipcode']['zip'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Zipcode'), array('action' => 'add')); ?></li>
		<li>
<?php 
$markers = array();
foreach ($zipcodes as $zipcode) {
    array_push ($markers,
    array(
        'lat' => $zipcode['Zipcode']['latitude'],
        'long' => $zipcode['Zipcode']['longitude'],
        'title' => "Zip" .   $zipcode['Zipcode']['zip'] . 
        $zipcode['Zipcode']['city'] .
        $zipcode['Zipcode']['state']
    ));
}
echo $this->OpenLayers->map(
    array(
        'lat' => '43.005895',
        'long' => '-71.013202',
        'zoom' => 5,
        'markers' => $markers,
    )); 
?>
</li>
	</ul>
</div>

