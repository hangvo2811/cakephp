<div class="attachFiles form">
<?php echo $this->Form->create('AttachFile'); ?>
	<fieldset>
		<legend><?php echo __('Edit Attach File'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('template_mail_id');
		echo $this->Form->input('name');
		echo $this->Form->input('url');
		echo $this->Form->input('type');
		echo $this->Form->input('size');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AttachFile.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('AttachFile.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Attach Files'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Template Mails'), array('controller' => 'template_mails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Mail'), array('controller' => 'template_mails', 'action' => 'add')); ?> </li>
	</ul>
</div>
