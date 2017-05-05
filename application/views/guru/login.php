<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <title><?php echo $title;?></title>
 <link href="files/css/bootstrap.min.css" rel="stylesheet">
 <link href="files/css/style.css" rel="stylesheet">
 <script type="text/javascript" src="<?php echo base_url();?>files/bootstrap/jc/bootstrap.js"></script>
</head>
	<body>
		<div class="col-md-4 col-md-offset-4 form-login">
		<div class="outter-form-login">
        <div class="logo-login">
            <em class="glyphicon glyphicon-user"></em>
        </div>
		<form action= "<?php echo site_url('auth/cek_login_guru');?>" class="inner-login" method="post">
            <h3 class="text-center title-login">Login With Your Account</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
 
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                
                <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
                
				<?php
				if ($this->session->flashdata('pesan')<>''){
					?>
				<div class ="alert alert-dismissible alert-danger">
					<?php echo $this->session->flashdata('pesan');?>
				</div>
				<?php } ?>
		</form>
		</div>
		</div>

		<script src="files/js/jquery.min.js"></script>
    	<script src="files/js/bootstrap.min.js"></script>
	</body>
</html>
