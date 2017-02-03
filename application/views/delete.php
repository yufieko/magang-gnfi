<!DOCTYPE html>
<html>
  <head>
	<title>Halaman Create</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.min.css') ?>">
  </head>
  <body>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
      	<form action="<?php echo site_url('delete/doit') ?>" method="post">
      	  <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="<?=$user->name?>" placeholder="Masukkan nama">
            <input type="hidden" name="user_id" value="<?=$user->id?>">
          </div>

      	  <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="<?=$user->username?>"placeholder="Masukkan Username">
          </div>

      	  <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?=$user->email?>" placeholder="Masukkan Email">
          </div>
          <input type="submit" class="btn btn-warning" value="Hapus">
      	</form>
      </div>	
    </div>

    <script src="<?php echo base_url('') ?>./asset/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url('') ?>./asset/js//bootstrap.min.js"></script>
  </body>
</html>