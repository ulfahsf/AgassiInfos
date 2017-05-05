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
       

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="sidebar-nav navbar-collapse" href="<?php echo base_url('/index.php/siswa/c_siswa/logout')?>">Logout</a>
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
                            <a href="<?php echo base_url ('/index.php/siswa/c_siswa')?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url ('/index.php/siswa/c_siswa/viewProfile')?>"><i class="fa fa-fw fa-user"></i>Profile</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url ('/index.php/siswa/c_siswa/viewNilaiSiswa')?>"><i class="fa fa-fw fa-edit"></i> Nilai</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url ('/index.php/siswa/c_siswa/viewJadwal')?>"><i class="fa fa-fw fa fa-table"></i> Jadwal</a>
                            
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Siswa</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                       
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <center><img src="http://localhost/coba/images/photo.jpg" height="160" width="140"/></center>

                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    
                    <div class="panel-body">
                        <table cellpadding="0" cellspacing="0" border="1" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                        <thead>
                                        <?php 
                                            foreach ($siswa->result() as $u)
                                            { 
                                                ?>
                                            <tr>
                                                <th>Nis     : <?php echo $u->nis ?></th>
                                            </tr>
                                            <tr>
                                                <th>Nama Siswa  : <?php echo $u->nama_siswa ?></th>
                                            </tr>
                                            <tr>
                                                <th>Kelas   : <?php echo $u->kelas ?></th>
                                            </tr>
                                            <tr>
                                                <th>Alamat  : <?php echo $u->alamat_siswa ?></th>
                                            </tr>
                                            <tr>
                                                <th>Nomor Siswa : <?php echo $u->nomor_siswa ?></th>
                                            </tr>
                                        </thead>
                                        
                                                
                                                <?php } ?>
                                                </table>
                        </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
