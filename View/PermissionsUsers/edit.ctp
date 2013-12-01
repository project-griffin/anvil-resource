<div class="permissionsUsers form">
<?php echo $this->Form->create('PermissionsUser'); ?>
	<fieldset>
		<legend><?php echo __('Edit Permissions User'); ?></legend>
	<?php
		echo $this->Form->input('permission_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('allow');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PermissionsUser.permission_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PermissionsUser.permission_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Permissions Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
