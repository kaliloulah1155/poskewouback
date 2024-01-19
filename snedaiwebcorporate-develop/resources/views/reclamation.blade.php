 @extends('layouts.master')
  @section('content')
 <!-- ======= Hero Section ======= -->
      <div style="height: 50px">
          &nbsp;
       </div>
      <section id="hero" class="d-flex flex-column justify-content-center newdemand" style="height: auto;" >
         <div class="container" data-aos="zoom-in" data-aos-delay="100" >
            <h1 style="color: white">Réclamations   </h1>
            <p  style="color: white"><span style="color: white" class="typed" data-typed-items="Contactez-nous sans hésiter !"></span></p>
            <div class="row mt-3">



          <div class="col-lg-8 mt-5 mt-lg-0" style="border-radius: 5px;padding-top: 20px;min-height:470px;background: #ffffff96;">
                  
                     <div id="flash" class="flash" style="margin-bottom: 10px;text-align: center;">
                        <div role="alert" ng-show="hasFlash" class="alert  alert-dismissible alertIn alertOut ng-animate alert-danger"> 
                          <span dynamic="flash.text"><strong class="ng-scope"> Erreur ! </strong><span class="ng-scope ng-scope-msg"> Login incorrect! </span> </span> <button type="button" class="close" close-flash=""><span aria-hidden="true">×</span><span class="sr-only">Close</span></button> 
                        </div>
                      </div>

            <form id="sendMessageForm" name="Création de ticket ticket" class="php-email" action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">


              <input type="hidden" name="__vtrftk" value="sid:d3fcb070ef5b5446ffd0a9d65459debd9b7834b1,1678185040">
            <input type="hidden" name="publicid" value="eda35ad2f9aca47f23c91da1ec448312">
            <input type="hidden" name="urlencodeenable" value="1">
            <input type="hidden" name="name" value="Création de ticket ticket">
            <input type="hidden" name="ticket_title" data-label="" value="Recours sur monpasseport.ci" required="">



              <div class="form-row">
                <div class="col-md-12 form-group">
                  <select id='typerecours' class="form-control  requiredField" name="cf_885" data-label="label:Type+de+recours"  required="">
                    <option value="">Type de recours *</option>
                    <option value="Demande d informations">Demande d'information</option>
                    <option value="Demande d assistance">Demande d'assistance</option>
                    <option value="Reclamation passeport">Réclamation passeport</option>
                  </select>
                </div>
              </div>


              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="cf_905" class="form-control maxlengh25 requiredField" id="lastname" placeholder="Nom du requérant *" data-rule="minlen:4" data-msg="Entrer au moins 4 caractères" />
                  <div class="validate"></div>
                </div>
               <div class="col-md-6 form-group">
                  <input type="text" name="cf_907" class="form-control maxlengh25 requiredField" id="cf_907" placeholder="Prénoms du requérant *" data-rule="minlen:4" data-msg="Entrer vos prenoms" />
                  <div class="validate"></div>
                </div>

                
              </div>


               <div class="form-row">

                <div class="col-md-4 form-group">
                  <input type="text" name="cf_909" class="form-control maxlengh25 requiredField numberonly" id="cf_909" placeholder="Telephone *" data-rule="minlen:4" data-msg="Entrer votre telephone" />
                  <div class="validate"></div>
                </div>

                <div class="col-md-4 form-group">
                  <input type="text" name="cf_911" class="form-control maxlengh25 requiredField email" id="firstname" placeholder="Email *" data-rule="minlen:4" data-msg="Entrer l'email" />
                  <div class="validate"></div>
                </div>

                <div class="col-md-4 form-group">
                  <input id="date_naiss" type="text" name="cf_913" class="form-control maxlengh25 requiredField" id="cf_913" placeholder="Date de naissance *" data-rule="minlen:4" data-msg="Entrer la date de naissance" />
                  <div class="validate"></div>
                </div>
               

                
              </div>


              <div class="form-row">

                <div class="col-md-6 form-group">
                  <select class="form-control  requiredField" name="cf_893" data-label="label:Type+de+recours" required="">
                    <option value="">Sous produit *</option>
                    <option value="Passeport CI digital">Passeport CI Digital</option>
                    <option value="Passeport ambassade et consulat">Passeport ambassade et consulat</option>
                  </select>
                </div>

               <div class="col-md-6 form-group">
                  <select id="motif" class="form-control  requiredField" name="cf_889" data-label="label:Type+de+recours" required="">
                    <option value="">Motif *</option>
                    {{-- <option value="Demande d'information">Demande d'information</option>
                    <option value="Demande d'assistance">Demande d'assistance</option>
                    <option value="Documents non générés">Document non généré</option>
                    <option value="Autres réclamations">Autre reclamation</option>
                     <option value="Dossier non valid">Dossier non validé</option> --}}
                  </select>
                </div>
              </div>

              <div class="form-group" style="margin-bottom:2px";>
                <textarea class="form-control " name="description" rows="5" data-rule="required" data-msg="Veuillez ecrire un message" placeholder="Description"></textarea>
                <div class="validate"></div>
              </div>

              <span style="color:#f36e24;font-size: 12px;font-weight: bold;margin: 10px 0px;display: block;">Les champs avec un astérisque (*) sont obligatoires.</span>
               <div class="text-center">
               <a id="sendmessageBtn" href="#" style="background: #f36e23" class="customBtn  progress-button" data-progress-button>
                            <span class="progress-button-indicator"></span>
                            <span class="progress-button-content">
                                <span class="progress-button-before">Envoyer un message</span>
                                <span class="progress-button-after">PATIENTER</span>
                                <span class="progress-button-spacer">PATIENTER</span>
                            </span>
                        </a>
              </div>

              
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
    
  <link href="/flash/flash.css" rel="stylesheet">
  <script type="text/javascript" src="/flash/flash.js"></script>
  <script src="/assets/js/sendEmail.js"></script>
     <script src="/assets/js/plugins/jquery.inputmask.bundle.js"></script>


  <script type="text/javascript">
    $("#date_naiss").inputmask({ alias: "date", placeholder:"JJ/MM/AAAA",});


 

    $(document).on('change','#typerecours', function(e){

        var type_recours = $(this).val();
        console.log(type_recours);


        if(type_recours == "Demande d informations"){
            $('#motif').html('<option value="demnade d\'information">Demande d\'information</option>');
        }



        if(type_recours == "Demande d assistance"){
            $('#motif').html('<option value="Demande d\'assistance">Demande d\'assistance</option>');
        }


        if(type_recours == "Reclamation passeport"){
            $('#motif').html('<option value="">Sélectionner un motif *</option><option value="documents non générés">Documents non générés</option><option value="dossier non valid">Dossier non validé</option><option value="autres réclamations">Autres réclamations</option>');
        }


        if(type_recours == ""){
            $('#motif').html('<option value="">Motif *</option>');
        }




          
       
      })




  </script>
  @endsection