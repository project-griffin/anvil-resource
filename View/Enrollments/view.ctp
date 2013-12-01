<div class="enrollments view">
<h2><?php echo __('Enrollment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($enrollment['Enrollment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section'); ?></dt>
		<dd>
			<?php echo $this->Html->link($enrollment['Section']['id'], array('controller' => 'sections', 'action' => 'view', $enrollment['Section']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($enrollment['User']['id'], array('controller' => 'users', 'action' => 'view', $enrollment['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Enrollment'), array('action' => 'edit', $enrollment['Enrollment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Enrollment'), array('action' => 'delete', $enrollment['Enrollment']['id']), null, __('Are you sure you want to delete # %s?', $enrollment['Enrollment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Enrollments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Enrollment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Grades'); ?></h3>
	<?php if (!empty($enrollment['Grade'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $enrollment['Grade']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Course Grade'); ?></dt>
		<dd>
	<?php echo $enrollment['Grade']['course_grade']; ?>
&nbsp;</dd>
		<dt><?php echo __('Enrollment Id'); ?></dt>
		<dd>
	<?php echo $enrollment['Grade']['enrollment_id']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Grade'), array('controller' => 'grades', 'action' => 'edit', $enrollment['Grade']['id'])); ?></li>
			</ul>
		</div>
	</div>
	