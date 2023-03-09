<?php
    // Jika belum mengisi form maka tidak dapat pergi ke halaman hasil
    if(!isset($_POST['submit'])){
        header("location: index.php");
        exit;
    }


    // Menyimpan inputan user ke dalam variabel
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];


    // Menentukan nilai akhir
    $nilai_akhir = ($uts + $uas + $tugas) / 3;

    // Mengambil sekaligus menjalankan skrip yang ada di library fungsi
    require_once 'libfungsi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama</th>
      <th scope="col">Mata Kuliah</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">Tugas</th>
      <th scope="col">Nilai Akhir</th>
      <th scope="col">Grade</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td><?= $nama ?></td>
      <td><?= $matkul ?></td>
      <td><?= $uts ?></td>
      <td><?= $uas ?></td>
      <td><?= $tugas ?></td>
      <td><?= number_format($nilai_akhir, 2,',',',') ?></td>
      <td><?= grade($nilai_akhir) ?></td>
      <td><?= kelulusan($nilai_akhir) ?></td>
    </tr>
  </tbody>
</table>
</body>
</html>