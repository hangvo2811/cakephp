<div class="businessTests index">
	<h2><?php echo __('Business Tests'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('introtext'); ?></th>
			<th><?php echo $this->Paginator->sort('maintext'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($businessTests as $businessTest): ?>
	<tr>
		<td><?php echo h($businessTest['BusinessTest']['id']); ?>&nbsp;</td>
		<td><?php echo h($businessTest['BusinessTest']['date']); ?>&nbsp;</td>
		<td><?php echo h($businessTest['BusinessTest']['title']); ?>&nbsp;</td>
		<td><?php echo h($businessTest['BusinessTest']['address']); ?>&nbsp;</td>
		<td><?php echo h($businessTest['BusinessTest']['introtext']); ?>&nbsp;</td>
		<td><?php echo h($businessTest['BusinessTest']['maintext']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $businessTest['BusinessTest']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $businessTest['BusinessTest']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $businessTest['BusinessTest']['id']), array(), __('Are you sure you want to delete # %s?', $businessTest['BusinessTest']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Business Test'), array('action' => 'add')); ?></li>
	</ul>
</div>
