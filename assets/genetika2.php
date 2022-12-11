<?php

session_start();
    
 

    include '../vendors/koneksi.php';

    // data polot kelas
    $sql_kelas =  "SELECT a.kode_kelas, a.matakuliah, a.dosen, b.jml_sks FROM plot_kelas as a, matakuliah as b where a.matakuliah = b.kode_matkul;";
    $ex = $db_con->query($sql_kelas);
    $no = 0;
    while($data=$ex->fetch(PDO::FETCH_OBJ)){
    $kode_kelas[$no] = $data->kode_kelas;
    $kode_matkul = $data->matakuliah;
    $kode_dosen = $data->dosen;
    $sks = $data->jml_sks;
    $no++;
    }
    // data hari
    $sql_hari =  "SELECT * FROM hari where keterangan_hari = 'W'";
    $ex = $db_con->query($sql_hari);
    $no = 0;
    while($data=$ex->fetch(PDO::FETCH_OBJ)){
    $kode_hari[$no] = $data->kode_hari;
    $no++;
    }
    // data jam
    $sql_jam =  "SELECT * FROM jam where keterangan = 'RM'";
    $ex = $db_con->query($sql_jam);
    $no = 0;
    while($data=$ex->fetch(PDO::FETCH_OBJ)){
    $kode_jam[$no] = $data->kode_jam;
    $no++;
    }
    // data ruang
    $sql_ruangan =  "SELECT * FROM ruang_belajar";
    $ex = $db_con->query($sql_ruangan);
    $no = 0;
    while($data=$ex->fetch(PDO::FETCH_OBJ)){
    $kode_ruangan[$no] = $data->kode_ruangan;
    $no++;
    }

        $RowsKelas = count($kode_kelas);
        $RowsHari =  count($kode_hari);
        $RowsJam =  count($kode_jam);
        $RowsRuangan =  count($kode_ruangan);
        // echo "$RowsJam";



        for ($hari=0; $hari < $RowsHari ; $hari++) { 
        	$a = $kode_hari[$hari];
        
        }
        	$acak_hari = mt_rand(6,$a);
        	// echo "$acak_hari ";


        for ($jam=0; $jam < $RowsJam ; $jam++) { 
        	$b = $kode_jam[$jam];
        }
          	$acak_jam = mt_rand(11,$b);
        	// echo "$acak_jam ";

        for ($ruang=0; $ruang < $RowsRuangan ; $ruang++) { 
        	$c = $kode_ruangan[$ruang];
        }
          	$acak_ruang = mt_rand(1,$c);
        	// echo "$acak_ruang";

        for ($i=0; $i < 10 ; $i++) { 
        	for ($j=0; $j < $RowsKelas ; $j++) { 
       
        	$kelas[$i][$j][0] = $kode_kelas[$i];
        	$kelas[$i][$j][1] = $acak_hari;
        	$kelas[$i][$j][2] = $acak_jam;
        	$kelas[$i][$j][3] = $acak_ruang;
       			
       		$sv_kelas = $kelas[$i][$j][0];
       		$sv_hari = $kelas[$i][$j][1];
       		$sv_jam = $kelas[$i][$j][2];
       		$sv_ruang = $kelas[$i][$j][3];

       			

        	}
        	echo " $sv_kelas $sv_hari $sv_jam $sv_ruang <br>";
        }
      

?>