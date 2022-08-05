
 <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h4 class="box-title">Data Angkatan <?php echo $ang['angkatan'];?></h4>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
               
              </div>
            </div>
            <div class="box-body chart-responsive">
              <h5>Jumlah Berdasarkan Lembaga Sore</h5>
              <table class="table">
              	<thead>
              		<th >Mahasiswa</th>
              		<th >Siswa</th>
              	</thead>
              	<tr>
              		<td><?php echo jml_santri($a, 'M');?></td>
              		<td><?php echo jml_santri($a, 'S');?></td>
              	</tr>
              </table>
              <br>
              <h4>Daftar Lulusan</h4>
              <table id="example1" class="table table-bordered table-striped">
              <thead>
              	<th width="5%">No</th>
              	<th width="50%">Nama Lengkap</th>
              	<th width="15%">Lembaga Sore</th>
              	<th width="30%">Kontak</th>
              </thead>
              <?php $no=0; foreach ($k as $r): $no++ ;?>
              <tr>
              	<td><?php echo $no;?></td>
              	<td><a href="<?php echo site_url('user/profile/'.$r->id_profil);?>"><?php echo $r->fullname;?></a></td>
              	<td><?php echo $r->jk;?></td>
              	<td><?php echo $r->kontak;?></td>
              </tr>
          	<?php endforeach ;?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
