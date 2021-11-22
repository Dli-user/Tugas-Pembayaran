<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
  <script type="text/javascript">
  <?php if ($this->session->flashdata('suksessimpan')) { ?>
    toastr.options.positionClass = 'toast-top-right';
    toastr.success("<?php echo $this->session->flashdata('suksessimpan') ?>");
  <?php }elseif ($this->session->flashdata('gagalsimpan')) { ?>
    toastr.options.positionClass = 'toast-top-right';
    toastr.danger("<?php echo $this->session->flashdata('gagalsimpan') ?>");
  <?php } ?> 
</script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Sistem Pembayaran SPP</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.css">
  

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php
    $this->load->view('navbar');
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?php 
      $this->load->view('sidebar');
    ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php
      echo $contents;
    ?>
  <!-- Control Sidebar -->
  
    
  <?php
    $this->load->view('footer');
  ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script type="text/javascript">
  <?php if ($this->session->flashdata('suksessimpan')) { ?>
    toastr.options.positionClass = 'toast-top-right';
    toastr.success("<?php echo $this->session->flashdata('suksessimpan') ?>");
  <?php } elseif ($this->session->flashdata('gagalsimpan')) { ?>
    toastr.options.positionClass = 'toast-top-right';
    toastr.danger("<?php echo $this->session->flashdata('gagalsimpan') ?>");
  <?php } ?>
</script>
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
</body>
</html>
