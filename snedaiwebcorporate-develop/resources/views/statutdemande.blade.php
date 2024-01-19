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
                        <a class="signin__item" href="/espace_personnel" style="display: block;height: 100%">
                          <div class="signin__heading" >Espace personnel</div>
                          <p>Informations personnelles, Modifications mot de passe.</p>
                          <i class="far fa-arrow-right"></i>
                        </a>
                        <a class="signin__item" href="/historique_transaction" style=" display: block;height: 100%;">
                          <div class="signin__heading">Historiques </div>
                          <p>Codes rendez-vous, Recus de paiement</p>
                          <i class="far fa-arrow-right"></i>
                        </a>
                         <a class="signin__item" href="/statut_demande" style=" display: block;height: 100%;;background: #e8eaf6">
                          <div class="signin__heading">Statut demande </div>
                          <p>Voir le statut de votre demande</p>
                          <i class="far fa-arrow-right"></i>
                        </a>
                        <a class="signin__item" href="" style="display: block;height: 100%;">Mes notifications</a>
                    </div>
              </div> 

              


               <div class="col-lg-8 mt-5 mt-lg-0" style="border-radius: 5px;padding-top: 20px;min-height:400px">
                <button id="pop" class="js-open btn-open is-active" style="z-index: 100;height: 30px;;background: #cacbdf; display: none;">Show modal</button>

                  <form id="formstatusdmd" autocomplete="off" action="" method="post" role="form" class="php-email-form form-wrapper" style="position:relative">
                    @csrf
                        <fieldset class="section is-active" style="min-height: 380px;">
                          <div id="form_edit_user_info">
                             <h4 style="color: #28285e;background: #28285e14;padding: 10px;">STATUT DE MES DEMANDES </h4>
                             <p style="font-size: 16px; margin:20px">Merci de saisir les données exactes figurant sur votre reçu. </p>

                              

                          <div id="flash" class="flash" style="margin-bottom: 10px;">
                            <div role="alert" ng-show="hasFlash" class="alert  alert-dismissible alertIn alertOut ng-animate alert-danger"> 
                              <span dynamic="flash.text"><strong class="ng-scope">Erreur !</strong><span class="ng-scope ng-scope-msg"> Login incorrect! </span> </span> <button type="button" class="close" close-flash=""><span aria-hidden="true">×</span><span class="sr-only">Close</span></button> 
                            </div>
                          </div>

                              <div class="form-row" style="margin-top:20px">
                                 <div class="col-md-6 form-group input_wrap">
                                    <input type="text" name="lastname" class="form-control  requiredField maxlengh25" id="name" data-rule="minlen:4" data-msg="Entrer votre nom" required />
                                    <label style="display: block;text-align: left;font-weight:600;">Nom <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                                 <div class="col-md-6 form-group input_wrap">
                                    <input type="text" class="form-control  requiredField maxlengh25" name="firstname" id="firstname"  data-rule="minlen:10" data-msg="Entrer votre prénom" required  />
                                    <label style="display: block;text-align: left;font-weight:600;" >Prénoms<span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                     
                                 </div>
                                 
                              </div>
                              <div class="form-row" >

                                  <div class="col-md-6 form-group input_wrap">
                                    <select id="site_enroll"  class="form-control requiredField" name="site_enroll" data-rule="minlen:6" data-msg="selectionner le type de pièce">
                                       <option value="0" disabled selected>Selectionner votre site d'enrôlement</option>
                                      @foreach ($listeagence as $agence) 
                                          <option value="{{$agence}}">{{$agence}}</option>
                                      @endforeach
                                    
                                    </select>
                                    <label style="display: block;text-align: left;font-weight:600;" > Site d'enrôlement<span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                                  <div class="col-md-6 form-group input_wrap">
                                    <input id="date_enroll" type="text" name="date_enroll" data-inputmask="'alias': 'date'" class="form-control  requiredField"  data-rule="minlen:4" data-msg="Date d'enrôlement"   required  />
                                    <label style="display: block;text-align: left;font-weight:600;">Date d'enrôlement <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                                  <div class="col-md-6 form-group input_wrap">
                                    <input type="text" class="form-control requiredField " data-inputmask="'alias': 'date'"  name="date_naiss" id="date_naiss"  data-rule="minlen:6" data-msg="Date de naissance invalide" required   />
                                    <label style="display: block;text-align: left;font-weight:600;" >  Date de naissance   <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                              </div>
                              <div class="form-row">
                                <div class="col-md-12" style="margin-top:30px;">
                                   <a id="findstatutsrequest" href="#" style="background: #f36e23" class="customBtn  progress-button" data-progress-button>
                                          <span class="progress-button-indicator"></span>
                                          <span class="progress-button-content">
                                              <span class="progress-button-before">RECHERCHER</span>
                                              <span class="progress-button-after">PATIENTER</span>
                                              <span class="progress-button-spacer">PATIENTER</span>
                                          </span>
                                      </a>
                                </div>
                              </div>

                              </div>
                              
                        </fieldset>

                    <div class="wrap popop">
                                <div class="modal js-modal statutdemande" style="position: relative;width: 95%;margin: 0 auto;background:#fff;padding: 2em 1em;">
                                     


                                    {{-- DESIGN --}}


                                     <div class="content1">
                                            <h2>STATUS DE VOTRE DEMANDE</h2>
                                        </div>
                                        <div class="content2">
                                            <div class="content2-header1">
                                                <p style="font-size: 16px">NOM: <span style="margin-left: 10px;">COULIBALY</span></p>
                                            </div>
                                            <div class="content2-header1">
                                                <p  style="font-size: 16px">PRENOMS :  <span style="margin-left: 10px;">TENEMAGA</span></p>
                                            </div>
                                            <div class="content2-header1">
                                                <p  style="font-size: 16px">DATE DE NAISSANCE :  <span style="margin-left: 10px;">10-09-1992</span></p>
                                            </div>
                                            {{-- <div class="clear"></div> --}}
                                        </div>
                                        <div style="clear:both;"></div>

                                    <div class="container">
                                      <div class="row">
                                        <div class="col-12 col-md-12 hh-grayBox pt45 pb20" style="margin-top:5px;margin-bottom: 0px;">
                                            <div class="row justify-content-between">
                                                <div class="order-tracking completed">
                                                    <span class="is-complete" style="float: left;"></span>
                                                    <p style="font-size:16px ;float: left;margin-top: 0px;margin-left: 20px;">afis<span style="font-weight: bold;color: green;margin-left: 10px">OK</span></p>
                                                </div>
                                                <div class="order-tracking completed">
                                                    <span class="is-complete" style="float: left;"></span>
                                                    <p style="font-size:16px ;float: left;margin-top: 0px;margin-left: 20px;">Paiement<span style="font-weight: bold;color: green;margin-left: 10px">OK</span></p>
                                                </div>
                                                <div class="order-tracking">
                                                    <span class="is-complete" style="float: left;"></span>
                                                    <p style="font-size:16px; float: left;margin-top: 0px;margin-left: 20px;">Police<span style="font-weight: bold;color: green;margin-left: 10px">OK</span></p>
                                                </div>

                                                <div class="order-tracking">
                                                    <span class="is-complete" style="float: left;"></span>
                                                    <p style="font-size:16px ; float: left;margin-top: 0px;margin-left: 20px;">Production <span style="font-weight:bold;color:black;margin-left:10px">2021-04-12</span></p>
                                                </div>

                                                <div class="order-tracking">
                                                    <span class="is-complete" style="float: left;"></span>
                                                    <p style="font-size:16px ;float: left;margin-top: 0px;margin-left: 20px;"> Delivrance<span style="font-weight:bold;color:black;margin-left: 10px;">2021-04-12</span></p>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>


                                    {{-- END DESIGN --}}



                                
                                  <button style="margin-top: 10px" class="js-close">Fermer</button>
                                </div>
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
   <link href="/assets/css/hover_refresh.css" rel="stylesheet">
    <script src="/assets/js/plugins/dynamics.js"></script>
   <script type="text/javascript" src="/modals/modals_customized.js"></script>
   <script src="/assets/js/plugins/jquery.inputmask.bundle.js"></script>
    <link href="/modals/modals.css" rel="stylesheet">
   <link href="/flash/flash.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="/assets/js/bootstrap-datepicker/css/datepicker.css" />
   <script type="text/javascript" src="/assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="/flash/flash.js"></script>
   <script src="/assets/js/user_data.js"></script>
   <script type="text/javascript" src="/assets/js/statusdemandes.js"></script>
   <link href="/assets/css/maintable.css" rel="stylesheet">
   <link href="/anim/anim_edit.css" rel="stylesheet">

     <script type="text/javascript">
             $(":input").inputmask();
             $("#date_naiss").inputmask({ alias: "date", placeholder:"jj/mm/aaaa",});
             $("#date_enroll").inputmask({ alias: "date", placeholder:"jj/mm/aaaa",});
            $('#date_naiss, #date_enroll').on('blur', function(e){
              
              selected_date = $(this).val();

              var dateAr = selected_date.split('/');
              var selectedYear = dateAr[2];
              var currentYear = new Date().getFullYear()

              var isValid = Inputmask.isValid(selected_date, { alias: "date", inputFormat: "dd/mm/yyyy"});

              if(isValid == false){
                er_date_son=true;
                $(this).addClass('invalid');
                $(this).siblings('.validate').html('Date invalide').show('blind');
              }else if(parseInt(selectedYear) > parseInt(currentYear)){
                 er_date_son=true;
                 console.log('superior');
                 $(this).addClass('invalid');
                 $(this).siblings('.validate').html('Date de naissance invalide').show('blind');
              }
              else {
                 er_date_son=false;
                 $(this).removeClass('invalid');
                 $(this).siblings('.validate').css('display','none').html('');
              }

              });
       </script>


  
    <style type="text/css">
           .hh-grayBox {
                background-color: #F8F8F8;
                margin-bottom: 20px;
                padding: 10px 25px;
              margin-top: 20px;
            }
            .pt45{padding-top:45px;}
            .order-tracking{
                text-align: center;
                width: 20%;
                position: relative;
                display: block;
            }
            .order-tracking .is-complete{
                display: block;
                position: relative;
                border-radius: 50%;
                height: 30px;
                width: 30px;
                border: 0px solid #AFAFAF;
                background-color: #f36e23;
                margin: 0 auto;
                transition: background 0.25s linear;
                -webkit-transition: background 0.25s linear;
                z-index: 2;
            }
            .order-tracking .is-complete:after {
                display: block;
                position: absolute;
                content: '';
                height: 14px;
                width: 7px;
                top: -2px;
                bottom: 0;
                left: 5px;
                margin: auto 0;
                border: 0px solid #f36e23;
                border-width: 0px 2px 2px 0;
                transform: rotate(45deg);
                opacity: 0;
            }
            .order-tracking.completed .is-complete{
                border-color: #27aa80;
                border-width: 0px;
                background-color: #27aa80;
            }
            .order-tracking.completed .is-complete:after {
                border-color: #fff;
                border-width: 0px 3px 3px 0;
                width: 7px;
                left: 11px;
                opacity: 1;
            }
            .order-tracking p {
                color: #A4A4A4;
                font-size: 16px;
                margin-top: 8px;
                margin-bottom: 0;
                line-height: 20px;
            }
            .order-tracking p span{font-size: 14px;}
            .order-tracking.completed p{color: #000;}
            .order-tracking::before {
                content: '';
                display: block;
                height: 3px;
                width: calc(100% - 40px);
                background-color: #f7be16;
                top: 13px;
                position: absolute;
                left: calc(-50% + 20px);
                z-index: 0;
            }
            .order-tracking:first-child:before{display: none;}
            .order-tracking.completed:before{background-color: #27aa80;}


            @media (max-width: 320px)
.content1 {
    padding: 1em;
}

@media (max-width: 568px)
.content1 {
    padding: 1em;
}
@media (max-width: 600px)
.content1 {
    padding: 1.2em;
}
.content1 {
    background-color: #28285e;
    text-align: center;
    padding: 1em;
}
@media (max-width: 320px)
.content1 h2 {
    font-size: 17px;
}
@media (max-width: 375px)
.content1 h2 {
    font-size: 20px;
}
@media (max-width: 384px)
.content1 h2 {
    font-size: 21px;
}
@media (max-width: 414px)
.content1 h2 {
    font-size: 22px;
}
.content1 h2 {
    /*font-family: 'Open Sans', sans-serif;*/
    text-transform: uppercase;
    margin: 0;
    color: #fff;
    font-size: 23px;
}
.content2 {
    background-color: #e8e8e885;
    padding:5px;
}
@media (max-width: 414px)
.content2-header1 {
    padding: 0.7em;
    width: 80%;
    margin-left: 3%;
}
@media (max-width: 568px)
.content2-header1 {
    width: 23%;
}
@media (max-width: 600px)
.content2-header1 {
    width: 24%;
}
@media (max-width: 768px)
.content2-header1 {
    width: 25%;
}
.content2-header1 {
    float: left;
    width: 33%;
    text-align: center;
    padding: 0.5em;
}
@media (max-width: 414px)
.content2-header1 p {
    font-size: 19px;
}
@media (max-width: 600px)
.content2-header1 p {
    font-size: 13px;
}
@media (max-width: 667px)
.content2-header1 p {
    font-size: 14px;
}
@media (max-width: 768px)
.content2-header1 p {
    margin: 0 -19% 0 -10%;
}
@media (max-width: 800px)
.content2-header1 p {
    margin: 0 0 0 -7%;
}
.content2-header1 p {
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
    font-weight: 700;
    color: #4E7D48;
    margin: 0;
}
@media (max-width: 320px)
.content2-header1 span {
    font-size: 15px;
}
@media (max-width: 414px)
.content2-header1 span {
    font-size: 16px;
}
@media (max-width: 600px)
.content2-header1 span {
    font-size: 12px;
}
@media (max-width: 667px)
.content2-header1 span {
    font-size: 13px;
}
.content2-header1 span {
    font-size: 14px;
    font-weight: 400;
}
    </style>


    @endsection