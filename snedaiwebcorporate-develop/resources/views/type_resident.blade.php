 @extends('layouts.master')
  @section('content')
	<section id="hero" class="d-flex flex-column justify-content-center inscription">
	    <div class="container" data-aos="zoom-in" data-aos-delay="100" >
	      <h1 style="color: white"> Ivoirien ou Non Ivoirien ?</h1>
	      <p  style="color: white"><span style="color: white" class="typed" data-typed-items="Pour une prise en main facile et intuitive, Et bénéficiez de la réactivité de nos services"></span></p>


	       <div class="row mt-5">
	          <div class="col-lg-8 mt-5 mt-lg-0" style="background: rgb(255 255 255 / 90%);border-radius: 5px;padding-top: 30px">

	            <form action="" method="post" role="form" class="php-email-form" style="padding: 10px">
	             
	              <div class="form-row">
	              
	                  <div class="col-md-12 form-group input_wrap">
	                  	 <p style="text-align: center;display: block;margin: 7px auto;color: #28285e;">Quel type de residant êtes vous ?</p>
	                  	<p style="font-size: 14px;text-align: center;">Cher demandeur de passeport ordinaire biométrique, pour faciliter le remplissage du formulaire en ligne , assurez vous d’avoir à portée de main les pièces suivantes selon votre cas :</p>
	                  </div>
	                 
	                </div>

	              <div class="form-row">
	                  <div class="col-md-6 form-group input_wrap" style="text-align: center;">
	                   <a class="btn" style="background: #0463bb;border: 0;padding: 10px 35px;color: #fff;transition: 0.4s;border-radius: 5px;width: 315px;" href="/demandes" >Residants Ivoiriens</a>
	                  </div>

	                  <div class="col-md-6 form-group input_wrap" style="text-align: center;">
	                    <a class="btn" style="background: #0463bb;border: 0;padding: 10px 35px;color: #fff;transition: 0.4s;border-radius: 5px;width: 315px;" href="/demande_resident_diaspora">Residants Non Ivoiriens</a>
	                  </div>

	              </div>

	            </form>

	          </div>

	        </div>
	     </div>
	</section>
  @endsection