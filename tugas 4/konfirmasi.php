<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>Konfirmasi Pendaftaran Mahasiswa Baru Online</title>

  <style>

  </style>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary border border-2 border-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="logo.png" alt="" width="50%" height="50%">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item border border-2 border-light mx-1">
            <a class="nav-link text-light" href="#">HOME</a>
          </li>
          <li class="nav-item border border-2 border-light mx-1">
            <a class="nav-link text-light" href="#">VISI MISI</a>
          </li>
          <li class="nav-item border border-2 border-light mx-1">
            <a class="nav-link text-light" href="#">AKADEMIK</a>
          </li>
          <li class="nav-item dropdown border border-2 border-light mx-1">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              PROGRAM STUDI
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-dark" href="#">Akuntansi</a></li>
              <li><a class="dropdown-item text-dark" href="#">Manajemen</a></li>
              <li><a class="dropdown-item text-dark" href="#">Psikologi</a></li>
              <li><a class="dropdown-item text-dark" href="#">Ilmu Komunikasi</a></li>
              <li><a class="dropdown-item text-dark" href="#">Informatika</a></li>
              <li><a class="dropdown-item text-dark" href="#">Sistem Informasi</a></li>
              <li><a class="dropdown-item text-dark" href="#">Desain Komunikasi Visual</a></li>
              <li><a class="dropdown-item text-dark" href="#">Desain Produk</a></li>
              <li><a class="dropdown-item text-dark" href="#">Teknik Sipil</a></li>
              <li><a class="dropdown-item text-dark" href="#">Arsitektur</a></li>
            </ul>
          </li>
          <li class="nav-item border border-2 border-light mx-1">
            <a class="nav-link text-light active" href="pmb.php">PENDAFTARAN</a>
          </li>
          
        </ul>
        <form class="d-flex">
          <input class="form-control border-2 border-light me-2" type="search" placeholder="" aria-label="Search">
          <button class="but but-outline-light border border-2 border-light" type="submit">CARI</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- FORM PENDAFTARAN -->
  <div class="container text-center border">
      <h4 class="text-center mt-4 mb-3">Konfirmasi Pendaftaran Online</h4>
      <br>
   <?php
    $jalur = @$_POST["jalurpmb"];
    $namamhsw = @$_POST["namamhsw"];
    $ttl = @$_POST["ttl"];
    $jeniskelamin = @$_POST["jeniskelamin"];
    $agamaa = @$_POST["agama"];
    $status = @$_POST["status"];
    $alamat = @$_POST["alamat"];
    $kodepos = @$_POST["kodepos"];
    $nohp = @$_POST["nohp"];
    $email = @$_POST["email"];
    $sekolah = @$_POST["sekolah"];
    $lulus = @$_POST["lulus"];
    $ayah = @$_POST["ayah"];
    $ibu = @$_POST["ibu"];
    $alamatortu = @$_POST["alamatortu"];
    $hportu = @$_POST["hportu"];
    $pendAyah = @$_POST["pendAyah"];
    $pendIbu = @$_POST["pendIbu"];
    $statAyah = @$_POST["statAyah"];
    $statIbu = @$_POST["statIbu"];
    $prodi1 = @$_POST["prodi1"];
    $prodi2 = @$_POST["prodi2"];
    $info = @$_POST["info"];
    $gelombang = @$_POST["gelombang"];

    echo "Jalur : " .$jalur."<br>";
    echo "Nama Mahasiswa Baru : ".$namamhsw."<br>";
    echo "Tempat Tanggal Lahir : ".$ttl."<br>";
    echo "Jenis Kelamin : ".$jeniskelamin."<br>";
    echo "Alamat : ".$alamat."<br>";
    echo "Kode Pos : ".$kodepos."<br>";
    echo "No Handphone : ".$nohp."<br>";
    echo "Email : ".$email."<br>";
    echo "Asal Sekolah : ".$sekolah."<br>";
    echo "Nama Ayah : ".$ayah."<br>";
    echo "Nama Ibu : ".$ibu."<br>";
    echo "Alamat Orang Tua : ".$alamatortu."<br>";
    echo "No Handphone Orang Tua : ".$hportu."<br>";
    echo "Status Ayah : ".$statAyah."<br>";
    echo "Status Ibu : ".$statIbu."<br>";
    echo "Program Studi 1: ".$prodi1."<br>";
    echo "Program Studi 2: ".$prodi2."<br>";
    echo "Info : ".$info."<br>";
    echo "Gelombang : ".$gelombang."<br>";
    echo "No Handphone Orang Tua : ".$hportu."<br>";
    echo "Tahun Lulus : ".$lulus."<br>";

  ?>
  </div>
  <br><br>

  <!-- FOOTER -->
  <footer class="text-center text-lg-start bg-primary text-muted">
    <div class="text-center p-4 text-light">
      Tugas 4 - pemrograman-web
      <a class="text-reset fw-bold" href="https://github.com/rhenaldomuhammad/pemrograman-web">Rhenaldo</a>
    </div>
  </footer>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>