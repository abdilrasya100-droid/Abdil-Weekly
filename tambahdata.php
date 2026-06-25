<?php

    require 'fungsi.php';

    
    
    if(isset($_POST['kirim'])) 
    {
    
          $nama = $_POST['nama'];
          $nim = $_POST['nim'];
          $jurusan = $_POST['jurusan'];
          $email = $_POST['email'];
          $no_hp = $_POST['no_hp'];
          $foto = $_POST['foto'];

          $query = "INSERT INTO mahasiswa (nama, nim, jurusan, email, no_hp, foto)
          VALUES ('$nama','$nim','$jurusan','$email','$no_hp','$foto')";

          mysqli_query($koneksi, $query);

          if (mysqli_affected_rows($koneksi)) 
          {
              echo "<script>
                      alert('Data Berhasil Ditambahkan');
                      window.location.href = 'Mahasiswa.php';
                      </script>";
          } 
          else 
          {
              echo "<script>
                      alert('Data Gagal Ditambahkan');
                      window.location.href = 'tambahdata.php';
                    </script>";
          }
        
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <h1 class="title">Tambah Data Mahasiswa</h1>

    <div class="container">
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama" required></td>
                </tr>
                <tr>
                    <td><label for="nim">NIM</label></td>
                    <td>:</td>
                    <td><input type="text" name="nim" id="nim" required></td>
                </tr>
                <tr>
                    <td><label for="jurusan">Jurusan</label></td>
                    <td>:</td>
                    <td><input type="text" name="jurusan" id="jurusan" required></td>
                </tr>
                <tr>
                    <td><label for="email">email</label></td>
                    <td>:</td>
                    <td><input type="email" name="email" id="email" required></td>
                </tr>
                <tr>
                    <td><label for="no_hp">no_hp</label></td>
                    <td>:</td>
                    <td><input type="number" name="no_hp" id="no_hp" required></td>
                </tr>
                <tr>
                    <td><label for="foto">foto</label></td>
                    <td>:</td>
                    <td><input type="text" name="foto" id="foto" required></td>
                </tr>
                    <td colspan="2">
                        <button type="submit" name="kirim">Tambah Data</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>