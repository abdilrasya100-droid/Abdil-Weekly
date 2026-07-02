<?php

    require 'fungsi.php';

    $id = $_GET["id"];
    $query = "SELECT * FROM mahasiswa WHERE id = $id";

    $mhs = tampildata($query)[0];


    if(isset($_POST["submit"])) 
    {

          if (ubahdata($_POST) > 0) 
          {
              echo "<script>
                      alert('Data Berhasil Diubah');
                      window.location.href = 'Mahasiswa.php';
                      </script>";
          } 
          else 
          {
              echo "<script>
                      alert('Data Gagal Diubah');
                      window.location.href = 'editdata.php';
                    </script>";
          }
        
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <h1 class="title">Edit Data Mahasiswa</h1>

    <div class="container">
        <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
            <table>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>" required></td>
                </tr>
                <tr>
                    <td><label for="nim">NIM</label></td>
                    <td>:</td>
                    <td><input type="text" name="nim" id="nim" value="<?= $mhs["nim"]; ?>" required></td>
                </tr>
                <tr>
                    <td><label for="jurusan">Jurusan</label></td>
                    <td>:</td>
                    <td><input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>" required></td>
                </tr>
                <tr>
                    <td><label for="email">email</label></td>
                    <td>:</td>
                    <td><input type="email" name="email" id="email" value="<?= $mhs["email"]; ?>" required></td>
                </tr>
                <tr>
                    <td><label for="no_hp">no_hp</label></td>
                    <td>:</td>
                    <td><input type="number" name="no_hp" id="no_hp" value="<?= $mhs["no_hp"]; ?>" required></td>
                </tr>
                <tr>
                    <td><label for="foto">foto</label></td>
                    <td>:</td>
                    <td><input type="text" name="foto" id="foto" value="<?= $mhs["foto"]; ?>" required></td>
                </tr>
                    <td colspan="2">
                        <button type="submit" name="submit">Ubah Data</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>