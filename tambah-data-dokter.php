<?php
    require "koneksi.php";

    if(isset($_POST["tambah"])){
        if(tambahData($_POST) > 0 ){
            echo "Tambah data berhasil";
            echo '<script>window.location="view-tabel-dokter.php"</script>';
        }else{
            echo '<script>alert("Gagal menambahkan")</script>';
        }
    }


    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Data Dokter</title>
        <link rel="stylesheet" href="das.css">
    </head>
    <body>
        <h1>Tambah Data Dokter</h1>
        <form action="" method="post">
            <label for="Jenis kelamin">Jenis Kelamin : </label>
            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" autocomplete="off" placeholder="Masukan jenis kelamin ..." value="laki -laki">Laki-laki<br>
            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" autocomplete="off" placeholder="Masukan jenis kelamin ..." value="perempuan">Perempuan<br>
            <label for="alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat" autocomplete="off" placeholder="Masukan alamat ..."><br>
            <label for="telp">No Telp : </label>
            <input type="text" name="telp" id="telp" autocomplete="off" placeholder="Masukan No Telp ..."><br>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" autocomplete="off" placeholder="Masukan Nama ..."><br>
            <button type="submit" name="tambah"> Tambah Data</button>
        </form>
    </body>
    </html>