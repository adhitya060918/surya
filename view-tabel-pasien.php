<!DOCTYPE html>
<html>
    <head>
        <title>panel admin</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<head>
  <title>Admin E-healty</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <div class="container">
      <h1>Admin E-healty</h1>
      <nav>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="view-tabel-pasien.php">Data Pasien</a></li>
          <li><a href="view-tabel-dokter.php">Data Dokter</a></li>
          <li><a href="#">Keluar</a></li>
        </ul>
      </nav>
    </div>
  </header>


<div class="clearfix"></div>
</div>

</div>
<?php
include "koneksi.php"; 

$pasien = tampil("SELECT anak.*, dokter.nama FROM anak INNER JOIN dokter ON anak.id_dokter = dokter.id_dokter ORDER BY anak.id_anak DESC");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dokter</title>
    <link rel="stylesheet" href="pas.css">
</head>
<body>
  <section class="data-pasien" >
  <h3> Data Pasien</h3>
    <button class="btn-primary"><a href="tambah-data-pasien.php">Tambah Data</a></button><br><br>
    <div class="table-wrapper">
    <table border="1" cellspacing="0" cellpading="3">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal lahir</th>
            <th>Nama Orang Tua</th>
            <th>Nama Dokter</th>
            <th>Aksi</th>
        </tr>
    <?php $no = 1; ?>

    <?php 
    foreach($pasien as $psn) : 
        $id = $psn["id_anak"];
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $psn["name"];?></td>
            <td><?= $psn["tanggal_lahir"];?></td>
            <td><?= $psn["nama_orang_tua"];?></td>
            <td><?= $psn['nama'];?></td>
            <td>
                <a href="delete-data-dokter.php?deleteid_dokter=<?=$id?>">Hapus</a> |
                <a href="ubah-data-dokter.php?ubahid_dokter=<?= $id?>">Ubah</a>
            </td>
        </tr>
    <?php endforeach;?>
    </table>
    </div>
  </section>
    
</body>
</html>
