<div class="jurusans index">
	<h2><?php echo __('Data Jurusan'); ?></h2>
	<table cellspacing="0">
		<thead>
			<tr style="background-color: #cccccc; font-weight: bold;">
				<th>No</th>
				<th>Nama Jurusan</th>
				<th style="text-align: center;">Aksi</th>
			</tr>
		</thead>
		<?php $no=1; ?>
		<?php foreach ($jurusans as $jurusan) : ?>
		<tbody>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $jurusan['Jurusan']['nama_jurusan']; ?></td>
				<td class="actions">
					<?php echo $this->HTML->link('Detail',array('controller'=>'jurusans','action'=>'view',$jurusan['Jurusan']['id'])); ?>
					||
					<?php echo $this->HTML->link('Ubah',array('controller'=>'jurusans','action'=>'edit',$jurusan['Jurusan']['id'])); ?>
					||
					<?php echo $this->Form->postLink('Hapus',array('controller'=>'jurusans','action'=>'delete',$jurusan['Jurusan']['id']), array('confirm'=>'Anda yakin ingin menghapus data ini?')); ?>
				</td>
			</tr>
		</tbody>
		<?php $no++; ?>
		<?php endforeach; ?>
		<?php unset($jurusan); ?>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Aksi'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Tambah Jurusan'), array('action' => 'add')); ?></li>
	</ul>
</div>