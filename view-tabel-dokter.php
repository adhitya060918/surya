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
          <li><a href="#">Data Dokter</a></li>
          <li><a href="#">Keluar</a></li>
        </ul>
      </nav>
    </div>
  </header>


<div class="clearfix"></div>
</div>

</div>
<?php
require "koneksi.php"; 

$dokter = tampil("SELECT * FROM dokter order by id_dokter desc");

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
  <h3> Data Dokter</h3>
    <button class="btn-primary"><a href="tambah-data-dokter.php">Tambah Data</a></button><br><br>
    <div class="table-wrapper">
    <table border="1" cellspacing="0" cellpading="3">
        <tr>
            <th>No</th>
            <th>Jenis kelamin</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
    <?php $no = 1; ?>
    <?php foreach($dokter as $dktr) : 
        $id = $dktr["id_dokter"];
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $dktr["jenis_kelamin_dr"];?></td>
            <td><?= $dktr["alamat"];?></td>
            <td><?= $dktr["no_tlp"];?></td>
            <td><?= $dktr["nama"];?></td>
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
