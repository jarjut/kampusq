<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>Testimoni <?php echo $univ ?></h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

<div class="container mtb">
            <div class="row">
                <div class="col-lg-8">
                    <h4>Apa sih pendapatmu tentang <?php echo $univ ?>??</h4>
                    <div class="hline"></div>
                    <div class="spacing"></div>
                    <?php echo form_open('testimoni/universitasSubmit');?>
                        <div class="form-group">
                            <textarea class="form-control" name="testimoni" rows="3"></textarea>
                        </div>
                        <input class="btn btn-theme" type="submit" name="submit" value="Submit">
                    </form>
                </div><! --/col-lg-8 -->
            </div><! --/row -->
        </div><! --/container -->