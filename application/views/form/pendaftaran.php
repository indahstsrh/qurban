<section class="mbr-section article mbr-section__container" id="content1-j" style="background-color: rgb(244, 244, 244); padding-top: 20px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 lead">Isi Formulir</div>
        </div>
    </div>
</section>
<br>

<div class="col-xs-12 col-md-offset-3  col-md-6 col-xl-6">
  <section class="mbr-section article mbr-section__container" id="content1-j" style="background-color: rgb(244, 244, 244); padding-top: 20px; padding-bottom: 20px;">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 lead">Formulir Pendaftar</div>
          </div>
      </div>
  </section>
    <div class="mbr-plan card text-xs-center">
        <div class="mbr-plan-header card-block">
          <form role="form" method="post" action="<?php echo base_url(); ?>konfirmasi">
  					<fieldset>
  						<div class="form-group">
  							<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required>
  						</div>
  						<div class="form-group">
  							<input class="form-control" placeholder="Password" name="password" type="password" required>
  						</div>
              <div class="form-group">
  							<input class="form-control" placeholder="Retype Password" name="retype" type="password" required>
  						</div>
              <div class="form-group">
  							<input class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" type="text" required>
  						</div>
              <div class="form-group">
  							<input class="form-control" placeholder="Nomor Handphone" name="nohp" type="text" required>
  						</div>
              <div class="form-group">
                <textarea name="alamat" class="form-control" rows="8" cols="80" placeholder="Alamat" required></textarea>
              </div>
  						<!-- <button class="btn btn-warning">Selesai</button> -->
              <button class="btn btn-warning">Daftar</button>
  					</fieldset>
        </div>
    </div>
</div>
