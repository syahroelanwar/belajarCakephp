<div class="siswas form">
	<fieldset>
		<legend><?php echo __('Info Detail Siswa'); ?></legend>
		<table cellspacing="0">
			<tr>
				<td width="200">ID</td>
				<td width="30">:</td>
				<td><?php echo $siswa['Siswa']['id']; ?></td>
			</tr>
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><?php echo $siswa['Siswa']['nis']; ?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?php echo $siswa['Siswa']['nama']; ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><?php echo $siswa['Siswa']['jk']; ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><?php echo $siswa['Siswa']['alamat']; ?></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><?php echo $siswa['Siswa']['tgl_lahir']; ?></td>
			</tr>
			<tr>
				<td>Jurusan ID</td>
				<td>:</td>
				<td><?php echo $siswa['Siswa']['jurusan_id']; ?></td>
			</tr>
		</table>
	</fieldset>
</div>
<div class="actions">
	<h3><?php echo __('Aksi'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Ubah Siswa'), array('action' => 'edit', $siswa['Siswa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Hapus Siswa'), array('action' => 'delete', $siswa['Siswa']['id']), array('confirm' => __('Anda yakin ingin menghapus # %s?', $siswa['Siswa']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Data Siswa'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Tambah Siswa'), array('action' => 'add')); ?> </li>
	</ul>
</div>