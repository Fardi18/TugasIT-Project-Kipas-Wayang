 <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Matkul</label>
								    <div class="col-sm-10">
								      <select name="matkul" class="form-control">
										    <?php 

						$sp1=  "SELECT * FROM matakuliah;";
                        				//echo $sp;
                        $no=1;
                        $exec1 = $db_con->query($sp1) or die (mysql_error());
                        while($h=$exec1->fetch(PDO::FETCH_ASSOC)){
                        	echo "<option value='".$h['kode_matkul']."'>".$h['nama_matkul']." - ".$h['jml_sks']." SKS</option>";
                        }
                        ?>
										  </select>
								    </div>
								  </div>
							

								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Dosen</label>
								    <div class="col-sm-10">
								      <select name="matkul" class="form-control">
										    <?php 

						$sp1=  "SELECT * FROM dosen;";
                        				//echo $sp;
                        $no=1;
                        $exec1 = $db_con->query($sp1) or die (mysql_error());
                        while($h=$exec1->fetch(PDO::FETCH_ASSOC)){
                        	echo "<option value='".$h['id-dosen']."'>".$h['nama_dosen']."</option>";
                        }
                        ?>
										  </select>
								    </div>
								  </div>

								    <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">SESI</label>
								    <div class="col-sm-10">
								      <select class="form-control">
										    <option>Reg Pagi</option>
										    <option>Reg Malam</option>
										    <option>WeekEnd</option>
										  </select>
								    </div>
								  </div>
							
								<!--  -->
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      
								      <input type="submit" class="btn btn-primary" value="SIMPAN">
								    </div>
								  </div>
