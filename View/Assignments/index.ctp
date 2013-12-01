<div class="assignments index">
	<h2><?php echo __('Assignments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('course_id'); ?></th>
			<th><?php echo $this->Paginator->sort('number'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('point_value'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($assignments as $assignment): ?>
	<tr>
		<td><?php echo h($assignment['Assignment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($assignment['Course']['title'], array('controller' => 'courses', 'action' => 'view', $assignment['Course']['id'])); ?>
		</td>
		<td><?php echo h($assignment['Assignment']['number']); ?>&nbsp;</td>
		<td><?php echo h($assignment['Assignment']['name']); ?>&nbsp;</td>
		<td><?php echo h($assignment['Assignment']['point_value']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $assignment['Assignment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $assignment['Assignment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $assignment['Assignment']['id']), null, __('Are you sure you want to delete # %s?', $assignment['Assignment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Assignment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Res Folders'), array('controller' => 'res_folders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res Folder'), array('controller' => 'res_folders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
