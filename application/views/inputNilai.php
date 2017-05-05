<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url ('/assets/css/menu.css')?>">
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li>            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="<?php echo base_url ('/index.php/c_guru/viewProfile')?>"><i class="fa fa-fw fa-user"></i>Profile</a>
                </li>
                <li>
                    <a href="<?php echo base_url ('/index.php/c_guru/inputNilai')?>"><i class="fa fa-fw fa-edit"></i> Nilai</a>
                </li>
                <li>
                    <a href="<?php echo base_url ('/index.php/tabel')?>"><i class="fa fa-fw fa fa-table"></i> Jadwal</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="media-body">
										<?php echo form_open("mahasiswa/proses_input"); ?> 
											<h5>Nim :</h5><?php echo form_error('nim', '<div style="color:red">','</div>');?>
											<div class="row-fluid">
												<textarea type="text" name="nim" class="span12" style="height: 30px; resize: none;"></textarea>
											</div>
											<h5>Nama :</h5><?php echo form_error('nama', '<div style="color:red">','</div>');?>
											<div class="row-fluid">
												<textarea type="text" name="nama" class="span12" style="height: 30px; resize: none;"></textarea>
											</div>
											<h5>Email :</h5><?php echo form_error('email', '<div style="color:red">','</div>');?>
											<div class="row-fluid">
												<textarea type="text" name="email" class="span12" style="height: 30px; resize: none;"></textarea>
											</div>
											<h5>Jurusan :</h5>
											<div class="row-fluid">
												<textarea type="text" name="jurusan" class="span12" style="height: 30px; resize: none;"></textarea>
											</div>
											<br></br>
											<div class="clearfix">
												<input type="submit" name="submit" value="Simpan Data" class="btn btn-primary pull-right">
												<p>&nbsp;</p>
											</div>
											<input type="hidden" name="MM_insert" value="form1">
										</form>
										<p>&nbsp;</p>										
									</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>