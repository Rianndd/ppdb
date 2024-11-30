<?php
require_once('koneksi.php');

session_destroy();

echo "<script>
    alert('Logout berhasil!');
    window.location.replace('login.php');
    </script>";