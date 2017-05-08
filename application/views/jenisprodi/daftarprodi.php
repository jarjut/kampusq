<div id="blue">
	    <div class="container">
			<div class="row">
					<h2>Daftar Jenis Prodi</h1>
				</div>
				
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /headerwrap -->
<div class="container mb">
	 	<div class="row">
		 	<div class="col-lg-10">
		 	<div class="spacing"></div>
				<?php foreach ($jenisprodi as $prodi){
				echo'<a href='.base_url().'jenisprodi/infoprodi/'.$prodi->IDPRODI.'>';
				echo'<h4>'.$prodi->NAMA_PRODI.'</h3></a>';
				 }?>
			</div>
	 	</div><! --/row -->
	 </div><! --/container -->
