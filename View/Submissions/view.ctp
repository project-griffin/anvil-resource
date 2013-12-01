<div class="submissions view">
<h2><?php echo __('Submission'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assignment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($submission['Assignment']['name'], array('controller' => 'assignments', 'action' => 'view', $submission['Assignment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($submission['User']['id'], array('controller' => 'users', 'action' => 'view', $submission['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Points Awarded'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['points_awarded']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['comments']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Submission'), array('action' => 'edit', $submission['Submission']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Submission'), array('action' => 'delete', $submission['Submission']['id']), null, __('Are you sure you want to delete # %s?', $submission['Submission']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assignments'), array('controller' => 'assignments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assignment'), array('controller' => 'assignments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
