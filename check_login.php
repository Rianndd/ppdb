<?php

require_once('koneksi.php');

if (isset($_POST['login'])) {
    $username           = $_POST['username'];
    $password           = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";

    $data_login = mysqli_query($conn, $query);
    // var_dump($data_login);

    if ($data_login->num_rows == 1) {
        $data_user = $data_login->fetch_all(MYSQLI_ASSOC);
        // var_dump($data_user);
        $user = $data_user[0];
        // var_dump($user);

        $_SESSION["username"]   = $user['username'];
        $_SESSION["nama"]       = $user['nama'];

        echo "<script> alert('Berhasil Login!'); 
        window.location.replace('index.php');
        </script>";
    } else {
        echo "<script> alert('Username dan atau password salah!'); 
        window.location.replace('login.php');
        </script>";
    }
}
