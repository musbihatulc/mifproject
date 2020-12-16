<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">
	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
<!-- 
<?php foreach ($produk2 as $c) { ?>
              <form action="<?php echo base_url('Produk/editProduk/' . $c->id_produk); ?>" id="main-contact-form" class="contact-form row" name="contact-form" method="post" enctype="multipart/form-data">
                <div class="form-group col-md-12">
                  Nama produk :
                  <input type="hidden" name="id_produk" class="form-control" required="required" value="<?php echo $c->id_produk; ?>">
                  <input type="text" name="nama_produk" class="form-control" required="required" value="<?php echo $c->nama_produk; ?>">
                </div>
              <?php } ?>
              <?php foreach ($kategori as $a) { ?>
                <input type="hidden" name="id_kategori" value="<?php echo $a->id_kategori; ?>">
              <?php } ?>
              <div class="form-group col-md-12">
                Kategori :
                <select name="kategori" class="form-control" required="required">
                  <!-- <option disabled>Pilih Pangkat</option>
          <option <?php if ($gtk->pajago_gtk == '1a') echo "selected" ?> value="1a">Gol. 1A</option>
            <option></option> -->
                  <?php foreach ($kategori as $a) { ?>
                    <?php
                    if ($a->id_kategori == $c->kategori_id_kategori) {
                      echo  "<option value='" . $a->id_kategori . "' selected>" . $a->nama_kategori . "</option>";
                    }
                    echo "<option value='" . $a->id_kategori . "'>" . $a->nama_kategori . "</option>"; ?>
                  <?php } ?>
                </select>
              </div>
              <?php foreach ($produk2 as $c) { ?>
                <div class="form-group col-md-12">
                  Stok produk:
                  <input type="number" name="stok" min="1" class="form-control" required="required" value="<?php echo $c->stok; ?>">
                </div>
                <div class="form-group col-md-12">
                  Harga produk:
                  <input type="number" name="harga" min="1" class="form-control" required="required" value="<?php echo $c->harga; ?>">
                </div>
                <div class="form-group col-md-12">
                  Panjang produk:
                  <input type="number" name="panjang" min="1" class="form-control" required="required" value="<?php echo $c->panjang; ?>">
                </div>
                <div class="form-group col-md-12">
                  Lebar produk:
                  <input type="number" name="lebar" min="1" class="form-control" required="required" value="<?php echo $c->lebar; ?>">
                </div>
                <div class="form-group col-md-12">
                  Tinggi produk:
                  <input type="number" name="tinggi" min="1" class="form-control" required="required" value="<?php echo $c->tinggi; ?>">
                </div>
                <div class="form-group col-md-12">
                  Gambar produk: <br>
                  <img style="margin-bottom: 10px;" height="100px" width="100px" src="<?php echo base_url('./assets/images/depan/' . $c->gambar); ?>">
                  <input type="file" name="filefoto" placeholder="Upload gambar" style="padding-right:1px;">
                  <input type="hidden" name="oldfoto" required="required" value="<?php echo $c->gambar; ?>" style="padding-right:1px;">
                </div>
                <div class="form-group col-md-12">
                  Gambar produk: <br>
                  <img style="margin-bottom: 10px;" height="100px" width="100px" src="<?php echo base_url('./assets/images/samping2/' . $c->gambar2); ?>">
                  <input type="file" name="filefoto2" placeholder="Upload gambar" style="padding-right:1px;">
                  <input type="hidden" name="oldfoto2" required="required" value="<?php echo $c->gambar2; ?>" style="padding-right:1px;">
                </div>
                <div class="form-group col-md-12">
                  Gambar produk: <br>
                  <img style="margin-bottom: 10px;" height="100px" width="100px" src="<?php echo base_url('./assets/images/samping3/' . $c->gambar3); ?>">
                  <input type="file" name="filefoto3" placeholder="Upload gambar" style="padding-right:1px;">
                  <input type="hidden" name="oldfoto3" required="required" value="<?php echo $c->gambar3; ?>" style="padding-right:1px;">
                </div>

                <div class="form-group col-md-12">
                  Keterangan produk:
                  <textarea name="keterangan" required="required" class="form-control" rows="8"><?php echo $c->keterangan; ?></textarea>
                  <!-- <input type="textarea" name="keterangan" class="form-control" required="required" placeholder="Keterangan produk"> -->
                </div>
                <div class="form-group col-md-12">
                  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                  <a href="<?php echo base_url('Owner_controller/O_produk'); ?>"><button type="button" value="batal" class="btn btn-primary">Batal</button></a>
                </div>
              <?php } ?>
              </form> -->