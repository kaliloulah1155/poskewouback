 @extends('layouts.master')
  @section('content')
	<section id="hero" class="d-flex flex-column justify-content-center inscription">


	    <div class="container" data-aos="zoom-in" data-aos-delay="100" >

			      <h1 style="color: white">Inscrivez vous  </h1>
			      <p  style="color: white"><span style="color: white" class="typed" data-typed-items="Pour une prise en main facile et intuitive, Et bénéficiez de la réactivité de nos services"></span></p>
			      <div class="row mt-5">
			          <div class="col-lg-8 mt-5 mt-lg-0" style="background: rgb(255 255 255 / 90%);border-radius: 5px;padding-top: 30px">

			            <form id="form_inscription" action="" method="post" role="form" class="php-email-form" style="padding: 10px">


			            	<div class="form-row">
		                                 <div class="col-md-4 form-group" style="width:50%">
		                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">M</label>
		                                    <input type="radio" class="form-control requiredField" name="civility" value="m" style="width: 50%;display: inline;height: 25px;"> 
		                                 </div>
		                                 <div class="col-md-4 form-group" style="width:50%">
		                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">MME</label>
		                                    <input type="radio" class="form-control requiredField" name="civility" value="mme" style="width: 50%;display: inline;height: 25px;"> 
		                                 </div>

		                                   <div class="col-md-4 form-group" style="width:50%">
		                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">MLLE</label>
		                                    <input type="radio" class="form-control requiredField" name="civility" value="mme" style="width: 50%;display: inline;height: 25px;"> 
		                                 </div>
		                              </div>
			             
			              <div class="form-row">
			                  <div class="col-md-6 form-group input_wrap">
			                    <input type="text" name="lastname" class="form-control requiredField" id="lastname" data-rule="minlen:4" data-msg="Entrer au moins 4 caractères" required />
			                     <label style="display: block;text-align: left;">Nom <span style="color: red">*</span></label>
			                     <div class="validate"></div>
			                  </div>
			                  <div class="col-md-6 form-group input_wrap">
			                    <input type="text" class="form-control requiredField" name="firstname" id="firstname"  data-rule="email" data-msg="Entrer votre prénom" required />
			                     <label style="display: block;text-align: left;" >Prénoms <span style="color: red">*</span></label>
			                     <div class="validate"></div>
			                  </div>
			                </div>

			              <div class="form-row">

			                  <div class="col-md-6 form-group input_wrap">
			                   
			                    <input type="text" class="form-control requiredField" name="usertel" id="userTel" data-rule="tel" data-msg="Entrer votre numéro de téléphone" required />
			                      <label style="display: block;text-align: left;" >Numéro de téléphone <span style="color: red">*</span></label>
			                    <div class="validate"></div>
			                  </div>

			                  <div class="col-md-6 form-group input_wrap">
			                    <input type="text" class="form-control requiredField email" name="userEmail" id="userEmail"  data-rule="email" data-msg="Entrer un email valide" required />
			                    <label style="display: block;text-align: left;" >Email <span style="color: red">*</span></label>
			                    <div class="validate"></div>
			                  </div>

			              </div>

			               <div class="form-row">

			                  <div class="col-md-6 form-group input_wrap">
			                   
			                    <input type="password" class="form-control requiredField" name="password" id="password" data-rule="email" data-msg="Entrer le mot de passe" required/>
			                      <label style="display: block;text-align: left;" >Mot de passe <span style="color: red">*</span></label>
			                     <div class="validate"></div>
			                  </div>

			                  <div class="col-md-6 form-group input_wrap">
			                    
			                    <input type="password" class="form-control requiredField" name="password" id="password"  data-rule="email" data-msg="Confirmer le mot de passe" required />
			                     <label style="display: block;text-align: left;" >Confirmation Mot de passe <span style="color: red">*</span></label>
			                  <div class="validate"></div>
			                  </div>


			                  <div class="col-md-12 form-group">

		                        <input type="checkbox" class="form-control requiredField" name="demande" value="" style="display: inline-block;height: 16px;width: 17px;">

		                       <span>Accepter les termes et conditions</span> 
		                         

		                       </div>

		                        


			                  
			              </div>
			             
			              
			              <div class="mb-3">
			                <div class="error-message"></div>
			                <div class="sent-message"></div>
			              </div>
			              <div class="text-center"><button class="btn" id="createUserbtn" style="background: #f36e23;border: 0;padding: 10px 35px;color: #fff;transition: 0.4s;border-radius: 5px;" type="submit">Valider</button></div>

			              

			              <p style="font-size: 12px;font-weight: 600;"> Vous avez déjà un compte ? <a href="/connexion" style="color: #f36e23">Connectez vous !</a> </p>
			            </form>

			          </div>
			      </div>

	    </div>


	</section>



  @endsection
    @section('footer') 
	<script src="/assets/js/inscription.js"></script>
	
  	@endsection	