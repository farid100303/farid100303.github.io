<?php
session_start();
// Hapus semua data sesi
session_unset();
// Hancurkan sesi
session_destroy();
// Alihkan pengguna ke halaman login
header("Location: index.php");
exit();
?>
