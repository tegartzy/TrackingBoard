<?php
$db = mysqli_connect('localhost', 'root', '', 'trackrecord');

if (!$db) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
