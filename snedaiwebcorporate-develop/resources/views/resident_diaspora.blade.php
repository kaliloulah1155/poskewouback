 @extends('layouts.master')
  @section('content')
	<section id="hero" class="d-flex flex-column justify-content-center inscription">
	    <div class="container" data-aos="zoom-in" data-aos-delay="100" >
	      <h1 style="color: white">Domiciliation</h1>
	      <p  style="color: white"><span style="color: white" class="typed" data-typed-items="Pour une prise en main facile et intuitive, Et bénéficiez de la réactivité de nos services"></span></p>


	       <div class="row mt-5">
	          <div class="col-lg-8 mt-5 mt-lg-0" style="background: rgb(255 255 255 / 90%);border-radius: 5px;padding-top: 30px">

	            <form action="" method="post" role="form" class="php-email-form" style="padding: 10px">
	            	 @csrf
	             
	              <div class="form-row">
	                  <div class="col-md-12 form-group input_wrap">
	                  	 <p style="text-align: center;display: block;margin: 7px auto;color: #28285e;">Je fais ma demande de passeport : </p>
	                    
	                  </div>
	                 
	                </div>

	              <div class="form-row">
	                  <div class="col-md-6 form-group input_wrap" style="text-align: center;">
	                   <a class="btn" style="background: #f46e23;border: 0;padding: 10px 35px;color: #fff;transition: 0.4s;border-radius: 5px;width: 315px" href="/demande_passeport_resident" > En Côte d'Ivoire</a>
	                   
	                  </div>

	                  <div class="col-md-6 form-group input_wrap" style="text-align: center;">
	                    <a class="btn" style="background: #28285e;border: 0;padding: 10px 35px;color: #fff;transition: 0.4s;border-radius: 5px;width: 315px;" href="/demande_passeport_diaspora"> Dans une ambassade </a>
	                   
	                  </div>

	              </div>

	            </form>

	          </div>

	        </div>
	     </div>
	</section>
  @endsection