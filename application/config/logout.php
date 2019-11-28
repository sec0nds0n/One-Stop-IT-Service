<?php 
    session_start();
    session_destroy();
    unset($_SESSION['nip']);
    echo "<script>alert('Anda sudah logout!');window.location.href = '../prakomxiv';</script>";
?>