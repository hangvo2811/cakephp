<div class="businessTests form">
<?php echo $this->Form->create('BusinessTest'); ?>
	<fieldset>
		<legend><?php echo __('Bussiness Test Edit Business Test'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('date');
		echo $this->Form->input('title');
		echo $this->Form->input('address');
		echo $this->Form->input('introtext');
		echo $this->Form->input('maintext');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BusinessTest.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('BusinessTest.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Business Tests'), array('action' => 'index')); ?></li>
	</ul>
</div>
