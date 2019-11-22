<div class="siswas form">
	<fieldset>
		<legend><?php echo __('Ubah Siswa'); ?></legend>
		<?php

		    $attributes = array();
		    $options = array('Perempuan' => 'Perempuan', 'Laki-laki' => 'Laki-laki');

			echo $this->Form->create('Siswa');
			echo $this->Form->input('nis');
			echo $this->Form->input('nama');
			echo $this->Form->radio('jk', $options, $attributes);
			echo $this->Form->input('alamat',array('type' => 'textarea'));
			echo $this->Form->input('tgl_lahir');
			echo $this->Form->input('jurusan_id');
			echo $this->Form->end('Ubah');
		?>
	</fieldset>
</div>
<div class="actions">
	<h3><?php echo __('Aksi'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Hapus Siswa'), array('action' => 'delete', $this->Form->value('Siswa.id')), array('confirm' => __('Anda yakin ingin menghapus # %s?', $this->Form->value('Siswa.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Data Siswa'), array('action' => 'index')); ?></li>
	</ul>
</div>