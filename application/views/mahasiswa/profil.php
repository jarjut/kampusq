
	<!-- *****************************************************************************************************************
	 HEADERWRAP
	 ***************************************************************************************************************** -->
	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h1>Profil</h1>
				</div>
				<div class="col-lg-4 col-lg-offset-4">
					<div class="form-group">
      					<label>Nama:</label>
     				 	<h5><?php echo $nama ?></h5>
   					</div>
   					<div class="form-group">
      					<label for="pwd">Tempat Tanggal Lahir:</label>
     					<h5><?php echo $tempatlahir.', '.date("d F Y",strtotime($tgllahir)) ?></h5>
    				</div>
    				<div class="form-group">
      					<label for="pwd">NIM:</label>
     					<h5><?php echo $nim ?></h5>
    				</div>
    					<div class="form-group">
      					<label for="pwd">Perguruan Tinggi:</label>
     					<h5><?php echo $univ ?></h5>
    				</div>
    				<div class="form-group">
      					<label for="pwd">Program Studi:</label>
     					<h5><?php echo $prodi ?></h5>
    				</div>
    						
				</div>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /headerwrap -->
	
	 