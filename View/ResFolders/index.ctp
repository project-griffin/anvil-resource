<div class="resFolders index">
	<h2><?php echo __('Res Folders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('course_id'); ?></th>
			<th><?php echo $this->Paginator->sort('assignment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('section_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('visible'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($resFolders as $resFolder): ?>
	<tr>
		<td><?php echo h($resFolder['ResFolder']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($resFolder['Course']['title'], array('controller' => 'courses', 'action' => 'view', $resFolder['Course']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($resFolder['Assignment']['name'], array('controller' => 'assignments', 'action' => 'view', $resFolder['Assignment']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($resFolder['Section']['id'], array('controller' => 'sections', 'action' => 'view', $resFolder['Section']['id'])); ?>
		</td>
		<td><?php echo h($resFolder['ResFolder']['name']); ?>&nbsp;</td>
		<td><?php echo h($resFolder['ResFolder']['visible']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $resFolder['ResFolder']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $resFolder['ResFolder']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $resFolder['ResFolder']['id']), null, __('Are you sure you want to delete # %s?', $resFolder['ResFolder']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Res Folder'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assignments'), array('controller' => 'assignments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assignment'), array('controller' => 'assignments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Res Files'), array('controller' => 'res_files', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res File'), array('controller' => 'res_files', 'action' => 'add')); ?> </li>
	</ul>
</div>
