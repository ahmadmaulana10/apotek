<?php
if(isset($_GET["daftar"])){
    $daftar = $_GET["daftar"];
    if($daftar == "true"){
?>
<div class="row">
    <div class="col-lg-offset-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <form action="" method="POST">
                        <input type="text" name="pengguna" class="form-control" placeholder="Nama Pengguna" autocomplete="off"><br>
                        <input type="email" name="email" class="form-control" placeholder="Email" autocomplete="off"><br>
                        <input type="password" name="pass1" class="form-control" placeholder="Kata Sandi" autocomplete="off"><br>
                        <input type="password" name="pass2" class="form-control" placeholder="Konfirmasi Kata Sandi" autocomplete="off"><br>
                        <label class="form-check-label mb-2">
                            <input type="checkbox">
                            Tampilkan Kata Sandi
                        </label>
                        <input type="submit" class="btn btn-success" name="submit" value="Kirim">
                    </form>
                </div>
            </div>
            <div class="card-footer text-center">
                <p>Sudah punya akun? Silahkan <a href="index.php?p=masuk">Masuk</a></p>
            </div>
        </div>
    </div>
</div>
<?php
    }elseif($daftar == "false"){
?>
<div class="row">
    <div class="col-lg-offset-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <form action="" method="POST">
                        <input type="email" name="email" class="form-control" placeholder="Email" autocomplete="off"><br>
                        <input type="password" name="pass1" class="form-control" placeholder="Kata Sandi Baru" autocomplete="off"><br>
                        <input type="password" name="pass2" class="form-control" placeholder="Konfirmasi Kata Sandi" autocomplete="off"><br>
                        <label class="form-check-label mb-2">
                            <input type="checkbox">
                            Tampilkan Kata Sandi
                        </label>
                        <input type="submit" class="btn btn-success" name="submit" value="Kirim">
                    </form>
                </div>
            </div>
            <div class="card-footer text-center">
                <p><a href="index.php?p=masuk">Kembali</a></p>
            </div>
        </div>
    </div>
</div>
<?php
    }
}else{
?>
<div class="row">
    <div class="col-lg-offset-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <form action="" method="POST">
                        <input type="text" name="pengguna" class="form-control" placeholder="Nama Pengguna" autocomplete="off"><br>
                        <input type="password" name="pass" class="form-control" placeholder="Kata Sandi" autocomplete="off"><br>
                        <label class="form-check-label mb-2">
                            <input type="checkbox">
                            Tampilkan Kata Sandi
                        </label>
                        <input type="submit" class="btn btn-success" name="submit" value="Kirim">
                    </form>
                </div>
                <h6 class="text-center"><a href="index.php?p=masuk&daftar=false" class="alert-link">Lupa Kata Sandi</a></h6>
            </div>
            <div class="card-footer text-center">
                <p>Belum punya akun? Silahkan <a href="index.php?p=masuk&daftar=true">Daftar</a></p>
            </div>
        </div>
    </div>
</div>
<?php
}
?>