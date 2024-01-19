
<!doctype html>

<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Snedai | Corporate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="/assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper  py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay" style="background: white"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5" style="background:white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden">
                            <div class="row justify-content-center g-0">
                                <div class="col-lg-6">

                                    <img src="/assets/images/login_corp_bg.png" style="width: 100%" alt="">
                                   {{--  <div class="p-lg-5 p-4 auth-one-bg h-100">
                                        <div class="bg-overlay"></div>
                                        <div class="position-relative h-100 d-flex flex-column">
                                            <div class="mb-4">
                                                <a href="index.html" class="d-block">
                                                    <img src="/assets/images/logo-light.png" alt="" height="18">
                                                </a>
                                            </div>
                                            <div class="mt-auto">
                                                <div class="mb-3">
                                                    <i class="ri-double-quotes-l display-4 text-success"></i>
                                                </div>

                                                <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <div class="carousel-inner text-center text-white-50 pb-5">
                                                        <div class="carousel-item active">
                                                            <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">" The theme is really great with an amazing customer support."</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end carousel -->
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        {{-- <div>
                                            <h5 class="text-primary">Lock Screen</h5>
                                            <p class="text-muted">Enter your password to unlock the screen!</p>
                                        </div> --}}
                                        <div class="user-thumb text-center">
                                            <img style="width: 150px;" src="/assets/images/logo_snedai.png"  alt="thumbnail">
                                            <h6 class="mt-3">Connectez vous a votre compte </h6>
                                        </div>

                                        <div class="mt-4" style="border: solid 1px #28285E;border-radius: 20px;overflow: hidden;height: 425px;width: 380px;margin: auto;">
    
                                            <div style="background:#28285E;height: 50px;">
                                                <p style="color:white;text-align: center;padding: 10px;">Connexion</p>
                                            </div>

                                            <img src="/assets/images/Icons_login.png" style="display: block;margin: 10px auto;height: 80px;">
                                            <form style="padding: 20px;">
                                                 <p  style="text-align: center;font-size: 10px;">Entrez vos coordonnées pour accéder à votre espace </p>
                                                <div class="mb-3">
                                                    
                                                    <input type="text" class="form-control" id="username" placeholder="Login">
                                                </div>

                                                <div class="mb-3">
                                                   
                                                    <div class="position-relative auth-pass-inputgroup mb-3">

                                                        <input type="password" class="form-control pe-5 password-input" placeholder="Mot de passe " id="password-input">


                                                        <button  class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>


                                                    </div>
                                                </div>

                                                 <div class="mt-2 text-center">
                                                    <p class="mb-0">Mot de passe oublié </p>
                                                 </div>

                                                <div class="mt-3">
                                                    <button style="width:80%;margin:5px auto;display:block;" class="btn btn-danger" type="submit">Se connecter</button>
                                                </div>

                                                 <div class="mt-3 text-center">
                                                   <p class="mb-0"> <a href="">Inscription</a></p>
                                                </div>

                                                
                                            </form><!-- end form -->
                                        </div>

                                       
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0">&copy;
                                <script>document.write(new Date().getFullYear())</script> Snedai Corportate  
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/libs/node-waves/waves.min.js"></script>
    <script src="/assets/libs/feather-icons/feather.min.js"></script>
    <script src="/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="/assets/js/plugins.js"></script>
</body>

</html>