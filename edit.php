<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OSIS - One Stop IT Services</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="text-center">                    
                <img class="img-fluid" src="../img/header.png" alt="Responsive image">            
            </div>    
    <br/>
    <div class="text-center">
    <h3>UPDATE DATA PELAYANAN</h3>
    </div>
    <?php
    include 'koneksi.php';
    
    $id=$_GET['no_form'];
    $query= "SELECT * FROM `email` WHERE no_form = $id";
    $data=mysqli_query($con,$query);

        while ($row=mysqli_fetch_assoc($data)) { ?>
            <form action="edit.php" method="post">
                No.Transaksi    :<input type="text" name="no_transaksi" value="<?php echo $row['no_transaksi'];?>"> <br><br>
                Nama Pemohon    :<input type="text" name="nama_pemohon" value="<?php echo $row['nama_pemohon'];?>"> <br><br>
                NIP.            :<input type="text" name="nip" value="<?php echo $row['nip'];?>"> <br><br>
                nama_transaksi  :<input type="text" name="nama_transaksi" value="<?php echo $row['nama_transaksi'];?>"> <br><br>
                st_transaksi    :
                <?php 
                if ($row['st_transaksi'] == "Menunggu Tim Teknis") {
                    echo '<input type="radio" name="st_transaksi" value="Menunggu Tim Teknis" checked="checked"> Menunggu Tim Teknis 
                          <input type="radio" name="st_transaksi" value="Menunggu Help Desk"> Menunggu Help Desk<br><br>
                          <input type="radio" name="st_transaksi" value="Selesai"> Selesai<br><br>';
                } elseif ($row['st_transaksi'] == "Menunggu Help Desk") {
                    echo '<input type="radio" name="st_transaksi" value="Menunggu Tim Teknis" > Menunggu Tim Teknis 
                          <input type="radio" name="st_transaksi" value="Menunggu Help Desk" checked="checked"> Menunggu Help Desk<br><br>
                          <input type="radio" name="st_transaksi" value="Selesai"> Selesai<br><br>';
                } elseif ($row['st_transaksi'] == "Menunggu Help Desk") {
                    echo '<input type="radio" name="st_transaksi" value="Menunggu Tim Teknis" > Menunggu Tim Teknis 
                          <input type="radio" name="st_transaksi" value="Menunggu Help Desk" > Menunggu Help Desk<br><br>
                          <input type="radio" name="st_transaksi" value="Selesai" checked="checked"> Selesai<br><br>';
                } else {
                    echo '<input type="radio" name="st_transaksi" value="Menunggu Tim Teknis" > Menunggu Tim Teknis 
                          <input type="radio" name="st_transaksi" value="Menunggu Help Desk" > Menunggu Help Desk<br><br>
                          <input type="radio" name="st_transaksi" value="Selesai"> Selesai<br><br>';
                }
                ?>
                <input type="hidden" name="no_transaksi" value="<?php echo $row['no_transaksi'];?>">
                <input type="submit" name="submit" value="Edit ">
        </form>
<?php
        }
    mysqli_close($con); // menutup koneksi ke database
    ?>

    
    

</body>
</html>