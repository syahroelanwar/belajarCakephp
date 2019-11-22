<div class="actions">
	<h3><?php echo __('Aksi'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Tambah Siswa'), array('action' => 'add')); ?></li>
	</ul>
</div>
<div class="siswas index">
	<h2><?php echo __('Data Siswa'); ?></h2>
	<table cellspacing="0">
		<thead>
			<tr style="background-color: #cccccc; font-weight: bold;">
				<td>No</td>
				<td>NIS</td>
				<td>Nama</td>
				<td>JK</td>
				<td>Alamat</td>
				<td>Tgl Lahir</td>
				<td>Jurusan Id</td>
				<td style="text-align: center;">Aksi</td>
			</tr>
		</thead>
		<?php $no=1; ?>
		<?php foreach($siswas as $siswa) : ?>
		<tbody>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $siswa['Siswa']['nis']; ?></td>
				<td><?php echo $siswa['Siswa']['nama']; ?></td>
				<td><?php echo $siswa['Siswa']['jk']; ?></td>
				<td><?php echo $siswa['Siswa']['alamat']; ?></td>
				<td><?php echo $siswa['Siswa']['tgl_lahir']; ?></td>
				<td><?php echo $this->HTML->link($siswa['Siswa']['jurusan_id'],array('controller'=>'jurusans','action'=>'view',$siswa['Siswa']['jurusan_id'])); ?></td>
				<td class="actions">
					<?php echo $this->HTML->link('Detail',array('controller'=>'siswas','action'=>'view',$siswa['Siswa']['id'])); ?>
					||
					<?php echo $this->HTML->link('Ubah',array('controller'=>'siswas','action'=>'edit',$siswa['Siswa']['id'])); ?>
					||
					<?php echo $this->Form->postLink('Hapus',array('controller'=>'siswas','action'=>'delete',$siswa['Siswa']['id']), array('confirm'=>'Anda yakin ingin menghapus data ini?')); ?>
				</td>
			</tr>
		</tbody>
		<?php $no++; ?>
		<?php endforeach; ?>
		<?php unset($siswa); ?>
	</table>
</div>