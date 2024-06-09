<?php

session_start();

$data = json_decode(file_get_contents('data.txt'), true);

if(isset($_GET['index'])){
    $id = $_GET['index'];
    if(isset($data[$id])){
        unset($data[$id]);
        $file = fopen('data.txt', 'w');
        fwrite($file, json_encode(array_values($data)));
        fclose($file);
    }
  }

    $_SESSION['notif'] = "Data berhasil di hapus";

  header('location: tampil.php');

?>