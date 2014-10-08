<div class="templateMails view">
<h2><?php echo __('Template Mail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($templateMail['TemplateMail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject'); ?></dt>
		<dd>
			<?php echo h($templateMail['TemplateMail']['subject']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($templateMail['TemplateMail']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($templateMail['TemplateMail']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($templateMail['TemplateMail']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($templateMail['TemplateMail']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($templateMail['TemplateMail']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cc'); ?></dt>
		<dd>
			<?php echo h($templateMail['TemplateMail']['cc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bcc'); ?></dt>
		<dd>
			<?php echo h($templateMail['TemplateMail']['bcc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($templateMail['TemplateMail']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section Id'); ?></dt>
		<dd>
			<?php echo h($templateMail['TemplateMail']['section_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Template Mail Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($templateMail['TemplateMailType']['name'], array('controller' => 'template_mail_types', 'action' => 'view', $templateMail['TemplateMailType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Template Mail'), array('action' => 'edit', $templateMail['TemplateMail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Template Mail'), array('action' => 'delete', $templateMail['TemplateMail']['id']), array(), __('Are you sure you want to delete # %s?', $templateMail['TemplateMail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Template Mails'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Mail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Template Mail Types'), array('controller' => 'template_mail_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Mail Type'), array('controller' => 'template_mail_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attach Files'), array('controller' => 'attach_files', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attach File'), array('controller' => 'attach_files', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Attach Files'); ?></h3>
	<?php if (!empty($templateMail['AttachFile'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Template Mail Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Size'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($templateMail['AttachFile'] as $attachFile): ?>
		<tr>
			<td><?php echo $attachFile['id']; ?></td>
			<td><?php echo $attachFile['template_mail_id']; ?></td>
			<td><?php echo $attachFile['created']; ?></td>
			<td><?php echo $attachFile['modified']; ?></td>
			<td><?php echo $attachFile['name']; ?></td>
			<td><?php echo $attachFile['url']; ?></td>
			<td><?php echo $attachFile['type']; ?></td>
			<td><?php echo $attachFile['size']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'attach_files', 'action' => 'view', $attachFile['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'attach_files', 'action' => 'edit', $attachFile['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'attach_files', 'action' => 'delete', $attachFile['id']), array(), __('Are you sure you want to delete # %s?', $attachFile['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Attach File'), array('controller' => 'attach_files', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
