<div class="resFiles form">
<?php echo $this->Form->create('ResFile'); ?>
	<fieldset>
		<legend><?php echo __('Edit Res File'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('res_folder_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ResFile.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ResFile.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Res Files'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Res Folders'), array('controller' => 'res_folders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res Folder'), array('controller' => 'res_folders', 'action' => 'add')); ?> </li>
	</ul>
</div>
