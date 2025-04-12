<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XDRAKOR - NONTON DRAMA KOREA SUBTITLE INDONESIA</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/muvnix/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/muvnix/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/muvnix/dist/css/adminlte.min.css">
    @stack('css')
    <link rel="stylesheet" href="/notif/dist/css/iziToast.min.css">
    <script src="/notif/dist/js/iziToast.min.js" type="text/javascript"></script>
</head>

<body class="hold-transition login-page"
    style="background: rgb(188, 88, 60); background: linear-gradient(48deg, rgb(188, 60, 60) 0%, rgb(249, 197, 187) 100%);">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-danger">
            <div class="card-header text-center">
                <a href="/" class="h1"><b>Siap Kalsel</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Masuk Aplikasi</p>

                <form action="/masuk" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="NIK ANDA" minlength="16" maxlength="16"
                            name="username" autocomplete='new-password' required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password"
                            autocomplete='new-password'>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-success btn-block">Log In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->
                <br />
                <p class="mb-0 text-center">
                    <a href="/daftar" class="text-center text-bold text-danger">Belum Punya Akun, Register disini!</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <script src="/assets/plugins/jquery/jquery.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    @stack('js')
    <script type="text/javascript">
        @include('layouts.notif')
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover">
    <title>DRAKORINDO - Nonton Drama Korea Subtitle Indonesia</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <link rel="stylesheet" href="/muvnix/plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="/muvnix/dist/css/adminlte.min.css" />

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            position: relative;
            overflow: hidden;
            background: linear-gradient(to top, #000000 0%, #fffefe 100%);
            /* Untuk perangkat dengan notch dan nav bar */
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://i.pinimg.com/736x/63/bf/ba/63bfbade1f11003424ec39c83c2d1a4e.jpg');
            background-size: cover;
            background-position: center;
            opacity: 0.4;
            z-index: -1;
        }

        .content {
            padding: 40px 20px;
            text-align: center;
        }

        .content h5 {
            color: white;
            margin-bottom: 20px;
        }

        .btn-warning {
            font-weight: bold;
        }
    </style>
    <!-- manifest -->
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#ffffff">

    <!-- icons (optional, agar muncul di layar utama saat install) -->
    <link rel="apple-touch-icon" href="/icons/icon-192x192.png">
    <meta name="mobile-web-app-capable" content="yes">
</head>

<body>
    <div class="content">
        <h5>Selamat datang di XDRAKOR,<br />Tempat Nonton Drama Korea Subtitle Indonesia</h5>
        <a href="#" class="btn btn-lg btn-warning btn-block">Get Started</a>
    </div>

    <script src="/muvnix/plugins/jquery/jquery.min.js"></script>
    <script src="/muvnix/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/sw.js')
                .then(reg => console.log('SW registered:', reg))
                .catch(err => console.error('SW registration failed:', err));
        }
    </script>
</body>

</html>