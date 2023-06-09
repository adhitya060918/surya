<?php
require 'koneksi.php';
 
$id = $_GET["ubahid_dokter"];
$query = tampil("SELECT * FROM dokter WHERE id_dokter ='$id'")[0];
//var_dump($query)

if(isset($_POST["ubah"])){
    if(ubahData($_POST, $id) >0 ){
        echo "Ubah data berhasil";
        echo '<script>window.location="view-tabel-dokter.php"</script>';
    }else{
        echo '<script>alert("Gagal mengubah")</script>';
    }
}


?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ubah Data Dokter</title>
        <link rel="stylesheet" href="vieew.css">
    </head>
    <body>
        <h1>Ubah Data Dokter</h1>
        <form action="" method="post">
            <label for="nama">Jenis Kelamin : </label>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" autocomplete="off" placeholder="Masukan Jenis kelamin ..." value="<?= $query["jenis_kelamin_dr"];?>"><br>
            <label for="alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat" autocomplete="off" placeholder="Masukan alamat ..." value="<?= $query["alamat"];?>"><br>
            <label for="telp">No Telp : </label>
            <input type="text" name="telp" id="telp" autocomplete="off" placeholder="Masukan No Telp ..." value="<?= $query["no_tlp"];?>"><br>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" autocomplete="off" placeholder="Masukan Nama ..." value="<?= $query["nama"];?>"><br>
            <button type="submit" name="ubah">Ubah Data</button>
        </form>
    </body>
    </html>