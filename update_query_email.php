<?php
    require_once 'koneksi.php';
    
    if(ISSET($_POST['update'])){
        $no_form = mysqli_real_escape_string($con, $_POST['no_form']);
        $status_transaksi = mysqli_real_escape_string($con, $_POST['status_transaksi']);
    
        // mysqli_query($con, "UPDATE email SET status_transaksi = '$status_transaksi' WHERE 'no_form' = '$no_form'") or die(mysqli_error());
        mysqli_query($con, "UPDATE `email` SET `status_transaksi` = '$status_transaksi' WHERE `no_form` = '$no_form'") or die(mysqli_error());
        echo "<script>
         alert('Data berhasil di simpan');
         window.location.href='http://localhost/prakomxiv/dashboard';
         </script>";
    }
?>