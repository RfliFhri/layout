<?php 
  $page = 'sorting'; 

  $nama = array('Dewasa', 'Toni', 'Robert', 'Achmad', 'AARON');
sort($nama);




if(file_exists('data.txt')){

  $ndata = json_decode(file_get_contents('data.txt'), true);
  if(isset($ndata)){
    asort($ndata);
    }

  $udata = json_decode(file_get_contents('data.txt'), true);
  if(isset($udata)){
    $arr = array();
    foreach ($udata as $key => $row){
      $arr[$key] = $row['usia'];
    }
    array_multisort($arr, SORT_DESC, $udata);
  }
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

<h2>Sorting Nama</h2>
<p><?php print_r($nama); echo "<br><br>"; ?></p>
<p><?php var_dump($nama); echo "<br><br>"; ?></p>

<div style="overflow-x:auto;">
  <h2>table nama asc</h2>
  <table>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>Usia</th>
      <th>Jenis Kelamin</th>
      <th>Alamat</th>
    </tr>
    <?php $no = 1; if(isset($ndata)){ foreach($ndata as $row) { ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $row['nama'] ?></td>
      <td><?= $row['tgl_lhr'] ?></td>
      <td><?= $row['usia'] ?></td>
      <td><?= $row['jk'] ?></td>
      <td><?= $row['alamat'] ?></td>
    </tr>
    <?php }} ?>
  </table>
</div>

<div style="overflow-x:auto;">
  <h2>table usia desc</h2>
  <table>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>Usia</th>
      <th>Jenis Kelamin</th>
      <th>Alamat</th>
    </tr>
    <?php $no = 1; if(isset($udata)){ foreach($udata as $row) { ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $row['nama'] ?></td>
      <td><?= $row['tgl_lhr'] ?></td>
      <td><?= $row['usia'] ?></td>
      <td><?= $row['jk'] ?></td>
      <td><?= $row['alamat'] ?></td>
    </tr>
    <?php }} ?>
  </table>
</div>

<!-- footer -->
<?php include "footer.php" ?>

<script src="assets/js/script.js"></script>
</body>
</html>