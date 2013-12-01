<div class="sectionsUsers view">
<h2><?php echo __('Sections User'); ?></h2>
	<dl>
		<dt><?php echo __('Section Id'); ?></dt>
		<dd>
			<?php echo h($sectionsUser['SectionsUser']['section_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sectionsUser['User']['id'], array('controller' => 'users', 'action' => 'view', $sectionsUser['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sections User'), array('action' => 'edit', $sectionsUser['SectionsUser']['section_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sections User'), array('action' => 'delete', $sectionsUser['SectionsUser']['section_id']), null, __('Are you sure you want to delete # %s?', $sectionsUser['SectionsUser']['section_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sections User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
