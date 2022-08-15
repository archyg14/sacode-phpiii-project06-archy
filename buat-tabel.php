<?php
    // BUAT TABLE

    // Integrasi Koneksi
    require_once('./config/koneksi.php');

    // Perintah SQL untuk buat tabel
    $sql = "CREATE TABLE kategori_anggota(
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        kategori VARCHAR(50) NOT NULL)";

        // Melakukan permintaan ke database
        $query = $koneksi->query($sql);

// Periksa database
if($query === TRUE)
{
    echo "<b> Berhasil </b> Tabel Berhasil dibuat ...";
}else{
    echo "Error :" . $sql ."<br>". $koneksi->error;
}
?>