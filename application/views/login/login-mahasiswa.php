
	<!-- *****************************************************************************************************************
	 HEADERWRAP
	 ***************************************************************************************************************** -->
	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h1>Login Mahasiswa</h1>
				</div>
				<div class="col-lg-4 col-lg-offset-4">
				<?php 
					if($this->session->has_userdata('loginfail')){
						echo '<div class="form-group">';
	      				echo '	<label for="username">Username atau Password anda Salah</label>';
	   					echo '</div>';
   					}
   				?>
				<?php echo form_open('mahasiswa/login');?>
					<div class="form-group">
      					<label for="username">Username:</label>
     				 	<input type="test" class="form-control" id="username" name="username" placeholder="Enter username" required autofocus>
   					</div>
   					<!-- <script>
					document.getElementById('username').setCustomValidity('Harap mengisi kolom ini');
					</script> -->
   					<div class="form-group">
      					<label for="pwd">Password:</label>
     					<input type="password" class="form-control" name="pwd" placeholder="Enter password" required autofocus>
    				</div>
    				<input class="btn btn-theme" type="submit" id="submit" value="Submit">
    				<p>Belum punya account? <a href="<?php echo base_url()?>registrasi/mahasiswa">Klik disini</a></p>
    			<?php echo form_close();?>	
				</div>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /headerwrap -->
	
	 