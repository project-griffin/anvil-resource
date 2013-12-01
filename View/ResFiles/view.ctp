<div class="resFiles view">
<h2><?php echo __('Res File'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($resFile['ResFile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Res Folder'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resFile['ResFolder']['name'], array('controller' => 'res_folders', 'action' => 'view', $resFile['ResFolder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($resFile['ResFile']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($resFile['ResFile']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Res File'), array('action' => 'edit', $resFile['ResFile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Res File'), array('action' => 'delete', $resFile['ResFile']['id']), null, __('Are you sure you want to delete # %s?', $resFile['ResFile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Res Files'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res File'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Res Folders'), array('controller' => 'res_folders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res Folder'), array('controller' => 'res_folders', 'action' => 'add')); ?> </li>
	</ul>
</div>
