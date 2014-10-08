<div class="list-pages">
<?php
	if(isset($update)){
		$this->Paginator->options(array(
			'update' => ( ( substr( trim( $update ), 0, 1 ) == '#' )?'':'' ) . $update,
			'evalScripts' => true,
			'before' => '$(\'#loading\').show()',
			'success' => (isset($success)?$success:'')
		));
	}
	if( $this->Paginator->hasPage( null, 2 ) ){ ?>
		<?php echo $this->Paginator->first('<< ' . __('前へ', true)); // , array(), null, array('class'=>'disabled')  ?>
		<?php echo $this->Paginator->numbers(array("separator" => ""));?>
		<?php echo $this->Paginator->last(__('次へ', true) . ' >>'); // , array(), null, array('class' => 'disabled') ?>
    <?php // echo $this->Paginator->first('<< ' . __('前へ', true), array(), null, array('class' => 'disabled')) . ' | '; ?>
	<?php } ?>
</div>
<?php echo $this->Form->hidden( 'page', array('value' => 1) ); ?>
<?php echo $this->Js->writeBuffer(); ?>
</div>
