 @extends('layouts.master')
  @section('content')
	<section id="hero" class="d-flex flex-column justify-content-center inscription">


	    <div class="container" data-aos="zoom-in" data-aos-delay="100"  style="margin-top: 80px;">
	    	 {{-- <button id="iterateEffects" class="pt-touch-button">Show next page transition</button> --}}
			      <h1 style="color: white">Mot de passe oublié  </h1>
			      <p  style="color: white"><span style="color: white" class="typed" data-typed-items="Pour une prise en main facile et intuitive, Et bénéficiez de la réactivité de nos services"></span></p>
			      <div class="row mt-3">
			      	{{-- <button id="iterateEffects" class="pt-touch-button">Show next page transition</button> --}}
			      	<button id="launchanimation" class="pt-touch-button" style="width: 25%;display: none">lancer animation</button>
			      	{{-- 	<button id="btntest" class="btn">test</button> --}}
					<div id="pt-main" class="pt-perspective" style="overflow: hidden;">
						<div class="pt-page pt-page-1  col-lg-8  mt-lg-0">
				          <div class="currentform" style="background: rgb(255 255 255 / 90%);border-radius: 5px;padding-top: 30px">

					            <form id="form_inscription" action="" method="post" role="form" class="php-email-form" style="padding: 10px">


					            	 <h4 style="color: #28285e;background: #28285e14;padding: 10px;text-align: center;">Je reinitialise mon mot de passe 
					            	 	 <span style="display:block;font-size: 11px;text-align: center;color: #f36e23;">Tous les champs sont obligatoires</span>
					            	 </h4>
						            	<div id="flash" class="flash" style="margin-bottom: 10px;display: block;text-align: center;">
						            		<div role="alert" ng-show="hasFlash" class="alert  alert-dismissible alertIn alertOut ng-animate alert-danger" style=""> 
						            			<span dynamic="flash.text"><strong class="ng-scope">Erreur !  </strong><span class="ng-scope ng-scope-msg"> Change a few things up and try submitting again.</span></span> <button type="button" class="close" close-flash=""><span aria-hidden="true">×</span><span class="sr-only">Close</span></button> 
						            		</div>
						            	</div>

					            	
					             
					              

					               <div class="form-row">

					                  <div class="col-md-6 form-group input_wrap">
					                   
					                    <input type="password" class="form-control pass  requiredField" name="password" id="password" data-rule="minlen:8" data-msg="Entrer le mot de passe" data-strength required/>
					                      <label style="display: block;text-align: left;" >Mot de passe <span style="color: red">*</span></label>
					                     <div class="validate" style="color:gray;display:block;font-size: 10px;margin-top: 8px;font-weight: bold;">8 caractères: 1 majuscule, 1 miniscule, 1 caractère spécial</div>
					                     <i style="font-size: 12px" class="fa fa-eye-slash form-control-feedback affpwd"></i>
					                  </div>

					                  <div class="col-md-6 form-group input_wrap">
					                    
					                    <input type="password" class="form-control pass requiredField" name="confpassword" id="confpassword"  data-rule="minlen:8" data-msg="Confirmer le mot de passe" required />
					                     <label style="display: block;text-align: left;" >Confirmation Mot de passe <span style="color: red">*</span></label>
					                  <div class="validate"></div>
					                  <i style="font-size: 12px" class="fa fa-eye-slash form-control-feedback affpwd"></i>
					                  <input type="hidden" name="receivedtoken" value="{{app('request')->input('token') }}">
					                  </div>


					                  <div class="col-md-12 form-group">

				                        <input id="cgu" type="checkbox" class="form-control requiredField" name="cgu" value="1" style="display: inline-block;height: 16px;width: 17px;">

				                       <span style="font-size:14px ">Accepter  <a target="_blank" href="/docs/Snedai-CGU.pdf" style="color: #28285e;text-decoration: underline;">les termes et conditions</a> </span> 
				                         

				                       </div>

					              </div>
					              <div class="text-center ">
					              {{-- 	<button class="btn not-active" id="createUserbtn" style="background: #f36e23;border: 0;padding: 10px 35px;color: #fff;transition: 0.4s;border-radius: 5px;" type="submit">Valider</button>
 --}}

					              	 <a id="resetpassword" href="#" style="background: #f36e23" class="customBtn button_next progress-button not-active" data-progress-button>
                                          <span class="progress-button-indicator"></span>
                                          <span class="progress-button-content">
                                              <span class="progress-button-before">MODIFIER</span>
                                              <span class="progress-button-after">PATIENTER</span>
                                              <span class="progress-button-spacer">PATIENTER</span>
                                          </span>
                                      </a>

					              

					              </div>

					              <p style="font-size: 12px;font-weight: 600;"> Vous avez déjà un compte ? <a href="/connexion" style="color: #f36e23">Connectez vous !</a> </p>
					            </form>
				          </div>
				        </div>

				       <div class="pt-page pt-page-2 col-lg-8 mt-5 mt-lg-0" >
				       		<div class="pt-page-2-inner" style="border-radius: 5px;padding-top: 30px;background: #28285e;text-align: center;">
				       			{{-- <h1><span>A Collection</span><strong>Page</strong> Transitions</h1> --}}
				       			<div style="display: table;position: absolute;top: 0;left: 0;height: 100%;width: 100%;">
				       				<div style="display: table-cell;vertical-align: middle;padding-left:10px;padding-right: 10px">
					       				<h1 style="color:white"><span>Information</span></h1>
						       			<p style="text-align: center;color: white"> Mot de passe reinitialisé avec succès !</p>
						       			<button class="btn closeinfo backInitialanimation">Nouvelle inscription</button>
						       			<a href="/connexion" class="btn closeinfo">Se connecter </a>
					       			</div>
				       			</div>
				       		</div>
					   </div>  



			       </div>
			 	</div>

	    </div>


	</section>



  @endsection
    @section('footer') 
    <script src="/assets/js/reset_password.js"></script>
    <script type="text/javascript">$.noConflict();</script>
    <script type="text/javascript">
    	var biggestHeight = 0;
		// Loop through elements children to find & set the biggest height
		$(".pt-perspective *").each(function(){
		 // If this elements height is bigger than the biggestHeight
		 if ($(this).height() > biggestHeight ) {
		   // Set the biggestHeight to this Height
		   biggestHeight = $(this).height();
		 }
		});
		var newheight = $("#form_inscription").height();
		$(".pt-page-2-inner").height(newheight) ;
		// Set the container height
		$(".pt-perspective").height(biggestHeight);
    </script>

    <script type="text/javascript">
    	

 $("#confpassword").addClass('read-only-txt');


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


        $("#confpassword").addClass('read-only-txt');
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

         $("#confpassword").removeClass('read-only-txt');

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
	
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>


	{{-- <script type="text/javascript" src="/jquery2.1.3/jquery.min.js"></script> --}}
	<script type="text/javascript" src="/jquery2.1.3/jquery-ui.min.js"></script>
	<script src="/modernizr2.8.3/modernizr.min.js"></script>
	<link href="/anim/anim_edit.css" rel="stylesheet">
	<link href="/flash/flash.css" rel="stylesheet">
	<script type="text/javascript" src="/flash/flash.js"></script>
	<script type="text/javascript" src="/anim/anim.js"></script>
	
	
  	@endsection	