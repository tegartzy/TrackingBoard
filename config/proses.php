<?php
include 'database.php';

if (isset($_POST['proses']) && !empty($_POST['judul']) && !empty($_POST['isi'])) {
    $judul = mysqli_real_escape_string($db, $_POST['judul']);
    $isi = mysqli_real_escape_string($db, $_POST['isi']);

    $namaFile = basename($_FILES['gambar']['name']);
    $ukuranFile = $_FILES['gambar']['size'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    $error = $_FILES['gambar']['error'];
    $tipeFile = $_FILES['gambar']['type'];

    $allowedTypes = ['image/jpeg', 'image/png'];
    if (!in_array($tipeFile, $allowedTypes)) {
        echo "Tipe file tidak diizinkan.";
        exit;
    }

    if ($error === 0) {
        if ($ukuranFile < 2 * 1024 * 1024) {
            $folderTujuan = '../uploads/' . $namaFile;
            if (move_uploaded_file($tmpName, $folderTujuan)) {
                $query = "INSERT INTO note (judul, isi, gambar) VALUES ('$judul', '$isi', '$namaFile')";
                if (mysqli_query($db, $query)) {
                    header("Location: ../index.php?status=sukses");
                    exit;
                } else {
                    echo "Error: " . mysqli_error($db);
                }
            } else {
                echo "Gagal mengunggah file.";
            }
        } else {
            echo "Ukuran file terlalu besar.";
        }
    } else {
        echo "Terjadi kesalahan saat mengunggah file.";
    }
}
?>
