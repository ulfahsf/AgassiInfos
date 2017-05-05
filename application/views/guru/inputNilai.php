<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url ('/aset/vebdor/bootstrap/bootstrap.css')?>">
<link rel="stylesheet" href="<?php echo base_url('aset/vendor/js/bootstrap/bootstrap.js') ?>">
<link rel="stylesheet" href="<?php echo base_url('aset/vendor/bootstrap/bootstrap.min.js') ?>">
<link rel="stylesheet" href="<?php echo base_url('aset/vendor/metisMenu/metisMenu.min.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('aset/dist/css/sb-admin-2.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('aset/vendor/morrisjs/morris.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('aset/vendor/font-awesome/css/font-awesome.min.css') ?>">
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
 <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">INFOS</a>
            </div>
            <!-- /.navbar-header -->
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url ('/index.php/guru/c_guru')?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url ('/index.php/guru/c_guru/viewProfile')?>"><i class="fa fa-fw fa-user"></i>Profile</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url ('/index.php/guru/c_guru/inputNilai')?>"><i class="fa fa-fw fa-edit"></i> Nilai</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url ('/index.php/guru/c_guru/viewJadwal')?>"><i class="fa fa-fw fa fa-table"></i> Jadwal</a>
                            
                        </li>
                    </ul>
                </div>
				</nav>
		<div id="page-wrapper">
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content">
                    <?php echo form_open('guru/c_guru/prosesInput');?>
						<div class="form-group">
						  <label for="nis">NIS:</label>
						  <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS">
						</div>
						<div class="form-group">
						  <label for="nama">Nama:</label>
						  <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
						</div>
						<div class="form-group">
						  <label for="kelas">Kelas:</label>
						  <select class="form-control" name="kelas" id="kelas" >
						  <option>--pilih kelas--<option>
						  <option>XII IPA 1<option>
						  <option>XII IPA 2<option>
						  <option>XII IPA 3<option>
						  </select>
						</div>
						<div class="form-group">
						  <label for="mapel">Mata Pelajaran:</label>
						  <input type="text" class="form-control" name="mapel" id="mapel" placeholder="Mata Pelajaran">
						</div>
						<div class="form-group">
						  <label for="nilai">Nilai:</label>
						  <input type="text" class="form-control" name="nilai" id="nilai" placeholder="Nilai">
						</div>
						<button type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
					</form>
                </div>
            
            <!-- /.navbar-static-side -->
        
		
        
    <!-- jQuery -->
    <script src="aset/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="aset/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="aset/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="aset/vendor/raphael/raphael.min.js"></script>
    <script src="aset/vendor/morrisjs/morris.min.js"></script>
    <script src="aset/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="file/dist/js/sb-admin-2.js"></script>

</body>

</html>
