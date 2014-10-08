<div class="templateMailTypes view">
<h2><?php echo __('Template Mail Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($templateMailType['TemplateMailType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($templateMailType['TemplateMailType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($templateMailType['TemplateMailType']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Template Mail Type'), array('action' => 'edit', $templateMailType['TemplateMailType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Template Mail Type'), array('action' => 'delete', $templateMailType['TemplateMailType']['id']), array(), __('Are you sure you want to delete # %s?', $templateMailType['TemplateMailType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Template Mail Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Mail Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Template Mails'), array('controller' => 'template_mails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Mail'), array('controller' => 'template_mails', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Template Mails'); ?></h3>
	<?php if (!empty($templateMailType['TemplateMail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Subject'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Cc'); ?></th>
		<th><?php echo __('Bcc'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Section Id'); ?></th>
		<th><?php echo __('Template Mail Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($templateMailType['TemplateMail'] as $templateMail): ?>
		<tr>
			<td><?php echo $templateMail['id']; ?></td>
			<td><?php echo $templateMail['subject']; ?></td>
			<td><?php echo $templateMail['body']; ?></td>
			<td><?php echo $templateMail['status']; ?></td>
			<td><?php echo $templateMail['user_id']; ?></td>
			<td><?php echo $templateMail['created']; ?></td>
			<td><?php echo $templateMail['modified']; ?></td>
			<td><?php echo $templateMail['cc']; ?></td>
			<td><?php echo $templateMail['bcc']; ?></td>
			<td><?php echo $templateMail['name']; ?></td>
			<td><?php echo $templateMail['section_id']; ?></td>
			<td><?php echo $templateMail['template_mail_type_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'template_mails', 'action' => 'view', $templateMail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'template_mails', 'action' => 'edit', $templateMail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'template_mails', 'action' => 'delete', $templateMail['id']), array(), __('Are you sure you want to delete # %s?', $templateMail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Template Mail'), array('controller' => 'template_mails', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
