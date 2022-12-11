
		  <div class="col-md-10">
		  			<!-- form -->
	  			<div class="row">
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Input Ruangan</div>
					          
					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
			  					<form method="POST" action="control.php?kc=ruang1" class="form-horizontal" role="form">
					
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Ruangan</label>
								    <div class="col-sm-10">
								      <input type="text" name="nama_ruang" class="form-control" id="inputPassword3" placeholder="No Ruangan" >
								    </div>
								  </div>
								  
								    <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Kapasitas</label>
								    <div class="col-sm-10">
								      <input type="text" name="kapasitas" class="form-control" id="inputPassword3" placeholder="Kapasitas Ruangan" >
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
	  					<div class="panel-title ">Data Ruangan</div>
						
				
		  			</div>
		  			<div class="content-box-large box-with-header">
			  		<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>Ruangan</th>
							
								<th>Kapasitas</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							 <?php
        				$sp=  "SELECT * FROM ruang_belajar; ";
                        //echo $sp;
                        $no=1;
                        $exec = $db_con->query($sp) or die (mysql_error());
                        while($r=$exec->fetch(PDO::FETCH_ASSOC)){
								
											?>
										<tr class="odd gradeX">
										<td><?php echo $r['nama_ruangan'] ?></td>
										<td><?php echo $r['kapasitas'] ?></td>
										<td><a href="control.php?kc=ruang2&&kdr=<?php echo $r['kode_ruangan'] ?>" >DELETE</a></td>
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

