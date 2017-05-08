
	<!-- Begin Slider -->
        <br><br><br>
        <div class="slider">
            <ul> 
                <li> 
                    <img alt="Images 1" src="<?php echo base_url(); ?>assets/img/1.jpg" />
                    <div> 
                        <h3>Selamat Datang di KampusQ</h3> 
                        <p></p> 
                    </div>
                </li> 

                <li> 
                    <img alt="Images 2" src="<?php echo base_url(); ?>assets/img/2.jpg" />
                    <div> 
                        <h3>Portal Informasi Perguruan Tinggi di Indonesia</h3> 
                        <p></p> 
                    </div> 
                </li> 

                <li> 
                    <img alt="Images 3" src="<?php echo base_url(); ?>assets/img/3.png" />
                    <div> 
                        <h3>Hopefully</h3> 
                        <p></p> 
                    </div> 
                </li>  
            </ul> 
        </div>
        <!-- // End Slider -->

	<!-- *****************************************************************************************************************
	 SERVICE LOGOS
	 ***************************************************************************************************************** -->
	 <div id="service">
	 	<div class="container">
		 	<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
					<h1>Selamat Datang</h1>
					<h1><?php echo $nama ?></h1>
				</div>
			</div><!-- /row -->
			<div class="spacing"></div>
 			<div class="row centered">
 				<div class="col-md-4">
 					<i class="fa fa-graduation-cap" aria-hidden="true"></i>
 					<h4><?php echo $univ ?></h4>
 					<p>Kenalkan Universitasmu dan bagi pengalamanmu selama berkuliah di <?php echo $univ ?></p>
 					<p><br/><br/><a href="<?php echo base_url('universitas/infouniv/'.$iduniv)?>" class="btn btn-theme">More Info</a></p>
 				</div>
 				<div class="col-md-4">
 					<i class="fa fa-graduation-cap" aria-hidden="true"></i>
 					<h4><?php echo $prodi ?></h4>
 					<p>Mau tau lebih dalam tentang program studi pilihanmu?? Cerita dari mahasiswa maupun alumni Prospek kerja, Seputar mata kuliah, dan lain-lain</p>
 					<p><br/><a href="<?php echo base_url('jenisprodi/infoprodi/'.$idprodi)?>" class="btn btn-theme">More Info</a></p>
 				</div>
 				<div class="col-md-4">
 					<i class="fa fa-graduation-cap" aria-hidden="true"></i>
 					<h4><?php echo $prodi ?> <br/n> di <?php echo $univ ?></h4>
 					<p>Apa sih yang spesial dari <?php echo $prodi ?> di <?php echo $univ ?>?? Ceritakan pengalanmu selama berkuliah disana</p>
 					<p><br/><a href="<?php echo base_url('universitas/infoprodiuniv/'.$iduniv.'/'.$idprodi)?>" class="btn btn-theme">More Info</a></p>
 				</div>		 				
	 		</div>
	 	</div><! --/container -->
	 </div><! --/service -->
	
	 