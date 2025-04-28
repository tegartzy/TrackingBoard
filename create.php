<?php
include 'layouts/header.php';
include 'config/database.php';




?>

<style>
    .badan{
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>



<div class="container mt-5 badan">
    <form method="post" action="config/proses.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>judul</td>
                <td><input type="text" name="judul" required></td>
            </tr>
            <tr>
                <td>isi</td>
                <td><input type="text" name="isi" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="file" name="gambar" ></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-primary" value="simpan" name="proses"></td>
            </tr>
        </table>
    </form>
</div>

<?php include 'layouts/footer.php'; ?>