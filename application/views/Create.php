<!DOCTYPE html>
<html>
  <head>
	<title>Halaman Create</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.min.css') ?>">
  </head>
  <body>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
      	<form action="<?php echo site_url('create/tambah') ?>" method="post">
      	  <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" placeholder="Masukkan nama">
          </div>

      	  <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
          </div>

      	  <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Masukkan Email">
          </div>

      	  <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
          </div>
          <input type="submit" class="btn btn-warning" value="Simpan">
      	</form>
      </div>	
    </div>

    <script src="<?php echo base_url('') ?>./asset/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url('') ?>./asset/js//bootstrap.min.js"></script>
  </body>
</html>