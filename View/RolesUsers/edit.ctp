<div class="rolesUsers form">
<?php echo $this->Form->create('RolesUser'); ?>
	<fieldset>
		<legend><?php echo __('Edit Roles User'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('role_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RolesUser.user_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RolesUser.user_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Roles Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
