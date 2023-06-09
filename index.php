<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-healty</title>
    <link rel="stylesheet" href="landing.css">
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo">
                  <img src="logo.png" alt="" srcset="">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Dokter</a></li>
                    <li><a href="#courses">Cek Kesehatan</a></li>
                    <li><a href="login.php" onclick="return confirmlogout() class="tbl-biru">Logout</a></li>
                </ul>
            </div>
            <div class="femili">
                <img src="femili.png" alt="" srcset="">= b
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <div class="kolom">
                <p class="deskripsi">Hi Guest. </p>
                <h3>Senang melihat kamu</h3>
                <p class="deskripsi1">Selamat datang di E-Healty,
                    <br> Kami siap melayani apa saja 
yang anda keluhkan untuk  mengurus kesehatan anak</br></p>
                <p><a href="selengkapnya.php" class="tbl-biru">Baca Selengkapnya</a></p>
            </div>
            <script>
                function confirmLogout() {
        var confirmation = confirm("Apakah Anda yakin ingin logout?");
        if (confirmation) {
            window.location.href = "login.php";
        } else {
            return false;
        }
    }
            </script>
        </section>
</body>

</html>