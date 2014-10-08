<div class="attachFiles index">
	<h2><?php echo __('Attach Files'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('template_mail_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('size'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($attachFiles as $attachFile): ?>
	<tr>
		<td><?php echo h($attachFile['AttachFile']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($attachFile['TemplateMail']['name'], array('controller' => 'template_mails', 'action' => 'view', $attachFile['TemplateMail']['id'])); ?>
		</td>
		<td><?php echo h($attachFile['AttachFile']['created']); ?>&nbsp;</td>
		<td><?php echo h($attachFile['AttachFile']['modified']); ?>&nbsp;</td>
		<td><?php echo h($attachFile['AttachFile']['name']); ?>&nbsp;</td>
		<td><?php echo h($attachFile['AttachFile']['url']); ?>&nbsp;</td>
		<td><?php echo h($attachFile['AttachFile']['type']); ?>&nbsp;</td>
		<td><?php echo h($attachFile['AttachFile']['size']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $attachFile['AttachFile']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $attachFile['AttachFile']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $attachFile['AttachFile']['id']), array(), __('Are you sure you want to delete # %s?', $attachFile['AttachFile']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Attach File'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Template Mails'), array('controller' => 'template_mails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Mail'), array('controller' => 'template_mails', 'action' => 'add')); ?> </li>
	</ul>
</div>
