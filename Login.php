<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adit</title>
    <link rel="stylesheet" href="login.css">
</head>

<body id="bg-login">
    <div class="box-login">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="user" placeholder="Username" autocomplete="off">
            <input type="password" name="password" placeholder="Password" autocomplete="off">
            <input type="submit" name="submit" value="Login" class="btn">
        </form>
        <?php
        include('koneksi.php');
            if(isset($_POST['submit'])){
                session_start();
                $user = $_POST['user'];
                $pass = $_POST['password'];
                $cek = mysqli_query($conn, "SELECT * FROM user WHERE username = '".$user."' AND password = '".$pass."' ");
                if (mysqli_num_rows($cek) > 0 ){
                    $d = mysqli_fetch_object($cek);
                    $_SESSION['status_login'] = true;
                    $_SESSION['a_global'] = $d;
                    $_SESSION['id'] = $d->id_admin;
                    echo '<script>window.location="index.php"</script>';
                }else{
                    echo '<script>alert("Username atau Password Anda Salah!")</script>';
                }
            }
        ?>
    </div>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>