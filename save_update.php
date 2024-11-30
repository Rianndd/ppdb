<?php

require_once('koneksi.php');

if (isset($_POST['simpan'])) {
    $id             = $_POST['id'];
    $kode           = $_POST['kode'];
    $nama_sekolah   = $_POST['nama_sekolah'];
    $kelurahan      = $_POST['kelurahan'];
    $kecamatan      = $_POST['kecamatan'];
    $status_sekolah = $_POST['status_sekolah'];
    $ikut_ppdb      = $_POST['ikut_ppdb'];
    
    $query = "UPDATE daftar_sekolah SET 
        kode = '$kode', nama_sekolah = '$nama_sekolah', kecamatan = '$kecamatan', kelurahan = '$kelurahan', status_sekolah = '$status_sekolah', ikut_ppdb = '$ikut_ppdb' WHERE id= $id";
    
    mysqli_query($conn, $query);
    echo "<script> alert('Berhasil update data siswa'); 
    window.location.replace('index.php');
    </script>";
}

?>