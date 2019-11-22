<div class="jurusans form">
	<fieldset>
		<legend><?php echo __('Info Detail Jurusan'); ?></legend>
		<h3><?php echo 'Jurusan : '.$jurusan['Jurusan']['nama_jurusan']; ?></h3>
	</fieldset>
</div>
<div class="actions">
	<h3><?php echo __('Aksi'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Ubah Jurusan'), array('action' => 'edit', $jurusan['Jurusan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Hapus Jurusan'), array('action' => 'delete', $jurusan['Jurusan']['id']), array('confirm' => __('Anda yakin ingin menghapus # %s?', $jurusan['Jurusan']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Data Jurusan'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Tambah Jurusan'), array('action' => 'add')); ?> </li>
	</ul>
</div>