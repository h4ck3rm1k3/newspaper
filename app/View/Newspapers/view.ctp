<div class="newspapers view">
<h2><?php echo __('Newspaper'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($newspaper['Newspaper']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($newspaper['Newspaper']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Newspaper'), array('action' => 'edit', $newspaper['Newspaper']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Newspaper'), array('action' => 'delete', $newspaper['Newspaper']['id']), null, __('Are you sure you want to delete # %s?', $newspaper['Newspaper']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Newspapers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Newspaper'), array('action' => 'add')); ?> </li>
	</ul>
</div>
