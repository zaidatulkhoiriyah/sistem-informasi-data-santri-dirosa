<h4>Data Santri Dirosah Perangkatan "<?php echo $pk['datakamarasal'] ;?>"</h4>
<div class="box box-success">
	<div class="box-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<th width="5%">No</th>
				<th width="35%">Nama Lengkap</th>
				<th>Lembaga Sore</th>
				<th>Asrama Baru</th>
			</thead>
			<?php $no=0; foreach($upk as $k): $no++ ; ?>
			<tr>
				<td><?php echo $no;?></td>
				<td><a href="<?php echo site_url('User/profile/'.$k->id_profil);?>"><?php echo $k->fullname;?></a></td>
				<td><?php echo $k->LembagaSore;?></td>
				<td><?php echo $k->AsramaBaru;?></td>
			</tr>
			<?php endforeach ;?>
		</table>
	</div>
</div>