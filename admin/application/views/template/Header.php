<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Admin Page</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  
  <link rel="shortcut icon" href="<?php echo base_url();?>../assets/images/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo base_url();?>../assets/images/icon.png">

  <!-- Import Template Icons CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/linea-basic.css">

  <!-- Import Custom Country Select CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/countrySelect.min.css">

  <!-- Import Perfect ScrollBar CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/perfect-scrollbar.css">   

  <!-- Import Bootstrap CSS File -->

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

  <!-- Import Template's CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/presets.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/tables/tables.css">    
  <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/widget/blog.css"> -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">


</head>


  <header class="top-header media bg-success">
    <div class="top-left mr-3">
      <a class="navbar-brand" href="<?php echo base_url();?>index.html"><img src="<?php echo base_url();?>assets/img/longwayslogowhite.png" alt="Site Logo"></a><!-- /.navbar-brand -->
    </div><!-- /.top-left -->
    
    <div class="top-right media-body">


      <div class="right-content float-right">
       

        <div class="dropdown user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        
            <h4 class="name text-white"><?php echo $this->session->userdata('nama_admin'); ''?></h4>
          </a>
          <ul class="dropdown-menu">
  
            <li><a href="<?php echo base_url();?>logout"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
        </div>

      </div><!-- /.right-content -->
    </div><!-- /.top-right -->
  </header><!-- /.top-header -->