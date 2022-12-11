<?php
 /*$db_host = "10.10.10.104";
 $db_name = "gw_h2h_dev";
 $db_user = "gwbwn";
 $db_pass = "gwbwn2016";*/

 $db_host = "localhost";
 $db_name = "jadwal_sidang_tugas_akhir";
 $db_user = "root";
 $db_pass = "";
 
 try{
  $db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
  $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e){
  echo $e->getMessage();
 }
?>