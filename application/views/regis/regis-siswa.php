
<!-- *****************************************************************************************************************
   HEADERWRAP
   ***************************************************************************************************************** -->
  <div id="headerwrap">
      <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <h1>Registrasi Siswa</h1>
        </div>
        <div class="col-lg-4 col-lg-offset-4">
          <?php echo form_open('siswa/register');?>
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" class="form-control" name="username" placeholder="Masukkan username" required autofocus>
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
              <label for="asal">Asal Sekolah:</label>
              <input type="text" class="form-control" name="asal" placeholder="Masukkan Asal Sekolah" required autofocus>
            </div>
            <div class="form-group">
              <label for="jurusan">Jurusan:</label>
              <input type="text" class="form-control" name="jurusan" placeholder="Masukkan jurusan" required autofocus>
            </div>
            <input class="btn btn-theme" type="submit" name="submit" value="Submit">
        <?php echo form_close();?>
        </div>
      </div><!-- /row -->
      </div> <!-- /container -->
  </div><!-- /headerwrap -->
