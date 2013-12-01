<div class="sectionTypes form">
<?php echo $this->Form->create('SectionType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Section Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('code');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SectionType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SectionType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Section Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
