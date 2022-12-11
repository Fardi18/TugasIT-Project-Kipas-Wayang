
		<div class="all">
		  <div class="col-md-10">
		  			<!-- form -->
	  			<div class="row">
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Input Penelitian</div>
					          
					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
			  			<form method="POST" action="control.php?kc=mk1" class="form-horizontal" id="form-mk" role="form">
			  						
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label" >Kode penelitian</label>
								    <div class="col-sm-10">
								    	<?php 
								    	$jur = $_SESSION['jurusan'];

								    $sp=  "SELECT max(kode_penelitian) as kode_penelitian FROM penelitian WHERE jurusan = '$jur' ;";
                        					// echo $sp;
                        			$no=1;
                        			
                        			$result = $db_con->query($sp) or die (mysql_error());
                        			
                        			while($r=$result->fetch(PDO::FETCH_ASSOC)){

                        			if ($result->rowCount() == 1) {
                        						
                        			$kode_penelitian = $r['kode_penelitian'];

                        			if ($jur == "TIF") {
                        			$urutan = (int) substr($kode_penelitian, 5, 3);
                        			} elseif ($jur == "DKV") {
                        			$urutan = (int) substr($kode_penelitian, 5, 3);
                        			} elseif ($jur == "IF") {
                        			$urutan = (int) substr($kode_penelitian, 4, 3);
                        			}
                        			
                        			$urutan++;
                        			
                        			$huruf = $jur."TA" ;
									$kode_penelitian_baru = $huruf . sprintf("%03s", $urutan);

										} else { $kode_penelitian_baru = "TA001"; }

										   	?>
								      <input type="text" class="form-control" name="kodemk" placeholder="Kode penelitian" readonly="Readonly" value="<?php echo "$kode_penelitian_baru" ?>">
								      	<?php } ?>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">NRP</label>
								    <div class="col-sm-10">
								      <select name="nim" id="nrp" class="form-control">
								      
										  </select>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Nama Mahasiswa</label>
								    <div class="col-sm-10">
								      <select name="namamhs" id="mahasiswa" class="form-control">
								
										  </select>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Judul penelitian</label>
								    <div class="col-sm-10">
								      <input type="text" name="namamk" class="form-control" id="inputPassword3" placeholder="Judul penelitian	">
								    </div>
								  </div>

								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Program Studi</label>
								    <div class="col-sm-10">    
								    	<input type="text" name="jurusan" id="inputPassword3"class="form-control" readonly="readonly" value="<?php echo "$_SESSION[jurusan]"; ?>">						  			
								    </div>
								  </div>
								  
								<div class="form-group">    
								    	<input type="hidden" name="sks" class="form-control" value="1">						  			
								  </div>

								  

								<!--  -->
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      
								      <input type="submit" class="btn btn-primary" id="simpan-mk" value="SIMPAN">
								    </div>
								  </div>
								</form>
			  				</div>
			  			</div>
	  				</div>
	  			
	  			</div>
	  		<!-- end form -->
	  		
	  				<!-- table -->
		  	<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Data Penelitian</div>
						
				
		  			</div>
		  			<div class="content-box-large box-with-header">
			  		<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>No</th>
								<th>NIM</th>
								<th>Nama Mahasiswa</th>
								<th>Judul Penelitian</th>
								<th>Jurusan</th>
								
								
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							  <?php
        				$sp=  "SELECT * FROM penelitian WHERE jurusan = '$jur'; ";
                        //echo $sp;
                        $no=1;
                        $exec = $db_con->query($sp) or die (mysql_error());
                        while($r=$exec->fetch(PDO::FETCH_ASSOC)){
								
											?>
										<tr class="odd gradeX">
										<td><?php echo $no ?></td>
										<td><?php echo $r['nim'] ?></td>
										<td><?php echo $r['nama'] ?></td>
										<td><?php echo $r['judul_penelitian'] ?></td>
										<td><?php echo $r['jurusan'] ?></td>
										
										
										<td><a href="control.php?kc=mk2&&kdmk=<?php echo $r['kode_penelitian'] ?>" >DELETE</a></td>
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
    </div>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
	

    

	 $(document).ready(function(){
		var app = {
			show: function(){
				$.ajax({
					url: "control3.php?hal=nrp",
					method: "GET",
					success: function(data){
						$("#nrp").html(data)
					}
				})
			},
			
			
		}
		app.show();
		$(document).on("change", "#nrp", app.tampil)
	})
    
</script>
<script type="text/javascript">
	

    

	 $(document).ready(function(){
		var app = {
			show: function(){
				$.ajax({
					url: "control3.php?hal=mahasiswa",
					method: "GET",
					success: function(data){
						$("#mahasiswa").html(data)
					}
				})
			},
			
			
		}
		app.show();
		$(document).on("change", "#mahasiswa", app.tampil)
	})
    
</script>
