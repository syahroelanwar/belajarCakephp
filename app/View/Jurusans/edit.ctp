<div class="jurusans form">
	<fieldset>
		<legend><?php echo __('Ubah Jurusan'); ?></legend>
		<?php

			echo $this->Form->create('Jurusan');
			echo $this->Form->input('nama_jurusan');
			echo $this->Form->end('Ubah');
		?>
	</fieldset>
</div>
<div class="actions">
	<h3><?php echo __('Aksi'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Hapus Jurusan'), array('action' => 'delete', $this->Form->value('Jurusan.id')), array('confirm' => __('Anda yakin ingin menghapus # %s?', $this->Form->value('Jurusan.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Data Jurusan'), array('action' => 'index')); ?></li>
	</ul>
</div>