<?php 

require_once('koneksi.php');
$id = $_GET['id'];

// echo $id;

$query = "DELETE FROM daftar_sekolah WHERE id=$id";
mysqli_query($conn, $query);
echo "<script> alert('Berhasil hapus data siswa'); 
    window.location.replace('index.php');
    </script>";