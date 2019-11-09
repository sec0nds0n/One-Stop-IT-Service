<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>OSIS - One Stop IT Services &amp; Pusdatik </title>

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
        <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <link rel="stylesheet" id="css-theme" href="assets/css/themes/earth.min.css">
        <link rel="stylesheet" id="css-theme" href="assets/css/login/login_style.css">
        <link rel="stylesheet" id="css-theme" href="assets/css/login/popup.css">
        <!-- END Stylesheets -->
    </head>
    <body>

        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
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
                            <img src="assets/media/logo_bssn.png" style="width: 120px; height: 120px;">
                            <h1 class="font-w300 mb-10" style="margin-top: 10px;">Pusdatik One Stop Services</h1>
                            <h2 class="h4 text-muted font-w300 mb-0">Katalog Layanan Pusdatik</h2>
                            <!-- <a class="btn btn-alt-primary" style="margin-top:10px ;" href="javascript:void(0)">
                                    <i class="fa fa-arrow-up mr-5"></i> Login
                            </a> -->
                            <button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:150px; margin-top:10px;">
                            Login</button>

                            <div id="modal-wrapper" class="modal">
                            
                            <form class="modal-content animate" action="login/login.php" onSubmit="return validasi()">
                                    
                                <div class="imgcontainer">
                                <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                                <!-- <img src="1.png" alt="Avatar" class="avatar"> -->
                                <h1 style="text-align:center">Form login</h1>
                                </div>

                                <div class="container">
                                <input type="text" id="username" placeholder="Enter Username" name="username">
                                <input type="password" id="password" placeholder="Enter Password" name="password">        
                                <button type="submit">Login</button>
                                <!-- <input type="checkbox" style="margin:26px 30px;"> Remember me      
                                <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a> -->
                                </div>
                                
                            </form>
                            
                            </div>
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
                                            <img src="assets/media/network.png" alt="Smiley face" height="50" width="50"> 
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
                                            <img src="assets/media/colo.png" alt="Smiley face" height="50" width="50">
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
                                                <img src="assets/media/hosting.png" alt="Smiley face" height="50" width="50">
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
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                                                <img src="assets/media/ad.png" alt="Smiley face" height="50" width="50">
                                        </div>
                                        <div class="font-size-h4 font-w600">Layanan Active Directory</div>
                                        <!-- <div class="text-muted">Active plan.</div> -->
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-primary" href="ad-about">
                                                    <i class="fa fa-arrow-up mr-5"></i> Active Directory 
                                            </a>
                                        </div>
                                        <div id="ad-about" class="modalDialog">
                                            <div>
                                                <a href="#close" title="Close" class="close">X</a>
                                                <h2>Layanan Active Directory</h2>
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
                                                <img src="assets/media/subdomain.png" alt="Smiley face" height="50" width="50">
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
                                                <img src="assets/media/email.png" alt="Smiley face" height="50" width="50">
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
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                                                    <img src="assets/media/cert.png" alt="Smiley face" height="50" width="50">
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
                                                    <img src="assets/media/cloud.png" alt="Smiley face" height="50" width="50">
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
                                                    <img src="assets/media/data.png" alt="Smiley face" height="50" width="50">
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
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                                                        <img src="assets/media/vpn.png" alt="Smiley face" height="50" width="50">
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
                                                        <img src="assets/media/lpse.png" alt="Smiley face" height="50" width="50">
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
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">Yanopskam</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Halo Pusdatik 1.0</a> &copy; <span class="js-year-copy"></span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/jquery.countTo.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="assets/js/codebase.core.min.js"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="assets/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/db_minimal.min.js"></script>
        <script src="assets/js/popup/popup_home.js"></script>
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