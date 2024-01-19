 @extends('layouts.master')
  @section('content')
 <!-- ======= Hero Section ======= -->
      <div style="height: 50px">
          &nbsp;
       </div>
      <section id="hero" class="d-flex flex-column justify-content-center newdemand" style="height: auto;" >
         <div class="container" data-aos="zoom-in" data-aos-delay="100" >
         {{--    <h1 style="color: white">Information   </h1>
            <p  style="color: white"><span style="color: white" class="typed" data-typed-items="Page non disponible !"></span></p> --}}
            <div class="row mt-3">
               <h1 style="color: #ff7121">Information  </h1>
            </div>
            <div style="height:30px">&nbsp;</div>
            <div class="row mt-3">
              
               <h1 style="color: white;line-height: 70px; font-size: 50px;">la page que vous recherchez n'est pas disponible. </h1>

            </div>
            <div class="row mt-3">
             <a style="background: #27285e;border-radius: 5px;color: white;width: 450px;font-size: 44px;text-transform: initial;font-family: 'Poppins', 'sans-serif';" class="nav-link js-scroll" href="/connexion">Retour à l'accueil </a>
            </div>

         </div>

        <div style="height: 300px">
          &nbsp;
         </div> 
      </section>
      <!-- End Hero -->

       
   @endsection

@section('footer') 
    
  <link href="/flash/flash.css" rel="stylesheet">
  <script type="text/javascript" src="/flash/flash.js"></script>
  <script src="/assets/js/sendEmail.js"></script>
  @endsection