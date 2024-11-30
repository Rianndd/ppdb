<?php

require_once('koneksi.php');
$id = $_GET['id'];

$sql = "SELECT * FROM daftar_sekolah WHERE id=$id";
$result = $conn->query($sql);

$daftar_sekolah = $result->fetch_all(MYSQLI_ASSOC);

// var_dump($daftar_sekolah);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title" id="exampleModalLabel">Update Data</h5>
            </div>
            <form action="save_update.php" method="post">
                <?php
                foreach ($daftar_sekolah as $key => $row) {
                ?>
                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Kode</label>
                            <input type="number" name="kode" class="form-control" value="<?= $row['kode']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Sekolah</label>
                            <input type="text" name="nama_sekolah" class="form-control" value="<?= $row['nama_sekolah']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kecamatan</label>
                            <input type="text" name="kecamatan" class="form-control" value="<?= $row['kecamatan']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kelurahan</label>
                            <input type="text" name="kelurahan" class="form-control" value="<?= $row['kelurahan']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status Sekolah</label>
                            <select name="status_sekolah" class="form-control">
                                <option value="">Pilih Status</option>
                                <option value="Negeri" <?php if ($row['status_sekolah'] == 'Negeri') { echo 'selected'; } ?> >Negeri</option>
                                <option value="Swasta" <?php if ($row['status_sekolah'] == 'Swasta') { echo 'selected'; } ?> >Swasta</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ikut PPDB</label>
                            <select name="ikut_ppdb" class="form-control">
                                <option value="">Pilih Status</option>
                                <option value="Iya" <?php if ($row['ikut_ppdb'] == 'Iya') { echo 'selected'; } ?> >Iya</option>
                                <option value="Tidak" <?php if ($row['ikut_ppdb'] == 'Tidak') { echo 'selected'; } ?> >Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    </div>
                <?php } ?>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>