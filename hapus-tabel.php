<?php
// BUAT DATABASE

// Integrasi koneksi 
require_once('./config/koneksi.php');

// Perintah SQL untuk buat database
$sql = "DROP TABLE kategori_anggota";

$query = $koneksi->query($sql);

// Periksa database
if($query === TRUE)
{
    echo "<b> Berhasil </b> Tabel Berhasil dihapus ...";
}else{
    echo "Error :" . $sql ."<br>". $koneksi->error;
}
?>