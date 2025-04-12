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
            background-image: url('/images/getstarted.jpg');
            background-size: cover;
            background-position: center;
            opacity: 0.6;
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

        .text-bold {
            text-shadow: 0px 2px 5px rgba(0, 0, 0, 10);
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
        <h5 class="text-bold">Selamat datang di XDRAKOR,<br />Tempat Nonton Drama Korea Subtitle Indonesia</h5>
        <a href="/masuk" class="btn btn-lg btn-warning btn-block">Get Started</a>
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