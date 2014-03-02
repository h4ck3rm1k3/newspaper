<div class="zipcodes form">
<?php echo $this->Form->create('Zipcode'); ?>
	<fieldset>
		<legend><?php echo __('Add Zipcode'); ?></legend>
	<?php
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('latitude');
		echo $this->Form->input('longitude');
		echo $this->Form->input('timezone');
		echo $this->Form->input('dst');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Zipcodes'), array('action' => 'index')); ?></li>
	</ul>
</div>
