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
                        <a class="signin__item" href="/espace_personnel" style="display: block;height: 100%;">
                          <div class="signin__heading" >Espace personnel</div>
                          <p>Informations personnelles, Modifications mot de passe.</p>
                          <i class="far fa-arrow-right"></i>
                        </a>
                        <a class="signin__item" href="/historique_transaction" style=" display: block;height: 100%;background: #e8eaf6">
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
                 
                   <div class="form-row">
                       <div class="col-md-6 form-group" style="width:50%">
                          <a href="#" id="achats"  class="button_next histoBtn activated">ACHATS </a>
                       </div>
                      <div class="col-md-6 form-group" style="width:50%">
                         <a href="#" id="demandes" class="button_next histoBtn">DEMANDES </a>
                       </div>
                  </div>
                  <form action="" role="form" class="php-email-form form-wrapper" style="position:relative" autocomplete="off">
                        <fieldset id="fieldsetAchat" class="section is-active" >
                          <div >
                             <h4 style="color: #28285e;background: #28285e14;padding: 10px;">HISTORIQUE DES ACHATS </h4>
                              

                          <div id="flash" class="flash" style="margin-bottom: 10px;">
                            <div role="alert" ng-show="hasFlash" class="alert  alert-dismissible alertIn alertOut ng-animate alert-danger"> 
                              <span dynamic="flash.text"><strong class="ng-scope">Erreur !</strong><span class="ng-scope ng-scope-msg"> Login incorrect! </span> </span> <button type="button" class="close" close-flash=""><span aria-hidden="true">×</span><span class="sr-only">Close</span></button> 
                            </div>
                          </div>

                              <div class="form-row">
                                 <div class="col-md-6 form-group" style="width:50%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">CODE RENDEZ-VOUS </label>
                                    <input type="radio" class="form-control" name="hitorytype" value="cd_rdv" style="width: 50%;display: inline;height: 25px;" @if (Session::get('civility')=='m') checked @endif> 
                                 </div>


                                 <div class="col-md-6 form-group" style="width:50%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">RECU PAIEMENT</label>
                                    <input type="radio" class="form-control invalid" name="hitorytype" value="recu_p" style="width: 50%;display: inline;height: 25px;" @if (Session::get('civility')=='mme') checked @endif> 
                                 </div>
                               
                              </div>



                              <div class="form-row">
                                 <div class="col-md-4 form-group input_wrap">
                                    <input id="date_deb" type="text" name="date_deb" class="form-control  requiredField"  data-rule="minlen:4" data-msg="Entrer la date de debut"   required readonly />
                                    <label style="display: block;text-align: left;font-weight:600;">Debut <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                                 <div class="col-md-4 form-group input_wrap">
                                    <input id="date_fin" type="text" class="form-control requiredField" name="date_fin"   data-rule="minlen:10" data-msg="Entrer la date de fin " required  readonly />
                                    <label style="display: block;text-align: left;font-weight:600;" >fin<span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                                 <div class="col-md-4 form-group input_wrap">
                                  {{--  <a class="" href="#"  style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block">Rechercher </a> --}}

                                       <a id="filtreachat" href="#" style="background: #f36e23" class="customBtn  progress-button" data-progress-button>
                                                    <span class="progress-button-indicator"></span>
                                                    <span class="progress-button-content">
                                                        <span class="progress-button-before">RECHERCHER</span>
                                                        <span class="progress-button-after">PATIENTER</span>
                                                        <span class="progress-button-spacer">PATIENTER</span>
                                                    </span>
                                                </a>

                                 </div>
                              </div>

                                <div id="rdv_table" class="form-row" style="background: #28285e">

                                    <div class="tbl-header">
                                        <table class="hfilter" cellpadding="0" cellspacing="0" border="0">
                                          <thead>
                                            <tr>
                                              <th>DATE</th>
                                              <th>CATEGORIE</th>
                                              <th>CODE </th>
                                              <th>DETAILS</th>
                                            </tr>
                                          </thead>
                                        </table>
                                    </div>

                                    <div class="tbl-content">
                                      <table class="hfilter" cellpadding="0" cellspacing="0" border="0">
                                        <tbody id="transaction_list_result">
                                         
                                          <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>

                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>

                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>


                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>


                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>


                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>
                                          
                                        </tbody>
                                      </table>
                                    </div>
                                </div>


                                <div id="paiement_table" class="form-row" style="background: #28285e;display: none">

                                    <div class="tbl-header">
                                        <table class="hfilter" cellpadding="0" cellspacing="0" border="0">
                                          <thead>
                                            <tr>
                                              <th>DATE</th>
                                              <th>CATEGORIE</th>
                                              <th>MONTANT </th>
                                              <th>DETAILS</th>
                                            </tr>
                                          </thead>
                                        </table>
                                    </div>

                                    <div class="tbl-content">
                                      <table class="hfilter" cellpadding="0" cellspacing="0" border="0">
                                        <tbody id="transaction_list_result_paiement">
                                          {{-- <tr>
                                            <td style="width: 100%;text-align: center;font-weight: bold;">Veuillez patienter ...</td>
                                          </tr> --}}

                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>

                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>

                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>


                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>


                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>


                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>
                                          
                                        </tbody>
                                      </table>
                                    </div>
                                </div>


                              </div>
                        </fieldset>


                        <fieldset id="fieldsetDemande" class="section " >
                          <div >
                             <h4 style="color: #28285e;background: #28285e14;padding: 10px;">HISTORIQUE DES DEMADES </h4>
                              

                          <div id="flash" class="flash" style="margin-bottom: 10px;">
                            <div role="alert" ng-show="hasFlash" class="alert  alert-dismissible alertIn alertOut ng-animate alert-danger"> 
                              <span dynamic="flash.text"><strong class="ng-scope">Erreur !</strong><span class="ng-scope ng-scope-msg"> Login incorrect! </span> </span> <button type="button" class="close" close-flash=""><span aria-hidden="true">×</span><span class="sr-only">Close</span></button> 
                            </div>
                          </div>

                              <div class="form-row">

                               
                              </div>



                              <div class="form-row">
                                 <div class="col-md-4 form-group input_wrap">
                                    <input id="date_debdmd" type="text" name="date_debdmd" class="form-control  requiredField"  data-rule="minlen:4" data-msg="Entrer la date debut"   required="" readonly />
                                    <label style="display: block;text-align: left;font-weight:600;">Debut <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                                 <div class="col-md-4 form-group input_wrap">
                                    <input id="date_findmd" type="text" class="form-control requiredField" name="date_findmd"   data-rule="minlen:10" data-msg="Entrer la date de fin" required readonly />
                                    <label style="display: block;text-align: left;font-weight:600;" >fin<span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                                 <div class="col-md-4 form-group input_wrap">
                                 {{--   <a class="" href="#"  style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block">Rechercher </a> --}}


                                    <a id="filtre_dmd" href="#" style="background: #f36e23" class="customBtn  progress-button" data-progress-button>
                                                    <span class="progress-button-indicator"></span>
                                                    <span class="progress-button-content">
                                                        <span class="progress-button-before">RECHERCHER</span>
                                                        <span class="progress-button-after">PATIENTER</span>
                                                        <span class="progress-button-spacer">PATIENTER</span>
                                                    </span>
                                                </a>

                                 </div>
                              </div>

                                <div id="demand_table" class="form-row" style="background: #28285e">

                                    <div class="tbl-header">
                                        <table class="hfilter" cellpadding="0" cellspacing="0" border="0">
                                          <thead>
                                            <tr>
                                              <th>DATE</th>
                                              <th>CATEGORIE</th>
                                              <th>MONTANT </th>
                                              <th>DETAILS</th>
                                            </tr>
                                          </thead>
                                        </table>
                                    </div>

                                    <div class="ph-item" style="width 100%">
                                        <div class="ph-col-12">
                                           {{--  <div class="ph-picture"></div> --}}
                                            <div class="ph-row">
                                                <div class="ph-col-6 big"></div>
                                                <div class="ph-col-4 empty big"></div>
                                                <div class="ph-col-2 big"></div>
                                                <div class="ph-col-4"></div>
                                                <div class="ph-col-8 empty"></div>
                                                <div class="ph-col-6"></div>
                                                <div class="ph-col-6 empty"></div>
                                                <div class="ph-col-12"></div>
                                            </div>
                                        </div>
                                    </div>


{{-- 
                                    <div class="border border-blue-300 shadow rounded-md p-4 max-w-sm w-full mx-auto">
                                      <div class="animate-pulse flex space-x-4">
                                        <div class="rounded-full bg-blue-400 h-12 w-12"></div>
                                        <div class="flex-1 space-y-4 py-1">
                                          <div class="h-4 bg-blue-400 rounded w-3/4"></div>
                                          <div class="space-y-2">
                                            <div class="h-4 bg-blue-400 rounded"></div>
                                            <div class="h-4 bg-blue-400 rounded w-5/6"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div> --}}





                                    <div class="tbl-content">
                                      <table class="hfilter" cellpadding="0" cellspacing="0" border="0">
                                        <tbody id="transaction_list_result_dmd">

                                         {{--  <tr>
                                             <td style="width: 100%;text-align: center;font-weight: bold;">Veuillez patienter ...</td>
                                           </td>
                                          </tr> --}}

                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>

                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>

                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>


                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>


                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>


                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>
                                          
                                        </tbody>
                                      </table>
                                    </div>
                                </div>


                                <div id="paiement_table" class="form-row" style="background: #28285e;display: none">

                                    <div class="tbl-header">
                                        <table class="hfilter" cellpadding="0" cellspacing="0" border="0">
                                          <thead>
                                            <tr>
                                              <th>DATE</th>
                                              <th>CATEGORIE</th>
                                              <th>MONTANT </th>
                                              <th>DETAILS</th>
                                            </tr>
                                          </thead>
                                        </table>
                                    </div>

                                    <div class="tbl-content">
                                      <table class="hfilter" cellpadding="0" cellspacing="0" border="0">
                                        <tbody id="transaction_list_result_paiement">
                                         {{--  <tr>
                                            <td style="width: 100%;text-align: center;font-weight: bold;">Veuillez patienter ...</td>
                                          </tr> --}}


                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>

                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>

                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>


                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>


                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>


                                           <tr>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-2 bg-white rounded w-full"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                            <td style="padding:0px !important">
                                                <div class=" shadow rounded-md p-2.5 w-full mx-auto">
                                                  <div class="animate-pulse flex space-x-4">
                                                    <div class="flex-1 space-y-4 py-1">
                                                      <div class="h-8 bg-white rounded w-10/12"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </td>
                                          </tr>
                                          
                                        </tbody>
                                      </table>
                                    </div>
                                </div>


                              </div>
                        </fieldset>



                        
                        {{--  <button class="js-open btn-open is-active" style="z-index: 100;height: 30px;display: block;background: #cacbdf;display: none">Show modal</button> --}}


                         <div class="wrap popop">
                                <div class="modal js-modal detailresult" style="position: relative;width: 95%;top:20px;margin: 0 auto;background: #fff">
                                 {{--  <div class="modal-image">
                                    <svg viewBox="0 0 32 32" style="fill:#009688"><path d="M1 14 L5 10 L13 18 L27 4 L31 8 L13 26 z"></path></svg>
                                  </div> --}}
                                  <h1 style="font-size: 40px">Details !</h1>
                                  <table style="width: 100%" class="recap-table">
                                      <tr>
                                        <td class="rowtable">TYPE DE TRANSACTION</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td class="rowtable">ID TRANSACTION </td>
                                        <td>AUSENCO</td>
                                      </tr>
                                      <tr>
                                        <td class="rowtable">HEURE DE RDV</td>
                                        <td>AUSENCO</td>                                       
                                      </tr>
                                       <tr>
                                        <td class="rowtable">LIEU</td>
                                        <td>AUSENCO</td>                                       
                                      </tr>

                                      <tr>
                                        <td class="rowtable">CODE RDV</td>
                                        <td>AUSENCO</td>                                       
                                      </tr>

                                      <tr>
                                        <td class="rowtable">DATE ET HEURE </td>
                                        <td>AUSENCO</td>                                       
                                      </tr>
                                     
                                  </table>
                                {{--   <p>Pour fermer, cliquez sur le bouton ci-dessous</p> --}}
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

     
     <script src="/assets/js/plugins/dynamics.js"></script>
     <script type="text/javascript" src="/modals/modals_customized.js"></script>
    {{-- <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css"> --}}
    <link href="/assets/css/plugins/tailwind.min.css" rel="stylesheet">

     <link href="/modals/modals.css" rel="stylesheet">
     <link href="/assets/css/hover_refresh.css" rel="stylesheet">
     <link href="/assets/css/application.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="/assets/js/bootstrap-datepicker/css/datepicker.css" />
     <link href="/flash/flash.css" rel="stylesheet">
     <script type="text/javascript" src="/flash/flash.js"></script>
     <script type="text/javascript" src="/assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
     <link href="/assets/css/maintable.css" rel="stylesheet">
     <script type="text/javascript" src="/assets/js/historique.js"></script>




     <style type="text/css">
     
    .histoBtn {
      background: #f3efef;
      border: 0;
      padding: 10px 5px;
      color: #000;
      transition: 0.4s;
      border-radius: 5px;
      display: block;
      font-weight: bold;
      text-align: center;
    }
    .histoBtn.activated{
       background: #28285e !important;
       color: #fff  !important;
    }

     </style>

  <script type="text/javascript">
       
  </script>
   
   @endsection