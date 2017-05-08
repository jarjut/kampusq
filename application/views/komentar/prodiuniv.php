<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>Komentar</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

<div class="container mtb">
            <div class="row">
                <div class="col-lg-8">
                    <?php foreach ($testimoni as $testi){
                        echo '<h4>'.$testi->NAMA_MHS.'</h4>';
                        echo '<p><csmall>Posted: '.date('d M Y H:i:s',strtotime($testi->TIME)).'</csmall> | '; 
                        echo '<csmall2>'.$testi->NAMA_PRODI.' - '.$testi->NAMA_UNIV.'</csmall2></p>';
                        echo '<p>'.$testi->TESTIPROUNIV.'<p>';
                    }?>
                    <div class="hline"></div>
                    <div class="spacing"></div>

                    <?php foreach ($komentar as $komen){
                        if($komen->USER==1){
                            echo '<h4>'.$komen->NAMA_MHS.'</h4>';
                            echo '<p><csmall>Posted: '.date('d M Y H:i:s',strtotime($komen->TIME)).'</csmall> | '; 
                            echo '<csmall2>'.$komen->NAMA_PRODI.' - '.$komen->NAMA_UNIV.'</csmall2></p>';
                            echo '<p>'.$komen->KOMENPRODIUNIV.'<p>';
                            echo '<div class="spacing"></div>';
                        }else if($komen->USER==2){
                            echo '<h4>'.$komen->NAMA_SISWA.'</h4>';
                            echo '<p><csmall>Posted: '.date('d M Y H:i:s',strtotime($komen->TIME)).'</csmall> | '; 
                            echo '<csmall2>'.$komen->JURUSAN.' - '.$komen->ASALSEKOLAH.'</csmall2></p>';
                            echo '<p>'.$komen->KOMENPRODIUNIV.'<p>';
                            echo '<div class="spacing"></div>';
                        }
                    }?>

                    <h4>Beri Komentar</h4>
                    <?php echo form_open('komentar/prodiunivSubmit');?>
                        <input type="hidden" name="idtesti" value="<?php echo $idtesti;?>" />
                        <?php 
                            if($this->session->has_userdata('USERNAME_MHS')){
                                echo '<input type="hidden" name="user" value="1" />';
                                echo '<input type="hidden" name="username_mhs" value="'.$this->session->userdata('USERNAME_MHS').'" />';
                            }
                            else if($this->session->has_userdata('USERNAME_SISWA')){
                                echo '<input type="hidden" name="user" value="2" />';
                                echo '<input type="hidden" name="username_siswa" value="'.$this->session->userdata('USERNAME_SISWA').'" />';
                            }
                        ?>
                        <div class="form-group">
                            <textarea class="form-control" name="komentar" rows="3"></textarea>
                        </div>
                        <input class="btn btn-theme" type="submit" name="submit" value="Submit">
                    </form>
                </div><! --/col-lg-8 -->
            </div><! --/row -->
        </div><! --/container -->