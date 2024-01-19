 @extends('layouts.master')
  @section('content')
 <!-- ======= Hero Section ======= -->
      <div style="height: 100px">
          &nbsp;
       </div>
      <section id="hero" class="d-flex flex-column justify-content-center newdemand" style="height: auto;" >
         <div class="container" data-aos="zoom-in" data-aos-delay="100" >
            <h1 style="color: white">Mon espace perso </h1>
            <p  style="color: white"><span style="color: white" class="typed" data-typed-items="Contactez-nous sans hésiter !"></span></p>
            <div class="row mt-3">
               <div class="col-lg-4 mt-5 mt-lg-0" style="border-radius: 5px;padding-top: 5px;">
                     <div class="signin__menu is-visible">
                        <a class="signin__item" href="/espace_personnel" style="display: block;height: 100%;background: #e8eaf6">
                          <div class="signin__heading" >Espace personnel</div>
                          <p>Informations personnelles, Modifications mot de passe.</p>
                          <i class="far fa-arrow-right"></i>
                        </a>
                        <a class="signin__item" href="/historique_transaction" style=" display: block;height: 100%;">
                          <div class="signin__heading">Historiques </div>
                          <p>Codes rendez-vous, Recus de paiement</p>
                          <i class="far fa-arrow-right"></i>
                        </a>
                         <a class="signin__item" href="/statut_demande" style=" display: block;height: 100%;">
                          <div class="signin__heading">Statut demande </div>
                          <p>Voir le statut de votre demande</p>
                          <i class="far fa-arrow-right"></i>
                        </a>
                        <a class="signin__item" href="" style="display: block;height: 100%;">Mes notifications</a>
                    </div>
              </div> 

               <div class="col-lg-8 mt-5 mt-lg-0" style="border-radius: 5px;padding-top: 20px;min-height:400px">
               
                  <ul class="steps">
                  </ul>
                  
                 {{--  <button id="btntest" class="btn">test</button> --}}
                  <form autocomplete="off" action="" method="post" role="form" class="php-email-form form-wrapper" style="position:relative">
                        <fieldset class="section is-active" >
                          <div id="form_edit_user_info">
                             <h4 style="color: #28285e;background: #28285e14;padding: 10px;">INFO PERSONNELLES </h4>
                              

                          <div id="flash" class="flash" style="margin-bottom: 10px;">
                            <div role="alert" ng-show="hasFlash" class="alert  alert-dismissible alertIn alertOut ng-animate alert-danger"> 
                              <span dynamic="flash.text"><strong class="ng-scope">Erreur !</strong><span class="ng-scope ng-scope-msg"> Login incorrect! </span> </span> <button type="button" class="close" close-flash=""><span aria-hidden="true">×</span><span class="sr-only">Close</span></button> 
                            </div>
                          </div>

                              <div class="form-row">
                                 <div class="col-md-4 form-group" style="width:30%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">MR </label>
                                    <input type="radio" class="form-control" name="civility" value="m" style="width: 50%;display: inline;height: 25px;" @if (Session::get('civility')=='m') checked @endif> 
                                 </div>


                                 <div class="col-md-4 form-group" style="width:30%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">MME</label>
                                    <input type="radio" class="form-control invalid" name="civility" value="mme" style="width: 50%;display: inline;height: 25px;" @if (Session::get('civility')=='mme') checked @endif> 
                                 </div>
                                 <div class="col-md-4 form-group" style="width:30%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">MLLE</label>
                                    <input type="radio" class="form-control invalid" name="civility" value="mlle" style="width: 50%;display: inline;height: 25px;" @if (Session::get('civility')=='mlle') checked @endif> 
                                 </div>
                              </div>

                              <div class="form-row">
                                 <div class="col-md-6 form-group input_wrap">
                                    <input type="text" name="lastname" class="form-control locked requiredField maxlengh25" id="name" data-rule="minlen:4" data-msg="Entrer votre nom"   value="{{Session::get('lastname')}}"/>
                                    <label style="display: block;text-align: left;font-weight:600;">Nom <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                                 <div class="col-md-6 form-group input_wrap">
                                    <input type="text" class="form-control locked requiredField maxlengh25" name="firstname" id="firstname"  data-rule="minlen:10" data-msg="Entrer votre prénom" required value="{{Session::get('firstname')}}" />
                                    <label style="display: block;text-align: left;font-weight:600;" >Prénoms<span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                     
                                 </div>
                                 
                              </div>
                              <div class="form-row">
                                 <div class="col-md-6 form-group input_wrap">
                                    <input type="email" class="form-control locked requiredField" name="email" id="email" data-rule="email" data-msg="Entrer un email valide" required value="{{Session::get('email')}}" />
                                    <label style="display: block;text-align: left;font-weight:600;" >  Email   <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                                 <div class="col-md-6 form-group input_wrap">
                                    {{-- <span class="input-group-addon"><strong>225</strong></span> --}}


                                    <input style="width: 30%;float: left;margin-right: 27px" type="text" name="indicatif" class="form-control requiredField indicatif locked" id="indicatif" placeholder="" data-rule="minlen:4" data-msg="Entrer l'indicatif" required value="{{Session::get('telephone_code')}}" />
                                    <label style="text-align: left;">indicatif <span style="color: red">*</span></label>
                              
                             {{-- <span class="input-group-addon"><strong>225</strong></span> --}}
                                   {{--  <input style="width: 60%;float: left;" type="text" class="form-control requiredField usertel numberonly" name="usertel" id="userTel" data-rule="tel" data-msg="Entrer votre numéro de téléphone" required />
                                      <label style="display: block;text-align: left;left: 145px !important;" >Numéro de téléphone <span style="color: red">*</span></label> --}}




                                    <input style="width: 60%;float: left" type="text" class="form-control locked requiredField telReg" name="telephone" id="telephone"  data-rule="minlen:10" data-msg="Entrer un téléphone valide" required value="{{Session::get('msisdn')}}" />
                                    <label style="display: block;text-align: left;font-weight:600;left: 145px !important" > Téléphone  <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                              </div>
                              <div class="form-row">
                                 
                                <div class="col-md-12" >
                                  {{--  <a style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" id="edit_user_data" href=""><strong>MODIFIER</strong> </a> --}}


                                   <a id="edit_user_data" href="#" style="background: #f36e23" class="customBtn  progress-button" data-progress-button>
                                          <span class="progress-button-indicator"></span>
                                          <span class="progress-button-content">
                                              <span class="progress-button-before">MODIFIER</span>
                                              <span class="progress-button-after">PATIENTER</span>
                                              <span class="progress-button-spacer">PATIENTER</span>
                                          </span>
                                      </a>


                                </div>
                                 
                              </div>
                              </div>
                              <hr style="border: 1px dashed #9e9e9e !important;">

                                <h4 style="color: #28285e;background: #28285e14;padding: 10px;">MODIFICATION DE MOT DE PASSE </h4>

                                <div id="flash2" class="flash" style="margin-bottom: 10px;">
                                    <div role="alert" ng-show="hasFlash" class="alert  alert-dismissible alertIn alertOut ng-animate alert-danger"> 
                                      <span dynamic="flash.text"><strong class="ng-scope">Erreur !</strong><span class="ng-scope ng-scope-msg"> Login incorrect! </span> </span> <button type="button" class="close" close-flash=""><span aria-hidden="true">×</span><span class="sr-only">Close</span></button> 
                                    </div>
                                  </div>
                              <div id="form_edit_user_pass" class="form-row">
                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="password" class="form-control locked requiredField pass" name="password" id="password"  data-rule="minlen:8" data-msg="Mot de passe obligatoire " required  />
                                    <label style="display: block;text-align: left;font-weight:600;" >  Ancien mot de passe   <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                     <i style="font-size: 12px;top: 13px;" class="fa fa-eye-slash form-control-feedback affpwd"></i>
                                 </div>
                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="password" class="form-control locked requiredField pass" name="newpass" id="newpass" data-rule="minlen:8"  data-msg="Mot de passe obligatoire " required data-strength />
                                    <label style="display: block;text-align: left;font-weight:600;" >  Nouveau mot de passe   <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                     <i style="font-size: 12px;top: 13px;" class="fa fa-eye-slash form-control-feedback affpwd"></i>
                                 </div>
                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="password" class="form-control locked requiredField pass" name="confnewpass" id="confnewpass" data-rule="minlen:8" data-msg="Mot de passe obligatoire " required />
                                    <label style="display: block;text-align: left;font-weight:600;" >  Confirmation de mot de passe  <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                     <i style="font-size: 12px;top: 13px;" class="fa fa-eye-slash form-control-feedback affpwd"></i>
                                 </div>
                              </div>
                             
                              <div class="mb-2">
                                 <div class="error-message"></div>
                                 <div class="sent-message"></div>
                              </div>
                              <div class="form-row">
                                 
                                <div class="col-md-12" >
                                  {{--  <a style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" id="edit_user_pwd" href="#"> <strong>MODIFIER</strong></a> --}}

                                   <a id="edit_user_pwd" href="#" style="background: #f36e23" class="customBtn  progress-button" data-progress-button>
                                          <span class="progress-button-indicator"></span>
                                          <span class="progress-button-content">
                                              <span class="progress-button-before">MODIFIER</span>
                                              <span class="progress-button-after">PATIENTER</span>
                                              <span class="progress-button-spacer">PATIENTER</span>
                                          </span>
                                      </a>

                                </div>
                                 
                              </div>
                              <!-- <p style="font-size: 12px;font-weight: 600;"> Vous avez déjà un compte ? <span style="color: #f36e23">Connectez vous !</span> </p> -->
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
   <link href="/assets/css/hover_refresh.css" rel="stylesheet">
   {{-- <link href="/assets/css/application.css" rel="stylesheet"> --}}
   <link href="/flash/flash.css" rel="stylesheet">
   <script type="text/javascript" src="/flash/flash.js"></script>
   <script src="/assets/js/user_data.js"></script>
   <link href="/anim/anim_edit.css" rel="stylesheet">


   <script type="text/javascript">
      $("#confnewpass").addClass('read-only-txt');


 function passwordCheck(password) {
    if (password.length >= 8)
      strength += 1;

    if (password.match(/(?=.*[0-9])/))
      strength += 1;

    if (password.match(/(?=.*[!,%,&,@,#,$,^,*,?,_,~,<,>,])/))
      strength += 1;

    if (password.match(/(?=.*[a-z])/))
      strength += 1;

    if (password.match(/(?=.*[A-Z])/))
      strength += 1;

    displayBar(strength);
  }

  function displayBar(strength) {


        $("#confnewpass").addClass('read-only-txt');
     // $("#password-strength span").removeClass('pwd-strength-bar-orange');
     // $("#password-strength span").removeClass('pwd-strength-bar-red-tw');
     // $("#password-strength span").removeClass('pwd-strength-bar-red-ft');
     // $("#password-strength span").removeClass('pwd-strength-bar-red-st');
     // $("#password-strength span").removeClass('pwd-strength-bar-green');
    switch (strength) {
      case 1:
        // $("#password-strength span").css({
        //   "width": "20%",
        //   "background": "#de1616 !important"
        // });
        
        $("#password-strength span").addClass('pwd-strength-bar-red-tw');
          $("#password-strength span").removeClass('pwd-strength-bar-orange');
       // $("#password-strength span").removeClass('pwd-strength-bar-red-tw');
       $("#password-strength span").removeClass('pwd-strength-bar-red-ft');
       $("#password-strength span").removeClass('pwd-strength-bar-red-st');
       $("#password-strength span").removeClass('pwd-strength-bar-green');
        break;

      case 2:
        // $("#password-strength span").css({
        //   "width": "40%",
        //   "background": "#de1616"
        // });
         $("#password-strength span").addClass('pwd-strength-bar-red-ft');

          $("#password-strength span").removeClass('pwd-strength-bar-orange');
         $("#password-strength span").removeClass('pwd-strength-bar-red-tw');
         // $("#password-strength span").removeClass('pwd-strength-bar-red-ft');
         $("#password-strength span").removeClass('pwd-strength-bar-red-st');
         $("#password-strength span").removeClass('pwd-strength-bar-green');
        break;

      case 3:
        // $("#password-strength span").css({
        //   "width": "60%",
        //   "background": "#de1616"
        // });
         $("#password-strength span").addClass('pwd-strength-bar-red-st');

          $("#password-strength span").removeClass('pwd-strength-bar-orange');
     $("#password-strength span").removeClass('pwd-strength-bar-red-tw');
     $("#password-strength span").removeClass('pwd-strength-bar-red-ft');
     // $("#password-strength span").removeClass('pwd-strength-bar-red-st');
     $("#password-strength span").removeClass('pwd-strength-bar-green');
        break;

      case 4:
        // $("#password-strength span").css({
        //   "width": "80%",
        //   "background": "#FFA200"
        // });
         $("#password-strength span").addClass('pwd-strength-bar-orange');

          // $("#password-strength span").removeClass('pwd-strength-bar-orange');
     $("#password-strength span").removeClass('pwd-strength-bar-red-tw');
     $("#password-strength span").removeClass('pwd-strength-bar-red-ft');
     $("#password-strength span").removeClass('pwd-strength-bar-red-st');
     $("#password-strength span").removeClass('pwd-strength-bar-green');
        break;

      case 5:
        // $("#password-strength span").css({
        //   "width": "100%",
        //   "background": "#06bf06"
        // });
         $("#password-strength span").addClass('pwd-strength-bar-green');

         $("#confnewpass").removeClass('read-only-txt');

          $("#password-strength span").removeClass('pwd-strength-bar-orange');
           $("#password-strength span").removeClass('pwd-strength-bar-red-tw');
           $("#password-strength span").removeClass('pwd-strength-bar-red-ft');
           $("#password-strength span").removeClass('pwd-strength-bar-red-st');
     // $("#password-strength span").removeClass('pwd-strength-bar-green');

        break;

      default:
        $("#password-strength span").css({
          "width": "0",
          "background": "#de1616"
        });
    }
  }
  $("[data-strength] ~ label").after("<div id=\"password-strength\" class=\"strength\"><span></span></div>")

  $("[data-strength]").focus(function() {
    $("#password-strength").css({
      "height": "7px"
    });
  }).blur(function() {
    $("#password-strength").css({
      "height": "0px"
    });
  });

  $("[data-strength]").keyup(function() {
    strength = 0;
    var password = $(this).val();
    passwordCheck(password);
  });
   </script>




   @endsection