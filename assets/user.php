
		  <div class="col-md-10">
		  			<!-- form -->
	  			<div class="row">
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Input User</div>
					          
					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
			  					<form method="POST" action="control.php?kc=user1" class="form-horizontal" role="form">

								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">ID</label>
								    <div class="col-sm-10">
								      <input type="text" name="id_dosen" class="form-control" id="inputPassword3" placeholder="NIDN / NRP" >
								    </div>
								  </div>

								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>
								    <div class="col-sm-10">
								      <input type="text" name="nama_dosen" class="form-control" id="inputPassword3" placeholder="Nama" >
								    </div>
								  </div>

								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Username</label>
								    <div class="col-sm-10">
								      <input type="text" name="username" class="form-control" id="inputPassword3" placeholder="Username" >
								    </div>
								  </div>


								    <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
								    <div class="col-sm-10">
								      <input type="text" name="email" class="form-control" id="inputPassword3" placeholder="E-Mail" >
								    </div>
								  </div>

								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Jurusan</label>
								    <div class="col-sm-10">
								  
			  							<select name="jurusan" class="form-control">
			  								<option disabled="" selected="">PILIH</option>
										    <option value="IF">Teknik Informatika</option>
										    <option value="TS">Teknik Sipil</option>
										    <option value="TE">Teknik Elektro</option>
										    <option value="TI">Teknik Industri</option>
										    <option value="TM">Teknik Mesin</option>
										    <option value="TK">Teknik Kimia</option>
										    <option value="ARS">Arsitektur</option>
										    <option value="TIP">Teknik Industri Pertanian</option>
										    <option value="PWK">Perencanaan Wilayah & Kota</option>
										    <option value="MN">Manajemen</option>
										    
										  </select>
			  					</div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Status LOG</label>
								    <div class="col-sm-10">
								  
			  							<select class="form-control" name="status_dos">
			  								<option disabled="" selected="">PILIH</option>
										    <option value="12">Akademik</option>
										    <option value="13">Kaprodi</option>
										    <option value="14">Dosen</option>
										    <option value="15">Mahasiswa</option>
										    <option value="11">Admin</option>
										  </select>
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
		  	<div class="row" >
		  		<div class="col-md-12 panel-primary">
		  			<div class="content-box-header panel-heading" style="background-color: #f58d42">
	  					<div class="panel-title ">User</div>
						
				
		  			</div>
		  			<div class="content-box-large box-with-header">
			  		<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Username</th>
								<th>Role_ID</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							
								   <?php
        				$sp=  "SELECT * FROM user,dosen WHERE user.id_dosen = dosen.id_dosen;  ";
                        //echo $sp;
                        $no=1;
                        $exec = $db_con->query($sp) or die (mysql_error());
                        while($r=$exec->fetch(PDO::FETCH_ASSOC)){
										
										 if($no%2==1){ $color='#F7F7F7'; } else { $color='#FFCCCC'; }

										$va = $r['status_log'];
										if ( $va == '1') {
											$status = "<b style='color:green;'>AKTIF</b>";
										} else {
											$status = "<b style='color:red;'>DISABLE</b>";
										}
										
										$va = $r['status_dos'];
										if ( $va == '11') {
											$status_dos = "admin";
										} elseif ( $va == '12') {
											$status_dos = "akademik";
										} elseif ( $va == '13') {
											$status_dos = "kaprodi";
										} elseif ( $va == '14') {
											$status_dos = "dosen";
										} elseif ( $va == '15') {
											$status_dos = "mahasiswa";
										}
										
										?>
										<tr class="odd gradeX">
											<td><?php echo $no ?></td>
											<td><?php echo $r['nama_dosen'] ?></td>
											<td><?php echo $r['username'] ?></td>
											<td><?php echo $status_dos ?></td>
											<td><?php echo $status ?></td>
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

