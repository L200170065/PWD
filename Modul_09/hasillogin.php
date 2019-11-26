<?php
    session_start();
    echo "Anda berhasil login sebagai ".$_SESSION['username'];
    echo "dan anda terdaftar sebagai ".$_SESSION['status'];
?>
<br>
Silahkan logout dengan klik link <a href="logout.php">Disini</a>