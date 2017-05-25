<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Fauzia Makeup</title>
    <link href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/admin/css/sb-admin.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<style type="text/css">

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}

th, td {
    padding: 5px;
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
                	<li>
                        <a href="<?php echo base_url()?>index.php/My_Controller/readDataKomentar"><i class="fa fa-lg fa-comments"> Pertanyaan User</i></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>index.php/My_Controller/admin"><i class="fa fa-lg fa-edit"> Ganti Password </i></a>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-lg fa-desktop"> Slider</i></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>index.php/My_Controller/gallery"><i class="fa fa-lg fa-image"> Gallery</i></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>index.php/My_Controller/testimonials"><i class="fa fa-lg fa-thumbs-up"> Testimonials</i></a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->

        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Slider
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <a href="<?php echo base_url()?>index.php/My_Controller/readDataKomentar"><i class="fa fa-lg fa-comments"> Pertanyaan User</i></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>index.php/My_Controller/admin"><i class="fa fa-lg fa-edit"> Ganti Password </i></a>
                            </li>
                            <li class="active">
                                <a href="#"><i class="fa fa-lg fa-desktop"> Slider</i></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>index.php/My_Controller/gallery"><i class="fa fa-lg fa-image"> Gallery</i></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>index.php/My_Controller/testimonials"><i class="fa fa-lg fa-thumbs-up"> Testimonials</i></a>
                            </li>
                        </ol>
                    </div>
                </div></div>



                

                <table align="center" style="width: 100%;">
                
                    <th style="padding-right: 20px;"></th>
                    <th style="text-align: center;">ID</th>  
                    <th style="text-align: center;">Caption</th>
                    <th style="text-align: center;">Gambar</th>
                </tr>
                <?php foreach ($data1 as $b) { ?>
                <tr>
                        <td><input type="checkbox" name="slider[]" value="<?php echo $b['ID_slider']?>"></td>
                        <td><?php echo $b['ID_slider']; ?></td>
                        <td><?php echo $b['caption_slider']; ?></td>
                    <td style="text-align:center" style="width:50%;"> <img src=<?php echo base_url($b['gambar_slider']);?> style="height:100px;"></td>
                    <td align="center">
                        <a href ="<?php echo base_url()."index.php/My_Controller/edit_data/".$b['ID_slider']; ?>">Edit</a>
                    </td>
                </tr>
                <?php } ?>
                    <!-- <thead>
                        <th style="padding-right: 20px;"></th>
                        <th style="text-align: center;">ID</th>  
                        <th style="text-align: center;">Caption</th>
                        <th style="text-align: center;">Gambar</th>
                    </thead>
                                        <tbody style="text-align: center;">
                        <?php foreach ($data1 as $b) { ?>
                        <tr>
                        <td><input type="checkbox" name="slider[]" value="<?php echo $b['ID_slider']?>"></td>
                        <td><?php echo $b['ID_slider']; ?></td>
                        <td><?php echo $b['caption_slider']; ?></td>
                        <td><img alt="" src="<?php echo base_url(). $b['gambar_slider']; ?>" class="img-circle img-responsive" height="200" width="200" style="display: inline-block;"/></td>

                        <td align="center">
                            <a href="<?php echo base_url()."index.php/My_Controller/update_slider".$b['ID_slider']; ?>"><button class="btn-warning" style="border: solid 1px; margin-top: 10px; margin-bottom: 10px;">Edit</button></a> <br>
                            <a href="<?php echo base_url()."index.php/My_Controller/delete_slider".$b['ID_slider']; ?>"><button class="btn-danger" style="border: solid 1px; margin-top: 10px; margin-bottom: 10px;">Delete</button></a>
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody> -->
                </table>
                <br>
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
