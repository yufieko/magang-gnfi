<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>./asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>./asset/css/styles.css">
</head>
<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" action="" method="POST">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="form-group">
								<select name="status_pegawai" class="form-control">
									<option value="admin">Admin</option>
									<option value="pegawai">Pegawai</option>
								</select>
							</div>
							<div class="form-group">
						<input type="submit" name="login" class="btn btn-primary btn-block" value="Log me in" />
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	

 <script src="<?php echo base_url('') ?>./asset/js/jquery-1.11.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('') ?>./asset/js//bootstrap.min.js"></script>
	
</body>
</html>