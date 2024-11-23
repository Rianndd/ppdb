<?php

require_once('koneksi.php');

if (isset($_POST['simpan'])) {
    $kode           = $_POST['kode'];
    $nama_sekolah   = $_POST['nama_sekolah'];
    $kelurahan      = $_POST['kelurahan'];
    $kecamatan      = $_POST['kecamatan'];
    $status_sekolah = $_POST['status_sekolah'];
    $ikut_ppdb      = $_POST['ikut_ppdb'];
    $query = "INSERT INTO 
        daftar_sekolah (kode, nama_sekolah, kecamatan, kelurahan, status_sekolah, ikut_ppdb) 
        VALUES ('$kode', '$nama_sekolah', '$kecamatan', '$kelurahan', '$status_sekolah', '$ikut_ppdb')";
    mysqli_query($conn, $query);
    echo "<script> alert('Berhasil input data siswa'); 
    window.location.replace('index.php');
    </script>";
}

?>