<?php
    /*
        session_start() : merupakan sebuah fungsi untuk mendeteksi session yang
                          sedang berlangsung. menanggulangi session close ketika
                          user sedang mengakses page.
     */
    session_start();

    if (!isset($_SESSION['user'])) {
        # code...
    ?>

    <?php } else {
        header("Location: pages/transaksi_jual.php");
    }
?>