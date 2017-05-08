
<!-- *****************************************************************************************************************
   HEADERWRAP
   ***************************************************************************************************************** -->
  <div id="headerwrap">
      <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <h1>Registrasi Mahasiswa</h1>
        </div>
        <div class="col-lg-4 col-lg-offset-4">
        <?php echo form_open('mahasiswa/register');?>
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required autofocus>
            </div>
            <div class="form-group">
              <label for="pass">Password:</label>
              <input type="password" class="form-control" name="pass" placeholder="Masukkan password" required autofocus>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" name="email" placeholder="Masukkan email" required autofocus>
            </div>
            <div class="form-group">
              <label for="name">Nama:</label>
              <input type="text" class="form-control" name="nama" placeholder="Masukkan nama" required autofocus>
            </div>
            <div class="form-group">
              <label for="tmptlhr">Tempat Lahir:</label>
              <input type="text" class="form-control" name="tmptlhr" placeholder="Masukkan Tempat Lahir" required autofocus>
            </div>
            <div class="form-group">
              <label for="tgllhr">Tangga Lahir:</label>
              <input type="date" class="form-control" name="tgllhr" required autofocus>
            </div>
            <div class="form-group">
              <label for="nim">Nomor Induk Mahasiswa:</label>
              <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM" required autofocus>
            </div>
            <div class="form-group">
              <label for="pt">Perguruan Tinggi:</label>
              <select class="form-control" name="pt">
              <?php 
              foreach($universitas as $univ)
              { 
              echo '<option value="'.$univ->IDUNIV.'">'.$univ->NAMA_UNIV.'</option>';
              }
              ?>
              </select>
            </div>
            <div class="form-group">
              <label for="prodi">Program Studi:</label>
              <select class="form-control" name="prodi">
              <?php 
              foreach($jenisprodi as $prodi)
              { 
              echo '<option value="'.$prodi->IDPRODI.'">'.$prodi->NAMA_PRODI.'</option>';
              }
              ?>
              </select>
            </div>
            <input class="btn btn-theme" type="submit" name="submit" value="Submit">
        <?php echo form_close();?>

        </div>
      </div><!-- /row -->
      </div> <!-- /container -->
  </div><!-- /headerwrap -->