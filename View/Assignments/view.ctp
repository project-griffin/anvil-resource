<div class="assignments view">
<h2><?php echo __('Assignment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($assignment['Assignment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assignment['Course']['title'], array('controller' => 'courses', 'action' => 'view', $assignment['Course']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($assignment['Assignment']['number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($assignment['Assignment']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Point Value'); ?></dt>
		<dd>
			<?php echo h($assignment['Assignment']['point_value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Assignment'), array('action' => 'edit', $assignment['Assignment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Assignment'), array('action' => 'delete', $assignment['Assignment']['id']), null, __('Are you sure you want to delete # %s?', $assignment['Assignment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Assignments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assignment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Res Folders'), array('controller' => 'res_folders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res Folder'), array('controller' => 'res_folders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Res Folders'); ?></h3>
	<?php if (!empty($assignment['ResFolder'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Course Id'); ?></th>
		<th><?php echo __('Assignment Id'); ?></th>
		<th><?php echo __('Section Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Visible'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($assignment['ResFolder'] as $resFolder): ?>
		<tr>
			<td><?php echo $resFolder['id']; ?></td>
			<td><?php echo $resFolder['course_id']; ?></td>
			<td><?php echo $resFolder['assignment_id']; ?></td>
			<td><?php echo $resFolder['section_id']; ?></td>
			<td><?php echo $resFolder['name']; ?></td>
			<td><?php echo $resFolder['visible']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'res_folders', 'action' => 'view', $resFolder['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'res_folders', 'action' => 'edit', $resFolder['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'res_folders', 'action' => 'delete', $resFolder['id']), null, __('Are you sure you want to delete # %s?', $resFolder['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Res Folder'), array('controller' => 'res_folders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Submissions'); ?></h3>
	<?php if (!empty($assignment['Submission'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Assignment Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Points Awarded'); ?></th>
		<th><?php echo __('Comments'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($assignment['Submission'] as $submission): ?>
		<tr>
			<td><?php echo $submission['id']; ?></td>
			<td><?php echo $submission['assignment_id']; ?></td>
			<td><?php echo $submission['user_id']; ?></td>
			<td><?php echo $submission['points_awarded']; ?></td>
			<td><?php echo $submission['comments']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'submissions', 'action' => 'view', $submission['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'submissions', 'action' => 'edit', $submission['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'submissions', 'action' => 'delete', $submission['id']), null, __('Are you sure you want to delete # %s?', $submission['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
