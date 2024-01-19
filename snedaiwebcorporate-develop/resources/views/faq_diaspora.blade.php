 @extends('layouts.master')
  @section('content')
  <div style="height: 50px">
          &nbsp;
       </div>
		<section id="hero" class="d-flex flex-column justify-content-center faq" style="height: auto">
		    <div class="container" data-aos="zoom-in" data-aos-delay="100" >
		      <h1 style="color: white">Des questions ?  </h1>
		      <p  style="color: white"><span style="color: white" class="typed" data-typed-items="Vous pouvez rechercher votre par type d'émissions"></span></p>


		       <div class="row mt-5">
		          <div class="col-lg-8 mt-5 mt-lg-0" style="border-radius: 5px;"> 
		          	 <p class="" style="    background: #29285e;padding: 30px;color: white;text-align: center; ">Diaspora</p>
		            {{-- <div class="owl-carousel"> 
		            	<div class="faqItem"> 
		                  <p class="">Faire une demande</p>
		              </div>
		              
		            </div> --}}

		          </div>

		        </div>

		        <div class="row mt-3">
		          <div class="col-lg-8 mt-5 mt-lg-0" style="border-radius: 5px;">

		            <div class="accordion" id="InformationGenerales">
		                <div class="accordion-item">
		                  <h2 class="accordion-header" id="headingOne" style="background:#d4d9f6">
		                    <button style="font-weight: bold;" 
		                      class="accordion-button collapsed"
		                      type="button"
		                      data-mdb-toggle="collapse"
		                      data-mdb-target="#collapseOne"
		                      aria-expanded="false"
		                      aria-controls="collapseOne"
		                    >
		                      1. Mon passeport ordinaire vient d’être prolongé jusqu’à 2011 est-ce qu’il est valable au-delà de janvier 2010 ?
		                    </button>
		                  </h2>
		                  <div
		                    id="collapseOne"
		                    class="accordion-collapse collapse "
		                    aria-labelledby="headingOne"
		                    data-mdb-parent="#InformationGenerales"
		                  >
		                    <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
		                     <p style="font-size: 14px">Non, le 31 janvier 2010 est la date limite de circulation des anciens passeports, passée cette date, aucun ancien passeport ne sera valable.</p>          
		                    </div>
		                  </div>
		                </div>
		                <div class="accordion-item">
		                  <h2 class="accordion-header" id="headingTwo" style="background:#eef0ff">
		                    <button
		                      class="accordion-button collapsed"
		                      type="button"
		                      data-mdb-toggle="collapse"
		                      data-mdb-target="#collapseTwo"
		                      aria-expanded="false"
		                      aria-controls="collapseTwo"
		                    >
		                      2. En cas de perte ou de vol ?
		                    </button>
		                  </h2>
		                  <div
		                    id="collapseTwo"
		                    class="accordion-collapse collapse"
		                    aria-labelledby="headingTwo"
		                    data-mdb-parent="#InformationGenerales"
		                  >
		                    <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
		                     <p style="font-size: 14px">Il est important d’effectuer une déclaration de perte à la police, un procès-verbal de perte vous sera remis, pour les ivoiriens de l’étranger il faut une main courante émanant uniquement d’un commissariat de police. Les déclarations de perte de l’ambassade ne sont pas recevables.</p>          
		                    </div>
		                  </div>
		                </div>
		                <div class="accordion-item">
		                  <h2 class="accordion-header" id="headingThree" style="background: #eef0ff">
		                    <button
		                      class="accordion-button collapsed"
		                      type="button"
		                      data-mdb-toggle="collapse"
		                      data-mdb-target="#collapseThree"
		                      aria-expanded="false"
		                      aria-controls="collapseThree"
		                    >
		                       3. Puis-je mettre mon enfant ou mes enfants dans mon passeport ?
		                    </button>
		                  </h2>
		                  <div
		                    id="collapseThree"
		                    class="accordion-collapse collapse"
		                    aria-labelledby="headingThree"
		                    data-mdb-parent="#InformationGenerales"
		                  >
		                    <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
		                     <p>NON, les passeports sont individuels.</p>
		                    </div>
		                  </div>
		                </div>

		                 <div class="accordion-item">
		                  <h2 class="accordion-header" id="headingFour" style="background:#eef0ff">
		                    <button
		                      class="accordion-button collapsed"
		                      type="button"
		                      data-mdb-toggle="collapse"
		                      data-mdb-target="#collapseFour"
		                      aria-expanded="true"
		                      aria-controls="collapseOne"
		                    >
		                      4. Pourquoi les empreintes digitales ?
		                    </button>
		                  </h2>
		                  <div
		                    id="collapseFour"
		                    class="accordion-collapse collapse "
		                    aria-labelledby="headingOne"
		                    data-mdb-parent="#InformationGenerales"
		                  >
		                    <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
		                     <p style="font-size: 14px">C'est une mesure qui a été adoptée afin de limiter les risques d'usurpation d'identité ou de falsification des passeports. Il est important de souligner que les empreintes sont uniques ce qui permet une personnalisation sécurisée des documents de voyage.</p>         
		                    </div>
		                  </div>
		                </div>
		                <div class="accordion-item">
		                  <h2 class="accordion-header" id="headingFive" style="background:#eef0ff">
		                    <button
		                      class="accordion-button collapsed"
		                      type="button"
		                      data-mdb-toggle="collapse"
		                      data-mdb-target="#collapseFive"
		                      aria-expanded="false"
		                      aria-controls="collapseTwo"
		                    >
		                     5. Quelle est la Procédure pour les enfants ?
		                    </button>
		                  </h2>
		                  <div
		                    id="collapseFive"
		                    class="accordion-collapse collapse"
		                    aria-labelledby="headingTwo"
		                    data-mdb-parent="#InformationGenerales"
		                  >
		                    <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
		                     <p style="font-size: 14px">La procédure est la même que celle des adultes à la différence que pour les enfants on ne prend pas d’empreintes.(Age limite 12 ans)</p>          
		                    </div>
		                  </div>
		                </div>
		                <div class="accordion-item">
		                  <h2 class="accordion-header" id="headingSix" style="background: #eef0ff">
		                    <button
		                      class="accordion-button collapsed"
		                      type="button"
		                      data-mdb-toggle="collapse"
		                      data-mdb-target="#collapseSix"
		                      aria-expanded="false"
		                      aria-controls="collapseThree"
		                    >
		                       6.	Quelle est la Durée de validité du passeport biométrique ?
		                    </button>
		                  </h2>
		                  <div
		                    id="collapseSix"
		                    class="accordion-collapse collapse"
		                    aria-labelledby="headingThree"
		                    data-mdb-parent="#InformationGenerales"
		                  >
		                    <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
		                     <p>La durée de validité du passeport est de cinq ans non renouvelable.</p>
		                    </div>
		                  </div>
		                </div>

		                <div class="accordion-item">
		                  <h2 class="accordion-header" id="headingSix" style="background: #eef0ff">
		                    <button
		                      class="accordion-button collapsed"
		                      type="button"
		                      data-mdb-toggle="collapse"
		                      data-mdb-target="#collapseSeven"
		                      aria-expanded="false"
		                      aria-controls="collapseThree"
		                    >
		                       7.	Quelle est la Durée de validité du passeport biométrique ?
		                    </button>
		                  </h2>
		                  <div
		                    id="collapseSeven"
		                    class="accordion-collapse collapse"
		                    aria-labelledby="headingThree"
		                    data-mdb-parent="#InformationGenerales"
		                  >
		                    <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
		                     <p>La durée de validité du passeport est de cinq ans non renouvelable.</p>
		                    </div>
		                  </div>
		                </div>


		                <div class="accordion-item">
		                  <h2 class="accordion-header" id="headingHeight" style="background: #eef0ff">
		                    <button
		                      class="accordion-button collapsed"
		                      type="button"
		                      data-mdb-toggle="collapse"
		                      data-mdb-target="#collapseHeight"
		                      aria-expanded="false"
		                      aria-controls="collapseThree"
		                    >
		                       8.	Quelle est la Durée de validité du passeport biométrique ?
		                    </button>
		                  </h2>
		                  <div
		                    id="collapseHeight"
		                    class="accordion-collapse collapse"
		                    aria-labelledby="headingThree"
		                    data-mdb-parent="#InformationGenerales"
		                  >
		                    <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
		                     <p>La durée de validité du passeport est de cinq ans non renouvelable.</p>
		                    </div>
		                  </div>
		                </div>


		                <div class="accordion-item">
		                  <h2 class="accordion-header" id="headingNine" style="background: #eef0ff">
		                    <button
		                      class="accordion-button collapsed"
		                      type="button"
		                      data-mdb-toggle="collapse"
		                      data-mdb-target="#collapseNine"
		                      aria-expanded="false"
		                      aria-controls="collapseThree"
		                    >
		                       9.	Si j’ai déjà un ancien passeport est ce que je devrais encore constituer un dossier ?
		                    </button>
		                  </h2>
		                  <div
		                    id="collapseNine"
		                    class="accordion-collapse collapse"
		                    aria-labelledby="headingThree"
		                    data-mdb-parent="#InformationGenerales"
		                  >
		                    <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
		                     <p>Oui tout demandeur doit, même s’il est en possession d’un ancien passeport, constituer un nouveau dossier conformément à la liste des pièces à fournir.</p>
		                    </div>
		                  </div>
		                </div>


		                <div class="accordion-item">
		                  <h2 class="accordion-header" id="headingTen" style="background: #eef0ff">
		                    <button
		                      class="accordion-button collapsed"
		                      type="button"
		                      data-mdb-toggle="collapse"
		                      data-mdb-target="#collapseTen"
		                      aria-expanded="false"
		                      aria-controls="collapseThree"
		                    >
		                       10.	Si j’ai déjà obtenu un passeport biométrique est ce que je devrais encore constituer un dossier ?
		                    </button>
		                  </h2>
		                  <div
		                    id="collapseTen"
		                    class="accordion-collapse collapse"
		                    aria-labelledby="headingThree"
		                    data-mdb-parent="#InformationGenerales"
		                  >
		                    <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
		                     <p>Non, mais il existe plusieurs cas de figure :
														Si j’ai déjà obtenu un passeport biométrique que j’ai égaré, il faut joindre à la demande (formulaire de pré-enrôlement, le reçu de paiement, l’attestation de RDV,   le procès-verbal de perte ou la main courante.
														Si j’ai déjà obtenu un passeport biométrique qui est endommagé il faut : joindre à la demande (formulaire de pré-enrôlement, le reçu de paiement, l’attestation de RDV) et le carnet endommagé.
														Si j’ai déjà obtenu un passeport biométrique qui est arrivé à expiration : il faut  (le formulaire de pré-enrôlement, le reçu de paiement, l’attestation de RDV)
														</p>
														<p>Pour ces 3 cas:
														* Pour les enrôlements à Abidjan
														Présenter le formulaire de pré-enrôlement, le reçu de paiement, l’attestation de RDV,   pour validation à la SD/PAF, à la Sûreté et récupérer son sous dossier (ancien dossier fourni) pour un nouvel enrôlement.
														</p>

														<p>* Pour les enrôlements de l'extérieur 
														Prévenir l'Ambassade qui transmettra l'information à la SNEDAI et le sous dossier sera réacheminé à l'Ambassade pour un nouvel enrôlement
														</p>
		                    </div>
		                  </div>
		                </div>



		                 <div class="accordion-item">
		                  <h2 class="accordion-header" id="headingEleven" style="background: #eef0ff">
		                    <button
		                      class="accordion-button collapsed"
		                      type="button"
		                      data-mdb-toggle="collapse"
		                      data-mdb-target="#collapseEleven"
		                      aria-expanded="false"
		                      aria-controls="collapseThree"
		                    >
		                       11.	Après mon enrôlement mes pièces fournies me sont-elles restituées ?
		                    </button>
		                  </h2>
		                  <div
		                    id="collapseEleven"
		                    class="accordion-collapse collapse"
		                    aria-labelledby="headingThree"
		                    data-mdb-parent="#InformationGenerales"
		                  >
		                    <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
		                     <p>Aucune pièce n’est restituée après enrôlement.</p>
		                    </div>
		                  </div>
		                </div>


		                <div class="accordion-item">
		                  <h2 class="accordion-header" id="headingTwelve" style="background: #eef0ff">
		                    <button
		                      class="accordion-button collapsed"
		                      type="button"
		                      data-mdb-toggle="collapse"
		                      data-mdb-target="#collapseTwelve"
		                      aria-expanded="false"
		                      aria-controls="collapseThree"
		                    >
		                       12.	Si je porte un « tchador » ou un foulard est ce que je dois l’enlever pour la prise de la photographie ?
		                    </button>
		                  </h2>
		                  <div
		                    id="collapseTwelve"
		                    class="accordion-collapse collapse"
		                    aria-labelledby="headingThree"
		                    data-mdb-parent="#InformationGenerales"
		                  >
		                    <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
		                     <p>Oui, par ailleurs si le « tchador » est votre tenue quotidienne, vous pouvez le garder avec le visage dégagé, les oreilles visibles conformément aux normes internationales.</p>
		                    </div>
		                  </div>
		                </div>


		                 <div class="accordion-item">
		                  <h2 class="accordion-header" id="headingThirteen" style="background: #eef0ff">
		                    <button
		                      class="accordion-button collapsed"
		                      type="button"
		                      data-mdb-toggle="collapse"
		                      data-mdb-target="#collapseThirteen"
		                      aria-expanded="false"
		                      aria-controls="collapseThree"
		                    >
		                       13.	Est-ce que je dois ôter mes lunettes pour la prise de la photographie ?
		                    </button>
		                  </h2>
		                  <div
		                    id="collapseThirteen"
		                    class="accordion-collapse collapse"
		                    aria-labelledby="headingThree"
		                    data-mdb-parent="#InformationGenerales"
		                  >
		                    <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
		                     <p>Oui il est demandé à ceux qui en portent de les ôter pour la prise de la photographie (dans le passeport il est marqué à la mention signes particuliers : port de lunettes).</p>
		                    </div>
		                  </div>
		                </div>


		                 <div class="accordion-item">
		                  <h2 class="accordion-header" id="headingFourteen" style="background: #eef0ff">
		                    <button
		                      class="accordion-button collapsed"
		                      type="button"
		                      data-mdb-toggle="collapse"
		                      data-mdb-target="#collapseFourteen"
		                      aria-expanded="false"
		                      aria-controls="collapseThree"
		                    >
		                       14.Est-ce que je peux me faire enrôler avec le reçu d’une tierce personne ?
		                    </button>
		                  </h2>
		                  <div
		                    id="collapseFourteen"
		                    class="accordion-collapse collapse"
		                    aria-labelledby="headingThree"
		                    data-mdb-parent="#InformationGenerales"
		                  >
		                    <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
		                     <p>Oui, si celui-ci n’a jamais été utilisé.</p>
		                    </div>
		                  </div>
		                </div>


		                 <div class="accordion-item">
		                  <h2 class="accordion-header" id="headingfifteen" style="background: #eef0ff">
		                    <button
		                      class="accordion-button collapsed"
		                      type="button"
		                      data-mdb-toggle="collapse"
		                      data-mdb-target="#collapsefifteen"
		                      aria-expanded="false"
		                      aria-controls="collapseThree"
		                    >
		                       15.Est-ce que je peux me faire enrôler avec le reçu d’une tierce personne ?
		                    </button>
		                  </h2>
		                  <div
		                    id="collapsefifteen"
		                    class="accordion-collapse collapse"
		                    aria-labelledby="headingThree"
		                    data-mdb-parent="#InformationGenerales"
		                  >
		                    <div class="accordion-body" style="background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px">
		                     <p>Oui, si celui-ci n’a jamais été utilisé.</p>
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
  <script type="text/javascript">
    $('.owl-carousel').owlCarousel({
      // autoplay: true,
      center: true,
      loop: true,
      nav: true,
    });
  </script>

  <style type="text/css">
      .owl-item > div:after {
        font-family: sans-serif;
        font-size: 24px;
        font-weight: bold;
      }
      .active.center {
        transform: scale(1);
        -webkit-filter: grayscale(0); /* Safari 6.0 - 9.0 */
          filter: grayscale(0);
      }
      /*.active {
        transform: scale(.8);
        transition: .6s ease;
        -webkit-filter: grayscale(100%); 
          filter: grayscale(100%);
      }*/

      .faqheadertext{
        position: relative;
        top: 40%;
        color: white !important;
        font-size: 13px !important;
        text-align: center;
        margin-top: 0px !important;
      }
      .faqheadertextActive{
          background: #8c97d1 !important;
      }
      .owl-dots{display: none}
      .owl-nav{
            text-align: center;
            font-size: 30px;
            height: 10px;
            /*background: #28285e;*/
      }
      .owl-prev{
         background: white !important;
		    padding: 0px 10px!important;
		    margin-right: 10px !important;
		    position: relative;
		    top: -85px;
		    left: -310px;
		    opacity: .5;
      }
      .owl-next{
         background: white !important;
		    padding: 0px 10px!important;
		    margin-right: 10px !important;

		     position: relative;
		    top: -85px;
		    right: -328px;
		    opacity: .5;
      }
      .owl-left{
        margin-right: 10px
      }
      /*.owl-nav{display: none}*/

      .accordion-body{
      	background: rgb(255 255 255 / 90%);font-family: 'Open Sans', sans-serif;font-size: 14px
      }
       .accordion-body p{
       	font-size: 14px !important;
       }
       .faqItem{
       	 height: 120px; 
       	 background: #28285e;
       	 border: dashed 1px white;
       }
  </style>

  <script type="text/javascript">
  	
  	$('.accordion-header').on('click', function(){
  		$(this).css('background','#d4d9f6');
  		$(this).find('button').css('font-weight','bold');
  		$(this).parent().siblings().find('h2').css('background','#eef0ff');
  		$(this).parent().siblings().find('button').css('font-weight','normal');

  	})

  		$('.faqItem').on('click', function(){
  			console.log($(this).find('p').html());

  			var selectedFaq = $(this).find('p').html();
  			$(this).parent().siblings().find('.faqItem').removeClass("faqheadertextActive");
  			$(this).addClass('faqheadertextActive');

// Informations générales
// Autres informations
// Faire une demande
// Prendre un RDV
// Comment nous contacter
// Autres Sujets

  			if(selectedFaq =='Informations générales'){
  				$('.accordion').css('display','none');
  				$('#InformationGenerales').css('display','block');
  			}

  			if(selectedFaq =='Autres informations'){
  				$('.accordion').css('display','none');
  				$('#Autresinformations').css('display','block');
  			}

  			if(selectedFaq =='Faire une demande'){
  				$('.accordion').css('display','none');
  				$('#Faireunedemande').css('display','block');
  			}

  			if(selectedFaq =='Autres Sujets'){
  				$('.accordion').css('display','none');
  				$('#AutresSujets').css('display','block');
  			}

  			if(selectedFaq =='Comment nous contacter'){
  				$('.accordion').css('display','none');
  				$('#Commentnouscontacter').css('display','block');
  			}

  			if(selectedFaq =='Prendre un RDV'){
  				$('.accordion').css('display','none');
  				$('#PrendreunRDV').css('display','block');
  			}

  		})
  	
  </script>


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <link rel="stylesheet" href="/mdb5/css/mdb.min.css" />
  <script type="text/javascript" src="/mdb5/js/mdb.min.js"></script>
	
  @endsection