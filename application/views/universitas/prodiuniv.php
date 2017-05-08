
	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>Daftar Program Studi</h3>
				<h3><?php echo $nama?></h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<div class="container mb">
	 	<div class="row">
		 	<div class="col-lg-6">
		 	<div class="spacing"></div>
				<?php foreach ($prodiuniv as $prodi){
				echo'<a href='.base_url().'universitas/infoprodiuniv/'.$iduniv.'/'.$prodi->IDPRODI.'>';
				echo'<h4>'.$prodi->NAMA_PRODI.'</h4></a>';
				 }?>
			</div>
			<div class="col-lg-2">
			<div class="spacing"></div>
				<?php foreach ($prodiuniv as $prodi){
				echo'<h4>'.$prodi->AKREDITASI_PRODI.'</h4>';
				 }?>
			</div>
	 	</div><! --/row -->
	 </div><! --/container -->