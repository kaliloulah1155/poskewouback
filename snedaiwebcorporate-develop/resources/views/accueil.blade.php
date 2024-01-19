@extends('layouts.master')
  @section('content')
 <!-- ======= About Section ======= -->
    <!-- ======= Services Section ======= -->
     <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100" style="margin-top: -105px">
      <h1>Sur monpasseport.ci</h1>
      <p><span class="typed" data-typed-items="Faites vos pré-enrôlements en trois étapes, Préenrôlement. ,Prise de rendez-vous. , Paiement. ,  Gagnez du temps en toute simplicité, Simplifiez votre demande de passeport."></span></p>
     

    </div>

  </section>
  <!-- End Hero -->
  <main id="main">
  
      {{-- <p style="color:red">test AAAA</p> --}}

       <div style="margin-top: -100px;position: relative;float: right;margin-right: 100px;">
                {{-- <p style="height: 20px;color: #29285e;font-size: 11px;font-weight: bold;">Paiments possibles avec: </p> --}}
                 <img src="/assets/img/Visa.png" style="height: 37px" >
                 <img src="/assets/img/Mastercard.png" style="height: 37px" >
                 <img src="/assets/img/OM.png" style="height: 37px">
                 <img src="/assets/img/Momo.png" style="height: 37px">
                 <img src="/assets/img/Moov.png" style="height: 37px">
                  <img src="/assets/img/wave.png" style="height: 37px">
                 <img src="/assets/img/EcoBankPay.png" style="height: 37px">
             </div>   


    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="row">
               <div class="col-lg-4 col-md-6 d-flex align-items-stretch how" data-aos="zoom-in" data-aos-delay="100" style="cursor:pointer;">
            <div class="icon-box iconbox-blue"  style="min-width: 330px;">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a class="js-open btn-open" style="cursor: pointer;font-size: 16px;display: block;" >Comment faire une demande en ligne ?</a></h4>
             
            </div>
          </div>
          
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch sampling" data-aos="zoom-in" data-aos-delay="100" style="cursor:pointer;" >
            <div class="icon-box iconbox-yellow"  style="min-width: 330px;cursor: pointer;">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="bx bx-layer"></i>
              </div>
              <h4><a href="/sampling" style="font-size: 16px;">Sampling des docs à fournir</a></h4>
             
            </div>
          </div>
        

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch tuto_videos" data-aos="zoom-in" data-aos-delay="200" style="cursor:pointer;" >
            <div class="icon-box iconbox-red" style="min-width: 330px;">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                </svg>
                <i class="bx bx-slideshow"></i>
              </div>
              <h4><a href="/tuto_videos" style="font-size: 16px;">Tutos vidéos</a></h4>
             
            </div>
          </div>

         {{--  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="bx bx-arch"></i>
              </div>
              <h4><a href="">Autres docs à fournir</a></h4>
            </div>
          </div> --}}

        </div>

          <div class="wrap popop">
                                <div class="modal js-modal detailresult" style="position: relative;width: 95%;top:-275px;margin: 0 auto;background: #f7f7f7;box-shadow: rgb(0 0 0 / 17%) 0px 0px 35px 0px;">
                                  <h1 style="font-size: 40px;color: #f26e23;">Comment faire une demande de passeport !</h1>
                                  
                                  <p>
                                    <ul style="text-align: left;">
                                        <li> Connectez-vous à la plateforme <span style="font-weight:bold;color: #29285e;">www.monpasseport.ci</span> .</li>
                                        <li>Pour créer votre compte, cliquer sur le raccourci « je m’inscris » ou sur « vous n’avez pas de compte ? </li>
                                        <li>Pour vous connecter à votre profil, cliquez sur le raccourci « je me connecte » ou sur « avez-vous un compte ?</li>
                                        <li>Choisissez le cas de résidence en cliquant sur le raccourci « Demande de passeport » ou sur « faire une demande de passeport ».</li>
                                        <li>Pour vous Pré-enrôler, renseignez vos informations biographiques</li>
                                        <li>Choisissez la date et le créneau horaire de votre choix pour valider votre rendez-vous.</li>
                                        <li>Choisissez et validez votre moyen de paiement en payant les frais de passeport.</li>
                                    </ul>

                                  </p>
                              
                                  <button style="margin-top: 10px" class="js-close">Fermer</button>
                                </div>
                              </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>PARTENAIRES</h2>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

          <div class="testimonial-item">
            <img src="assets/img/partenaires/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Zetes</h3>
            {{-- <h4>Ceo &amp; Founder</h4> --}}
            <p>
           
          </div>

          <div class="testimonial-item">
            <img src="assets/img/partenaires/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Ecobank</h3>
            {{-- <h4>Designer</h4> --}}
          
          </div>

          <div class="testimonial-item">
            <img src="assets/img/partenaires/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>BGFI Banque</h3>
          
          </div>

          <div class="testimonial-item">
            <img src="assets/img/partenaires/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Banque Atlantique</h3>
           
          </div>

        </div>

      </div>

      {{-- <div id="ex1" class="modal" style="max-width: 80%!important;height:auto;padding: 0!important;overflow: initial;"> --}}

          <div id="ex1" class="modal" style="max-width: 50%!important;height:auto;padding: 0!important;overflow: initial; margin-top: 20px;">
            <img src="/images/VISU-CAMPAGNE-MARCORY.jpg" alt="" style="width: -webkit-fill-available; width: -moz-available; width: fill-available;">
          </div>

          
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">


          

          <div class="col-lg-4">

             <select id="selectCountry" name="selectCountry" class="form-control requiredField" style="margin-bottom: 20px;">
                    <option>Selectionner votre pays </option>
                    @foreach ($listePays as $pays)
                      <option value="{{$pays->idpays}}">{{$pays->libelle}}</option>
                    @endforeach
                   
             </select>
             <img id="loading" src="/assets/img/Ellipsis-1s-200px.gif" style="height: 30px;text-align: center;display: none;margin: 0 auto;">

            <div class="info" id="infocontact">

              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Plateau:</h4>
                <p>Sûreté nationale</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>contact@snedai.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Téléphone :</h4>
                <p>Bureau Plateau : +225 27 20 32 02 89</p>
                <p>Bureau Cocody : +225 27 22 41 38 39</p>
                <p>Bureau Marcory GFCI : +225 27 21 26 36 88</p>
                <p>Bureau Yopougon : +225 27 23 45 12 47</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

          </div>

          

        
        </div>
      </div>


    </section><!-- End Contact Section -->
  </main>
  @endsection
  @section('footer') 
  <script src="/assets/js/plugins/dynamics.js"></script>
  <script type="text/javascript" src="/modals/modals_customized.js"></script>
  <link href="/modals/modals.css" rel="stylesheet">
  <link href="/flash/flash.css" rel="stylesheet">
   <script type="text/javascript" src="/flash/flash.js"></script>
    <script src="/assets/js/sendEmail.js"></script>

     {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script> --}}


       <script type="text/javascript" src="/assets/externalsources/jquery-modal/jquery.modal.min.js"></script>

{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" /> --}}

<link rel="stylesheet" href="/assets/externalsources/cloudflare/jquery.modal.min.css" />
    <script>
        // $('#ex1').modal();
        $('#ex1').modal({
            fadeDuration: 250,
            fadeDelay: 0.80
          });
        setTimeout(function(){
            $.modal.close();
          }, 7000);
        
        $('.sampling').on('click',function(e){
          location.href='/sampling';
        });

       $('.tuto_videos').on('click',function(e){
          location.href='/tuto_videos';
        })

      
       
    </script>
  @endsection