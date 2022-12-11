
		  <div class="col-md-10">
		  			<!-- form -->
	  			<div class="row">
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">
					            Ploting Dosen
					            </div>
					          
					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
			  					<form method="POST" action="control.php?kc=plot_dos1" class="form-horizontal" role="form">
			  					 <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Jurusan</label>
								    <div class="col-sm-10">
								    	<?php

								    	$jur = $_SESSION['jurusan'];
								    $sp=  "SELECT * FROM jurusan WHERE nama_jurusan = '$jur'";
                        				
                        			$result = $db_con->query($sp) or die (mysql_error());
                        			
                        			while($r=$result->fetch(PDO::FETCH_ASSOC)){

								    	?>
								      <input type="text" name="jurusan" class="form-control" id="inputPassword3" placeholder="Jurusan" readonly="readonly" value="<?php echo $r['nama_jurusan']; ?>"  >
								  <?php } ?>
								    </div>
								  </div>
								  <!--  -->

								  <!--  -->


								 <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">penelitian</label>
								    <div class="col-sm-10">
								      <select name="penelitian" class="form-control">
								      <option disabled="" selected="">PILIH</option>
										    <?php 

						$sp1=  "SELECT * FROM penelitian where jurusan = '$jur';";
                        				//echo $sp;
                        $no=1;
                        $exec1 = $db_con->query($sp1) or die (mysql_error());
                        while($h=$exec1->fetch(PDO::FETCH_ASSOC)){
                        	echo "<option value='".$h['kode_penelitian']."'>".$h['judul_penelitian']." - ".$h['jml_sks']." SKS</option>";
                        }
                        ?>
										  </select>
								    </div>
								  </div>
								  <!--  -->

								   <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Sesi</label>
								    <div class="col-sm-10">
								      <select name="sesi" id="sesi" class="form-control">
										<option disabled="" selected="">PILIH</option>   

										  </select>
								    </div>
								  </div>
							

								  <!--  -->
								
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Dosen</label>
								    <div class="col-sm-10">
								      <select name="dosen" id="dosen" class="form-control">
										<option disabled="" selected="">PILIH</option>   
                        ?>
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
								<th>Jurusan</th>
								<th>penelitian</th>
								<th>Dosen</th>
								<th>Sesi</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							  <?php
							  $jur = $_SESSION['jurusan'];
        				$sp=  "SELECT * FROM plot_dosen,dosen,sesi,penelitian WHERE plot_dosen.id_dosen = dosen.id_dosen AND plot_dosen.jurusan = '$jur' AND plot_dosen.sesi = sesi.no_sesi AND plot_dosen.penelitian = penelitian.kode_penelitian";
                        //echo $sp;
                        $no=1;
                        $exec = $db_con->query($sp) or die (mysql_error());
                        while($r=$exec->fetch(PDO::FETCH_ASSOC)){
								
											?>
										<tr class="odd gradeX">
										<td><?php echo $r['jurusan'] ?></td>
										<td><?php echo $r['judul_penelitian'] ?></td>
										<td><?php echo $r['nama_dosen'] ?></td>
										<td><?php echo $r['keterangan'] ?></td>
										<td><a href="control.php?kc=plot_dos2&&kdplot=<?php echo $r['kode_plot'] ?>">DELETE</a></td>
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
					url: "control3.php?hal=sesi",
					method: "GET",
					success: function(data){
						$("#sesi").html(data)
					}
				})
			},
			tampil: function(){
				var sesi = $('#sesi').val();
				$.ajax({
					url: "control3.php?hal=plotdos",
					method: "POST",
					data: {sesi: sesi},
					success: function(data){
						$("#dosen").html(data)
					}
				})
			}
			
		}
		app.show();
		$(document).on("change", "#sesi", app.tampil)
	})

</script>