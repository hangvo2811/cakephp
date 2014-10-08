<div class="templateMailTypes form">
<?php echo $this->Form->create('TemplateMailType'); ?>
	<fieldset>
		<legend><?php echo __('Add Template Mail Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Template Mail Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Template Mails'), array('controller' => 'template_mails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Mail'), array('controller' => 'template_mails', 'action' => 'add')); ?> </li>
	</ul>
</div>
