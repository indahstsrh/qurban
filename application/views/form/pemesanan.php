<section class="mbr-section article mbr-section__container" id="content1-j" style="background-color: rgb(244, 244, 244); padding-top: 20px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 lead">Isi Formulir</div>
        </div>
    </div>
</section>
<br>

<div class="col-xs-12 col-md-offset-3 col-md-6 col-xl-6">
  <section class="mbr-section article mbr-section__container" id="content1-j" style="background-color: rgb(244, 244, 244); padding-top: 20px; padding-bottom: 20px;">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 lead">Formulir Qurban</div>
          </div>
      </div>
  </section>
    <div class="mbr-plan card text-xs-center">
        <div class="mbr-plan-header card-block">
  					<fieldset>
              <form role="form" method="post" action="<?php echo base_url(); ?>konfirmasi">
              <?php if ($jenis == "sapi") { ?>
                <div class="form-group">
                  <input class="form-control" placeholder="Atas Nama pertama" name="hargaread" type="text" value="Harga : Rp. <?php echo $h_sapi->harga; ?>" readonly="">
                  <input class="form-control" placeholder="Atas Nama pertama" name="harga" type="hidden" value="<?php echo $h_sapi->harga; ?>">
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Atas Nama pertama" name="nama1" type="text" required>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Atas Nama kedua" name="nama2" type="text" required>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Atas Nama ketiga" name="nama3" type="text" required>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Atas Nama keempat" name="nama4" type="text" required>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Atas Nama kelima" name="nama5" type="text" required>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Atas Nama keenam" name="nama6" type="text" required>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Atas Nama ketujuh" name="nama7" type="text" required>
                  <input class="form-control" name="hewan" type="hidden" value="sapi">
                </div>  
              <?php } else { ?>
                <div class="form-group">
                  <input class="form-control" placeholder="Atas Nama" name="hargaread" type="text" value="Harga : Rp. <?php echo $h_kambing->harga; ?>" readonly="">
                  <input class="form-control" placeholder="Atas Nama" name="harga" type="hidden" value="<?php echo $h_kambing->harga; ?>">
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Atas Nama" name="nama1" type="text" required>
                </div>
                <div class="form-group">
                  <input class="form-control" name="hewan" type="hidden" value="kambing">
                </div>
              <?php } ?>
              <div class="form-group">
                <input class="form-control" placeholder="Jumlah Hewan" name="jumlah" type="number" min="1" required>
              </div>
              <h3><?=$jenis;?></h3>
              <button class="btn btn-warning">Selesai</button>
  					</fieldset>
  				</form>
        </div>
    </div>
</div>
