 @extends('layouts.master')
  @section('content')
 <!-- ======= Hero Section ======= -->
      <div style="height: 100px">
          &nbsp;
       </div>
      <section id="hero" class="d-flex flex-column justify-content-center newdemand" style="height: auto">
         <div class="container" data-aos="zoom-in" data-aos-delay="100" >
            <h1 style="color: white">Modification de Rendez-vous   </h1>
            <p  style="color: white"><span style="color: white" class="typed" data-typed-items="Contactez-nous sans hésiter !"></span></p>
            <div class="row mt-3">
               <div class="col-lg-8 mt-5 mt-lg-0" style="border-radius: 5px;padding-top: 20px;min-height:500px">
                  <div class="form-row" style="background: white;margin-left: unset;margin-right: unset;">
                   
                    <div id="rdvBanner" class="col-md-4 requestStepActivatedDiasp"> 1. Rendez-vous </div>
                    <div id="confirmationBanner" class="col-md-4 requestStep"> 2. Confirmation </div>
                    <div id="paiementBanner" class="col-md-4 requestStep"> 3. Paiement </div>
                  </div>
                  <ul class="steps diasp">
                   
                    <li  class="rdv is-active">Etape 1</li>
                    <li  class="rdv">Etape 2</li>
                    <li style="display: none" class="confirmation">Etape 1</li>
                  </ul>
                  
                   {{-- <button class="js-open btn-open is-active" style="z-index: 100;height: 30px;display: block;background: #cacbdf">Show modal</button> --}}
                  <form id="passport_request_form" action="" method="post" role="form" class="php-email-form form-wrapper" style="position:relative;background: white" autocomplete="off">
                      {{-- preenrollement --}}
                      @csrf

                         {{-- preenrollement --}}
                         <fieldset id="step_six" class="section is-active">

                            <h4 style="color: #28285e;background: #28285e14;padding: 10px;">MODIFIER MON RENDEZ-VOUS    </h4>

                            <div class="form-row form-rdvcode" style="margin-top: 50px;margin-bottom: 50px">
                                <div class="col-md-12" style="margin-bottom:10px">
                                    <span style="font-weight:bold;">La modification de rendez-vous en ligne est gratuite 48 heures avant votre date de rendez-vous. Passé ce délai, toute modification de rendez-vous est soumise à un paiement de 10 euros</span>
                                </div>
                                 <div class="col-md-6 form-group input_wrap" style="margin: 0 auto">
                                   
                                       <input type="text" class="form-control requiredField " name="coderdv" id="coderdv" data-rule="minlen:9" data-msg="Entrer code valide" required />
                                       <label style="display: block;text-align: left;font-weight:600;" > Ancien code rendez-vous <span style="color: red">*</span></label>
                                      <p style="margin-top: 0px;text-align: right; font-size: 12px; cursor: pointer"><a href="/docs/passport_rdv_receipt.pdf" target="_blank" style="cursor: pointer;color: #28285e;text-decoration: none;font-size: 10px;">Où Récupérer le code RDV ? <img src="/assets/img/DownloadPdf.svg" alt="recup code rdv" width="16" /></a></p>
                                       <div class="validate"></div>
                                 </div>
                              </div>

                                
                              <div class="form-row checkresponse" style="margin-bottom: 50px;display: none;">
                                <div class="col-md-8 form-group input_wrap" style="margin: 10px auto">
                                    <p id="msgCheck" style="font-size: 14px">Votre code est valide mais le rdv est échu. Voulez vous vraiment modifier votre rendez vous ?</p>
                                   
                                   <div class="row" style="margin-top: 20px">
                                     <div class="col-md-6">
                                          <a href="#" id="mustpay" style="background: #28285e;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_next">OUI </a>
                                       </div>
                                       <div class="col-md-6">
                                          <a id="closecheck_resp" href="#" style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block">NON </a>
                                       </div>
                                   </div>     
                                 </div>
                              </div>


                            <div class="form-row ">
                                    <div class="col-md-6" style="width:50%">
                                          <a href="/"  style="background: #29285e;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" >ACCUEIL</a>
                                    </div>
                                    <div class="col-md-6" style="width:50%">
                                       {{--  <a href="#" id="check_rdv_code" style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_next">VERIFIER LE CODE </a>
                                        <br> --}}
                                        <a id="check_rdv_code" href="#" style="background: #29285e" class="customBtn button_next progress-button" data-progress-button data-button-svg="Animated SVG">
                                          <span class="progress-button-indicator"></span>
                                          <span class="progress-button-content">
                                              <span class="progress-button-before">VERIFIER LE CODE</span>
                                              <span class="progress-button-after">VERIFICATION</span>
                                              <span class="progress-button-spacer">VERIFICATION</span>
                                          </span>
                                      </a>
                                      <a id="moov_on_to_calendar" class="button_next" href=""></a>
                                    </div>
                              </div>
                         </fieldset>

                        <fieldset id="step_seven" class="section ">

                            <div class="form-row " style="margin-top:20px">
                                 <div class="col-md-6 form-group" style="width:50%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">RESTER SUR LE MEME SITE</label>
                                    <input type="radio" class="form-control" name="choixsite" value="samesite" style="width: 50%;display: inline;height: 25px;" checked > 
                                 </div>
                                 <div class="col-md-6 form-group" style="width:50%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">CHANGER DE SITE </label>
                                    <input type="radio" class="form-control " name="choixsite" value="newsite"  style="width: 50%;display: inline;height: 25px;"> 
                                 </div>
                               </div>

                            <div id="oldrdvinfo">      
                                <h5 style="color: black;background: #28285e14;">ANCIEN RDV </h5>

                                <div class="form-row">
                                     <div class="col-md-12 form-group input_wrap" style="background: #e7e7e79c; padding: 5px;margin-bottom: 5px">
                                      <p style="font-size: 13px;text-align: left;margin-top: 0px;"> <span style="color: #f36e23;margin-right: 30px;font-weight: 500">Site: </span> <span id="lieurdv" style="color: black;font-weight: 500;">E-PASSEPORT, Cocody 2 plateaux Angré Terminus 81-82</span> </p>
                                     </div>

                                     <div class="col-md-12 form-group input_wrap" style="background: #e7e7e79c; padding: 5px;">
                                      <p style="font-size: 13px;text-align: left;margin-top: 0px;">  <span style="color: #f36e23;margin-right: 30px;font-weight: 500"> Date et Heure: </span> <span id="dateHrdv" style="color: black;font-weight: 500;">09/04/2021 18H00-20H00</span> </p>
                                     </div>
                                </div> 
                            </div>
                            <h4 style="color: #28285e;background: #28285e14;padding: 10px;">NOUVEAU RDV </h4>



                            <div class="form-row" id="site_selecter" style="display:none">
                                         <div class="col-md-6 form-group input_wrap">
                                            <select id="formulerdv_diapo"  class="form-control requiredField" name="formulerdv_diapo" data-rule="minlen:6" data-msg="selectionner le type de pièce">
                                               <option value="0" disabled selected>Veuillez selectionner une formule</option>
                                              @foreach ($formules as $formule) 
                                                  {{-- <option value="{{$formule['id_formule']}}">{{$formule['nom_formule']}}</option> --}}
                                                  <option data-mnt-formule="{{$formule['montant_rdv']}}" value="{{$formule['id_formule']}}">{{$formule['nom_formule']}}</option>
                                              @endforeach
                                            
                                            </select>
                                            <label style="display: block;text-align: left;font-weight:600;" > Formules<span style="color: red">*</span></label>
                                            <div class="validate"></div>
                                         </div>

                                         <div class="col-md-6 form-group input_wrap">
                                            <select class="form-control requiredField" name="siterdv" id="siterdv" data-rule="minlen:6" data-msg="selectionner le type de pièce" disabled>
                                              <option value="0" disabled selected>Veuillez selectionner le site d'enrôlement </option>
                                            </select>
                                            <label style="display: block;text-align: left;font-weight:600;" > Site d'enrôlement<span style="color: red">*</span></label>
                                            <div class="validate"></div>
                                         </div>

                                         <div id="spinner" class="col-md-12 form-group input_wrap" style="margin-bottom: 0px;margin-top: -20px;display: none">
                                         <span>Patientez</span> <img src="/assets/img/Ellipsis-1s-200px.gif" style="height: 45px">
                                        </div>
                                    </div>
                             
                                 <div class="col-md-12 form-group" >
                                    <div id="calendar"></div>
                                 </div>
                            <div class="form-row ">
                                    <div class="col-md-12">
                                          <a href="#" id="back_to_stepO_rdv" style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_prev" >PRECEDENT</a>
                                    </div>
                              </div>
                        </fieldset>


                         <fieldset id="step_eight" class="section ">

                            <h4 style="color: #28285e;background: #28285e14;padding: 10px;">CONFIRMATION </h4>

                            <div class="form-row " style="margin-top: 30px">


                                    <table class="col-md-12" >
                                     <tr style="background: #babacb;color: black">
                                       <th>LIBÉLLÉ</th>
                                       <th>MONTANT</th>
                                     </tr> 
                                      


                                        <tr style="border:dashed 2px #575288">
                                          <td style="font-weight: bold;">Reçu de paiement</td>
                                          <td style="font-weight: bold;">{{$montant_recu_p}} FCFA</td>
                                        </tr>
                                        <tr style="border:dashed 2px #575288">
                                          <td style="font-weight: bold;">Frais de transaction(digitale)  </td>
                                          <td style="font-weight: bold;">{{$frais_transac_dig}} FCFA</td>
                                        </tr>


                                        <tr style="border:dashed 2px #575288">
                                          <td style="font-weight: bold;">Frais Service(prise de RDV) </td>
                                          <td style="font-weight: bold;">{{$frais_serv_rdv}} FCFA</td>
                                        </tr>
                                          <tr style="border: dashed 2px #575288;background: #28285e;color: white;">
                                          <td style="font-weight: bold;">TOTAL </td>
                                          <td style="font-weight: bold;">{{$montant_recu_p + $frais_serv_rdv + $frais_transac_dig}} FCFA</td>
                                        </tr>
                                    </table>

                                   <div class="col-md-12" style="margin-bottom: 40px">
                                      <p style="font-size: 10px">
                                        Vous vous apprêtez à finaliser votre demande passeport biométrique, vous serez débité de <span style="color: #f36e23;font-weight: bold;"> {{$montant_recu_p + $frais_serv_rdv + $frais_transac_dig}} F CFA*</span> relatif aux frais de paiement passeport biométrique et de la prise RDV.
                                      </p>
                                   </div>



                            </div>
                            <div class="form-row ">
                                    <div class="col-md-6">
                                          <a id="back_to_rdv" href="#"  style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_prev" >PRECEDENT</a>
                                    </div>
                                    <div class="col-md-6" style="width:50%">
                                        <a href="#" id="payforedit" style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block">VALIDER</a>
                                    </div>
                              </div>
                        </fieldset>



                          <fieldset id="step_nine" class="section">

                            <h4 style="color: #28285e;background: #28285e14;padding: 10px;">CONFIRMATION </h4>

                            <div class="form-row " style="margin-top: 30px">


                                    <table class="col-md-12" >

                                        <tr style="background: #babacb;color: black">
                                           <th>LIBÉLLÉ</th>
                                           <th>INFO</th>
                                        </tr> 
                                          


                                        <tr style="border:dashed 2px #575288">
                                          <td style="font-weight: bold;text-align: left;padding-left: 10px;color: #f46e23;">CODE RDV</td>
                                          <td style="font-weight: bold;"><span id="coderdv_disp">...</span></td>
                                        </tr>

                                        <tr style="border:dashed 2px #575288">
                                          <td style="font-weight: bold;text-align: left;padding-left: 10px;color: #f46e23;">SITE </td>
                                          <td style="font-weight: bold;"><span id="siterdv_todisplay">...</span></td>
                                        </tr>


                                        <tr style="border:dashed 2px #575288">
                                          <td style="font-weight: bold;text-align: left;padding-left: 10px;color: #f46e23;">DATE ET HEURE </td>
                                          <td style="font-weight: bold;"><span id="daterdv">...</span></td>
                                        </tr>
                                         
                                    </table>

                            </div>
                            <div class="form-row " style="margin-top:20px">
                                    <div class="col-md-6">
                                          <a id="back_to_rdv" href="#"  style="background: #28285e;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_prev" >PRECEDENT</a>
                                    </div>
                                    <div class="col-md-6" style="width:50%">

                                          <a id="confirmEditRdv" href="#" style="background: #f36e23" class="customBtn  progress-button" data-progress-button>
                                                    <span class="progress-button-indicator"></span>
                                                    <span class="progress-button-content">
                                                        <span class="progress-button-before">VALIDER</span>
                                                        <span class="progress-button-after">PATIENTER</span>
                                                        <span class="progress-button-spacer">PATIENTER</span>
                                                    </span>
                                                </a>


                                    </div>
                              </div>
                        </fieldset>


                        <fieldset id="step_ten" class="section" style="background:white">
                              <h4 style="color: #28285e;background: #28285e14;padding: 10px;">INFORMATION </h4>
                              <div class="form-row">
                                      <div class="col-md-12 form-group input_wrap" id="sucessmsg">
                                         <p style="text-align: center;display: block;margin: 7px auto;color: green;">Opération réussie !</p>
                                        <p style="font-size: 14px;text-align: center;">Cher demandeur de passeport ordinaire biométrique, la modification de votre rendez-vous à été enregistrée.</p>
                                      </div> 

                                      <div class="col-md-12 form-group input_wrap" id="errormsg" style="display:none">
                                         <p style="text-align: center;display: block;margin: 7px auto;color: red;">Opération échouée !</p>
                                        <p style="font-size: 14px;text-align: center;">Cher demandeur de passeport ordinaire biométrique, la modification de votre rendez-vous a échoué.</p>
                                      </div> 
                                    </div>

                                    <div class="form-row">
                                            <div class="col-md-6 form-group input_wrap" style="text-align: center;margin: 0 auto;">
                                               <a class="btn" style="background: #0463bb;border: 0;padding: 10px 35px;color: #fff;transition: 0.4s;border-radius: 5px;min-width: 270px" href="/" >ACCUEIL </a>
                                              </div>
                                        </div>
                        </fieldset>


                         <fieldset id="step_ten" class="section" style="background:white">
                              <h4 style="color: #28285e;background: #28285e14;padding: 10px;">INFORMATION </h4>
                              <div class="form-row">
                                      <div class="col-md-12 form-group input_wrap">
                                         <p style="text-align: center;display: block;margin: 7px auto;color: red;">Operation échouée !</p>
                                        <p style="font-size: 14px;text-align: center;">Cher demandeur de passeport ordinaire biométrique, la modification de votre rendez-vous a échoué, veuillez réessayer plutard.</p>
                                      </div> 
                                    </div>

                                    <div class="form-row">
                                            <div class="col-md-6 form-group input_wrap" style="text-align: center;margin: 0 auto;">
                                               <a class="btn" style="background: #0463bb;border: 0;padding: 10px 35px;color: #fff;transition: 0.4s;border-radius: 5px;min-width: 270px" href="/" >ACCUEIL </a>
                                              </div>
                                        </div>
                        </fieldset>




                        {{-- pop up  --}}
                        <a id="popca" class="js-openCa btn-open is-active" style="z-index: 100;height: 30px;;background: #cacbdf; display: none;">Show modal</a>

                         <div class="wrap popop">
                          <div class="modal js-modal" style="position: relative;width: 95%;top:20px;margin: 0 auto;background: #cacbdf">
                              <div id="heures_rdv">
                                <h4 style="font-size: 40px">Prise de RDV</h4>
                              </div>
                          </div>
                         </div>

                         <div class="modal js-modalCa loadingcalendar" style="width: 60%;margin: 0 auto;background: #fff;padding: 2em 1em;height: 85%;z-index: 1000;top: 350px;left: 40px;">
                                  
                                  <div style="margin-top: 100px;">
                                         <h4 style="font-size: 25px;text-align: center;">Veuillez Patienter ...</h4>
                                  </div>
                                  <a class="close js-closeCa"></a>
                         </div>


                  </form>


                <form id="finalrequest" method="POST" action = "{{config('AppConfig.get_way_order_url_diasp')}}">
                        @csrf
                                              <input type="hidden" name="currency" value="EUR"/>
                                              <input type="hidden" name="operation_token" value="{{config('AppConfig.get_way_order_token_diasp')}}"/>
                                              <input type="hidden" id="ordersent" name="order" value="Y4U465J3455N687C"/>
                                              <input type="hidden" id="sentamount" name="transaction_amount" value=""/>
                                              <input type="hidden" id="jwt" name="jwt" value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ4aDlOVy1nbmgxa3FNQ0Mt RFNKViIsImV4cCI6MTUwOTEyMDQyNSwiaXNzIjoiSFVCIiwiaWF0IjoxNTA5MDM0M DI1LCJhdWQiOiJFLWFnZW5jZSJ9.9BQNlLJ2v1dAAbuBISOTBvWkBBmfOUXsVMa Z2qCUcYY"/>
                                             <input id="finalrequestbtn" type="submit" name="submit" value="envoyer" style="display: none" >
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

   <script type="text/javascript">
    // global variable 
       var selected_date = '';   
       var data_rdv_array =  '';
       var lieurdv  = '';
       var sitecode  ='';
       var telephone = '';
       var email = '';
       var site_code_with_name  = '';
       var mustpay='mustpay';
       var codeRDV='';
       var meeting_type="passport_foreign";
       var timecode='';
       var timevalue='';
       var rdv_payant =0;
       var selectedsiterdv ='';
        // $("#finalrequestbtn").trigger('click');
   </script>


   <script type="text/javascript" src="/assets/js/plugins/moment.min.js"></script>
   <script type="text/javascript" src="/assets/js/plugins/moment-recur.min.js"></script>
   <script type="text/javascript" src="{{mix('/assets/js/modif_rdv.js')}} "></script>
   <script type="text/javascript" src="/assets/js/calendar_edit_rdv_diasp.js"></script>
   <link rel="stylesheet" type="text/css" href="/assets/css/calendar_style.css"/>
   <script src="/assets/js/plugins/dynamics.js"></script>
    
   <script type="text/javascript" src="/assets/js/form_validation.js"></script>
   <script type="text/javascript" src="/modals/modals_customized.js"></script>
   <link href="/modals/modals.css" rel="stylesheet">
   
   <script type="text/javascript">


     $(document).on('click','.js-close', function(e){

        $("#back_to_stepO_rdv").removeClass('not-active');
        $("#calendar").css('display','block');
        var newheight = $('#passport_request_form').height();
        $('#passport_request_form').height( newheight- 30)
                        
    })

     $('#back_to_stepO_rdv').on('click',function(e){
        e.preventDefault();
     })

   </script>
   
   <style type="text/css">
     .form-control{
        text-transform:uppercase;
      }
   </style>



   <script>
       
 var btnOpen = select('.js-openCa');
 var btnClose = select('.js-closeCa');
//var modal = $(".js-modal");
var modal = select('.js-modalCa');
var modalChildren = modal.children;

function hideModal() {
    dynamics.animate(modal, {
        opacity: 0,
        translateY: 100
    }, {
        type: dynamics.spring,
        frequency: 50,
        friction: 600,
        duration: 1500
    });
}

function showModal() {
    // Define initial properties
    dynamics.css(modal, {
        opacity: 0,
        scale: .5
    });

    // Animate to final properties
    dynamics.animate(modal, {
        opacity: 1,
        scale: 1
    }, {
        type: dynamics.spring,
        frequency: 300,
        friction: 400,
        duration: 1000
    });
}

function showBtn() {
    dynamics.css(btnOpen, {
        opacity: 0
    });

    dynamics.animate(btnOpen, {
        opacity: 1
    }, {
        type: dynamics.spring,
        frequency: 300,
        friction: 400,
        duration: 800
    });
}

function showModalChildren() {
    // Animate each child individually
    for (var i = 0; i < modalChildren.length; i++) {
        var item = modalChildren[i];

        // Define initial properties
        dynamics.css(item, {
            opacity: 0,
            translateY: 30
        });

        // Animate to final properties
        dynamics.animate(item, {
            opacity: 1,
            translateY: 0
        }, {
            type: dynamics.spring,
            frequency: 300,
            friction: 400,
            duration: 1000,
            delay: 100 + i * 40
        });
    }
}

function toggleClasses() {
   // toggleClass(btnOpen, 'is-active');
    toggleClass(modal, 'is-active');
}

// Open nav when clicking sandwich button
// btnOpen.addEventListener('click', function(e) {
//     toggleClasses();
//     showModal();
//     showModalChildren();
// });


$(document).on('click','.js-openCa', function(e){

    toggleClasses();
    showModal();
    showModalChildren();
})

$(document).on('click','.js-closeCa', function(e){
    e.preventDefault();
   hideModal();
    dynamics.setTimeout(toggleClasses, 500);
    dynamics.setTimeout(showBtn, 500);
})


// Open nav when clicking sandwich button
// btnClose.addEventListener('click', function(e) {
//     hideModal();
//     dynamics.setTimeout(toggleClasses, 500);
//     dynamics.setTimeout(showBtn, 500);
// });


// 



// hasClass
function hasClass(elem, className) {
  return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}

// toggleClass
function toggleClass(elem, className) {
  var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
  if (hasClass(elem, className)) {
    while (newClass.indexOf(' ' + className + ' ') >= 0) {
      newClass = newClass.replace(' ' + className + ' ', ' ');
    }
    elem.className = newClass.replace(/^\s+|\s+$/g, '');
  } else {
    elem.className += ' ' + className;
  }
}

// select
function select(selector) {
  var elements = document.querySelectorAll(selector);

  if (elements.length > 1) {
    return elements;
  } else {
    return elements.item(0);
  }
}// External JS: JS Helper Functions
// External JS: Dynamics JS




</script>
  
   @endsection