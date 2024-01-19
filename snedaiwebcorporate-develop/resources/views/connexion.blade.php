 @extends('layouts.master')
  @section('content')

 <div style="height: 50px">
          &nbsp;
       </div>
	<section id="hero" class="d-flex flex-column justify-content-center connexion" style="height: auto">
	
	    <div class="container" data-aos="zoom-in" data-aos-delay="100" >
	      <h1 style="color: white">Connectez vous </h1>
	      <p  style="color: white"><span style="color: white" class="typed" data-typed-items="Et vivez une expérience fiable et sécurisée, Et profitez de cette innovation "></span></p>
	       <div class="row mt-3">
			<button id="launchanimation" class="pt-touch-button" style="width: 25%;display: none">lancer animation</button>
			<button id="erroranimation" class="pt-touch-button" style="width: 25%;display: none">lancer animation</button>

	       	<div id="pt-main" class="pt-perspective" style="min-height: 505px">
		          <div class="pt-page pt-page-1 col-lg-5 mt-5 mt-lg-0" style="border-radius: 5px;padding-top: 30px;min-height: 338px">
		            <form role="form" class="php-email-form form-wrapper" autocomplete="off" style="position: relative;">
		            	@csrf
		            	
		              		<fieldset id="form_connexion" class="section is-active" style="padding-top: 40px;">
		              			<h4 style="color: #28285e;background: #28285e14;padding: 10px;text-align: center;">Je me connecte
									<span style="display:block;font-size: 11px;text-align: center;color: #f36e23;">Tous les champs sont obligatoires</span>
								</h4>

								<div class="form-row">
	                                 <div class="col-md-6 form-group" style="width:50%">
	                                    <label style="display: inline-block;top: -7px;position: relative;font-size:11px">EMAIL</label>
	                                    <input type="radio" class="form-control" name="connect_mode" value="email" style="width: 50%;display: inline;height: 25px;" checked> 
	                                 </div>
	                                 <div class="col-md-6 form-group" style="width:50%">
	                                    <label style="display: inline-block;top: -7px;position: relative;font-size:11px">TELEPHONE</label>
	                                    <input type="radio" class="form-control " name="connect_mode" value="phone" style="width: 50%;display: inline;height: 25px;"> 
	                                 </div>
	                                  <div id="qOldpp" class="col-md-12  form-group" style="margin-top: -15px;background: #b0c4de63;display: none">
	                                      <p style="margin: 0;font-size: 12px;text-align: center;">Connaissez vous votre ancien code passport ?&nbsp;&nbsp; <a id="oui_old_pp" style="font-weight: bold;" href="#">OUI</a> &nbsp;&nbsp;&nbsp; <a style="font-weight: bold;color: red" id="non_old_pp" href="#">NON</a> </p>
	                                  </div>
	                              </div>

	                          

	                          <div id="errormessage" class="validate" style="margin-bottom: 10px;"></div>
								
					              <div class="form-row " id="email_mode">
					                <div class="col-md-12 form-group input_wrap">
					                  <input type="text" name="emailtel" class="form-control requiredField email" id="emailtel" placeholder="" data-rule="minlen:4" data-msg="Entrer votre adresse email" required />
					                   <label style="text-align: left;">Email <span style="color: red">*</span></label>
					                     <div class="validate"></div>
					                </div>
					              </div>
					              <div class="form-row" id="telephone_mode" style="display: none">
					                <div class="col-md-4 form-group input_wrap">
					                  <input type="text" name="indicatif" class="form-control requiredField indicatif" id="indicatif" placeholder="" data-rule="minlen:4" data-msg="Entrer votre indicatif" required />
					                   <label style="text-align: left;">indicatif <span style="color: red">*</span></label>
					                     <div class="validate"></div>
					                </div>
					                <div class="col-md-8 form-group input_wrap">
					                  <input type="text" name="tel" class="form-control requiredField numberonly" id="tel" placeholder="" data-rule="minlen:4" data-msg="Entrer votre numéro de téléphone" required />
					                   <label style="text-align: left;">Télephone <span style="color: red">*</span></label>
					                     <div class="validate"></div>
					                </div>
					              </div>
					              <div class="form-row">
					                <div class="col-md-12 form-group input_wrap ">
					                  <input type="password" class="form-control pass requiredField" name="password" id="password" data-rule="minlen:6"  data-msg="Entrer votre mot de passe " name="password" required />
					                  <label style="text-align: left;" >Mot de passe <span style="color: red">*</span></label>
					                  <div class="validate"></div>
					                   <i style="font-size: 12px" class="fa fa-eye-slash form-control-feedback affpwd"></i>
					                </div>
					              </div>
					                <p style="font-size: 12px;font-weight: 600;text-align: right;margin-top: 0px;margin-right: 10px;"> <a  class="button_next" style="text-decoration: underline;color: #0563bb;" href="#">Mot de passe oublié ?</a>   </p>
					                 <p style="font-size: 12px;font-weight: 600;text-align: right;"> <a  style="color: black" href="/inscription"> Vous n'avez pas de compte ?   <span style="color: #f36e23">    S'inscrire </span></a> </p>
				              
						          
						              <div class="text-center"  style="margin-top: 15px">

						              	 <a id="loginuser" href="#" style="background: #f36e23" class="customBtn  progress-button" data-progress-button>
                                          <span class="progress-button-indicator"></span>
                                          <span class="progress-button-content">
                                              <span class="progress-button-before">SE CONNECTER</span>
                                              <span class="progress-button-after">PATIENTER</span>
                                              <span class="progress-button-spacer">PATIENTER</span>
                                          </span>
                                      </a>

						              </div>
						      
					        </fieldset>

					        <fieldset id="form_fgten_pwd" class="section" style="padding-top: 40px;">
		              			<h4 style="color: #28285e;background: #28285e14;padding: 10px;text-align: center;">Mot de passe oublié
									<span style="display:block;font-size: 11px;text-align: center;color: #f36e23;">Tous les champs sont obligatoires</span>
								</h4>
								<div id="flash" class="flash" style="margin-bottom: 10px;display: block;">
						            		<div role="alert" ng-show="hasFlash" class="alert  alert-dismissible alertIn alertOut ng-animate alert-danger" style="display: block;"> 
						            			<span dynamic="flash.text"><strong class="ng-scope">Info :  </strong> <span class="ng-scope ng-scope-msg"> Login incorrect! </span> </span> <button type="button" class="close" close-flash=""><span aria-hidden="true">×</span><span class="sr-only">Close</span></button> 
						            		</div>
						            	</div>
					              <div class="form-row ">
					                <div class="col-md-12 form-group input_wrap">
					                  <input type="text" name="email" class="form-control requiredField email" id="email" placeholder="" data-rule="email" data-msg="Entrer une  addresse email  valide" required />
					                   <label style="text-align: left;">Email <span style="color: red">*</span></label>
					                     <div class="validate"></div>
					                </div>
					              </div>
					              <p style="font-size: 12px;font-weight: 600;text-align: right;margin-top: 0px;margin-right: 10px;"> <a  class="button_prev" style="text-decoration: underline;color:#0563bb" href="#">Se connecter ?</a>   </p>
					               <p style="font-size: 12px;font-weight: 600;text-align: right;"> <a  style="color: black" href="/inscription"> Vous n'avez pas de compte ?   <span style="color: #f36e23">    S'inscrire </span></a> </p>
					             
						             
						              <div class="text-center" style="margin: 10px auto;">
						              {{-- 	<button class="btn" id="forgottenpwdbtn" style="background: #f36e23;border: 0;padding: 10px 35px;color: #fff;transition: 0.4s;border-radius: 5px;" type="submit"> Envoyer </button> --}}

						              	<a id="forgottenpwdbtn" href="#" style="background: #f36e23" class="customBtn  progress-button" data-progress-button>
                                          <span class="progress-button-indicator"></span>
                                          <span class="progress-button-content">
                                              <span class="progress-button-before">ENVOYER</span>
                                              <span class="progress-button-after">PATIENTER</span>
                                              <span class="progress-button-spacer">PATIENTER</span>
                                          </span>
                                      </a>
						              </div>
					        </fieldset>
		            </form>	
		          </div>   


		           <div class="pt-page pt-page-2 col-lg-5 mt-5 mt-lg-0" style="border-radius: 5px;padding-top: 30px;background: #28285e;text-align: center;">
				       		<div class="pt-page-2-inner" >
				       			{{-- <h1><span>A Collection</span><strong>Page</strong> Transitions</h1> --}}
				       			<div style="display: table;position: absolute;top: 0;left: 0;height: 100%;width: 100%;">
				       				<div style="display: table-cell;vertical-align: middle;padding-left:10px;padding-right: 10px">
					       				<h1 style="color:white"><span>Information</span></h1>
						       			<p style="text-align: center;color: white;font-size: 20px;"> Un mail a été envoyé à cette adresse <span style="color:#f36e23" id="usedemail"></span> pour réinitialiser votre mot de passe !</p>

						       			<button class="btn closeinfo backInitialanimation">Fermer</button>
					       			</div>
				       			</div>
				       		</div>
					</div> 

					<div class="pt-page pt-page-2 col-lg-5 mt-5 mt-lg-0" style="border-radius: 5px;padding-top: 30px;background: #8b2b2b;text-align: center;">
				       		<div class="pt-page-2-inner" >
				       			{{-- <h1><span>A Collection</span><strong>Page</strong> Transitions</h1> --}}
				       			<div style="display: table;position: absolute;top: 0;left: 0;height: 100%;width: 100%;">
				       				<div style="display: table-cell;vertical-align: middle;padding-left:10px;padding-right: 10px">
					       				<h1 style="color:white"><span>Information</span></h1>
						       			<p style="text-align: center;color: white;font-size: 20px;"> Une erreur s'est produite, veuillez ressayer plus tard !</p>

						       			<button i class="btn closeinfo backInitialanimation">Fermer</button>
					       			</div>
				       			</div>
				       		</div>
					</div>  
		    </div>
	        </div>
	  	 </div>
	</section><!-- End-->

  @endsection
  
  @section('footer') 
	<script src="/assets/js/connexion.js"></script>
	<script type="text/javascript">
		$(".form-wrapper .button_next").click(function(){
          var button = $(this);
          var currentSection = button.parents(".section");
          var currentSectionIndex = currentSection.index();
          var headerSection = $('.steps li').eq(currentSectionIndex);
          currentSection.removeClass("is-active").next().addClass("is-active");
          headerSection.removeClass("is-active").next().addClass("is-active");

          $(".form-wrapper").submit(function(e) {
            e.preventDefault();
          });

          if(currentSectionIndex === 5){
            $(document).find(".form-wrapper .section").first().addClass("is-active");
            $(document).find(".steps li").first().addClass("is-active");
          }
        });

         $(".form-wrapper .button_prev").click(function(){
          var button = $(this);
          var currentSection = button.parents(".section");
          var currentSectionIndex = currentSection.index();
          var headerSection = $('.steps li').eq(currentSectionIndex);
          currentSection.removeClass("is-active").prev().addClass("is-active");
          headerSection.removeClass("is-active").prev().addClass("is-active");

          $(".form-wrapper").submit(function(e) {
            e.preventDefault();
          });

          if(currentSectionIndex === 5){
            $(document).find(".form-wrapper .section").first().addClass("is-active");
            $(document).find(".steps li").first().addClass("is-active");
          }
        });
	</script>

	<script type="text/javascript" src="/jquery_lv/jquery.min.js"></script>
	<script type="text/javascript" src="/googleapis/jquery-ui.min.js"></script>
	<script src="/modernizr2.8.3/modernizr.min.js"></script>
	<link href="/anim/anim_edit.css" rel="stylesheet">
	<link href="/flash/flash.css" rel="stylesheet">
	<script type="text/javascript" src="/flash/flash.js"></script>
	<script type="text/javascript" src="/anim/anim.js"></script>
	
  @endsection	

