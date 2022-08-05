<h4>Data Santri Dirosah</h4>
<?php foreach($pk as $a) { ?>
<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo jml_santri($a->id_pk) ;?></h3>

              <p>Berada di kamar asal <?php echo $a->kmr_asal ;?></p>
            </div>
            <div class="icon">
              <i class="ion ion-briefcase"></i>
            </div>
            <a href="<?php echo site_url('Admin/dataSantri/'.$a->id_pk);?>" class="small-box-footer">
              selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
</div>
<?php };?>