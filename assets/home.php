
  <div class="col-md-10">

		  	<!-- form -->
		  	<div class="row">
		  		<div class="col-md-6">

		  			<div class="row">
		  				<div class="col-md-12">

		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title"></div>

						</div>
		  				<div class="panel-body" align="center">
		  				<img src="../images/logo-iti.png" style="width: 200px">
		  				</div>
		  			</div>
		  		</div>
		  	</div>

		  			<div class="row">
		  					<?php  
		  					$status = $_SESSION['status_log'];

		  					if ($status == 1) {
		  						echo "
		  						<div class='col-md-12 panel-sucess'>
	  					<div class='content-box-header  panel-heading'>
		  					<div class='panel-title'>Your Status Account</div>
							
							<div class='panel-options'>
								<p href='#' data-rel='reload'><i class='glyphicon glyphicon-info'></i></p>
							</div>
			  			</div>
			  			<div class='content-box-large box-with-header'>
			  					<p>Selamat Beraktifitas :)</p>
						</div>
	  				</div>
		  						";
		  					} else {
		  						echo "
		  						<div class='col-md-12 panel-warning'>
	  					<div class='content-box-header  panel-heading'>
		  					<div class='panel-title'>Your Status Account</div>
							
							<div class='panel-options'>
								<p href='#' data-rel='reload'><i class='glyphicon glyphicon-minus-sign'></i></p>
							</div>
			  			</div>
			  			<div class='content-box-large box-with-header'>
			  					<p>Your account has <b>blocked</b> by <b>admin</b></p>
						</div>
	  				</div>
		  						";
		  					}
		  					

		  					?>
		  					
		  	</div>
		  </div>

		  		<div class="col-md-6">
		  			
		  			<div class="row">

		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">Welcome <?php echo "$_SESSION[nama_dosen]"; ?></div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
					  		
								<br /><br />
							</div>
		  				</div>
		  			</div>

		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">Information</div>
									
									<div class="panel-options">
							<p data-rel="collapse"><i class="glyphicon glyphicon-info-sign"></i></p>
						</div>

				  			</div>
				  			<div class="content-box-large box-with-header">
				  				<p>
					  			
					  		</p>
							</div>
		  				</div>
		  			</div>

		  		</div>
		  	</div>
		  	<!-- form -->

		  		  
		  </div>
		</div>
    </div>