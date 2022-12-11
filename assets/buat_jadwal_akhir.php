
<?php include 'genetika_ta.php'; 
	
?>
		  <div class="col-md-10">

		  			<!-- form -->
	  			<div class="row">
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Buat Jadwal</div>
					          
					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">

								  <!--  -->
								
								  <div class="form-group" id="form_fitness">
								    <label for="inputEmail3" class="col-sm-2 control-label">Fitness</label>
								    <div class="col-sm-10">
											
											<?php 
											error_reporting(0);
											if ($_GET['fit']== '') {
												$fit = 0;
											} else {
												$fit = $_GET['fit']; 
											} 
											?>

								    <input type="text" name="id_dos" class="form-control" id="fitness" placeholder="Nilai Fitness" readonly="Readonly" value="<?php echo $fit ?>" >
								    </div>
								  </div>
								<!--  -->
										<div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Jadwal Bentrok</label>
								    <div class="col-sm-10">
								    	<input type="text" name="id_dos" class="form-control" id="bentrok" placeholder="Jadwal Bentrok" readonly="Readonly" value="0" >
								    </div>
								  </div>
								    <div class="col-sm-offset-2 col-sm-10" >
								  			  <button class="btn btn-success" id="acak" onclick="redirect('control_ta.php?sjam=RP&&shari=RP')" style="margin-bottom: 20px;" > Acak Jadwal </button> 
								  </div>
								
								<!--  -->

			  					<!--  -->
			  					<form class="form-horizontal" role="form" method="POST" action="control.php?kc=jadwal1ta">
								<!--  -->
								<div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Kode jadwal</label>
								    <div class="col-sm-10">

								    	<?php
								    		  $sp=  "SELECT max(kode_jadwal) as kode_jadwal FROM jadwal_up;";
                        					// echo $sp;
              
                        			$result = $db_con->query($sp);
                        			
                        			while($r=$result->fetch(PDO::FETCH_ASSOC)){

                        			if ($result->rowCount() == 1) {
                        						
                        			$kode_jadwal = $r['kode_jadwal'];

                        			$urutan = (int) substr($kode_jadwal, 10, 3);
                        			
                        			$urutan++;
                        			
                        			$waktu = "TA".date('Ydm') ;
									$kode_jadwal_new = $waktu . sprintf("%03s", $urutan);

										} else { 
											$kode_jadwal_new = "TA".date('Ydm')."001"; }
										}

										   	?>

								    	<input type="text" name="kode_jadwal" class="form-control" id="inputEmail3" placeholder="Kode Jadwal" readonly="Readonly" value="<?php echo $kode_jadwal_new;  ?>" >
								    </div>
								  </div>
								
								 <!--  -->

								    	<?php
								    		$bln = date('m');
								    		$thn = date('Y');
								    		if ($bln <= 6){
								    			$tahun = $thn-1;
								    			$output = "$tahun - $thn";
								    		}
								    		if ($bln >= 7){
								    			$tahun = $thn+1;
								    			$output = "$thn - $tahun";
								    		}
								    		
								    	?>
								 			<div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Tahun Ajaran</label>
								    <div class="col-sm-10">
								    	<input type="text"  name="thn_ajaran" class="form-control" id="bentrok" placeholder="Jadwal Bentrok" readonly="Readonly" value="<?php echo $output; ?>" >
								    </div>
								  </div>
								 <!--  -->
					
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10" >
								      
								      <input type="submit" class="btn btn-primary" value="Simpan">
								      </form>
									      <!-- <h3>/</h3> -->
							
								

					<!-- 			<button class="btn btn-primary" id="acak" onclick="redirect('')" style="margin-bottom: 20px;" > Simpan </button>  -->
								    
								    
								    </div>
								  </div>
								
						
								  <!--  -->

			  				</div>
			  			</div>
	  				</div>
	  			
	  			</div>
	  		<!-- end form -->

	  					<!-- table -->
		  	<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Data Sidang Akhir</div>
						
				
		  			</div>
		  			<div class="content-box-large box-with-header">
			  		<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>No</th>
							
								<th>Penelitian</th>
								<th>Jam</th>
								
								<th>Hari</th>
								<th>Ruang</th>
							</tr>
						</thead>
						<tbody>
							  <?php
        				$sp=  "SELECT 
a.kode_akhir,

Concat_WS('-', concat('(', c.kode_jam), concat( (SELECT kode_jam FROM jam WHERE kode_jam = c.kode_jam) + (g.jml_sks - 1),')')) , 

Concat_WS('-', MID(c.range_jam,1,5),(SELECT MID(range_jam,7,5) FROM jam WHERE kode_jam = c.kode_jam + (g.jml_sks - 1))) as jam_kuliah, 
g.judul_penelitian,
g.jml_sks as sks,
d.nama_hari as hari,
e.nama_ruangan as ruang

-- nama kelas,penelitian,jamkuliah,sks,hari,ruangan
FROM data_acak_akhir as a LEFT JOIN 
     plot_akhir as b ON a.kode_akhir = b.kode_akhir
     LEFT JOIN jam as c ON a.jam = c.kode_jam
     LEFT JOIN hari as d ON a.hari = d.kode_hari
     LEFT JOIN ruang_belajar as e ON a.ruangan = e.kode_ruangan
     LEFT JOIN dosen as f ON b.dosen = f.id_dosen
     LEFT JOIN penelitian as g ON b.penelitian = g.kode_penelitian 

GROUP BY a.kode_akhir ASC";
                        //echo $sp;
                        $no=1;
                        $exec = $db_con->query($sp);
                        while($r=$exec->fetch(PDO::FETCH_ASSOC)){
								

                // $fitness = (1/(1+$penalty_jam+$penalty_hari+$penalty_ruang));

                        	// 

											?>
										<tr class="odd gradeX">
										<td><?php echo $no ?></td>
									
										<td><?php echo $r['judul_penelitian'] ?></td>
										<td><?php echo $r['jam_kuliah'] ?></td>
										
										<td><?php echo $r['hari'] ?></td>
										<td><?php echo $r['ruang'] ?></td>
									
										</tr>

							<?php
							$no++;
						}
							?>
							
						</tbody>
					</table>
  				</div>
					</div>
		  		</div>
		  	</div>
		  	<!-- end table -->


	  		<!--  Page content -->
		  </div>
		</div>
    </div>

    <script type="text/javascript">
    	function redirect(url){
    		location.href = url;

    		
    	 
    	}

    </script>