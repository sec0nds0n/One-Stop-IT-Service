<?php
require_once('../config/koneksi.php');
$id_mail=$_POST['id_mail'];

if($_POST){
    try {
       $sql = "INSERT INTO email (id_mail,usulan_akun,tgl_transaksi,st_transaksi) VALUES ('".$_POST['id_mail']."','".$_POST['usulan_akun']."',now(),'Usulan')";
       if(!$con->query($sql)){
          echo $con->error;
          die();
        }
    } catch (Exception $e) {
      echo $e;
      die();
    }
    echo "<script>
         alert('Data berhasil di simpan');
         window.location.href='http://localhost/bssn/view/dasbor.php';
         </script>";
}
?>
