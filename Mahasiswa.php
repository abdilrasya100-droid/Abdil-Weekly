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
                <th>Foto</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
            </tr>
            <tr>
                <td align="center">1</td>
                <td>M. Zainudin</td>
                <td>123465543412</td>
                <td align="center">Teknologi Informasi</td>
                <td align="center">zainul@gmail.com</td>
                <td abbr="center">089912344512</td>
                <td><img src="0b8e4b658c67da335a7331673795bf95.jpg" width="80"></td>
                <a href="editdata.php"><button>edit</button></a>
                <a href="deletedata.php"><button>hapus</button></a>
            </tr>
        </table>
    </div>

</body>
</html>