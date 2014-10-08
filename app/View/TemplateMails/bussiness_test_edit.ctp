<div class="templateMails form">
<?php echo $this->Form->create('TemplateMail'); ?>
	<fieldset>
		<legend><?php echo __('Bussiness Test Edit Template Mail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('subject');
		echo $this->Form->input('body');
		echo $this->Form->input('status');
		echo $this->Form->input('user_id');
		echo $this->Form->input('cc');
		echo $this->Form->input('bcc');
		echo $this->Form->input('name');
		echo $this->Form->input('section_id');
		echo $this->Form->input('template_mail_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TemplateMail.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('TemplateMail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Template Mails'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Template Mail Types'), array('controller' => 'template_mail_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Mail Type'), array('controller' => 'template_mail_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attach Files'), array('controller' => 'attach_files', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attach File'), array('controller' => 'attach_files', 'action' => 'add')); ?> </li>
	</ul>
</div>
