<?php

include 'koneksi.php';
if (isset($_GET['deleteid_dokter'])) {
    $id = $_GET['deleteid_dokter'];
    $sql = "delete from `dokter` where id_dokter= $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:view-tabel-dokter.php');
    } else {
        die(mysqli_error($conn));
    }
}

?>