<div id="blue">
	    <div class="container">
			<div class="row">
				<h3><?php echo $prodi ?></h3>
				<h3><?php echo $univ ?></h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

<div class="container mb">
	 	<div class="row">
		 	<div class="col-lg-10">
		 		<h4>Apa Kata Mereka?</h4>
	 			<div class="hline"></div>
	 			<?php
					if($this->session->userdata('PRODI')==$idprodi&&$this->session->userdata('UNIV')==$iduniv){
						echo '<a href="'.base_url('testimoni/prodiuniv').'">';
						echo '<center><button type="button" class="btn btn-theme">Beri Testimoni</button></center></a>';
						echo '<div class="hline"></div>';
						echo '<br>';
					}
				?>
				<?php foreach ($testimoni as $testi){
					echo '<h4>'.$testi->NAMA_MHS.'</h4>';
					echo '<p><csmall>Posted: '.date('d M Y H:i:s',strtotime($testi->TIME)).'</csmall> | '; 
					echo '<csmall2>'.$testi->NAMA_PRODI.' - '.$testi->NAMA_UNIV.'</csmall2></p>';
					echo '<p>'.$testi->TESTIPROUNIV.'<p>';
					echo '<p><a href="'.base_url('komentar/prodiuniv/'.$testi->IDTESTI).'">[Komentar]</a></p>';
					echo '<div class="spacing"></div>';
				 }?>
		 	</div>
	 	</div><! --/row -->
	 </div><! --/container -->