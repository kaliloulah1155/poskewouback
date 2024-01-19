 @extends('layouts.master')
  @section('content')

	<section id="hero" class="d-flex flex-column justify-content-center connexion">
		{{-- <div class="container" data-aos="zoom-in" data-aos-delay="100" style="margin-top: -105px"> --}}
	    <div class="container" data-aos="zoom-in" data-aos-delay="100" style="margin-top: -55px">
	      <h1 style="color: white">Connectez vous </h1>
	      <p  style="color: white"><span style="color: white" class="typed" data-typed-items="Et vivez une expérience fiable et sécurisée, Et profitez de cette innovation "></span></p>
	       <div class="row mt-5">
	          <div class="col-lg-5 mt-5 mt-lg-0" style="background: rgb(255 255 255 / 90%);border-radius: 5px;padding-top: 30px">
		          	<h4 style="color: #28285e;background: #28285e14;padding: 10px;text-align: center;">Je me connecte
						<span style="display:block;font-size: 11px;text-align: center;color: #f36e23;">Tous les champs sont obligatoires</span>
					</h4>
	            <form id="form_connexion" role="form" class="php-email-form" style="padding: 10px">
	              <div class="form-row ">
	                <div class="col-md-12 form-group input_wrap">
	                  <input type="text" name="emailtel" class="form-control requiredField" id="emailtel" placeholder="" data-rule="minlen:4" data-msg="Entrer votre email ou votre numero de téléphone" required />
	                   <label style="text-align: left;">Email / Télephone <span style="color: red">*</span></label>
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
	                <p style="font-size: 12px;font-weight: 600;text-align: right;margin-top: 0px;margin-right: 10px;"> <a style="text-decoration: underline;" href="">Mot de passe oublié ?</a>   </p>
	                 <p style="font-size: 12px;font-weight: 600;text-align: right;"> <a  style="color: black" href="/inscription"> Vous n'avez pas de compte ?   <span style="color: #f36e23">    S'inscrire </span></a> </p>
	              
	              <div class="mb-3">
	                <div class="error-message"></div>
	                <div class="sent-message"></div>
	              </div>
	              <div class="text-center"><button class="btn" id="loginuser" style="background: #f36e23;border: 0;padding: 10px 35px;color: #fff;transition: 0.4s;border-radius: 5px;" type="submit">Se connecter</button></div>
	            </form>
	          </div>   
	        </div>
	  	 </div>
	</section><!-- End-->

  @endsection
  
  @section('footer') 
	<script src="/assets/js/connexion.js"></script>

  @endsection	

