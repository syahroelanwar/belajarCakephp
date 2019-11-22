<div class="actions">
	<?php echo $this->HTML->link('Data Siswa',array('controller'=>'siswas','action'=>'index')); ?><br>
</div>
<div class="siswas form">
	<fieldset>
		<legend><?php echo __('Tambah Siswa'); ?></legend>
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
			echo $this->Form->end('Simpan');
		?>
	</fieldset>
</div>