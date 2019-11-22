<div class="actions">
	<?php echo $this->HTML->link('Data Jurusan', array('controller'=>'jurusans','action'=>'index')); ?>
</div>
<div class="jurusans form">
	<fieldset>
		<legend><?php echo __('Tambah Jurusan'); ?></legend>
		<?php

			echo $this->Form->create('Jurusan');
			echo $this->Form->input('nama_jurusan');
			echo $this->Form->end('Simpan');
		?>
	</fieldset>
</div>