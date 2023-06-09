<?php
include("koneksi.php");

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Dokter</title>
    <link rel="stylesheet" href="tam.css">
</head>
<body>
  <section class="tambah-data">
    <h3>Tambah Data Dokter</h3>
    <form action="" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br><br>
        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir"><br><br>
        <label for="nama_orang_tua">Nama Orang Tua:</label><br>
        <input type="text" id="nama_orang_tua" name="nama_orang_tua"><br><br>
        <label for="id_dokter">Dokter</label><br><br>
        <select name="dokter">
            <option value="">pilih</option>
            <?php
            $dokter = mysqli_query($conn, "SELECT * FROM dokter ORDER BY id_dokter DESC");
            while($d = mysqli_fetch_array($dokter)){
                ?>
                <option value="<?php echo $d['id_dokter'] ?>">
                    <?php echo $d['nama'] ?>
                </option>
            <?php } ?>
        </select>
        <button type="submit" class="btn-primary">Simpan</button>
    </form>
  </section>
</body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $nama_orang_tua = $_POST["nama_orang_tua"];
    $nama_dokter = $_POST['dokter'];


    $query = "INSERT INTO anak (name, tanggal_lahir, nama_orang_tua, id_dokter) VALUES ('$nama', '$tanggal_lahir', '$nama_orang_tua', '$nama_dokter')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        
        header("Location: view-tabel-pasien.php");
        exit();
    } else {
       
        echo "Gagal menyimpan data pasien.";
    }
}
?>

</html>
