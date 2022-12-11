	
		  <div class="col-md-10">
		  			<!-- form -->
	  			<div class="row">
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Data Saya</div>
					          
					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					          <?php 
					     
							  $iddos = $_SESSION['id_dosen'];
        				$sp=  "SELECT * FROM dosen LEFT JOIN user ON dosen.id_dosen = user.id_dosen WHERE dosen.id_dosen = '$iddos'";
                        //echo $sp;
                        // $no=1;
                        $exec = $db_con->query($sp) or die (mysql_error());
                        while($r=$exec->fetch(PDO::FETCH_ASSOC)){
					     ?>
					        </div>
			  				<div class="panel-body">
			  					<form method="POST" action="index.php?page=102" class="form-horizontal" role="form">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">ID Dosen / NIDN</label>
								    <div class="col-sm-10">
								      <input type="text" name="id_dos" class="form-control" id="inputEmail3" placeholder="Kode Dosen" readonly="Readonly" value="<?php echo $r['id_dosen']; ?>">
								    </div>
								  </div>
								  <!--  -->
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Nama Dosen</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="inputPassword3" name="nama_dos" readonly="readonly" placeholder="Nama Dosen" value="<?php echo $r['nama_dosen']; ?>">
								    </div>
								  </div>
								  <!--  -->
								  	  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="inputPassword3" name="nama_dos" readonly="readonly" placeholder="Email Dosen" value="<?php echo $r['email']; ?>">
								    </div>
								  </div>
								  <!--  -->
								    <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Username</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="inputPassword3" name="nama_dos" readonly="readonly" placeholder="Nama Dosen" value="<?php echo $r['username']; ?>">
								    </div>
								  </div>
							
								  <!--  -->
								 <?php } ?>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      
								      <input type="submit" class="btn btn-primary" value="Ubah Data">
								    </div>
								  </div>
								</form>
			  				</div>
			  			</div>
	  				</div>
	  			
	  			</div>
	  		<!-- end form -->
	  		
	  		
	  		<!--  Page content -->
		  </div>
		</div>
    </div>
