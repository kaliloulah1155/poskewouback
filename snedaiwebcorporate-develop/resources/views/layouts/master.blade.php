
<?php
  //set headers 
  //header("Content-Security-Policy: frame-ancestors 'self'");
  header("X-frame-Options: SAMEORIGIN");
  header("X-Content-Type-Options: nosniff");
  header_remove("X-Powered-By");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

{{--   <meta http-equiv="Content-Security-Policy" content="default-src 'self'; img-src https://*; child-src 'none';" /> --}}

{{-- <meta http-equiv="Content-Security-Policy" content="default-src 'self'"> --}}

{{-- <meta http-equiv="Content-Security-Policy" content="frame-ancestors 'none'"> --}}





  <title>Monpasseport.ci - Accueil</title>
  <meta content="Monpasseport.ci " name="description">
  <meta content="Snedai, Monpasseport" name="keywords">
  <meta name="csrf-token" content="{{csrf_token()}}">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
 {{--  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}

 <link href="/assets/css/plugins/fonts.googleapis.com.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{mix('/assets/css/style.css')}}" rel="stylesheet">
  <link href="/assets/css/fonts.css" rel="stylesheet">

</head>

<body>
  
  @include('layouts.navigation')
  

 



   @yield('content')


  <!-- End #main -->



  <!-- ======= Footer ======= -->
    @include('layouts.footer')
  <!-- =======End Foote =======r -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  {{-- <script src="/assets/vendor/jquery/jquery.min.js"></script> --}}

  <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>


  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  {{-- <script src="/assets/vendor/php-email-form/validate.js"></script> --}}
  <script src="/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="/assets/vendor/counterup/counterup.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/venobox/venobox.min.js"></script>
  <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/assets/vendor/typed.js/typed.min.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
  <script src="{{mix('/assets/js/master.js')}}"></script>
  
<script type="text/javascript">console.log($.fn.jquery)</script>
   @yield('footer')

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60f5549ad6e7610a49abf582/1fav54v3g';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!--Start of chatbot kommunicate Script-->
<script type="text/javascript">
    (function(d, m){
        var kommunicateSettings = 
            {"appId":"1cf158ab60c99b2ba715b3ffb3bfda2a0","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */




</script>
<!--End of chatbot kommunicate Script-->

</body>

</html>