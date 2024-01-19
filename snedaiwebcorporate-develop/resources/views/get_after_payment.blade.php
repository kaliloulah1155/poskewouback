 @extends('layouts.master')
  @section('content')
 <!-- ======= Hero Section ======= -->
      <div style="height: 100px">
          &nbsp;
       </div>
      <section id="hero" class="d-flex flex-column justify-content-center newdemand" style="height: auto">
         <div class="container" data-aos="zoom-in" data-aos-delay="100" >
            <h1 style="color: white">Nouvelle demande   </h1>
            <p  style="color: white"><span style="color: white" class="typed" data-typed-items="Contactez-nous sans hésiter !"></span></p>
            <div class="row mt-3">
               <div class="col-lg-8 mt-5 mt-lg-0" style="border-radius: 5px;padding-top: 20px;min-height:400px">
                  <div class="form-row" style="background: white;margin-left: unset;margin-right: unset;">
                    <div id="pre-enrollmentBanner" class="col-md-3 requestStep" > 1. Pré-enrôlement </div>
                    <div id="rdvBanner" class="col-md-3 requestStep"> 2. Rendez-vous </div>
                    <div id="confirmationBanner" class="col-md-3 requestStep"> 3. Confirmation </div>
                    <div id="paiementBanner" class="col-md-3 requestStepActivated"> 4. Paiement </div>
                  </div>
                  <ul class="steps">

                    <li style="display: none">Etape 1</li>
                    <li style="display: none">Etape 2</li>
                    <li style="display: none">Etape 3</li>
                    <li style="display: none">Etape 4</li>
                    <li style="display: none">Etape 5</li>
                    <li style="display: none" class="rdv">Etape 1</li>
                    <li style="display: none" class="rdv">Etape 2</li>
                    <li class="is-active pre-enrol"  class="confirmation">Notification</li>
                  </ul>
                  
                   {{-- <button class="js-open btn-open is-active" style="z-index: 100;height: 30px;display: block;background: #cacbdf">Show modal</button> --}}
                  <form id="passport_request_form" action="" method="post" role="form" class="php-email-form form-wrapper" style="position:relative">
                      {{-- preenrollement --}}
                       
                        <fieldset  class="section is-active">

                            <h4 style="color: #28285e;background: #28285e14;padding: 10px;">INFORMATION TRANSACTION  </h4>
                                @if ($status_id == 0|| $status_id == 6)
                                   <div class="form-row">
                                      <div class="col-md-12 form-group input_wrap">
                                         <p style="text-align: center;display: block;margin: 7px auto;color: red;">Echec du paiement</p>
                                        <p style="font-size: 14px;text-align: center;">Votre paiement n’a pas pu aboutir. Veuillez réessayer plus tard ou choisissez un autre moyen de paiement!</p>
                                      </div> 
                                    </div>
                                    <img style="width:25%" src="/assets/img/icon_erreur.png">
                                    <div class="form-row">
                                        <div class="col-md-6 form-group input_wrap" style="text-align: center;margin: 20px auto;">
                                         <a class="btn" style="background: #0463bb;border: 0;padding: 10px 35px;color: #fff;transition: 0.4s;border-radius: 5px;" href="/demande_passeport" >Nouvelle demande </a>
                                        </div>
                                    </div>
                                @endif

                                 @if ( $status_id == 2)
                                   <div class="form-row">
                                      <div class="col-md-12 form-group input_wrap">
                                         <p style="text-align: center;display: block;margin: 7px auto;color: red;">Echec du paiement</p>
                                        <p style="font-size: 14px;text-align: center;color: #4f639f;font-weight: 500;">Désolé, votre solde est insuffisant pour réaliser ce paiement !  .</p>
                                      </div> 
                                    </div>
                                    <img style="width:25%" src="/assets/img/icon_erreur.png">
                                    <div class="form-row">
                                        <div class="col-md-6 form-group input_wrap" style="text-align: center;margin: 20px auto;">
                                         <a class="btn" style="background: #0463bb;border: 0;padding: 10px 35px;color: #fff;transition: 0.4s;border-radius: 5px;" href="/demande_passeport" >Nouvelle demande </a>
                                        </div>
                                    </div>
                                @endif

                                 @if ($status_id == 5)
                                   <div class="form-row">
                                      <div class="col-md-12 form-group input_wrap">
                                         <p style="text-align: center;display: block;margin: 7px auto;color: red;">Echec du paiement</p>
                                        <p style="font-size: 14px;text-align: center;color: #4f639f;font-weight: 500;">Temps de paiement écoulé, veuillez réessayer ! </p>
                                        
                                      </div> 
                                    </div>
                                    <img style="width:25%" src="/assets/img/icon_erreur.png">
                                    <div class="form-row">
                                        <div class="col-md-6 form-group input_wrap" style="text-align: center;margin: 20px auto;">
                                         <a class="btn" style="background: #0463bb;border: 0;padding: 10px 35px;color: #fff;transition: 0.4s;border-radius: 5px;" href="/demande_passeport" >Nouvelle demande </a>
                                        </div>
                                    </div>
                                @endif


                                @if ($status_id == 1 && $fraude==1)
                                   <div class="form-row">
                                      <div class="col-md-12 form-group input_wrap">
                                         <p style="text-align: center;display: block;margin: 7px auto;color: red;">Echec de transaction</p>
                                        <p style="font-size: 14px;text-align: center;color: #4f639f;font-weight: 500;">les montants de paiement et de facturation sont incorrects! </p>
                                      </div> 
                                    </div>
                                    <img style="width:25%" src="/assets/img/icon_erreur.png">
                                    <div class="form-row">
                                        <div class="col-md-6 form-group input_wrap" style="text-align: center;margin: 20px auto;">
                                         <a class="btn" style="background: #0463bb;border: 0;padding: 10px 35px;color: #fff;transition: 0.4s;border-radius: 5px;" href="/demande_passeport" >Nouvelle demande </a>
                                        </div>
                                    </div>
                                @endif


                                @if ($status_id == 1 && $fraude==0)
                                 <div class="form-row">
                                      <div class="col-md-12 form-group input_wrap">
                                         <p style="text-align: center;display: block;margin: 7px auto;color: green;">Opération réussie !</p>
                                        <p style="font-size: 14px;text-align: center;color: #4f639f;font-weight: 500;">Cher demandeur de passeport ordinaire biométrique, votre demande a bien été prise en compte. Vous recevrez par mail les document relatifs à votre demande.</p>
                                      </div> 
                                    </div>

                                    <div  class="col-md-12 form-group input_wrap">
                                       <p style="font-size: 14px;text-align: center;">Voulez vous donner votre avis ?</p>
                                    </div>

                                    <div class="form-row">
                                            <div class="col-md-6 form-group input_wrap" style="text-align: center;margin: 20px auto;">
                                             <a class="btn" style="background: #0463bb;border: 0;padding: 10px 35px;color: #fff;transition: 0.4s;border-radius: 5px;min-width: 270px"  href="{{config('app.lien_avis')}}" target="_blank"  >DONNER SON AVIS</a>
                                            </div> 
                                            <div class="col-md-6 form-group input_wrap" style="text-align: center;margin: 20px auto;">
                                               <a class="btn" style="background: #0463bb;border: 0;padding: 10px 35px;color: #fff;transition: 0.4s;border-radius: 5px;min-width: 270px" href="/demande_passeport" >NE PAS DONNER SON AVIS  </a>
                                              </div>
                                        </div>

                                @endif
                            
                        </fieldset>
                  </form>

               </div>

            </div>

         </div>

        

        <div style="height: 300px">
          &nbsp;
         </div> 
      </section>
      <!-- End Hero -->

       
   @endsection

   @section('footer')

   <script type="text/javascript" src="/assets/js/demandes.js"></script>
 
   



  
   @endsection