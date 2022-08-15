<?php
    // koneksi database

    // panggil file config
    require_once('config.php');

    // Membuat koneksi
    $koneksi = new mysqli($servername, $username, $password);

    // Periksa koneksi
    if($koneksi->connect_error)
    {
        echo "Koneksi Gagal !!";
    }else{
        echo "Koneksi Berhasil !!";
    };
?>