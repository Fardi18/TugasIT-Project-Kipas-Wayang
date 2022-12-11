<?php

?>

<!DOCTYPE html>
<html>
  <head>
    <title>PENJADWALAN SKRIPSI</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- styles -->
    <link href="../css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="../vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="../vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="../vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="../css/buttons.css" rel="stylesheet">
    <link href="../css/forms.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header" style="background-color: #f58d42">
       <div class="container">
          <div class="row">
             <div class="col-md-5">
                <div class="logo">
                  <img src="../images/logo-iti.png" style="width: 40px; float: left; margin-right: 10px;
                  margin-top: 3px;">
                  <img src="../images/unnamed.png" style="width: 60px; float: left; margin-right: 5px;">
                   <h1 style="
                   width: 900px;
                    font-size: 16px;
                    font-weight: bold;
                    ">
                    <a href="index.html">PRODI INFORMATIKA</a></h1>
                </div>
             </div>
             <div class="col-md-5">
             <!--    <div class="row">
                  <div class="col-lg-12">
                    <div class="input-group form">
                         <input type="text" class="form-control" placeholder="Search...">
                         <span class="input-group-btn">
                           <button class="btn btn-primary" type="button">Search</button>
                         </span>
                    </div>
                  </div>
                </div> -->
             </div>
      
          </div>
       </div>
  </div>
    <div class="page-content">
      <div class="row">


<div class="col-md-2">
        <div class="sidebar content-box" style="display: block; background-color: orange;">
                <ul class="nav">
                    <!-- Main menu -->
                    <?php
                    
                    if ($_SESSION['status_dos'] == 11 ) {
                    ?>
                    <!-- menu admin -->

                    <?php
                    
                      $page = $_GET['page'];
                      if ($page == 0) {
                        echo "<li class='current'>";
                      } else {echo "<li>";}
                    ?>
                    <a href="index.php?page=0"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>

                    <!--  -->
                         <!--  -->
                    <?php
                      $_GET['page'];
                      if ($page == 9) {
                        echo "<li class='current'>";
                      }else {echo "<li>";}
                    ?><a href="index.php?page=9"><i class="glyphicon glyphicon-pencil"></i> User</a></li>
                    <!--  -->

                    <?php
                    }

                     if ($_SESSION['status_dos'] == 15 ) {
                    ?>
                    <!-- menu admin -->

                    <?php
                    
                      $page = $_GET['page'];
                      if ($page == 0) {
                        echo "<li class='current'>";
                      } else {echo "<li>";}
                    ?>
                    <a href="index.php?page=0"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>

                    <!--  -->
                   <?php
                     $page = $_GET['page'];
                      if ($page == 99 or $page == 991 or $page == 992 ) {
                        echo "<li class='submenu current' >";
                      } else {echo "<li class='submenu'> ";}
                    ?>           
                            <a href='#''>                
                            <i class="glyphicon glyphicon-pencil"></i>Lihat Jadwal
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <!--  -->
                         <?php
                      $page = $_GET['page'];
                      if ($page == 99) {
                        echo "<li class='current'>";
                      }else {echo "<li>";}
                    ?><a href="index.php?page=99&&ss=SA">Sidang Akhir</a></li>
                            <!--  -->
                        <!--  -->
                    </li>
                        </ul>
                    </li>

                    <?php
                    }

                    if ($_SESSION['status_dos'] == 13) {
                    ?>
                    <!-- kaprodi -->

                    <?php
                      $page = $_GET['page'];
                      if ($page == 0) {
                        echo "<li class='current'>";
                      } else {echo "<li>";}
                    ?>
                    <a href="index.php?page=0"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>

                    <!--  -->

                      <?php
                      $_GET['page'];
                      if ($page == 3) {
                        echo "<li class='current'>";
                      }else {echo "<li>";}
                    ?><a href="index.php?page=3"><i class="glyphicon glyphicon-list-alt"></i> Penelitian</a></li>
                    <!--  -->
                      


                       <?php
                     $page = $_GET['page'];
                      if ($page == 5 or $page == 51 or $page == 52 ) {
                        echo "<li class='submenu current' >";
                      } else {echo "<li class='submenu'> ";}
                    ?>           
                            <a href='#''>                
                            <i class="glyphicon glyphicon-floppy-saved"></i> Penjadwalan
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <!--  -->
                             <?php
                      $page = $_GET['page'];
                      if ($page == 5) {
                        echo "<li class='current'>";
                      }else {echo "<li>";}
                    ?><a href="index.php?page=5">Proposal</a></li>
                            <!--  -->
                               <?php
                      $page = $_GET['page'];
                      if ($page == 51) {
                        echo "<li class='current'>";
                      }else {echo "<li>";}
                    ?><a href="index.php?page=51">Pra - Sidang</a></li>
                            <!--  -->
                                    <?php
                      $page = $_GET['page'];
                      if ($page == 52) {
                        echo "<li class='current'>";
                      }else {echo "<li>";}
                    ?><a href="index.php?page=52">Sidang Skripsi</a></li>
                            <!--  -->
                        <!--  -->
                    </li>
                        </ul>
                    </li>

           
                    <!--  -->
                    
                   

                    <?php
                    }

                    if ($_SESSION['status_dos'] == 12) {
                   

                           $page = $_GET['page'];
                      if ($page == 0) {
                        echo "<li class='current'>";
                      } else {echo "<li>";}
                    ?>
                    <a href="index.php?page=0"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>

                    <!--  -->

                      <?php
                      $_GET['page'];
                      if ($page == 6) {
                        echo "<li class='current'>";
                      }else {echo "<li>";}
                    ?><a href="index.php?page=6"><i class="glyphicon glyphicon-flag"></i> Ruangan</a></li>
                            <!--  -->

                       <?php
                     $page = $_GET['page'];
                      if ($page == 81 or $page == 82 or $page == 83 ) {
                        echo "<li class='submenu current' >";
                      } else {echo "<li class='submenu'> ";}
                    ?>           
                            <a href='#''>                
                            <i class="glyphicon glyphicon-pencil"></i> Buat Jadwal
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <?php
                      $page = $_GET['page'];
                      if ($page == 81) {
                        echo "<li class='current'>";
                      }else {echo "<li>";}
                    ?><a href="index.php?page=81">Proposal</a></li>
                            <!--  -->
                               <?php
                      $page = $_GET['page'];
                      if ($page == 82) {
                        echo "<li class='current'>";
                      }else {echo "<li>";}
                    ?><a href="index.php?page=82">Pra - Sidang</a></li>
                            <!--  -->
                                    <?php
                      $page = $_GET['page'];
                      if ($page == 83) {
                        echo "<li class='current'>";
                      }else {echo "<li>";}
                    ?><a href="index.php?page=83">Sidang Skripsi</a></li>
                            <!--  -->
                        <!--  -->
                    </li>
                        </ul>
                    </li>
                    <!--  -->

                    <?php
                     $page = $_GET['page'];
                      if ($page == 8 or $page == 80 or $page == 800 ) {
                        echo "<li class='submenu current' >";
                      } else {echo "<li class='submenu'> ";}  
                    ?>           
                            <a href='#''>                
                            <i class="glyphicon glyphicon-calendar"></i> Jadwal
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <?php
                      $page = $_GET['page'];
                      if ($page == 8) {
                        echo "<li class='current'>";
                      }else {echo "<li>";}
                    ?><a href="index.php?page=8">Proposal</a></li>
                            <!--  -->
                               <?php
                      $page = $_GET['page'];
                      if ($page == 80) {
                        echo "<li class='current'>";
                      }else {echo "<li>";}
                    ?><a href="index.php?page=80">Pra - Sidang</a></li>
                            <!--  -->
                                    <?php
                      $page = $_GET['page'];
                      if ($page == 800) {
                        echo "<li class='current'>";
                      }else {echo "<li>";}
                    ?><a href="index.php?page=800">Sidang Skripsi</a></li>
                            <!--  -->
                        <!--  -->
                    </li>
                        </ul>
                    </li>
                    <!--  -->




                   
                    <!--  -->



                    <?php
                    }

                      if ($_SESSION['status_dos'] == 14) {

                      ?>

                      <?php
                                 
                      $page = $_GET['page'];
                      if ($page == 0) {
                        echo "<li class='current'>";
                      } else {echo "<li>";}
                    ?>
                    <a href="index.php?page=0"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>

                    <!--  -->
                    <?php
                      $_GET['page'];
                      if ($page == 1) {
                        echo "<li class='current'>";
                      }else {echo "<li>";}
                    ?><a href="index.php?page=1"><i class="glyphicon glyphicon-pencil"></i> Ketersediaan</a></li>

                    <?php
                      $_GET['page'];
                      if ($page == 11) {
                        echo "<li class='current'>";
                      }else {echo "<li>";}
                    ?><a href="index.php?page=11"><i class="glyphicon glyphicon-user"></i> Kategori Dosen</a></li>
                    <!--  -->
                  

                     

                    <!--  -->
                    <?php
                     $page = $_GET['page'];
                      if ($page == 2 or $page == 21 or $page == 22 ) {
                        echo "<li class='submenu current' >";
                      } else {echo "<li class='submenu'> ";}
                    ?>           
                            <a href='#''>                
                            <i class="glyphicon glyphicon-list"></i> Jadwal Sidang
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <?php
                      $page = $_GET['page'];
                      if ($page == 2) {
                        echo "<li class='current'>";
                      }else {echo "<li>";}
                    ?><a href="index.php?page=2&&ss=UP">Proposal</a></li>
                            <!--  -->
                               <?php
                      $page = $_GET['page'];
                      if ($page == 21) {
                        echo "<li class='current'>";
                      }else {echo "<li>";}
                    ?><a href="index.php?page=21&&ss=SH">Seminar Hasil</a></li>
                            <!--  -->
                                    <?php
                      $page = $_GET['page'];
                      if ($page == 22) {
                        echo "<li class='current'>";
                      }else {echo "<li>";}
                    ?><a href="index.php?page=22&&ss=SA">Sidang Akhir</a></li>
                            <!--  -->
                        <!--  -->
                    </li>
                        </ul>
                    </li>

                    <?php
                      }
                    ?>
           <!--  -->
                  
               
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-info-sign"></i> My Account
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="index.php?page=101">Profile</a></li>
                            <li><a href="logout.php">LogOut</a></li>
                        </ul>
                    </li>
                    
                    
                </ul>
             </div>
      </div>




         