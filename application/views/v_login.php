<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>./asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>./asset/css/styles.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.8/sweetalert2.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">Log in</div>
					<div class="panel-body">
						<form role="form" action="#" method="POST" id="form-login">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="password" type="password" value="">
								</div>
							<input type="submit" id="btn-login" class="btn btn-primary btn-block" value="Log me in" />
							</fieldset>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->	
	</div>
 <script src="<?php echo base_url('') ?>./asset/js/jquery-1.11.1.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('') ?>./asset/js//bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.8/sweetalert2.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#btn-login").on('click', function(e){
			e.preventDefault();
			var btn = $(this);
			btn.button('loading');

			$.ajax({
                type : 'POST',
                url : '<?=site_url("login/aksi_login")?>',
                data : $( "#form-login" ).serialize()
            })
            .done(function(response){
	            btn.button('reset');
	            if(response.status == true){
	                swal(
					  'Good job!',
					  response.message,
					  'success'
					)
	                // data
	                setTimeout(function(){ window.location.href = response.redirect; }, 2000);
	            }else{
	                swal(
					  'Upps',
					  response.message,
					  'warning'
					)
	            }
	        })
	        .fail(function(response){
	            btn.button('reset');
	            swal(
				  'Upps',
				  response.message,
				  'warning'
				)
	        });

			
		});
	});
</script>
</body>
</html>