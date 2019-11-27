<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "osis_db");
if(isset($_POST["login"])){

    $nip = mysqli_real_escape_string($conn, $_POST["nip"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $result = mysqli_query($conn, "SELECT * FROM pegawai WHERE nip = '$nip'");

    //cek usernamenya
    if(mysqli_num_rows($result) === 1 ){
        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])){
            $_SESSION['nip'] = $nip;
            echo "<script>alert('BERHASIL LOGIN')</script>";
            // exit;
        }else{
            echo"<script>alert('GAGAL LOGIN')</script>";
        }
    }
}
?>

<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>One Stop IT Services</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="asset/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="asset/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="asset/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="asset/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="asset/css/themes/flat.min.css"> -->
        <link rel="stylesheet" id="css-theme" href="asset/css/themes/earth.min.css">
        <link rel="stylesheet" id="css-theme" href="asset/css/login/login_style.css">
        <link rel="stylesheet" id="css-theme" href="asset/css/login/popup.css">
        <!-- END Stylesheets -->
    </head>
    <body>

        <div id="page-container" class="sidebar-inverse side-scroll main-content-boxed">

            <!-- Sidebar -->
            
            <!-- END Sidebar -->

            <!-- Header -->
            
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Header -->
                <div class="bg-white">
                    <div class="content content-full">
                        <div class="pt-10 pb-30 text-center">
                            <img src="asset/media/logo_bssn.png" style="width: 120px; height: 120px;">
                            <h1 class="font-w300 mb-10" style="margin-top: 10px;">Pusdatik One Stop Services</h1>
                            <h2 class="h4 text-muted font-w300 mb-0">Katalog Layanan Pusdatik</h2>
                            <!-- <a class="btn btn-alt-primary" style="margin-top:10px ;" href="javascript:void(0)">
                                    <i class="fa fa-arrow-up mr-5"></i> Login
                            </a> -->
                            <?php

                            if (isset($_SESSION['nip'])){ ?>
                                <button onclick="window.location.href='logout.php'" style="width:150px; margin-top:10px; background-color:red;">
                                Logout</button>
                                <?php
                            } else { ?>
                                <button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:150px; margin-top:10px;">
                                Login</button>

                                <div id="modal-wrapper" class="modal">
                                
                                <form class="modal-content animate" action="" onSubmit="return validasi()" method="post">
                                        
                                    <div class="imgcontainer">
                                    <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                                    <!-- <img src="1.png" alt="Avatar" class="avatar"> -->
                                    <h1 style="text-align:center">Form login</h1>
                                    </div>

                                    <div class="container">
                                    <input type="text" id="nip" placeholder="Masukan NIP" name="nip">
                                    <input type="password" id="password" placeholder="Enter Password" name="password">        
                                    <button name="login" type="submit">Login</button>
                                    <!-- <input type="checkbox" style="margin:26px 30px;"> Remember me      
                                    <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a> -->
                                    </div>
                                    
                                </form>
                                
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- END Header -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Mini Stats -->

                    <!-- END Mini Stats -->

                    <!-- Charts -->

                    <!-- END Charts -->

                    <!-- Progress -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <img src="asset/media/network.png" alt="Smiley face" height="50" width="50"> 
                                        </div>
                                        <div class="font-size-h4 font-w600">Layanan Network</div>
                                        <!-- <div class="text-muted">Active plan.</div> -->
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-primary" href="#network-about">
                                                    <i class="fa fa-arrow-up mr-5"></i> Network
                                            </a>
                                        </div>
                                        <div id="network-about" class="modalDialog">
                                            <div>
                                                <a href="#close" title="Close" class="close">X</a>
                                                <h2>Layanan Network</h2>
                                                <ul>
                                                <li style="text-align: left;">
                                                <h4>Komponen Layanan :</h4>
                                                <ul>
                                                <li>Layanan Interkoneksi Jaringan : Layanan penyediaan dan penanganan insiden koneksi jaringan antar Kantor BSSN (Ragunan, Bojongsari, Ciseeng, Sentul, Batam, Jogjakarta) untuk mengakses Sistem Informasi (SI) yang dikelola oleh Pusdatik.</li>
                                                <li>Layanan Pengembangan Jaringan : Layanan penambahan kapasitas jaringan lokal seperti penambahan akses <em>client</em> dan akses khusus (seperti <em>direct link</em> dan <em>access list</em>).</li>
                                                <li>Layanan Koneksi Internet = Layanan penyediaan dan penanganan insiden koneksi internet kepada pengguna ke situs-situs yang diperbolehkan untuk kepentingan kedinasan dengan proteksi keamanan jaringan di lingkungan BSSN.</li>
                                                <li>Layanan DHCP : Layanan penyediaan alamat IP secara dinamis untuk kebutuhan <em>personal computer</em>. </li>
                                                <li>Layanan Static IP Assignment : Layanan kebutuhan alamat IP <em>static</em> yang dibutuhkan pengguna.</li>
                                                <li>Layanan Wifi Internal : Layanan penyediaan dan penanganan insiden akses jaringan lokal dan internet secara nirkabel untuk pengguna.</li>
                                                <li>Layanan Wifi Publik/Tamu : Layanan penyediaan akses internet secara nirkabel untuk tamu BSSN tanpa akses intranet.</li>
                                                </ul>
                                                </li>
                                                <li style="text-align: left;">
                                                <h4>Keterangan Layanan :</h4>
                                                <ul>
                                                <li style="text-align: left;">Layanan <strong>a &ndash; g</strong> untuk seluruh karyawan BSSN</li>
                                                <li style="text-align: left;">Khusus tamu hanya dapat mengakses layanan <strong>g</strong></li>
                                                <li style="text-align: left;">Informasi Layanan : One Stop IT Services</li>
                                                <li style="text-align: left;">Ketersediaan Layanan : 90%</li>
                                                <li style="text-align: left;">Waktu Respon : 15-30 <strong>menit</strong></li>
                                                <li style="text-align: left;">Penanganan Insiden : 1-8 <strong>jam</strong>, 1 <strong>bulan</strong> jika diperlukan investasi barang</li>
                                                </ul>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <img src="asset/media/colo.png" alt="Smiley face" height="50" width="50">
                                        </div>
                                        <div class="font-size-h4 font-w600">Layanan Co-location</div>
                                        <!-- <div class="text-muted">Awesome!</div> -->
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-primary" href="#co-location-about">
                                                    <i class="fa fa-arrow-up mr-5"></i> Co-location
                                            </a>
                                        </div>
                                        <div id="co-location-about" class="modalDialog">
                                            <div>
                                                <a href="#close" title="Close" class="close">X</a>
                                                <h2>Layanan Co-location</h2>
                                                <ul>
                                                <li>
                                                <h4 style="text-align: left;">Komponen Layanan</h4>
                                                <ul style="text-align: left;">
                                                <li>Layanan Co-location : Layanan penyediaan dan penanganan insiden penempatan server Sistem Informasi (SI) di Data Center Pusdatik yang dibutuhkan untuk mendukung tugas dan fungsi unit kerja.</li>
                                                </ul>
                                                </li>
                                                <li>
                                                <h4 style="text-align: left;">Keterangan Layanan</h4>
                                                <ul>
                                                <li style="text-align: left;">Pengguna Layanan : Seluruh Unit Kerja BSSN</li>
                                                <li style="text-align: left;">Informasi Layanan : One Stop IT Services</li>
                                                <li style="text-align: left;">Ketersediaan layanan : 99,8 %</li>
                                                <li style="text-align: left;">Waktu Respon : 15 &ndash; 30 <strong>menit</strong></li>
                                                <li style="text-align: left;">Penanganan insiden : 1 &ndash; 7 <strong>hari, </strong>1 <strong>bulan</strong> bila membutuhkan investasi perangkat</li>
                                                </ul>
                                                </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                                <img src="asset/media/hosting.png" alt="Smiley face" height="50" width="50">
                                        </div>
                                        <div class="font-size-h4 font-w600">Layanan Hosting</div>
                                        <!-- <div class="text-muted">Keep it up!</div> -->
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-primary" href="#hosting-about">
                                                    <i class="fa fa-arrow-up mr-5"></i> Hosting
                                            </a>
                                        </div>
                                        <div id="hosting-about" class="modalDialog">
                                            <div>
                                                <a href="#close" title="Close" class="close">X</a>
                                                <h2>Layanan Hosting</h2>
                                                <ul>
                                                <li>
                                                <h4 style="text-align: left;">Komponen Layanan</h4>
                                                <ul style="text-align: left;">
                                                <li>Layanan Virtual Server : Layanan penyediaan dan penanganan insiden server dalam bentuk mesin virtual di Data Center Pusdatik bagi pengguna.</li>
                                                <li>Layanan Hosting Aplikasi : Layanan penyediaan dan penanganan insiden penempatan aplikasi milik pengguna di Data Center Pusdatik.</li>
                                                </ul>
                                                </li>
                                                <li>
                                                <h4 style="text-align: left;">Keterangan Layanan</h4>
                                                <ul>
                                                <li style="text-align: left;">Pengguna Layanan : Seluruh Unit Kerja BSSN</li>
                                                <li style="text-align: left;">Informasi Layanan : One Stop IT Services</li>
                                                <li style="text-align: left;">Ketersediaan layanan : 99,8 %</li>
                                                <li style="text-align: left;">Waktu Respon : 15 &ndash; 30 <strong>menit</strong></li>
                                                <li style="text-align: left;">Penanganan insiden : 1 &ndash; 7 <strong>hari, </strong>1 <strong>bulan</strong> bila membutuhkan investasi perangkat</li>
                                                </ul>
                                                </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                                <img src="asset/media/ad.png" alt="Smiley face" height="50" width="50">
                                        </div>
                                        <div class="font-size-h4 font-w600">Layanan Active Directory</div>
                                        <!-- <div class="text-muted">Active plan.</div> -->
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-primary" href="#ad-about">
                                                    <i class="fa fa-arrow-up mr-5"></i> Active Directory 
                                            </a>
                                        </div>
                                        <div id="ad-about" class="modalDialog">
                                            <div>
                                                <a href="#close" title="Close" class="close">X</a>
                                                <h2>Layanan Active Directory</h2>
                                                <ul>
                                                <li>
                                                <h4 style="text-align: left;">Komponen Layanan</h4>
                                                <ul style="text-align: left;">
                                                <li>Layanan <em>Active Directory</em> : Layanan penyediaan proses autentikasi akun pegawai secara terpusat.</li>
                                                </ul>
                                                </li>
                                                <li>
                                                <h4 style="text-align: left;">Keterangan Layanan</h4>
                                                <ul>
                                                <li style="text-align: left;">Pengguna Layanan : Seluruh Unit Kerja BSSN</li>
                                                <li style="text-align: left;">Informasi Layanan : One Stop IT Services</li>
                                                <li style="text-align: left;">Ketersediaan layanan : 99,8 %</li>
                                                <li style="text-align: left;">Waktu Respon : 15 &ndash; 30 <strong>menit</strong></li>
                                                <li style="text-align: left;">Penanganan insiden : 1 &ndash; <strong>, </strong>4 <strong>jam</strong></li>
                                                </ul>
                                                </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                                <img src="asset/media/subdomain.png" alt="Smiley face" height="50" width="50">
                                        </div>
                                        <div class="font-size-h4 font-w600">Layanan Subdomain</div>
                                        <!-- <div class="text-muted">Awesome!</div> -->
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-primary" href="#subdomain-about">
                                                <i class="fa fa-arrow-up mr-5"></i> Subdomain
                                            </a>
                                        </div>
                                        <div id="subdomain-about" class="modalDialog">
                                            <div>
                                                <a href="#close" title="Close" class="close">X</a>
                                                <h2>Layanan Subdomain</h2>
                                                <ul>
                                                <li>
                                                <h4 style="text-align: left;">Komponen Layanan</h4>
                                                <ul style="text-align: left;">
                                                <li>Layanan Pengelolaan Subdomain bssn.go.id&nbsp;:Layanan penyediaan dan penanganan insiden pengelolaan subdomain bssn.go.id dengan penamaan tertentu sesuai kebutuhan pengguna.</li>
                                                </ul>
                                                </li>
                                                <li>
                                                <h4 style="text-align: left;">Keterangan Layanan</h4>
                                                <ul>
                                                <li style="text-align: left;">Pengguna Layanan : Seluruh Unit Kerja BSSN</li>
                                                <li style="text-align: left;">Informasi Layanan : One Stop IT Services</li>
                                                <li style="text-align: left;">Ketersediaan layanan : 99,8 %</li>
                                                <li style="text-align: left;">Waktu Respon : 15 &ndash; 30 <strong>menit</strong></li>
                                                <li style="text-align: left;">Penanganan insiden : 1 &ndash; 4 <strong>jam</strong></li>
                                                </ul>
                                                </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                                <img src="asset/media/email.png" alt="Smiley face" height="50" width="50">
                                        </div>
                                        <div class="font-size-h4 font-w600">Layanan Email</div>
                                        <!-- <div class="text-muted">Keep it up!</div> -->
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-primary" href="#email-about">
                                                <i class="fa fa-arrow-up mr-5"></i> Layanan Email
                                            </a>
                                        </div>
                                        <div id="email-about" class="modalDialog">
                                            <div>
                                                <a href="#close" title="Close" class="close">X</a>
                                                <h2>Layanan Email</h2>
                                                <ul>
                                                <li>
                                                <h4 style="text-align: left;">Komponen Layanan</h4>
                                                <ul style="text-align: left;">
                                                <li>Layanan Pengelolaan Subdomain bssn.go.id&nbsp;: Layanan penyediaan akun email untuk pegawai dan akun permintaan unit kerja.</li>
                                                <li>Layanan Pemulihan <em>Password</em> Email : Layanan &nbsp;pemulihan <em>password</em> akun email pengguna. </li>
                                                <li>Layanan Pengaturan Akun Email : Layanan pengaturan aktifasi akun email berdasarkan kondisi dan kebutuhan pengguna.</li>
                                                <li>Layanan <em>Broadcast</em> Email : Layanan pengiriman email ke beberapa akun sesuai kebutuhan pengguna. </li>
                                                <li>Layanan Pembuatan <em>Distribution List : </em>Layanan pembuatan distribution list untuk pengiriman email ke dalam grup tertentu<em>.<br /></em></li>
                                                <li><em>Layanan Backup Email </em>: Layanan <em>backup</em> email menggunakan <em>storage</em> milik pengguna.</li>
                                                <li><em>Layanan Penambahan Storage Akun </em>: Layanan penambahan kapasitas <em>storage</em> email milik pengguna dengan mempertimbangkan kapasitas yang tersedia di Pusdatik.</li>
                                                <li><em>Layanan Penonaktifan dan Pengaktifan Akun </em>: Layanan penghentian akun untuk pegawai yang pensiun atau keluar, dan pengaktifan kembali akun yang terkunci. </li>
                                                <li><em>Layanan Penambahan Fitur pada Email </em>: Layanan penambahan fitur bagi email pegawai dengan tetap memperhitungkan faktor keamanan.</li>
                                                </ul>
                                                </li>
                                                <li>
                                                <h4 style="text-align: left;">Keterangan Layanan</h4>
                                                <ul>
                                                <li style="text-align: left;">Pengguna Layanan : Seluruh Unit Kerja BSSN</li>
                                                <li style="text-align: left;">Informasi Layanan : One Stop IT Services</li>
                                                <li style="text-align: left;">Ketersediaan layanan : 99,8 %</li>
                                                <li style="text-align: left;">Waktu Respon : 15 &ndash; 30 <strong>menit</strong></li>
                                                <li style="text-align: left;">Penanganan insiden : 1 &ndash; 4 <strong>jam</strong></li>
                                                </ul>
                                                </li>
                                                </ul>
                                                <p>untuk melakukan pengajuan silahkan klik tombol <a title="pengajuan layanan" href="email" target="_blank" rel="noopener">disini</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-4">
                                <div class="block">
                                    <div class="block-content block-content-full">
                                        <div class="py-20 text-center">
                                            <div class="mb-20">
                                                    <img src="asset/media/cert.png" alt="Smiley face" height="50" width="50">
                                            </div>
                                            <div class="font-size-h4 font-w600">CERT</div>
                                            <!-- <div class="text-muted">Active plan.</div> -->
                                            <div class="pt-20">
                                                <a class="btn btn-rounded btn-alt-primary" href="#cert-about">
                                                    <i class="fa fa-arrow-up mr-5"></i> CERT
                                                </a>
                                            </div>
                                            <div id="cert-about" class="modalDialog">
                                            <div>
                                                <a href="#close" title="Close" class="close">X</a>
                                                <h2>Computer Emergency Response Team</h2>
                                                <ul>
                                                <li>
                                                <h4 style="text-align: left;">Komponen Layanan</h4>
                                                <ul style="text-align: left;">
                                                <li>Penanganan Insiden Siber Internal BSSN : Layanan penanganan permasalahan pemanfaatan TIK yang dikelola oleh Pusdatik di lingkungan internal BSSN.</li>
                                                <li>Halo Pusdatik : Merupakan pusat layanan informasi, pengaduan dan asistensi permasalahan TIK internal BSSN.</li>
                                                </ul>
                                                </li>
                                                <li>
                                                <h4 style="text-align: left;">Keterangan Layanan</h4>
                                                <ul>
                                                <li style="text-align: left;">Pengguna Layanan : Seluruh Unit Kerja BSSN</li>
                                                <li style="text-align: left;">Informasi Layanan : One Stop IT Services</li>
                                                <li style="text-align: left;">Ketersediaan layanan : 99,8 %</li>
                                                <li style="text-align: left;">Waktu Respon : 15 &ndash; 30 <strong>menit</strong></li>
                                                <li style="text-align: left;">Penanganan insiden : 1 &ndash; 4 <strong>jam</strong></li>
                                                </ul>
                                                </li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="block">
                                    <div class="block-content block-content-full">
                                        <div class="py-20 text-center">
                                            <div class="mb-20">
                                                    <img src="asset/media/cloud.png" alt="Smiley face" height="50" width="50">
                                            </div>
                                            <div class="font-size-h4 font-w600">Layanan Cloud Storage</div>
                                            <!-- <div class="text-muted">Awesome!</div> -->
                                            <div class="pt-20">
                                                <a class="btn btn-rounded btn-alt-primary" href="#cloud-about">
                                                    <i class="fa fa-arrow-up mr-5"></i> Layanan Cloud Storage
                                                </a>
                                            </div>
                                            <div id="cloud-about" class="modalDialog">
                                            <div>
                                                <a href="#close" title="Close" class="close">X</a>
                                                <h2>Layanan Cloud Storage</h2>
                                                <ul>
                                                <li>
                                                <h4 style="text-align: left;">Komponen Layanan</h4>
                                                <ul style="text-align: left;">
                                                <li>Layanan Pembuatan akun <em>Cloud Storage</em> : Layanan penyediaan akun <em>cloud storage</em> bagi pengguna.</li>
                                                <li>Layanan Penambahan Kapasitas <em>Storage</em> : Layanan penambahan kapasitas <em>cloud</em> <em>storage</em> pengguna dengan mempertimbangkan kapasitas <em>storage</em> yang tersedia di Pusdatik.</li>
                                                <li>Layanan Pemulihan<em> Password</em> : Layanan pemulihan <em>password </em>akun <em>cloud storage</em>.</li>
                                                <li>Layanan Penghapusan atau Penonaktifan Akun : Layanan pengiriman email ke beberapa akun sesuai kebutuhan pengguna.</li>
                                                </ul>
                                                </li>
                                                <li>
                                                <h4 style="text-align: left;">Keterangan Layanan</h4>
                                                <ul>
                                                <li style="text-align: left;">Pengguna Layanan : Seluruh Unit Kerja BSSN</li>
                                                <li style="text-align: left;">Informasi Layanan : One Stop IT Services</li>
                                                <li style="text-align: left;">Ketersediaan layanan : 99,8 %</li>
                                                <li style="text-align: left;">Waktu Respon : 15 &ndash; 30 <strong>menit</strong></li>
                                                <li style="text-align: left;">Penanganan insiden : 1 &ndash; 4 <strong>jam</strong></li>
                                                </ul>
                                                </li>
                                                </ul>
                                                <p>untuk melakukan pengajuan silahkan klik tombol <a title="pengajuan layanan" href="cloud" target="_blank" rel="noopener">disini</a></p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="block">
                                    <div class="block-content block-content-full">
                                        <div class="py-20 text-center">
                                            <div class="mb-20">
                                                    <img src="asset/media/data.png" alt="Smiley face" height="50" width="50">
                                            </div>
                                            <div class="font-size-h4 font-w600">Layanan Data dan Aplikasi</div>
                                            <!-- <div class="text-muted">Keep it up!</div> -->
                                            <div class="pt-20">
                                                <a class="btn btn-rounded btn-alt-primary" href="#data-about">
                                                    <i class="fa fa-arrow-up mr-5"></i> Layanan Data dan Aplikasi
                                                </a>
                                            </div>
                                            <div id="data-about" class="modalDialog">
                                            <div>
                                                <a href="#close" title="Close" class="close">X</a>
                                                <h2>Layanan Data dan Aplikasi</h2>
                                                <ul>
                                                <li>
                                                <h4 style="text-align: left;">Komponen Layanan</h4>
                                                <ul style="text-align: left;">
                                                <li>Layanan Penyimpanan Kode Sumber (Gitlab)&nbsp;:Layanan penyimpanan kode sumber bagi para pengembang (<em>developer</em>) di BSSN.</li>
                                                <li>Layanan Aplikasi Perkantoran Berlisensi : Layanan kebutuhan lisensi aplikasi perkantoran umum bagi pegawai BSSN.</li>
                                                <li>Layanan Aplikasi e-Office : Layanan perancangan, pembangunan dan pengembangan ERP (<em>Enterprise Resource Planning</em>) untuk manajemen proses bisnis di internal BSSN.</li>
                                                <li>Layanan Aplikasi Perkantoran Sumber Terbuka : Layanan mengembangkan aplikasi sumber terbuka yang dapat digunakan dalam kegiatan perkantoran di BSSN.</li>
                                                <li>Layanan CMS Website : Layanan perancangan, pembangunan dan pengembangan CMS (<em>Content Management System</em>) untuk website BSSN.</li>
                                                <li>Layanan Permintaan Pengembangan Sistem : Layanan pengembangan minor dari sistem tertentu apabila terdapat kebutuhan dari pengguna.</li>
                                                </ul>
                                                </li>
                                                <li>
                                                <h4 style="text-align: left;">Keterangan Layanan</h4>
                                                <ul>
                                                <li style="text-align: left;">Pengguna Layanan : Seluruh Unit Kerja BSSN</li>
                                                <li style="text-align: left;">Informasi Layanan : One Stop IT Services</li>
                                                <li style="text-align: left;">Ketersediaan layanan : 99,8 %</li>
                                                <li style="text-align: left;">Waktu Respon : 4 &ndash; 8 <strong>jam</strong></li>
                                                <li style="text-align: left;">Penanganan insiden : 1 &ndash; 3 <strong>bulan </strong>untuk layanan 4 dan 6</li>
                                                </ul>
                                                </li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-4">
                                    <div class="block">
                                        <div class="block-content block-content-full">
                                            <div class="py-20 text-center">
                                                <div class="mb-20">
                                                        <img src="asset/media/vpn.png" alt="Smiley face" height="50" width="50">
                                                </div>
                                                <div class="font-size-h4 font-w600">Layanan VPN</div>
                                                <!-- <div class="text-muted">Active plan.</div> -->
                                                <div class="pt-20">
                                                    <a class="btn btn-rounded btn-alt-primary" href="#vpn-about">
                                                        <i class="fa fa-arrow-up mr-5"></i> Layanan VPN
                                                    </a>
                                                </div>
                                                <div id="vpn-about" class="modalDialog">
                                                    <div>
                                                        <a href="#close" title="Close" class="close">X</a>
                                                        <h2>Layanan VPN</h2>
                                                        <ul>
                                                        <li>
                                                        <h4 style="text-align: left;">Komponen Layanan</h4>
                                                        <ul style="text-align: left;">
                                                        <li>Layanan Penyimpanan Kode Sumber (Gitlab)&nbsp;:Layanan penyimpanan kode sumber bagi para pengembang (<em>developer</em>) di BSSN.</li>
                                                        <li>Layanan Aplikasi Perkantoran Berlisensi : Layanan kebutuhan lisensi aplikasi perkantoran umum bagi pegawai BSSN.</li>
                                                        <li>Layanan Aplikasi e-Office : Layanan perancangan, pembangunan dan pengembangan ERP (<em>Enterprise Resource Planning</em>) untuk manajemen proses bisnis di internal BSSN. </li>
                                                        <li>Layanan Aplikasi Perkantoran Sumber Terbuka : Layanan mengembangkan aplikasi sumber terbuka yang dapat digunakan dalam kegiatan perkantoran di BSSN. </li>
                                                        <li>Layanan CMS Website : Layanan perancangan, pembangunan dan pengembangan CMS (<em>Content Management System</em>) untuk website BSSN. </li>
                                                        <li>Layanan Permintaan Pengembangan Sistem : Layanan pengembangan minor dari sistem tertentu apabila terdapat kebutuhan dari pengguna.</li>
                                                        </ul>
                                                        </li>
                                                        <li>
                                                        <h4 style="text-align: left;">Keterangan Layanan</h4>
                                                        <ul>
                                                        <li style="text-align: left;">Pengguna Layanan : Seluruh Unit Kerja BSSN</li>
                                                        <li style="text-align: left;">Informasi Layanan : One Stop IT Services</li>
                                                        <li style="text-align: left;">Ketersediaan layanan : 99,8 %</li>
                                                        <li style="text-align: left;">Waktu Respon : 4 &ndash; 8 <strong>jam</strong></li>
                                                        <li style="text-align: left;">Penanganan insiden : 1 &ndash; 3 <strong>bulan </strong>untuk layanan 4 dan 6</li>
                                                        </ul>
                                                        </li>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="block">
                                        <div class="block-content block-content-full">
                                            <div class="py-20 text-center">
                                                <div class="mb-20">
                                                        <img src="asset/media/lpse.png" alt="Smiley face" height="50" width="50">
                                                </div>
                                                <div class="font-size-h4 font-w600">LPSE</div>
                                                <!-- <div class="text-muted">Awesome!</div> -->
                                                <div class="pt-20">
                                                    <a class="btn btn-rounded btn-alt-primary" href="#lpse-about">
                                                        <i class="fa fa-arrow-up mr-5"></i> LPSE
                                                    </a>
                                                </div>
                                                <div id="lpse-about" class="modalDialog">
                                                    <div>
                                                        <a href="#close" title="Close" class="close">X</a>
                                                        <h2>Layanan LPSE</h2>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="block">
                                        <div class="block-content block-content-full">
                                            <div class="py-20 text-center">
                                                <div class="mb-20">
                                                    <i class="si si-screen-desktop fa-3x"></i>
                                                </div>
                                                <div class="font-size-h4 font-w600">Layanan lainnya</div>
                                                <!-- <div class="text-muted">Keep it up!</div> -->
                                                <div class="pt-20">
                                                    <a class="btn btn-rounded btn-alt-primary" href="javascript:void(0)">
                                                        <i class="fa fa-arrow-up mr-5"></i> Layanan lainnya
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                    
                    
                    <!-- END Progress -->

                    <!-- More Data -->

                    <!-- END More Data -->
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-white opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">Kelompok I Prakom XIV</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://1.envato.market/95j" target="_blank">One Stop IT Services</a> &copy; <span class="js-year-copy"></span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out asset/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the asset/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            asset/js/core/jquery.min.js
            asset/js/core/bootstrap.bundle.min.js
            asset/js/core/simplebar.min.js
            asset/js/core/jquery-scrollLock.min.js
            asset/js/core/jquery.appear.min.js
            asset/js/core/jquery.countTo.min.js
            asset/js/core/js.cookie.min.js
        -->
        <script src="asset/js/codebase.core.min.js"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at asset/_es6/main/app.js
        -->
        <script src="asset/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="asset/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="asset/js/pages/db_minimal.min.js"></script>
        <script src="asset/js/popup/popup_home.js"></script>
        <script>
        // If user clicks anywhere outside of the modal, Modal will close

        var modal = document.getElementById('modal-wrapper');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
        </script>
    </body>
</html>