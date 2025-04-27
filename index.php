<?php
include 'layouts/header.php';
include 'config/database.php';
include 'config/app.php';


if (isset($_POST['proses']) && !empty($_POST['judul']) && !empty($_POST['isi'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    $query = "INSERT INTO note (judul, isi) VALUES ('$judul', '$isi')";
    mysqli_query($db, $query);

    // setelah berhasil simpan, redirect
    header("Location: index.php?status=sukses");
    exit; // penting, biar script berhenti setelah redirect
}
?>


 

<div class="card-head">
    <form method="post" action="">
        <table>
            <tr>
                <td>judul</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td>isi</td>
                <td><input type="text" name="isi"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan" name="proses"></td>
            </tr>
        </table>
    </form>
</div>

<?php include 'layouts/footer.php'; ?>