<?php

// API
$koneksi = mysqli_connect("localhost", "root", "", "abdweekly");


$query = "SELECT * FROM mahasiswa";

mysqli_Query($koneksi, $query);

$result = mysqli_query($koneksi, $query);





?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <h1 class="title">DATA MAHASISWA</h1>

    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="biodata.php">Biodata</a></li>
            <li><a href="image.php">Foto</a></li>
            <li><a href="Mahasiswa.php">Mahasiswa</a></li>
        </ul>
    </nav>

    <div class="container">
        <a href="tambahdata.php">
            <button>Tambah Data</button>
        </a>

        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>jurusan</th>
                <th>email</th>
                <th>no_hp</th>
                <th>foto</th>
            </tr>
            
            <?php
            while($mhs = mysqli_fetch_assoc($result))
                {
            ?>
            <tr>
                <td align="center"><?php echo $mhs['id']; ?></td>
                <td><?php echo $mhs['nama']; ?></td>
                <td><?php echo $mhs['nim']; ?></td>
                <td align="center"><?php echo $mhs['jurusan']; ?></td>    
                <td align="center"><?php echo $mhs['email']; ?></td>
                <td align="center"><?php echo $mhs['no_hp']; ?></td>
                <td><?php echo $mhs['foto']; ?></td>
                <a href="editdata.php"><button>edit</button></a>
                <a href="deletedata.php"><button>hapus</button></a>
                </td>            
            </tr>
            <?php
                }
            ?>
        </table>
    </div>

</body>
</html>