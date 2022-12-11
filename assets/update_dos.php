	
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
					     
							  $iddos = $_GET['id_dosen'];
        				$sp=  "SELECT * FROM dosen LEFT JOIN user ON dosen.id_dosen = user.id_dosen WHERE dosen.id_dosen = '$iddos'";
                        //echo $sp;
                        // $no=1;
                        $exec = $db_con->query($sp) or die (mysql_error());
                        while($r=$exec->fetch(PDO::FETCH_ASSOC)){
					     ?>
					        </div>
			  				<div class="panel-body">
			  					<form method="POST" action="control.php?kc=profile" class="form-horizontal" role="form">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">ID Dosen / NIDN</label>
								    <div class="col-sm-10">
								      <input type="text" name="iddos" class="form-control" id="iddos" placeholder="Kode Dosen" readonly="Readonly" value="<?php echo $r['id_dosen']; ?>">
								    </div>
								  </div>
								  <!--  -->
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Nama Dosen</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="namados" name="namados"  placeholder="Nama Dosen" readonly="readonly" value="<?php echo $r['nama_dosen']; ?>">
								    </div>
								  </div>
								  <!--  -->
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Telpon</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="notlp" name="notlp"  placeholder="no Telpon" value="<?php echo $r['notlp']; ?>">
								    </div>
								  </div>
								  <!--  -->
								<!--  -->
								  <!--  -->
								  	  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="email" name="email"  placeholder="Email" value="<?php echo $r['email']; ?>">
								    </div>
								  </div>
								  <!--  -->
								    <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Username</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="username" name="username"  placeholder="Username" value="<?php echo $r['username']; ?>">
								    </div>
								  </div>
								  <!--  -->
								    <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
								    <div class="col-sm-10">
								      <input type="password" class="form-control" id="password"  name="password" placeholder="Password" value="<?php echo $r['password']; ?>">
								    </div>
								  </div>
								  <!--  -->
								   <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Re-Password</label>
								    <div class="col-sm-10">
								      <input type="password" class="form-control" id="repass" required=""  name="repass" placeholder="Re Password" value="">
								    </div>
								  </div>
								  <!--  -->
								 <?php } ?>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      
								      <input type="submit" id="update" onclick="nama_kelas();" class="btn btn-primary" value="Update Data" >
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



  <script type="text/javascript">    

  	// Java Script


    function nama_kelas(){  
    	var password = document.getElementById("password").value;
    	var repass = document.getElementById("repass").value;

    	if (password !== repass) {
    alert('Re-password tidak sama dengan password');
    	}
    };  



    document.getElementById("update").addEventListener("click", nama_kelas);

	</script>
