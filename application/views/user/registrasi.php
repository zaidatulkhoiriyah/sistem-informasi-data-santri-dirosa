<h3>Formulir Registrasi</h3>
<form method="post" action="<?php echo site_url('User/daftar');?>">
	
		<input type="text" name="fullname" required placeholder="Nama Lengkap dengan gelar" class="form-control"><br>

		<input type="text" name="email" required placeholder="Alamat Email" class="form-control"><br>
		<select class="form-control select2" name="jk" required>
		<option selected="selected" disabled="disabled">Pilih Jenis Kelamin</option>
			<option value="M">Mahasiswa</option>
			<option value="S">Siswa</option>
		</select><br>
		<select class="form-control select2" name="angkatan">
			<option selected="selected" disabled="disabled">Pilih Angkatan Masuk</option>
			<?php for($i=date('Y'); $i>=date('Y')-60; $i-=1){
			echo"<option value='$i'> $i </option>";
			}
			?>
		</select><br>
		<input type="password" required name="password" class="form-control" placeholder="Password (min. 8 karakter)">
		<input type="password" required name="re-password" class="form-control" placeholder="Ketik Ulang Password"><br>
		<input type="text" name="kontak" class="form-control" placeholder="Nomor Kontak yang bisa dihubungi"><br>
		<textarea name="alamat" class="form-control" colspan="3" placeholder="Alamat Rumah"></textarea><br>
		<select class="select2 form-control" required name="pekerjaan">
			<option selected="selected" disabled="disabled">Pilih kamar asal</option>
			<?php foreach($pk as $a){ ?>
				<option value="<?php echo $a->id_pk ;?>"><?php echo $a->jenis_pk;?></option>
			<?php };?>
		</select><br>
		<input type="text" name="lembaga sore" class="form-control" placeholder="lembaga sore"><br>
		<input type="text" name="kamar asal" class="form-control" placeholder="kamar asal"><br>
		<input type="text" name="twitter" class="form-control" placeholder="Link Twitter Anda"><br>
		<input type="text" name="instagram" class="form-control" placeholder="Link instagram Anda"><br>
		<input type="text" name="facebook" class="form-control" placeholder="Link Facebook Anda"><br>
		<button class="btn btn-primary form-control" type="submit">DAFTAR</button>
		</form>
	