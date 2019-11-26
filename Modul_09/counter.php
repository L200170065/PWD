<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
?>

<html>
<head>
<title>Mengakses Data Session</title>
</head>
<body>
<?php
$_SESSION['counter']++;
$_SESSION['nama_pengunjung'] = "Adul";
echo "Anda telah mengunjungi halaman ini sebanyak ".$_SESSION['counter']." kali.";
?>
</body>
</html>