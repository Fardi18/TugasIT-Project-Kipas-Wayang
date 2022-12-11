
		  <div class="col-md-10">

		  			

	  					<!-- table -->
		  	<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Data Jadwal Sidang Akhir</div>
						
				
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
								<th>Pembimbing 1</th>
								<th>Pembimbing 2</th>
								<th>Penguji 1</th>
								<th>Penguji 2</th>
								<th>Jam</th>
							
								<th>Hari</th>
								<th>Ruang</th>
							</tr>
						</thead>
						<tbody>
							  <?php
							  // error_reporting(0);
						      
							    $nds = $_SESSION['nama_dosen'];
							  	$sp=  "SELECT 


Concat_WS('-', concat('(', c.kode_jam), concat( (SELECT kode_jam FROM jam WHERE kode_jam = c.kode_jam) + (g.jml_sks - 1),')')) , 

Concat_WS('-', MID(c.range_jam,1,5),(SELECT MID(range_jam,7,5) FROM jam WHERE kode_jam = c.kode_jam + (g.jml_sks - 1))) as jam_kuliah, 
b.mhs,
b.dosen,
b.dosen2,
b.dosen3,
b.dosen4,
g.nim,
g.nama,
g.judul_penelitian,

g.jml_sks as sks,
d.nama_hari as hari,
e.nama_ruangan as ruang

-- nama kelas,penelitian,jamkuliah,sks,hari,ruangan
FROM jadwal_akhir as a,
     plot_akhir as b,
     jam as c,
     hari as d,
     ruang_belajar as e,
    
     penelitian as g 

WHERE 
	  a.kode_akhir = b.kode_akhir AND 
      a.jam = c.kode_jam AND
      a.hari = d.kode_hari AND
      a.ruangan = e.kode_ruangan AND    
      b.penelitian = g.kode_penelitian AND
      (b.mhs = '$nds' OR b.dosen = '$nds' OR b.dosen2 = '$nds' OR b.dosen3 = '$nds' OR b.dosen4 = '$nds')

      
GROUP BY a.kode_akhir ASC";
							 
							  
                        $no=1;
                        $exec = $db_con->query($sp) or die (mysql_error());
                        while($r=$exec->fetch(PDO::FETCH_ASSOC)){
								
											?>
										<tr class="odd gradeX">
										<td><?php echo $no ?></td>
										
										<td><?php echo $r['nim'] ?></td>
										<td><?php echo $r['nama'] ?></td>
										<td><?php echo $r['judul_penelitian'] ?></td>
										<td><?php echo $r['dosen'] ?></td>
										<td><?php echo $r['dosen2'] ?></td>
										<td><?php echo $r['dosen3'] ?></td>
										<td><?php echo $r['dosen4'] ?></td>
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
					url: "control3.php?hal=jadwal_cari",
					method: "POST",
					data: {sesi: sesi},
					success: function(data){
						$("#kode_jadwal").html(data)
					}
				})
			}

	
			
		}
		app.show();
		$(document).on("change", "#sesi", app.tampil)
	})

</script>