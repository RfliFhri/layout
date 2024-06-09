<?php 
session_start();
  $page = 'tampil'; 

  if(file_exists('data.txt')){
    $data = json_decode(file_get_contents('data.txt'), true);
  }else {
    $data = array();
  }
  if(!$data){
    $data = array();
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

<!-- notif -->
<?php if(isset($_SESSION['notif'])) {?>
<div class="alert">
  <span class="closebtn">&times;</span>  
  <strong>Success!</strong> <?php echo $_SESSION['notif']; unset($_SESSION['notif']); ?>
</div>
<?php } ?>

<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>Usia</th>
      <th>Jenis Kelamin</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </tr>
    <?php $no = 1; foreach($data as $key => $row) { ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $row['nama'] ?></td>
      <td><?= $row['tgl_lhr'] ?></td>
      <td><?= $row['usia'] ?></td>
      <td><?= $row['jk'] ?></td>
      <td><?= $row['alamat'] ?></td>
      <td>
        <a href="edit.php?index=<?= $key ?>">edit</a>
        <a href="hapus.php?index=<?= $key ?>" onclick="return confirm(' Apakah anda yakin ingin menghapus data ini') ">hapus</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</div>

<!-- footer -->
<?php include "footer.php" ?>

<script src="assets/js/script.js"></script>
</body>
</html>