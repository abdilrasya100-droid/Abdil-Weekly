<?php

$koneksi = mysqli_connect("localhost", "root", "", "abdweekly");

function tampildata($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result))
     {
          $rows[] = $row;
     }
     
     return $rows;
}

function tambahdata($data)
{
    global $koneksi;

          $nama = htmlspecialchars($data["nama"]);
          $nim = htmlspecialchars($data["nim"]);
          $jurusan = htmlspecialchars($data["jurusan"]);
          $email = htmlspecialchars($data["email"]);
          $no_hp = htmlspecialchars($data["no_hp"]);
          $foto = $data["foto"];

          $query = "INSERT INTO mahasiswa (nama, nim, jurusan, email, no_hp, foto)
          VALUES ('$nama','$nim','$jurusan','$email','$no_hp','$foto')";

          mysqli_query($koneksi, $query);

          return mysqli_affected_rows($koneksi);
}

function deletedata($id)
{
    global $koneksi;

     $query = "DELETE FROM mahasiswa WHERE id = $id";
     mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function ubahdata($data)
{
    global $koneksi;

          $id = htmlspecialchars($data["id"]);
          $nama = htmlspecialchars($data["nama"]);
          $nim = htmlspecialchars($data["nim"]);
          $jurusan = htmlspecialchars($data["jurusan"]);
          $email = htmlspecialchars($data["email"]);
          $no_hp = htmlspecialchars($data["no_hp"]);
          $foto = $data["foto"];

          $query = "UPDATE mahasiswa SET
                    nama = '$nama',
                    nim = '$nim',
                    jurusan = '$jurusan',
                    email = '$email',
                    no_hp = '$no_hp',
                    foto = '$foto'
                    WHERE id = $id";

          mysqli_query($koneksi, $query);

          return mysqli_affected_rows($koneksi);
}

?>