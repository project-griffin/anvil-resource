<div class="rolesUsers view">
<h2><?php echo __('Roles User'); ?></h2>
	<dl>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($rolesUser['RolesUser']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rolesUser['Role']['name'], array('controller' => 'roles', 'action' => 'view', $rolesUser['Role']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Roles User'), array('action' => 'edit', $rolesUser['RolesUser']['user_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Roles User'), array('action' => 'delete', $rolesUser['RolesUser']['user_id']), null, __('Are you sure you want to delete # %s?', $rolesUser['RolesUser']['user_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Roles User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
