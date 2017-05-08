<div id="blue">
	    <div class="container">
			<div class="row">
					<h2>Daftar Perguruan Tinggi</h1>
				</div>
				
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /headerwrap -->
<div class="container mb">
	 	<div class="row">
		 	<div class="col-lg-10">
		 	<div class="spacing"></div>
				<?php foreach ($universitas as $univ){
				echo'<a href='.base_url().'universitas/infouniv/'.$univ->IDUNIV.'>';
				echo'<h4>'.$univ->NAMA_UNIV.'</h4></a>';
				 }?>
			</div>
	 	</div><! --/row -->
	 </div><! --/container -->
