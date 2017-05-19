<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Bootstrap Admin Template</title>
    <link href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/admin/css/sb-admin.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<style type="text/css">
    td, th{
        text-align: center;

    }

</style>

<body>
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
                <a class="navbar-brand" href="index.html" style="font-family: Ampera; font-size: 28px;">Fauzia Makeup</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url()?>index.php/My_Controller/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="#"><i class="fa fa-fw fa-user"></i> Pertanyaan User</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>index.php/My_Controller/admin"><i class="fa fa-fw fa-edit"></i> Ganti Password</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->


<!-- <tbody>
				  <?php foreach ($data as $x) { ?>
					  <tr>
						   <td><?= $x['kode'] ?></td>
						   <td><?= $x['gambar'] ?></td>
					  </tr>
				  <?php } ?>
				</tbody>
				</table><br>
				<a href="< -->?= base_url() ?>"><button>Back</button></a>




        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Forms
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-user"></i>  <a href="#">Pertanyaan User</a>
                            </li>
                            <li>
                                <i class="fa fa-edit"></i> <a href="<?php echo base_url()?>index.php/My_Controller/admin"> Ganti Password </a>
                            </li>
                        </ol>
                    </div>
                </div>

                <table align="center" style="width: 100%;">
                    <thead>
                        <th style="padding-right: 20px;"></th>  
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jumlah orang</th>
                        <th>Tanggal</th>
                        <th>Pesan</th>
                    </thead>
                    <form method="post" action="<?php echo base_url()?>index.php/My_Controller/delete_barang">
                    <tbody>
                        <?php foreach ($data as $x) { ?>
                        <tr>
                        <td><input type="checkbox" name="komentar" value="<?php echo $x['Name']?>"></td>
                        <td><?php echo $x['Name']; ?></td>
                        <td><?php echo $x['Email']; ?></td>
                        <td><?php echo $x['People']; ?></td>
                        <td><?php echo $x['Date']; ?></td>
                        <td><?php echo $x['Message']; ?></td>

                        <td align="center">
                            <a href="<?php echo base_url()."index.php/My_Controller/delete/".$x['Name']; ?>"><button style="border: solid 1px; margin-top: 10px; margin-bottom: 10px;">Delete</button></a>
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <br>
                        <input type="submit" value="Delete">
                    </form> 

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <link href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/admin/css/sb-admin.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url()?>assets/admin/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/admin/js/bootstrap.min.js"></script>
</body>
</html>
