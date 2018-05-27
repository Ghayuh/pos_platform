<?php
    # -- koneksi database dengan format mysqli("lokasi_root", "user_name", "password", "nama_database");
    # -- Attention : jika password tidak ada maka tidak perlu di isi.
    $db_connect = new mysqli("localhost", "root", "", "mydatabase");

    if (!$db_connect) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;   
    }
?>