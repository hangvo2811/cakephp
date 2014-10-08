<div class="businessTests view">
<h2><?php echo __('Business Test'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($businessTest['BusinessTest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($businessTest['BusinessTest']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($businessTest['BusinessTest']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($businessTest['BusinessTest']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Introtext'); ?></dt>
		<dd>
			<?php echo h($businessTest['BusinessTest']['introtext']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Maintext'); ?></dt>
		<dd>
			<?php echo h($businessTest['BusinessTest']['maintext']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Business Test'), array('action' => 'edit', $businessTest['BusinessTest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Business Test'), array('action' => 'delete', $businessTest['BusinessTest']['id']), array(), __('Are you sure you want to delete # %s?', $businessTest['BusinessTest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Business Tests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Test'), array('action' => 'add')); ?> </li>
	</ul>
</div>
