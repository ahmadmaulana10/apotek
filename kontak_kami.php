<div class="row">
  <div class="col-md-offset-6 mx-auto">
    <div class="card text-center">
      <div class="form-group">
      <div class="text-center">
        <h5>Kontak Kami</h5><hr>
      </div>
        <form action="proses/p_kontak_kami.php" method="POST">
          <input type="text" name="nama" class="form-control" placeholder="Nama" required autocomplete="off"><br>
          <input type="email" name="email" class="form-control" placeholder="Email" required><br>
          <input type="text" name="nohp" class="form-control" placeholder="No. Handphone" required autocomplete="off"><br>
          <textarea name="saran" class="form-control" cols="30" rows="5" required placeholder="Pesan / Saran"></textarea><br>
          <input type="submit" class="btn btn-success" name="submit" value="Kirim" >
        </form>
      </div>
    </div>
  </div>
</div>



