
	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3><?php echo $nama?></h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<!-- *****************************************************************************************************************
	 TITLE & CONTENT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
		 	<div class="col-lg-6 ">
		 		<h4>Info Umum</h4>
		 		<div class="hline"></div>
		 		<p><?php echo $info?>.</p>
		 		
		 	</div>
		 	
		 	<div class="col-lg-4 col-lg-offset-1">
		 		<h4>Details</h4>

		 		<div class="hline"></div>
		 		<p><b>Nama:</b> <?php echo $nama?></p>
		 		<p><b>Alamat:</b> <?php echo $alamat?></p>
		 		<p><b>Akreditasi:</b> <?php echo $akreditas?></p>
		 		<p><b>Website:</b> <a href="<?php echo "http://".$website ?>"> <?php echo $website?></a></p>
		 		<a href="<?php echo base_url()?>universitas/prodiuniv/<?php echo $iduniv?>"><button type="button" class="btn btn-theme">Daftar Program Studi</button></a>
		 	</div>
		 	
	 	</div><! --/row -->

	 	<div class ='row'>
	 		<div class="col-lg-11">
		 		<h4>Apa Kata Mereka?</h4>
	 			<div class="hline"></div>
	 			<?php
					if($this->session->userdata('UNIV')==$iduniv){
						echo '<a href="'.base_url('testimoni/universitas').'">';
						echo '<center><button type="button" class="btn btn-theme">Beri Testimoni</button></center></a>';
						echo '<div class="hline"></div>';
						echo '<br>';
					}
				?>
			 	<?php foreach ($testimoni as $testi){
					echo '<h4>'.$testi->NAMA_MHS.'</h4>';
					echo '<p><csmall>Posted: '.date('d M Y H:i:s',strtotime($testi->TIME)).'</csmall> | '; 
					echo '<csmall2>'.$testi->NAMA_PRODI.' - '.$testi->NAMA_UNIV.'</csmall2></p>';
					echo '<p>'.$testi->TESTIUNIV.'<p>';
					echo '<p><a href="'.base_url('komentar/universitas/'.$testi->IDTESTI).'">[Komentar]</a></p>';
					echo '<div class="spacing"></div>';
				 }?>
	 		</div>
	 	</div>
	 </div><! --/container -->
	 