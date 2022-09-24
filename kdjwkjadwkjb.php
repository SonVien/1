<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SANDI RPL</title>
</head>
<body>
    <header>
    <h4>DATA SISWA SMK 11</h4>
    </header>
    <h4>Menu</h4>
       <table border = "2" width = "95%" align = "center"> 
<table class="styled-table">
<thead>
        <tr>
  <th width="50px">No</th>
  <th>id kategori</th>
  <th>Tanggal</th>
  <th>Judul</th>
  <th>Isi</th>
  <th>Status</th>
  <th style="text-align: center;">Actions</th>
  <tbody>
</tr>
<thead>

    <?php 
      include "config/koneksi.php";
      $sql = "SELECT * FROM tb_siswa";
      $exe = mysqli_query($connect, $sql);
      while($data = mysqli_fetch_array($exe)){       
    ?>
    
    <tr>
    <tr class="active-row">
  <td><?= $data ['id']?></td>
  <td><?= $data ['nis']?></td>
  <td><?= $data ['nama']?></td>
  <td><?= $data ['alamat']?></td>
  <td><?= $data ['kelas']?></td>
  <td><?= $data ['jurusan']?></td>
  <td style="text-align: center;">
      <a onclick="return confirm('Apakah yakin data akan di hapus?')" 
       class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
  </td>
</tr>
   
    <?php } ?>
    </table>
</body>
</html>