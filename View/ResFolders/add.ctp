<div class="resFolders form">
<?php echo $this->Form->create('ResFolder'); ?>
	<fieldset>
		<legend><?php echo __('Add Res Folder'); ?></legend>
	<?php
		echo $this->Form->input('course_id');
		echo $this->Form->input('assignment_id');
		echo $this->Form->input('section_id');
		echo $this->Form->input('name');
		echo $this->Form->input('visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Res Folders'), array('action' => 'index')); ?></li>
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
