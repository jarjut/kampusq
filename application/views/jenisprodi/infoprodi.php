<div id="blue">
	    <div class="container">
			<div class="row">
				<h3><?php echo $info ?></h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

<div class="container mb">
	 	<div class="row">
	 		<div class="col-lg-8">
	 			<div class="spacing"></div>
		 		<h4>Apa Kata Mereka?</h4>
	 			<div class="hline"></div>
	 			<?php
					if($this->session->userdata('PRODI')==$id){
						echo '<a href="'.base_url('testimoni/prodi').'">';
						echo '<center><button type="button" class="btn btn-theme">Beri Testimoni</button></center></a>';
						echo '<div class="hline"></div>';
						echo '<br>';
					}
				?>
		 		<?php foreach ($testimoni as $testi){
					echo '<h4>'.$testi->NAMA_MHS.'</h4>';
					echo '<p><csmall>Posted: '.date('d M Y H:i:s',strtotime($testi->TIME)).'</csmall> | '; 
					echo '<csmall2>'.$testi->NAMA_PRODI.' - '.$testi->NAMA_UNIV.'</csmall2></p>';
					echo '<p>'.$testi->TESTIPRODI.'<p>';
					echo '<p><a href="'.base_url('komentar/prodi/'.$testi->IDTESTI).'">[Komentar]</a></p>';
					echo '<div class="spacing"></div>';
				 }?>
			 </div>
		 	<div class="col-lg-4">
			 	<div class="spacing"></div>
		 		<h4><?php echo $info ?> ada dimana aja?</h4>
		 		<div class="hline"></div>
		 		<?php foreach ($universitas as $univ){
		 			echo '<a href='.base_url().'universitas/infouniv/'.$univ->IDUNIV.'>';
					echo '<h4>'.$univ->NAMA_UNIV.'</h4></a>';
				 }?>
		 		<br>
		 	</div>
	 	</div><! --/row -->
	 </div><! --/container -->