<!DOCTYPE html>
<html>
  <head>
	<title>Halaman Create</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.8/sweetalert2.min.css">
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
      	<form action="#" method="post" id="form-hapus">
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
          <input type="submit" class="btn btn-warning" value="Hapus" id="btn-hapus">
      	</form>
      </div>	
    </div>
</div>
    <script src="<?php echo base_url('') ?>./asset/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url('') ?>./asset/js//bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.8/sweetalert2.min.js"></script>
    <script type="text/javascript">
  $(document).ready(function(){
    $("#btn-hapus").on('click', function(e){
      e.preventDefault();
      var btn = $(this);
      btn.button('loading');

      $.ajax({
                type : 'POST',
                url : '<?=site_url("Delete/doit")?>',
                data : $( "#form-hapus" ).serialize()
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