<?php 
include 'class/Siswa.php';
$siswa = new Siswa();
$dataSiswa = $siswa->tampilDataSiswa();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Siswa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="barang">
      <h1>Data Siswa</h1>
      <a href="tambahSiswa.php">Tambah</a>
      <table border="2" cellpadding="20" cellspacing="0">
        <tr>
          <th>No.</th>
          <th>Nama Siswa</th>
          <th>Kelas</th>
          <th>Foto</th>
          <th>Opsi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($dataSiswa as $data) : ?>
          <tr>
                <td><?= $i; ?></td>
                <td><?= $data["nama_siswa"]; ?></td>
                <td><?= $data["kelas"]; ?></td>
                <td><img src="img/<?= $data["photo"]; ?>" width="50px"></td>
                <td>
                    <a href="edit_siswa.php?id=<?= $data["id_siswa"]; ?>" class="edit">Edit</a>
                    <a href="hapus_siswa.php?id=<?= $data["id_siswa"]; ?>" class="hapus" onClick="return confirm('Apakah anda yakin?')">Hapus</a>
                </td>
          </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
      </table>
    </div>
</body>
</html>

    