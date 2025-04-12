<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
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
    {{-- @laravelPWA --}}
</head>

<body>
    <div class="content">
        <h5>Selamat datang di XDRAKOR,<br />Tempat Nonton Drama Korea Subtitle Indonesia</h5>
        <a href="#" class="btn btn-lg btn-warning btn-block">Get Started</a>
    </div>

    <script src="/muvnix/plugins/jquery/jquery.min.js"></script>
    <script src="/muvnix/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if ("serviceWorker" in navigator) {
      navigator.serviceWorker.register("/sw.js").then(
      (registration) => {
         console.log("Service worker registration succeeded:", registration);
      },
      (error) => {
         console.error(`Service worker registration failed: ${error}`);
      },
    );
  } else {
     console.error("Service workers are not supported.");
  }
    </script>
</body>

</html>