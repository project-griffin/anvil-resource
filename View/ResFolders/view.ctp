<div class="resFolders view">
<h2><?php echo __('Res Folder'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($resFolder['ResFolder']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resFolder['Course']['title'], array('controller' => 'courses', 'action' => 'view', $resFolder['Course']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assignment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resFolder['Assignment']['name'], array('controller' => 'assignments', 'action' => 'view', $resFolder['Assignment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resFolder['Section']['id'], array('controller' => 'sections', 'action' => 'view', $resFolder['Section']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($resFolder['ResFolder']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($resFolder['ResFolder']['visible']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Res Folder'), array('action' => 'edit', $resFolder['ResFolder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Res Folder'), array('action' => 'delete', $resFolder['ResFolder']['id']), null, __('Are you sure you want to delete # %s?', $resFolder['ResFolder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Res Folders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res Folder'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Res Files'); ?></h3>
	<?php if (!empty($resFolder['ResFile'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Res Folder Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($resFolder['ResFile'] as $resFile): ?>
		<tr>
			<td><?php echo $resFile['id']; ?></td>
			<td><?php echo $resFile['res_folder_id']; ?></td>
			<td><?php echo $resFile['name']; ?></td>
			<td><?php echo $resFile['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'res_files', 'action' => 'view', $resFile['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'res_files', 'action' => 'edit', $resFile['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'res_files', 'action' => 'delete', $resFile['id']), null, __('Are you sure you want to delete # %s?', $resFile['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Res File'), array('controller' => 'res_files', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
