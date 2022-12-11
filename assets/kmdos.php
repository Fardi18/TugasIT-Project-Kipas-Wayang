	
		  <div class="col-md-10">
		  			<!-- form -->
	  			<div class="row">
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Ketersediaan </div>
					          
					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					     
					        </div>
			  				<div class="panel-body">
			  					<form method="POST" action="control.php?kc=kmdos1" class="form-horizontal" role="form">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">ID Dosen</label>
								    <div class="col-sm-10">
								      <input type="text" name="id_dos" class="form-control" id="inputEmail3" placeholder="Kode Dosen" readonly="Readonly" value="<?php echo $_SESSION['id_dosen']; ?>">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Nama Dosen</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="inputPassword3" name="nama_dos" placeholder="Nama Dosen" readonly="readonly" value="<?php echo $_SESSION['nama_dosen']; ?>">
								    </div>
								  </div>
								  <!--  -->
								  
								      <input type="hidden" class="form-control" id="inputPassword3" name="sesi"  value="1">
								
								  <!--  -->
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Hari</label>
								    <div class="col-sm-10">
								  
			  							<select name="hari" id="hari" class="form-control">
											<option disabled="" selected="">PILIH</option>
									
										  </select>
			  					</div>
								  </div>
								  
								<div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Jam</label>
								    <div class="col-sm-10" id="jam" >

						
			  					</div>
								  </div>
								<!--  -->
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      
								      <input type="submit" class="btn btn-primary" value="SIMPAN">
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
	  					<div class="panel-title ">Data Saya</div>
						
				
		  			</div>
		  			<div class="content-box-large box-with-header">
			  		<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama_dosen</th>
								<th>Hari</th>
								<th>Jam</th>
								<th>Sesi</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							 <?php
        				$sp=  "SELECT * FROM ketersediaan,hari,jam where id_dosen = '$_SESSION[id_dosen]' and hari.kode_hari = ketersediaan.hari and jam.kode_jam = ketersediaan.sesi ; ";
                        //echo $sp;
                        $no=1;
                        $exec = $db_con->query($sp) or die (mysql_error());
                        while($r=$exec->fetch(PDO::FETCH_ASSOC)){
								if ($r['keterangan'] == "RP") {
									$ket_h = "Regular Pagi";
								} elseif ($r['keterangan'] == "RM") {
									$ket_h = "Regular Malam";
								} elseif ($r['keterangan'] == "W") {
									$ket_h = "Kelas WeekEnd	";
								}
											?>
										<tr class="odd gradeX">
										<td><?php echo $no ?></td>
										<td><?php echo $r['nama_dosen'] ?></td>
										<td><?php echo $r['nama_hari'] ?></td>
										<td><?php echo $r['range_jam'] ?></td>
										<td><?php echo $ket_h ?></td>
										<td><a href="control.php?kc=kmdos2&&kode=<?php echo $r['kode_ketersediaan']; ?>" >DELETE</a></td>
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

<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
	
	$(document).ready(function(){
		var app = {
			show: function(){
				$.ajax({
					url: "control3.php?hal=hari",
					method: "GET",
					success: function(data){
						$("#hari").html(data)
					}
				})
			},
			
			
		}
		app.show();
		$(document).on("change", "#hari")
	})

	$(document).ready(function(){
		var app = {
			show: function(){
				$.ajax({
					url: "control3.php?hal=jam",
					method: "GET",
					success: function(data){
						$("#jam").html(data)
					}
				})
			},
			
			
		}
		app.show();
		$(document).on("change", "#jam")
	})

</script>