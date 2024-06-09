<?php 
  session_start();

  $page = 'input'; 
  
  if(file_exists('data.txt')){
    $data = json_decode(file_get_contents('data.txt'), true);
  }else {
    $data = array();
  }
  if(!$data){
    $data = array();
  }

  if(!empty($_POST)){
    $input = array(
      "nama" => $_POST['nama'],
      "tgl_lhr" => $_POST['tgl_lhr'],
      "usia" => $_POST['usia'],
      "jk" => $_POST['jk'],
      "alamat" => $_POST['alamat']
    );

    array_push($data, $input);

    $file = fopen('data.txt', 'w');
    fwrite($file, json_encode($data));
    fclose($file);

    $ndata = $_POST['nama'];
    $_SESSION['notif'] = "Data $ndata berhasil di tambah";
    header("location: tampil.php");
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uji Kompetensi</title>
    <!-- link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header>
  <h2>Cities</h2>
</header>

<!-- header -->
<?php include "header.php" ?>

<div class="container">
  <form action="input.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="nama">Nama</label>
      </div>
      <div class="col-75">
        <input type="text" id="nama" name="nama" placeholder="Masukan nama anda">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="tgl_lahir">Tanggal Lahir</label>
      </div>
      <div class="col-75">
        <input type="date" id="tgl_lahir" name="tgl_lhr" placeholder="Masukan tanggal lahir anda">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="usia">Usia</label>
      </div>
      <div class="col-75">
        <input type="number" id="usia" name="usia" placeholder="Masukan usia anda">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="jk">Jenis Kelamin</label>
      </div>
      <div class="col-75">
        <select id="jk" name="jk">
          <option value="Laki-Laki">Laki-Laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="alamat">Alamat</label>
      </div>
      <div class="col-75">
        <textarea id="alamat" name="alamat" placeholder="Masukan alamat anda" style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

<!-- footer -->
<?php include "footer.php" ?>

<script src="assets/js/script.js"></script>
</body>
</html>