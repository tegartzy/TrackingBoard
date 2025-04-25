<?php
include 'layouts/header.php';

// session_start();
// if (!isset($_SESSION["login"])){
//     echo "<script>
//         alert('login dulu');
//         document.location.href = 'login.php';
//     </script>";
// exit;
// }
?>

<style>
    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .card-body,
    .card-head {

        width: 300px;
        border-radius: 10px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        padding: 15px;
        display: flex;
        flex-direction: column;
        margin: 2% auto;
    }

    .card-head {
        background-color: #FF9149;
        width: 90%;
        justify-content: center;
        align-items: center;
    }
</style>

<div class="card-head">
    <div class="card-body">
        
    <canvas id="myCanvas" width="200" height="100">tes</canvas>
    </div>

    

</div>

<?php include 'layouts/footer.php'; ?>