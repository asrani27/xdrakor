<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover">
    <title>DRAKORINDO - Nonton Drama Korea Subtitle Indonesia</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <link rel="stylesheet" href="/muvnix/plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="/muvnix/dist/css/adminlte.min.css" />

    @stack('css')
    <link rel="stylesheet" href="/notif/dist/css/iziToast.min.css">
    <script src="/notif/dist/js/iziToast.min.js" type="text/javascript"></script>
    <style>
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
    </style>
</head>

<body class="hold-transition login-page"
    style="background: rgb(188, 88, 60); background: linear-gradient(48deg, rgb(188, 60, 60) 0%, rgb(249, 197, 187) 100%);">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-header text-center">
                <a href="/" class="h1"><b>XDRAKOR</b></a>
            </div>
            <div class="card-body">
                <form action="/masuk" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="email" minlength="16" maxlength="16"
                            name="email" autocomplete='new-password' required>
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
                        <div class="col-12 text-center">
                            <button type="submit" class="btn bg-gradient-purple btn-block">Log In</button>
                            <strong>OR </strong><br />
                            <a href="https://rekrutmen.banjarmasinmemanggil.com/oauth/google"
                                class="btn btn-outline-dark btn-block">

                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16"
                                    viewBox="0 0 16 16">
                                    <path fill="#f78f8f"
                                        d="M1.644,3.675C2.932,1.707,5.139,0.5,7.5,0.5c1.507,0,2.973,0.496,4.184,1.405l-1.438,1.438 C9.421,2.79,8.48,2.5,7.5,2.5c-1.77,0-3.39,0.936-4.286,2.431L1.644,3.675z">
                                    </path>
                                    <path fill="#c74343"
                                        d="M7.5,1c1.205,0,2.383,0.342,3.405,0.977L10.172,2.71C9.353,2.243,8.443,2,7.5,2 C5.747,2,4.127,2.835,3.103,4.202l-0.78-0.624C3.544,1.97,5.46,1,7.5,1 M7.5,0C4.709,0,2.279,1.528,0.987,3.79l2.391,1.913 C4.073,4.113,5.655,3,7.5,3c1.063,0,2.027,0.384,2.797,1l2.133-2.133C11.111,0.711,9.392,0,7.5,0L7.5,0z">
                                    </path>
                                    <path fill="#f78f8f"
                                        d="M2.59,5.072C3.419,3.401,5.054,2.201,7,2.025v-1C4.738,1.198,2.803,2.528,1.779,4.423L2.59,5.072z">
                                    </path>
                                    <path fill="#ffeea3"
                                        d="M1.048,10.208C0.684,9.35,0.5,8.441,0.5,7.5c0-0.244,0.013-0.484,0.038-0.722 c0.08-0.772,0.286-1.516,0.613-2.217l1.628,1.302C2.594,6.392,2.5,6.941,2.5,7.5c0,0.509,0.079,1.013,0.235,1.503L1.048,10.208z">
                                    </path>
                                    <path fill="#ba9b48"
                                        d="M1.361,5.369L2.199,6.04C2.067,6.516,2,7.004,2,7.5c0,0.439,0.053,0.874,0.159,1.301l-0.868,0.62 C1.097,8.802,1,8.16,1,7.5c0-0.224,0.012-0.449,0.035-0.67C1.087,6.329,1.196,5.841,1.361,5.369 M0.987,3.79 C0.483,4.673,0.15,5.666,0.04,6.727C0.014,6.981,0,7.239,0,7.5c0,1.25,0.31,2.427,0.851,3.463L3.334,9.19 C3.122,8.667,3,8.099,3,7.5c0-0.64,0.138-1.246,0.378-1.797L0.987,3.79L0.987,3.79z">
                                    </path>
                                    <path fill="#ffeea3"
                                        d="M2.502,9.785C2.183,9.088,2,8.316,2,7.5c0-0.877,0.225-1.693,0.59-2.428l-0.81-0.648 C1.285,5.339,1,6.385,1,7.5c0,1.033,0.247,2.006,0.676,2.874L2.502,9.785z">
                                    </path>
                                    <path fill="#bae0bd"
                                        d="M7.5,14.5c-2.47,0-4.728-1.289-5.993-3.39l1.635-1.168C4.018,11.514,5.668,12.5,7.5,12.5 c0.977,0,1.912-0.285,2.727-0.827L11.818,13C10.586,13.971,9.073,14.5,7.5,14.5z">
                                    </path>
                                    <path fill="#5e9c76"
                                        d="M3,10.658C4.013,12.11,5.675,13,7.5,13c0.951,0,1.865-0.244,2.683-0.713l0.818,0.682 C9.96,13.64,8.751,14,7.5,14c-2.137,0-4.105-1.04-5.313-2.762L3,10.658 M3.334,9.19l-2.483,1.774C2.103,13.361,4.608,15,7.5,15 c1.969,0,3.755-0.765,5.093-2.006l-2.345-1.954C9.49,11.636,8.542,12,7.5,12C5.613,12,4.003,10.836,3.334,9.19L3.334,9.19z">
                                    </path>
                                    <g>
                                        <path fill="#bae0bd"
                                            d="M11.044,11.703C10.086,12.511,8.851,13,7.5,13c-2.221,0-4.13-1.32-4.998-3.215l-0.825,0.589 C2.738,12.52,4.943,14,7.5,14c1.66,0,3.17-0.628,4.318-1.651L11.044,11.703z">
                                        </path>
                                    </g>
                                    <g>
                                        <path fill="#8bb7f0"
                                            d="M11.014,11.028c0.53-0.528,0.933-1.162,1.182-1.86L12.433,8.5H7.5v-2h6.929 c0.047,0.332,0.071,0.666,0.071,1c0,1.817-0.684,3.513-1.935,4.82L11.014,11.028z">
                                        </path>
                                        <path fill="#4e7ab5"
                                            d="M13.981,7C13.994,7.166,14,7.333,14,7.5c0,1.53-0.522,2.966-1.486,4.127l-0.779-0.649 c0.404-0.49,0.719-1.045,0.932-1.643L13.141,8h-1.417H8V7H13.981 M14.849,6H7v3h4.724c-0.29,0.815-0.811,1.516-1.476,2.04 l2.345,1.954C14.07,11.625,15,9.673,15,7.5C15,6.986,14.948,6.485,14.849,6L14.849,6z">
                                        </path>
                                    </g>
                                    <path fill="#8bb7f0"
                                        d="M11.044,11.703l0.775,0.646C13.154,11.158,14,9.43,14,7.5c0-0.169-0.013-0.334-0.025-0.5h-1 C12.99,7.165,13,7.331,13,7.5C13,9.187,12.239,10.694,11.044,11.703z">
                                    </path>
                                </svg> &nbsp;
                                Login Via Google
                            </a>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

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