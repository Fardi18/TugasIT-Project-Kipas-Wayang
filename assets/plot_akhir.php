 
		  <div class="col-md-10">
		  			<!-- form -->
	  			<div class="row">
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Jadwal Sidang Tugas Akhir</div>
					          
					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form"  method="POST" action="control.php?kc=plot_akhir1">
			  					
			  					
								  
								  <!-- <button id="cek">cek</button> -->
                                

			  					<div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">penelitian</label>
								    <div class="col-sm-10">
								      <select name="penelitian" id="penelitian" class="form-control">
								      
										  </select>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Nama Mahasiswa</label>
								    <div class="col-sm-10">
								      <select name="mhs" id="mhs" class="form-control">
								      
										  </select>
								    </div>
								  </div>
								 <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Pembimbing 1</label>
								    <div class="col-sm-10">
								      <select name="dosen" id="dosen" class="form-control">
										<option disabled="" selected="">PILIH</option>   
                        
										  </select>
								    </div>
								  </div>


								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Ketua Sidang</label>
								    <div class="col-sm-10">
								      <select name="dosen2" id="dosen2" class="form-control">
								      <option disabled="" selected="">PILIH</option>
										
										  </select>
								    </div>
								  </div>

								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Kategori</label>
								    <div class="col-sm-10">
								      <select name="kategori" id="kategori1" class="form-control">
								      
										  </select>
								    </div>
								  </div>

								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Penguji 1</label>
								    <div class="col-sm-10">
								      <select name="dosen3" id="dosen3" class="form-control">
										<option disabled="" selected="">PILIH</option>   
                        
										  </select>
								    </div>
								  </div>


								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Penguji 2</label>
								    <div class="col-sm-10">
								      <select name="dosen4" id="dosen4" class="form-control">
								      <option disabled="" selected="">PILIH</option>
										
										  </select>
								    </div>
								  </div>

								 
                                  
                                  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Program Studi</label>
								    <div class="col-sm-10">    
								    	<input type="text" name="jurusan" id="inputPassword3"class="form-control" readonly="readonly" value="<?php echo "$_SESSION[jurusan]"; ?>">						  			
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
						
								<th>penelitian</th>
								<th>Pembimbing 1</th>
								<th>Pembimbing 2</th>
								<th>Kategori</th>
								<th>Penguji 1</th>
								<th>Penguji 2</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							  <?php
							  $jur = $_SESSION['jurusan'];
        				$sp=  "SELECT * FROM plot_akhir, penelitian, Kategori WHERE 
        				plot_akhir.penelitian = penelitian.kode_penelitian AND 
        				plot_akhir.Kategori = Kategori.kode_kategori AND (plot_akhir.jurusan = '$jur')";
                        //echo $sp;
                        $no=1;
                        $exec = $db_con->query($sp) or die (mysql_error());
                        while($r=$exec->fetch(PDO::FETCH_ASSOC)){
								
											?>
										<tr class="odd gradeX">
										
										<td><?php echo $r['judul_penelitian'] ?></td>
										<td><?php echo $r['dosen'] ?></td>
										<td><?php echo $r['dosen2'] ?></td>
										<td><?php echo $r['nama_kategori'] ?></td>
										<td><?php echo $r['dosen3'] ?></td>
										<td><?php echo $r['dosen4'] ?></td>
										
										<td><a href="control.php?kc=plot_akhir2&&kdkls=<?php echo $r['kode_akhir'] ?>">DELETE</a></td>
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
					url: "control3.php?hal=penelitian1",
					method: "GET",
					success: function(data){
						$("#penelitian").html(data)
					}
				})
			},
			tampil: function(){
				var penelitian = $(this).val();
				$.ajax({
					url: "control3.php?hal=pdos",
					method: "POST",
					data: {penelitian: penelitian},
					success: function(data){
						$("#dosen").html(data)
					}
				})
			}
			
		}
		app.show();
		$(document).on("change", "#penelitian", app.tampil)
	})

     $(document).ready(function(){
		var app = {
			show: function(){
				$.ajax({
					url: "control3.php?hal=penelitian1",
					method: "GET",
					success: function(data){
						$("#penelitian").html(data)
					}
				})
			},
			tampil: function(){
				var penelitian = $(this).val();
				$.ajax({
					url: "control3.php?hal=pdos2",
					method: "POST",
					data: {penelitian: penelitian},
					success: function(data){
						$("#dosen2").html(data)
					}
				})
			}
			
		}
		app.show();
		$(document).on("change", "#penelitian", app.tampil)
	})
    
    $(document).ready(function(){
		var app = {
			show: function(){
				$.ajax({
					url: "control3.php?hal=kategori1",
					method: "GET",
					success: function(data){
						$("#kategori1").html(data)
					}
				})
			},
			tampil: function(){
				var kategori = $(this).val();
				$.ajax({
					url: "control3.php?hal=pdos3",
					method: "POST",
					data: {kategori: kategori},
					success: function(data){
						$("#dosen3").html(data)
					}
				})
			}
			
		}
		app.show();
		$(document).on("change", "#kategori1", app.tampil)
	})


	$(document).ready(function(){
		var app = {
			show: function(){
				$.ajax({
					url: "control3.php?hal=kategori1",
					method: "GET",
					success: function(data){
						$("#kategori1").html(data)
					}
				})
			},
			tampil: function(){
				var kategori = $(this).val();
				$.ajax({
					url: "control3.php?hal=pdos4",
					method: "POST",
					data: {kategori: kategori},
					success: function(data){
						$("#dosen4").html(data)
					}
				})
			}
			
		}
		app.show();
		$(document).on("change", "#kategori1", app.tampil)
	})
	
</script>
<script type="text/javascript">
	$(document).ready(function(){
		var app = {
			show: function(){
				$.ajax({
					url: "control3.php?hal=mhs",
					method: "GET",
					success: function(data){
						$("#mhs").html(data)
					}
				})
			}
		}
		app.show();
		$(document).on("change", "#mhs", app.tampil)
	})

</script>


