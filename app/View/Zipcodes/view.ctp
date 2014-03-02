<div class="zipcodes view">
<h2><?php echo __('Zipcode'); ?></h2>
	<dl>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Latitude'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['latitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Longitude'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['longitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Timezone'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['timezone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dst'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['dst']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Zipcode'), array('action' => 'edit', $zipcode['Zipcode']['zip'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Zipcode'), array('action' => 'delete', $zipcode['Zipcode']['zip']), null, __('Are you sure you want to delete # %s?', $zipcode['Zipcode']['zip'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Zipcodes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zipcode'), array('action' => 'add')); ?> </li>
	</ul>
</div>
