<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('level');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Aksi'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Hapus User'), array('action' => 'delete', $this->Form->value('User.id')), array('confirm' => __('Anda yakin ingin menghapus # %s?', $this->Form->value('User.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Data User'), array('action' => 'index')); ?></li>
	</ul>
</div>
