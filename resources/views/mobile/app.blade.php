<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DRAKORINDO - Nonton Drama Korea Subtitle Indonesia - XDRAKOR</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/muvnix/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="/muvnix/dist/css/adminlte.min.css">

    <!-- manifest -->
    <link rel="manifest" href="/manifest.json">

    <meta name="theme-color" content="#000000">

    <!-- icons (optional, agar muncul di layar utama saat install) -->
    <link rel="apple-touch-icon" href="/icons/icon-192x192.png">
    <meta name="mobile-web-app-capable" content="yes">
    <style>
        body {
            padding-top: env(safe-area-inset-top);
            /* Jaga konten di bawah area status bar */
            padding-bottom: env(safe-area-inset-bottom);
            /* Hindari konten tertutup navigation bar */
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed sidebar-closed sidebar-collapse dark-mode">

    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-black navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">
                        XDRAKOR
                    </a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>


            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <div class="text-center bg-gradient-purple">
                <img src="/muvnix/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3"
                    style="opacity: .8; width:20%;margin-top:30px; margin-bottom:10px"><br />
                <div style="padding: 0px 0px">
                    <span class="small-text text-white text-bold">ASRANI</span><br />
                    Trial Account
                </div>
                <br />
            </div>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="/beranda" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Beranda
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/logout" class="nav-link" onclick="return confirm('Yakin ingin keluar?');">
                                <i class="nav-icon fas fa-sign-out"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content" style="padding:0px;">
                @yield('content')
            </section>
        </div>


    </div>
    <!-- ./wrapper -->

    <script src="/muvnix/plugins/jquery/jquery.min.js"></script>
    <script src="/muvnix/dist/js/adminlte.js"></script>
    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/sw.js')
                .then(reg => console.log('SW registered:', reg))
                .catch(err => console.error('SW registration failed:', err));
        }
    </script>
</body>

</html>