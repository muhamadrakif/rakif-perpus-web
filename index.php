﻿<?php
session_start();
error_reporting();
include "hal/function.php";
include "koneksi.php";
if(@$_SESSION['admin'] || @$_SESSION['user']){
  ?>
  <!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpus Rumi</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />   
  </head>
  <body>
    <div id="wrapper">
      <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">El Rumi</a> 
        </div>
        <div style="color: white;
        padding: 15px 50px 5px 50px;
        float: right;
        font-size: 16px;"> Tanggal : <?php echo date("d-m-yy"); ?> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
      </nav>   
      <!-- /. NAV TOP  -->
      <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
          <ul class="nav" id="main-menu">
            <li class="text-center">
              <img src="assets/img/find_user.png" class="user-image img-responsive"/>
            </li>


            <li>
              <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
            </li>
            <li>
              <a  href="?page=anggota"><i class="fa fa-desktop fa-3x"></i> Anggota</a>
            </li>
            <li>
              <a  href="?page=buku"><i class="fa fa-qrcode fa-3x"></i> Buku</a>
            </li>
            <li  >
              <a   href="?page=transaksi"><i class="fa fa-bar-chart-o fa-3x"></i> Transaksi</a>
            </li>	


          </ul>

        </div>

      </nav>  
      <!-- /. NAV SIDE  -->
      <div id="page-wrapper" >
        <div id="page-inner">
          <div class="row">
            <div class="col-md-12">


              <?php
              // @$page = $_GET['page']; 
              // @$aksi = $_GET['aksi'];
              $page = false;
              $aksi = false;
              if (isset($_GET['page'])) {
                $page = $_GET['page'];
              }
              if (isset($_GET['aksi'])) {
                $aksi = $_GET['aksi'];
              }

              if ($page == "anggota") {
                if ($aksi == "") {
                  include "hal/anggota/anggota.php";
                }elseif ($aksi == "tambah") {
                  include "hal/anggota/tambah.php";
                }elseif ($aksi == "hapus") {
                  include "hal/anggota/hapus.php";
                }elseif ($aksi == "ubah") {
                  include "hal/anggota/ubah.php";
                }
              }

              elseif ($page == "buku") {
                if ($aksi == "") {
                  include "hal/buku/buku.php";
                }elseif ($aksi == "hapus") {
                  include "hal/buku/hapus.php";
                }elseif ($aksi == "tambah") {
                  include "hal/buku/tambah.php";
                }elseif ($aksi == "ubah") {
                  include "hal/buku/ubah.php";
                }
              }

              elseif($page == "transaksi"){
                if($aksi == ""){
                  include "hal/transaksi/transaksi.php";
                }elseif ($aksi == "tambah") {
                  include "hal/transaksi/tambah2.php";
                }elseif ($aksi == "kembali") {
                  include "hal/transaksi/kembali.php";
                }elseif ($aksi == "perpanjang") {
                  include "hal/transaksi/perpanjang.php";
                }
              }

              elseif($page == ""){
                if($aksi == ""){
                  include "hal/dashboard/dashboard.php";
                }
              } 
              ?>

            </div>
          </div>              


          <!-- /. WRAPPER  -->
          <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
          <!-- JQUERY SCRIPTS -->
          <script src="assets/js/jquery-1.10.2.js"></script>
          <!-- BOOTSTRAP SCRIPTS -->
          <script src="assets/js/bootstrap.min.js"></script>
          <!-- METISMENU SCRIPTS -->
          <script src="assets/js/jquery.metisMenu.js"></script>
          <!-- MORRIS CHART SCRIPTS -->
          <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
          <script src="assets/js/morris/morris.js"></script>
          <!-- DATA TABLE SCRIPTS -->
          <script src="assets/js/dataTables/jquery.dataTables.js"></script>
          <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
          <script>
            $(document).ready(function () {
              $('#dataTables-example').dataTable();
            });
          </script>
          <!-- CUSTOM SCRIPTS -->
          <script src="assets/js/custom.js"></script>


        </body>
        </html>
        <?php 
      }else{
        header("location:login.php");
      }
      ?>