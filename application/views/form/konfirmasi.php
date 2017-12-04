<?php $url = base_url()."public/" ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Konfirmasi</title>
    <link rel="stylesheet" href="<?php echo $url; ?>assets/bootstrap/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
    <br/>
    <form class="" action="<?php echo base_url() ?>invoice" method="post">
      Apakah Data ini sudah benar ? <button class="btn btn-success"> &nbsp Ya &nbsp  </button> / <a class="btn btn-danger" href="<?php echo base_url() ?>"> Tidak</a>
      <input type="hidden" name="nama" value="<?php echo $registrasi['nama_lengkap'] ?>">
      <input type="hidden" name="password" value="<?php echo $registrasi['password'] ?>">
      <input type="hidden" name="email" value="<?php echo $registrasi['email'] ?>">
      <input type="hidden" name="nohp" value="<?php echo $registrasi['nohp'] ?>">
      <input type="hidden" name="alamat" value="<?php echo $registrasi['alamat'] ?>">
      <input type="hidden" name="jumlah" value="<?php echo $qurban['jumlah'] ?>">
      <input type="hidden" name="total" value="<?php echo $qurban['harga'] * $qurban['jumlah'] ?>">

      <?php if ($qurban['hewan'] == "kambing") { ?>
        <input type="hidden" name="nama1" value="<?php echo $qurban['nama1'] ?>">
        <input type="hidden" name="hewan" value="kambing">
      <?php } else { ?>
        <input type="hidden" name="nama1" value="<?php echo $qurban['nama1'] ?>">
        <input type="hidden" name="nama2" value="<?php echo $qurban['nama2'] ?>">
        <input type="hidden" name="nama3" value="<?php echo $qurban['nama3'] ?>">
        <input type="hidden" name="nama4" value="<?php echo $qurban['nama4'] ?>">
        <input type="hidden" name="nama5" value="<?php echo $qurban['nama5'] ?>">
        <input type="hidden" name="nama6" value="<?php echo $qurban['nama6'] ?>">
        <input type="hidden" name="nama7" value="<?php echo $qurban['nama7'] ?>">
        <input type="hidden" name="hewan" value="sapi">
      <?php } ?>
    </form>
    <h3><b><center>Invoice</center></b></h3><br />
    <div class="col-xs-12 col-md-6 col-xl-6">
      <div class="mbr-plan card">
        <div class="mbr-plan-header card-block">
          <table class="table table-condensed">
            <tbody>
              <tr>
                <td width="200px">Nama</td>
                <td>: <?php echo $registrasi['nama_lengkap'] ?></td>
              </tr>
              <tr>
                <td>Email</td>
                <td>: <?php echo $registrasi['email'] ?></td>
              </tr>
              <tr>
                <td>Nomor Telepon</td>
                <td>: <?php echo $registrasi['nohp'] ?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>: <?php echo $registrasi['alamat'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="mbr-plan card">
        <div class="mbr-plan-header card-block">
          <table class="table table-condensed">
            <tbody>
              <tr>
                <td width="200px">Transfer ke</td>
                <td>:  6760 1767 60</td>
              </tr>
              <tr>
                <td>Atas Nama</td>
                <td>: Indahnya Berqurban ( BCA )</td>
              </tr>
              <tr>
                <td>Total Transfer</td>
                <td>: Rp. <?php echo number_format($qurban['harga'] * $qurban['jumlah'], 0, ',', '.'); ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-6 col-xl-6">
      <div class="mbr-plan card">
        <div class="mbr-plan-header card-block">
        <table class="table table-condensed">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
          </tr>
        </thead>
          <tbody>
            <?php if ($qurban['hewan'] == "kambing") { ?>
              <tr>
                <td width="200px">1</td>
                <td><?php echo $qurban['nama1'] ?></td>
              </tr>
              <tr>
                <td>Jumlah</td>
                <td><?php echo $qurban['jumlah'] ?></td>
              </tr>
            <?php } else { ?>
              <tr>
                <td width="200px">1</td>
                <td><?php echo $qurban['nama1'] ?></td>
              </tr>
              <tr>
                <td>2</td>
                <td><?php echo $qurban['nama2'] ?></td>
              </tr>
              <tr>
                <td>3</td>
                <td><?php echo $qurban['nama3'] ?></td>
              </tr>
              <tr>
                <td>4</td>
                <td><?php echo $qurban['nama4'] ?></td>
              </tr>
              <tr>
                <td>5</td>
                <td><?php echo $qurban['nama5'] ?></td>
              </tr>
              <tr>
                <td>6</td>
                <td><?php echo $qurban['nama6'] ?></td>
              </tr>
              <tr>
                <td>7</td>
                <td><?php echo $qurban['nama7'] ?></td>
              </tr>
              <tr>
                <td>Jumlah</td>
                <td><?php echo $qurban['jumlah'] ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  </body>
</html>
