<div class="attachFiles view">
<h2><?php echo __('Attach File'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($attachFile['AttachFile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Template Mail'); ?></dt>
		<dd>
			<?php echo $this->Html->link($attachFile['TemplateMail']['name'], array('controller' => 'template_mails', 'action' => 'view', $attachFile['TemplateMail']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($attachFile['AttachFile']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($attachFile['AttachFile']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($attachFile['AttachFile']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($attachFile['AttachFile']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($attachFile['AttachFile']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($attachFile['AttachFile']['size']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Attach File'), array('action' => 'edit', $attachFile['AttachFile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attach File'), array('action' => 'delete', $attachFile['AttachFile']['id']), array(), __('Are you sure you want to delete # %s?', $attachFile['AttachFile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attach Files'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attach File'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Template Mails'), array('controller' => 'template_mails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Mail'), array('controller' => 'template_mails', 'action' => 'add')); ?> </li>
	</ul>
</div>
