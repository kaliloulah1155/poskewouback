 @extends('layouts.master')
  @section('content')
 <!-- ======= Hero Section ======= -->
      <div style="height: 50px">
          &nbsp;
       </div>
      <section id="hero" class="d-flex flex-column justify-content-center newdemand" style="height: auto">
         <div class="container" data-aos="zoom-in" data-aos-delay="100" >
            <h1 style="color: white">Nouvelle demande   </h1>
            <p  style="color: white"><span style="color: white" class="typed" data-typed-items="Contactez-nous sans hésiter !"></span></p>
            <div class="row mt-3">
              @php
               // dd($dataSavedSteps);   

                     

                      $newarray = [];

                      // dd($dataSavedSteps)

                      //dd($dataSavedSteps[0]->datavalue);
                     
                     foreach ($dataSavedSteps as $element){

                       // dd( $element->parent_step);

                        if ($element->parent_step== 'pre1')
                            $newarray [0]=  $element;

                         if ($element->parent_step== 'pre2')
                            $newarray [1]=  $element;

                         if ($element->parent_step== 'pre3')
                            $newarray [2]=  $element;

                         if ($element->parent_step== 'pre4')
                            $newarray [3]=  $element;

                         if ($element->parent_step== 'pre5')
                            $newarray [4]=  $element;


                         if ($element->parent_step== 'rdv1')
                            $newarray [5]=  $element;


                     }

                    // dd($newarray );

                      $lastsavedStep=''; 
                      end($newarray);
                      $lastkey  = key($newarray);
                       

                      if (!empty($newarray)){
                           // $lastsavedStep= $newarray[$lastkey]['parent_step'];
                            $lastsavedStep= $newarray[$lastkey]->parent_step;
                          //  dd($lastsavedStep);
                      }
                      $lastsavedStep='';
                    @endphp
               <div class="col-lg-8 mt-5 mt-lg-0" style="border-radius: 5px;padding-top: 20px;min-height:480px">
                  <div class="form-row" style="background: white;margin-left: unset;margin-right: unset;">
                    <div id="pre-enrollmentBanner" @if (($lastsavedStep =='')|| ($lastsavedStep =='pre1'|| $lastsavedStep =='pre2'|| $lastsavedStep =='pre3'|| $lastsavedStep =='pre4')) class="col-md-3 requestStepActivated" @else class="col-md-3 requestStep" @endif > 1. Pré-enrôlement </div>
                    <div id="rdvBanner" @if (!empty($lastsavedStep) &&($lastsavedStep =='pre5' || $lastsavedStep =='rdv1')) class="col-md-3 requestStepActivated" @else class="col-md-3 requestStep" @endif> 2. Rendez-vous </div>
                    <div id="confirmationBanner" class="col-md-3 requestStep"> 3. Confirmation </div>
                    <div id="paiementBanner" class="col-md-3 requestStep"> 4. Paiement </div>
                  </div>
                  <ul class="steps">
 
                    

                    {{-- <li class="is-active pre-enrol">Etape 1</li>
                    <li class="pre-enrol">Etape 2</li>
                    <li class="pre-enrol">Etape 3</li>
                    <li class="pre-enrol">Etape 4</li>
                    <li class="pre-enrol">Etape 5</li> --}}

                    @php
                        $data_step_one='';$data_step_two='';$data_step_three='';$data_step_four='';$data_step_five='';$data_step_six='';
                        
                                   // if(array_key_exists("0",$dataSavedSteps) && $dataSavedSteps[0]['parent_step'] == 'pre1'){
                                   //  $data_step_one = explode('#',$dataSavedSteps[0]['datavalue']);
                                   // }
                                   // if(array_key_exists("1",$dataSavedSteps) && $dataSavedSteps[1]['parent_step'] == 'pre2'){
                                   //  $data_step_two = explode('#',$dataSavedSteps[1]['datavalue']);
                                   // }
                                   //  if(array_key_exists("2",$dataSavedSteps) && $dataSavedSteps[2]['parent_step'] == 'pre3'){
                                   //  $data_step_three = explode('#',$dataSavedSteps[2]['datavalue']);
                                   // }
                                   //  if(array_key_exists("3",$dataSavedSteps) && $dataSavedSteps[3]['parent_step'] == 'pre4'){
                                   //  $data_step_four = explode('#',$dataSavedSteps[3]['datavalue']);
                                   // }
                                   //  if(array_key_exists("4",$dataSavedSteps) && $dataSavedSteps[4]['parent_step'] == 'pre5'){
                                   //  $data_step_five = explode('#',$dataSavedSteps[4]['datavalue']);
                                   // }

                                   //  if(array_key_exists("5",$dataSavedSteps) && $dataSavedSteps[5]['parent_step'] == 'rdv1'){
                                   //  $data_step_six = explode('#',$dataSavedSteps[5]['datavalue']);
                                   // }



                          if(array_key_exists("0",$newarray) && $newarray[0]->parent_step == 'pre1'){
                                    $data_step_one = explode('#',$newarray[0]->datavalue);
                                   // dd($data_step_one);
                                   }
                                   if(array_key_exists("1",$newarray) && $newarray[1]->parent_step == 'pre2'){
                                    $data_step_two = explode('#',$newarray[1]->datavalue);
                                     // dd($data_step_two);
                                   }
                                    if(array_key_exists("2",$newarray) && $newarray[2]->parent_step == 'pre3'){
                                    $data_step_three = explode('#',$newarray[2]->datavalue);
                                    //  dd($data_step_three);
                                   }
                                    if(array_key_exists("3",$newarray) && $newarray[3]->parent_step == 'pre4'){
                                    $data_step_four = explode('#',$newarray[3]->datavalue);
                                      //dd($data_step_four);
                                   }
                                    if(array_key_exists("4",$newarray) && $newarray[4]->parent_step == 'pre5'){
                                    $data_step_five = explode('#',$newarray[4]->datavalue);
                                    //  dd($data_step_five);
                                   }

                                    if(array_key_exists("5",$newarray) && $newarray[5]->parent_step == 'rdv1'){
                                    $data_step_six = explode('#',$newarray[5]->datavalue);
                                      //dd($data_step_six);
                                   }
                                
                               // dd($dataSavedSteps[3]->datavalue);

                                 //  dd($dataSavedSteps[0]->parent_step );

                        $newarray = [];
                       
                      @endphp
                 
                  
                    <li @if (empty($newarray) && ($lastsavedStep !='rdv1') && ($lastsavedStep !='rdv2')) class="is-active pre-enrol"@else class="pre-enrol" @endif>Etape 1</li>
                    <li @if (!empty($newarray) && ($lastsavedStep =='pre1')) class="pre-enrol is-active" @else  class="pre-enrol " @endif @if ($lastsavedStep =='pre5'|| $lastsavedStep =='rdv1' ) style="display: none" @endif>Etape 2</li>
                    <li @if (!empty($newarray) &&($lastsavedStep =='pre2')) class="pre-enrol is-active" @else  class="pre-enrol " @endif @if ($lastsavedStep =='pre5'|| $lastsavedStep =='rdv1' ) style="display: none" @endif>Etape 3</li>
                    <li @if (!empty($newarray) &&($lastsavedStep =='pre3')) class="pre-enrol is-active" @else  class="pre-enrol " @endif @if ($lastsavedStep =='pre5'|| $lastsavedStep =='rdv1' ) style="display: none" @endif>Etape 4</li>
                    <li @if (!empty($newarray) &&($lastsavedStep =='pre4')) class="pre-enrol is-active" @else  class="pre-enrol " @endif @if ($lastsavedStep =='pre5'|| $lastsavedStep =='rdv1' ) style="display: none" @endif>Etape 5</li>
                    <li @if (!empty($newarray) &&($lastsavedStep =='pre5')) class="rdv is-active" @else style="display: none" class="rdv" @endif>Etape 1</li>
                    <li @if (!empty($newarray) &&($lastsavedStep =='rdv1')) class="rdv is-active" @else style="display: none" class="rdv" @endif>Etape 2</li>
                   {{--  <li style="display: none" class="rdv">Etape 2</li> --}}
                   
                    <li style="display: none" class="confirmation">Etape 1</li>
                  </ul>
                  
                   {{-- <button class="js-open btn-open is-active" style="z-index: 100;height: 30px;display: block;background: #cacbdf">Show modal</button> --}}
                  <form id="passport_request_form" action="" autocomplete="off" method="post" role="form" class="php-email-form form-wrapper" style="position:relative;background: white" enctype="multipart/form-data">
                    @csrf
                      {{-- preenrollement --}}





 
                      {{-- preenrollement --}}
                        <fieldset id="step_one" @if (empty($newarray)) class="section is-active"@else class="section" @endif>
                             <h4 style="color: #28285e;background: #28285e14;padding: 5px;">QUI SUIS JE ?</h4>
                              <div class="form-row">
                                 <div class="col-md-6 form-group" style="width:50%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">PREMIERE DEMANDE</label>
                                    <input type="radio" class="form-control" name="type_demande" value="newpassport" style="width: 50%;display: inline;height: 25px;" @if (!empty($data_step_one) && array_key_exists("0",$data_step_one) && $data_step_one[0]=="") checked @endif> 
                                 </div>
                                 <div class="col-md-6 form-group" style="width:50%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">RENOUVELLEMENT</label>
                                    <input type="radio" class="form-control " name="type_demande" value="renewpassport" @if (!empty($data_step_one) && array_key_exists("0",$data_step_one) && $data_step_one[0]!="") checked @endif style="width: 50%;display: inline;height: 25px;"> 
                                 </div>
                                  <div id="qOldpp" class="col-md-12  form-group" style="margin-top: -15px;background: #b0c4de63;display: none">
                                      <p style="margin: 0;font-size: 12px;text-align: center;">Connaissez vous votre ancien numéro de passport ?&nbsp;&nbsp; <a id="oui_old_pp" style="font-weight: bold;" href="#">OUI</a> &nbsp;&nbsp;&nbsp; <a style="font-weight: bold;color: red" id="non_old_pp" href="#">NON</a> </p>
                                  </div>
                              </div>
                              <div class="form-row">
                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="text" name="numpassport" class="form-control numpassport" id="numpassport" data-rule="minlen:9" data-msg="Entrer votre numéro passeport " required maxlength="9"    @if (!empty($data_step_one) && array_key_exists("0",$data_step_one) && $data_step_one[0]!="") value="{{$data_step_one[0]}}" @else disabled @endif />
                                    <label style="display: block;text-align: left;font-weight:600;">Numéro passeport précédent <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                                  <div class="col-md-4 form-group input_wrap">
                                   
                                    <select  class="form-control requiredField" name="type_piece" id="type_piece" data-rule="minlen:6" data-msg="selectionner le type de pièce">
                                      <option value="CNI">Cni</option>
                                      <option value="PASSEPORT" >Passeport</option>
                                       <option value="EXTRAIT DE NAISSANCE" >EXTRAIT DE NAISSANCE</option>
                                      <option value="ATTESTATION D'IDENTITE" >Attestation d'identité</option>
                                    </select>
                                    <label style="display: block;text-align: left;font-weight:600;" > Type de pièce<span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control requiredField numpiece" name="numpiece" id="numpiece" data-rule="minlen:6"  data-msg="Entrer votre numero piece valide" required @if (!empty($data_step_one) && array_key_exists("2",$data_step_one)) value="{{$data_step_one[2]}}" @endif />
                                    <label style="display: block;text-align: left;font-weight:600;" >Numéro de pièce <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                              </div>
                              <div class="form-row">
                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control requiredField maxlength25" name="nom_demandeur" id="nom_demandeur" data-rule="minlen:6" data-msg="Entrer votre nom " @if (!empty($data_step_one) && array_key_exists("3",$data_step_one)) value="{{$data_step_one[3]}}" @endif  required />
                                    <label style="display: block;text-align: left;font-weight:600;" >  Nom   <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control requiredField maxlength25" name="prenom_demandeur" id="prenom_demandeur"  data-rule="minlen:6" data-msg="Entrer votre prenom " required  @if (!empty($data_step_one) && array_key_exists("4",$data_step_one)) value="{{$data_step_one[4]}}" @endif/>
                                    <label style="display: block;text-align: left;font-weight:600;" > Prénoms  <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                                 <div class="col-md-4 form-group input_wrap">

                                    <input type="text" min="40" max="300" class="form-control requiredField taille" name="taille" id="taille" maxlength="3"  data-rule="maxlen:3" data-msg="Taille valide entre  40 et 300 cm "  required  @if (!empty($data_step_one) && array_key_exists("5",$data_step_one)) value="{{$data_step_one[5]}}" @endif/>
                                    <label style="display: block;text-align: left;font-weight:600;" > Taille  (cm) <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                              </div>
                              <div class="form-row">

                                  <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control requiredField " data-inputmask="'alias': 'date'"  name="date_naiss" id="date_naiss"  data-rule="minlen:6" data-msg="Date de naissance invalide" required   @if (!empty($data_step_one) && array_key_exists("6",$data_step_one)) value="{{$data_step_one[6]}}" @endif/>
                                    <label style="display: block;text-align: left;font-weight:600;" >  Date de naissance   <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                                 <div class="col-md-4 form-group input_wrap">
                                    <select  class="form-control requiredField" name="pays_naissance" id="pays_naissance" data-rule="minlen:6" data-msg="Entrer votre pays de naissance">
                                       <option value="0" selected="true" disabled="disabled">Sélectionner le pays de naissance  </option>
                                       @foreach ($countries as $country)
                                       
                                          <option value="{{$country->abreviation}}" @if($country->libelle=="Côte d'Ivoire") 
                                         selected @endif>{{ $country->libelle }}</option>
                                       @endforeach
                                    </select>
                                    <label style="display: block;text-align: left;font-weight:600;" > Pays de naissance   <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                                 <div class="col-md-4 form-group input_wrap">
                                    <select  class="form-control requiredField" name="pays_residence" id="pays_residence" >
                                        <option value="0" selected="true" disabled="disabled">Sélectionner le pays de résidence  </option>
                                       @foreach ($countries as $country)
                                          <option value="{{$country->abreviation}}" @if($country->libelle=="Côte d'Ivoire") 
                                         selected @endif>{{ $country->libelle }}</option>
                                       @endforeach
                                    </select>
                                    <label style="display: block;text-align: left;font-weight:600;" > Pays Résidence  <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                              </div>

                              <div class="form-row">
                                 <div class="col-md-4 form-group input_wrap">
                                    <select  class="form-control requiredField" name="nationalite" id="nationalite" data-rule="minlen:6" data-msg="selectionner la nationalite">
                                      <option value="CIV">Ivoirienne</option>
                                    </select>
                                    <label style="display: block;text-align: left;font-weight:600;" > Nationalite<span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>


                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control requiredField maxlength25" name="lieu_naissance" id="lieu_naissance"  data-rule="minlen:6" data-msg="Entrer votre  lieu de naissance" required   @if (!empty($data_step_one) && array_key_exists("10",$data_step_one)) value="{{$data_step_one[10]}}" @endif/>
                                    <label style="display: block;text-align: left;font-weight:600;" > Lieu de naissance   <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control maxlength25" name="profession" id="profession"  data-rule="minlen:6" data-msg="Entrer votre profession" required  @if (!empty($data_step_one) && array_key_exists("11",$data_step_one)) value="{{$data_step_one[11]}}" @else disabled @endif

                                     @php
                                     $difage =19;
                                     if (!empty($data_step_one) && array_key_exists("6",$data_step_one)){

                                    $preventdate_error= Carbon\Carbon::createFromFormat('d/m/Y', $data_step_one[6])->format('d-m-Y');

                                        $toDate = \Carbon\Carbon::parse($preventdate_error);
                                      $fromDate = \Carbon\Carbon::now();
                                      $difage = $toDate->diffInYears($fromDate);
                                     } 
                                     @endphp
                                        @if ($difage <=18)
                                          disabled
                                        @endif

                                    />
                                    <label style="display: block;text-align: left;font-weight:600;" > Profession    <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>


                              </div>

                              <h5 style="color: #28285e;background: #28285e0a;padding:2px;">Sexe</h5>
                               <div class="form-row">
                                 <div class="col-md-6 form-group" style="width:50%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">MASCULIN</label>
                                    <input type="radio" class="form-control" name="sexe" value="1" style="width: 50%;display: inline;height: 25px;"  @if(!empty($data_step_one)&& array_key_exists("13",$data_step_one) && $data_step_one[13] =='1' ) checked @endif @if(empty($data_step_one)) checked @endif> 
                                 </div>
                                 <div class="col-md-6 form-group" style="width:50%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">FEMININ</label>
                                    <input type="radio" class="form-control " name="sexe" value="0"  @if(!empty($data_step_one)&& array_key_exists("13",$data_step_one) && $data_step_one[13] =='0' ) checked  @endif style="width: 50%;display: inline;height: 25px;"> 
                                 </div>
                              </div>
                              <div class="form-row">
                                 
                                {{--  <button class="js-open btn-open is-active" style="z-index: 100;height: 30px;display: block;background: #cacbdf">Show modal</button> --}}

                                <div class="col-md-12" >
                                   {{-- <a id="save_step_one" href="#" style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_next">SUIVANT </a> --}}

                                    <a id="save_step_one" href="#" style="background: #f36e23" class="customBtn  progress-button" data-progress-button>
                                                    <span class="progress-button-indicator"></span>
                                                    <span class="progress-button-content">
                                                        <span class="progress-button-before">SUIVANT</span>
                                                        <span class="progress-button-after">PATIENTER</span>
                                                        <span class="progress-button-spacer">PATIENTER</span>
                                                    </span>
                                                </a>

                                </div>
                                 
                              </div>
                              <!-- <p style="font-size: 12px;font-weight: 600;"> Vous avez déjà un compte ? <span style="color: #f36e23">Connectez vous !</span> </p> -->
                        </fieldset>
                        <fieldset id="step_two" @if (!empty($newarray) &&($lastsavedStep =='pre1')) class="section is-active" @else  class="section" @endif >
                              <h4 style="color:#28285e;background: #28285e14;padding: 10px;">FILIATION</h4>

                              <div class="form-row">
                                  <div class="col-md-12">
                                      <p style="position: relative;background: white;font-size: 14px;font-weight: bold;margin-top: 0px;margin-bottom: 20px;">Père et Mère </p>
                                </div>

                                <div class="col-md-6 form-group" style="width:50%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">JE CONNAIS LA DATE DE NAISSAINCE DES PARENTS</label>
                                    <input type="radio" class="form-control" name="knownparentsdate" value="yes" style="width: 50%;display: inline;height: 25px;"  checked > 
                                 </div>
                                 <div class="col-md-6 form-group" style="width:50%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">JE NE CONNAIS PAS LA DATE DE NAISSAINCE DES PARENTS</label>
                                    <input type="radio" class="form-control " name="knownparentsdate" value="no"  style="width: 50%;display: inline;height: 25px;"> 
                                 </div>

                              </div>

                              <div class="form-row">
                                 <div class="col-md-4 form-group input_wrap">
                                       <input type="text" class="form-control requiredField maxlength25" name="nom_pere" id="nom_pere" data-rule="minlen:9" data-msg="Entrer le nom de votre père" required @if (!empty($data_step_two) && array_key_exists("0",$data_step_two)) value="{{$data_step_two[0]}}" @endif/>
                                       <label style="display: block;text-align: left;font-weight:600;" >  Nom du père    <span style="color: red">*</span></label>
                                       <div class="validate"></div>
                                 </div>
                                 <div class="col-md-4 form-group input_wrap">
                                       <input type="text" class="form-control requiredField maxlength25" name="prenom_pere" id="prenom_pere" data-rule="minlen:9" data-msg="Entrer les prénoms de votre père" required @if (!empty($data_step_two) && array_key_exists("1",$data_step_two)) value="{{$data_step_two[1]}}" @endif/>
                                       <label style="display: block;text-align: left;font-weight:600;" >  Prénoms père    <span style="color: red">*</span></label>
                                       <div class="validate"></div>
                                 </div>

                                  <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control requiredField datepicker" name="datenaiss_pere" id="datenaiss_pere"  data-rule="minlen:9" data-msg="Entrer date de naissance" required  @if (!empty($data_step_two) && array_key_exists("2",$data_step_two)) value="{{$data_step_two[2]}}" @endif/>
                                    <label style="display: block;text-align: left;font-weight:600;" >Date de naissance père    <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                               </div>


                               <div class="form-row">
                                 <div class="col-md-4 form-group input_wrap">
                                       <input type="text" class="form-control requiredField maxlength25" name="nom_mere" id="nom_mere" data-rule="minlen:9" data-msg="Entrer le nom de votre  mère " required @if (!empty($data_step_two) && array_key_exists("3",$data_step_two)) value="{{$data_step_two[3]}}" @endif/>
                                       <label style="display: block;text-align: left;font-weight:600;" >  Nom mère    <span style="color: red">*</span></label>
                                       <div class="validate"></div>
                                 </div>
                                 <div class="col-md-4 form-group input_wrap">
                                       <input type="text" class="form-control requiredField maxlength25" name="prenoms_mere" id="prenoms_mere" data-rule="minlen:9" data-msg="Entrer les prénoms de votre mère" @if (!empty($data_step_two) && array_key_exists("4",$data_step_two)) value="{{$data_step_two[4]}}" @endif required/>
                                       <label style="display: block;text-align: left;font-weight:600;" >  Prénoms mère    <span style="color: red">*</span></label>
                                       <div class="validate"></div>
                                 </div>

                                  <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control requiredField datepicker" name="datenaiss_mere" id="datenaiss_mere"  data-rule="minlen:9" data-msg="Entrer la date de naissance de votre mère" required  @if (!empty($data_step_two) && array_key_exists("5",$data_step_two)) value="{{$data_step_two[5]}}" @endif/>
                                    <label style="display: block;text-align: left;font-weight:600;" >    Date de naissance mère    <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                                
                              </div>
                              <div class="form-row ">
                                    <div class="col-md-6" style="width:50%">
                                          <a href="#"  style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_prev" >PRECEDENT</a>
                                    </div>
                                    <div class="col-md-6" style="width:50%">
                                       {{--  <a id="save_step_two" href="#" style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_next">SUIVANT </a> --}}

                                         <a id="save_step_two" href="#" style="background: #f36e23" class="customBtn  progress-button" data-progress-button>
                                                    <span class="progress-button-indicator"></span>
                                                    <span class="progress-button-content">
                                                        <span class="progress-button-before">SUIVANT</span>
                                                        <span class="progress-button-after">PATIENTER</span>
                                                        <span class="progress-button-spacer">PATIENTER</span>
                                                    </span>
                                                </a>
                                    </div>
                              </div>
                        </fieldset>
                        <fieldset id="step_three" @if (!empty($newarray) &&($lastsavedStep =='pre2')) class="section is-active" @else  class="section" @endif >
                             <h4 style="color: #28285e;background: #28285e14;padding: 10px;">MA SITUATION ACTUELLE ?</h4>
                              <div class="form-row">
                                 <div class="col-md-4 form-group" style="width:50%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">MARIE(E)</label>
                                    <input type="radio" class="form-control" name="sitmat" value="M" style="width: 50%;display: inline;height: 25px;" @if (!empty($data_step_three) && $data_step_three[0]=='M') checked @endif > 
                                 </div>
                                 <div class="col-md-4 form-group" style="width:50%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">CELIBATAIRE</label>
                                    <input type="radio" class="form-control" name="sitmat" value="C" style="width: 50%;display: inline;height: 25px;"  @if (!empty($data_step_three) && $data_step_three[0]=='C') checked @endif  @if (empty($data_step_three)) checked @endif> 
                                 </div>

                                 <div class="col-md-4 form-group" style="width:50%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">VEUF(VE)</label>
                                    <input type="radio" class="form-control invalid" name="sitmat" value="V"  @if (!empty($data_step_three) && $data_step_three[0]=='V') checked @endif style="width: 50%;display: inline;height: 25px;"> 
                                 </div>
                              </div>


                                   {{--  @php
                                        dd($data_step_three[1]);
                                    @endphp --}}
                              <div class="form-row dataconjoint" @if (!empty($data_step_three) && $data_step_three[0]=='C')style="display: none"@endif>
                                 <div class="col-md-4 form-group input_wrap">


                                       <input type="text"  class="form-control requiredField maxlength25" name="nom_conjoint" id="nom_conjoint" data-rule="minlen:9" data-msg="Entrer le nom de votre conjoint" required @if (!empty($data_step_three) && array_key_exists("1",$data_step_three)) value="{{$data_step_three[1]}}" @endif/>
                                       <label style="display: block;text-align: left;font-weight:600;" >  Nom conjoint(e)     <span style="color: red">*</span></label>
                                       <div class="validate"></div>
                                 </div>
                                 <div class="col-md-4 form-group input_wrap">
                                       <input type="text" class="form-control requiredField maxlength25" name="prenoms_conjoint" id="prenoms_conjoint"  data-rule="minlen:9" data-msg="Entrer le prénom de votre conjoint"  required @if (!empty($data_step_three) && array_key_exists("2",$data_step_three)) value="{{$data_step_three[2]}}" @else value="" @endif/>
                                       <label style="display: block;text-align: left;font-weight:600;" >  Prénom conjoint(e)   <span style="color: red">*</span></label>
                                       <div class="validate"></div>
                                 </div>

                                  <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control requiredField " name="datenaiss_conj" id="datenaiss_conj"   data-rule="minlen:9" data-msg="Entrer sa date de naissance" required @if (!empty($data_step_three) && array_key_exists("3",$data_step_three)) value="{{$data_step_three[3]}}" @else value="" @endif />
                                    <label style="display: block;text-align: left;font-weight:600;" >  Date de naissance conjoint(e)    <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                              </div>

                              <div class="form-row dataconjoint" @if (!empty($data_step_three) && $data_step_three[0]=='C')style="display: none" @endif>
                                 <div class="col-md-4 form-group input_wrap">
                                       <input type="text" class="form-control requiredField maxlength25" name="lieu_naiss_cj" id="lieu_naiss_cj"  data-rule="minlen:5" data-msg="Entrer le lieu de naissance de votre conjoint" required  @if (!empty($data_step_three) && array_key_exists("4",$data_step_three)) value="{{$data_step_three[4]}}" @else value="" @endif />
                                       <label style="display: block;text-align: left;font-weight:600;" >   Lieu de naissance conjoint(e)      <span style="color: red">*</span></label>
                                       <div class="validate"></div>
                                 </div>
                                 <div class="col-md-4 form-group input_wrap">
                                       <input type="text" class="form-control requiredField " name="date_mariage" id="date_mariage" data-rule="minlen:9" data-msg="Entrer la date de mariage"   @if (!empty($data_step_three) && array_key_exists("5",$data_step_three)) value="{{$data_step_three[5]}}" @endif />
                                       <label style="display: block;text-align: left;font-weight:600;" >  Date de mariage   <span style="color: red">*</span></label>
                                       <div class="validate"></div>
                                 </div>

                                  <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control requiredField maxlength25" name="lieu_mariage" id="lieu_mariage"   data-rule="minlen:9" data-msg="Entrer le lieu de mariage" required @if (!empty($data_step_three) && array_key_exists("6",$data_step_three)) value="{{$data_step_three[6]}}" @endif />
                                    <label style="display: block;text-align: left;font-weight:600;" >  Lieu de mariage    <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control requiredField maxlength25" name="profession_cj" id="profession_cj"  data-rule="minlen:9" data-msg="Entrer  la profession de votre conjointe" @if (!empty($data_step_three) && array_key_exists("7",$data_step_three)) value="{{$data_step_three[7]}}" @endif />
                                    <label style="display: block;text-align: left;font-weight:600;" >  Profession  *    <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                              </div>

                              <div class="form-row ">
                                    <div class="col-md-6" style="width:50%">
                                          <a href="#"  style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_prev" >PRECEDENT</a>
                                    </div>
                                    <div class="col-md-6" style="width:50%">
                                       {{--  <a id="save_step_three" href="#" style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_next">SUIVANT </a> --}}

                                        

                                         <a id="save_step_three" href="#" style="background: #f36e23" class="customBtn  progress-button" data-progress-button>
                                                    <span class="progress-button-indicator"></span>
                                                    <span class="progress-button-content">
                                                        <span class="progress-button-before">SUIVANT</span>
                                                        <span class="progress-button-after">PATIENTER</span>
                                                        <span class="progress-button-spacer">PATIENTER</span>
                                                    </span>
                                                </a>
                                    </div>
                              </div>
                        </fieldset>
                        <fieldset id="step_four" @if (!empty($newarray) &&($lastsavedStep =='pre3')) class="section is-active" @else  class="section" @endif >
                            <h4 style="color: #28285e;background: #28285e14;padding: 10px;">ADRESSE GEOGRAPHIQUE </h4>

                            <div class="form-row ">

                               <div class="col-md-4 form-group input_wrap">
                                    <select  class="form-control requiredField" name="region" id="region" data-rule="minlen:9" data-msg="Entrer une region valide">
                                       <option value="0" selected="true" disabled="disabled" >Sélectionner une région</option>
                                       @foreach ($regions as $region)
                                            @if (!empty($data_step_four) &&($data_step_four[0] == $region->libelle))
                                             <option data-regionId="{{$region->id}}"  value="{{ $data_step_four[0] }}" selected>{{ $data_step_four[0] }}</option>
                                            @else 
                                            <option data-regionId="{{$region->id}}"  value="{{$region->libelle }}" >{{ $region->libelle }}</option>
                                            @endif
                                       @endforeach
                                      
                                    </select>
                                    <label style="display: block;text-align: left;font-weight:600;" > Region   <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>


                                 
                                 <div class="col-md-4 form-group input_wrap">
                                    <select id="departmentList" class="form-control requiredField" name="departement" id="departement" data-rule="minlen:10" data-msg="Selectionner un departement">
                                       @if (!empty($data_step_four) && array_key_exists("1",$data_step_four))
                                             <option value="{{ $data_step_four[1] }}" selected>{{ $data_step_four[1] }}
                                             </option>
                                      @else  
                                      <option value="0" selected="true" disabled="disabled">Selectioner un departement </option>
                                      @endif

                                    </select>
                                    <label style="display: block;text-align: left;font-weight:600;" > Departement   <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                                 <div class="col-md-4 form-group input_wrap">
                                    <select id="villeList" class="form-control requiredField" name="ville" id="ville" data-rule="minlen:9" data-msg="Sélectionner une ville">
                                       @if (!empty($data_step_four)&& array_key_exists("2",$data_step_four)) 
                                         <option  value="{{ $data_step_four[2] }}">{{ $data_step_four[2] }}</option>
                                       @else 
                                        <option value="0" selected="true" disabled="disabled">Selectioner une ville </option>
                                       @endif 
                                    </select>
                                    <label style="display: block;text-align: left;font-weight:600;" > Ville / Commune   <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                                  
                               
                            </div>
                            <div id="spinner0" class="col-md-12 form-group input_wrap" style="margin-bottom: 0px;margin-top: -20px;display: none;">
                                 <span>Patientez</span> <img src="/assets/img/Ellipsis-1s-200px.gif" style="height: 45px">
                                </div>
                             <div class="form-row "> 

                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control maxlength25" name="boite_postale" id="boite_postale"  data-rule="minlen:9" data-msg="Entrer votre boite postale" required @if (!empty($data_step_four) && array_key_exists("4",$data_step_four)) value="{{$data_step_four[4]}}"  @endif/>
                                    <label style="display: block;text-align: left;font-weight:600;" >  Boite postale </label>
                                    <div class="validate"></div>
                                 </div>  
                               

                             </div>

                               <div class="form-row ">
                                    <div class="col-md-6" style="width:50%">
                                          <a href="#" style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_prev" >PRECEDENT</a>
                                    </div>
                                    <div class="col-md-6" style="width:50%">
                                        {{-- <a id="save_step_four" href="#" style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_next">SUIVANT </a> --}}


                                         <a id="save_step_four" href="#" style="background: #f36e23" class="customBtn  progress-button" data-progress-button>
                                                    <span class="progress-button-indicator"></span>
                                                    <span class="progress-button-content">
                                                        <span class="progress-button-before">SUIVANT</span>
                                                        <span class="progress-button-after">PATIENTER</span>
                                                        <span class="progress-button-spacer">PATIENTER</span>
                                                    </span>
                                                </a>


                                    </div>
                              </div>
                        </fieldset>



                         


                        <fieldset id="step_five" @if (!empty($newarray) &&($lastsavedStep =='pre4')) class="section is-active" @else  class="section" @endif >

                            <h4 style="color: #28285e;background: #28285e14;padding: 10px;">DOCUMENT ADMINISTRATIF  <span id="etapefacultative" class="blinktext" >  [étape Facultative]</span>  </h4>

                             <span id="uploadMessage" style="color: #f46e23;font-weight: bold;font-size: 13px;"> <span style="color:black;">Fichiers autorisés: </span>  Pdf - Jpeg - Png - Gif | 2MB/fichier </span>

                            <div class="form-row " style="margin-top: 30px">
                               <div class="col-md-4 wrap">
                                     <div class="valign-middle">
                                         <div class="form-group">
                                             <label for="file" class="sr-only">Extrait acte de naissance</label>
                                             <input type="file" name="ext_naiss" id="file">
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-md-4 wrap">
                                     <div class="valign-middle">
                                         <div class="form-group">
                                             <label for="cni_ai" class="sr-only">CNI / AI  </label>
                                             <input type="file" name="cni_ai" id="cni_ai">
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-md-4 wrap">
                                     <div class="valign-middle">
                                         <div class="form-group">
                                             <label for="photocni_part" class="sr-only">Photocopie CNI/AI d'un parent  </label>
                                             <input type="file" name="photocni_part" id="photocni_part">
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            <div class="form-row ">
                               <div class="col-md-4 wrap">
                                     <div class="valign-middle">
                                         <div class="form-group">
                                             <label for="certif_nat" class="sr-only">Certificat de nationalité</label>
                                             <input type="file" id="certif_nat" name="certif_nat">
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-md-4 wrap">
                                     <div class="valign-middle">
                                         <div class="form-group">
                                             <label for="ext_mar" class="sr-only">Extrait acte de Mariage </label>
                                             <input type="file" id="ext_mar"  name="ext_mar">
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-md-4 wrap">
                                     <div class="valign-middle">
                                         <div class="form-group">
                                             <label for="aut_parent" class="sr-only">Autorisation Parentale légalisée    </label>
                                             <input type="file" id="aut_parent" name="aut_parent">
                                         </div>
                                     </div>
                                 </div>
                            </div>
                            <div class="form-row ">
                                    <div class="col-md-6" style="width:50%">
                                          <a href="#" style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block"  class="button_prev">PRECEDENT</a>
                                    </div>
                                    <div class="col-md-6" style="width:50%">
                                      {{--   <a href="#" id="save_step_five" style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_next">VALIDER </a> --}}

                                        <a id="save_step_five" href="#" style="background: #f36e23" class="customBtn  progress-button" data-progress-button>
                                                    <span class="progress-button-indicator"></span>
                                                    <span class="progress-button-content">
                                                        <span class="progress-button-before">SUIVANT</span>
                                                        <span class="progress-button-after">PATIENTER</span>
                                                        <span class="progress-button-spacer">PATIENTER</span>
                                                    </span>
                                                </a>
                                    </div>
                              </div>
                        </fieldset>


                        <fieldset id="step_recap"   class="section">

                            <h4 style="color: #28285e;background: #28285e14;padding: 10px;">  VERIFICATION   </h4>

                             {{-- <span id="uploadMessage" style="color: #f46e23;font-weight: bold;font-size: 13px;"> <span style="color:black;">Fichiers autorisés: </span>  Pdf - Jpeg - Png - Gif | 2MB/fichier </span> --}}
                           
                                 <img src="/assets/img/pdf_file.png" style="height:120px" alt="">

                                 {{-- <span style="display:block;font-weight: bold;color: #27285e;font-size: 13px;">Télecharger </span> --}}


                             <a id="generatepdf" href="#" style="background: #28285e;width: 179px;height: 35px;;margin: 15px auto;font-size: 12px;" class="customBtn  progress-button" data-progress-button>
                                                    <span class="progress-button-indicator"></span>
                                                    <span class="progress-button-content">
                                                        <span class="progress-button-before">TELECHARGER</span>
                                                        <span class="progress-button-after">PATIENTER</span>
                                                        <span class="progress-button-spacer">PATIENTER</span>
                                                    </span>
                                                </a>


                            <div class="form-row " style="margin-top: 30px">
                               <div class="col-md-12 wrap">
                                    
                                    <input id="dataconfirmation" type="checkbox" class="form-control" name="dataconfirmation" value="yes" style="width: 5%;display: inline;height: 25px;"  > 
                                     <label style="display: inline-block;top: -7px;position: relative;font-size:12px;font-size: 16px;color: #27285e;">J'ai lu et confirme l'exactitude des informations fournies</label>
                                 </div>

                            </div>

                           
                             <div class="form-row ">
                                    <div class="col-md-6" style="width:50%">
                                          <a id="edit_data" href="#" style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block"  >MODIFIER</a>
                                    </div>
                                    <div class="col-md-6" style="width:50%">

                                        <a id="confirm_data" href="#" class="customBtn progress-button button_next disable" data-progress-button>
                                                    <span class="progress-button-indicator"></span>
                                                    <span class="progress-button-content">
                                                        <span class="progress-button-before">VALIDER</span>
                                                        <span class="progress-button-after">PATIENTER</span>
                                                        <span class="progress-button-spacer">PATIENTER</span>
                                                    </span>
                                                </a>
                                    </div>
                              </div>
                           
                        </fieldset>





                         {{-- rendez-vous --}}
                         <fieldset id="step_six" @if (!empty($newarray) &&($lastsavedStep =='pre5')) class="section is-active" @else  class="section" @endif>

                            <h4 style="color: #28285e;background: #28285e14;padding: 10px;">DONNEES PERSONNELLES   </h4>
                            <span style="color: #f46e23;font-weight: bold;font-size: 13px;">Entrer un numéro de téléphone à 10 chiffres *</span>
                           
                            <div class="form-row " style="margin-top: 30px">
                                 <div class="col-md-6 form-group input_wrap">
                                       <input type="text" class="form-control requiredField email" name="emailrdv" id="emailrdv" data-rule="minlen:9" data-msg="Entrer votre adresse email " required @if (!empty($data_step_six) && array_key_exists("0",$data_step_six)) value="{{$data_step_six[0]}}" @endif/>
                                       <label style="display: block;text-align: left;font-weight:600;" > Email<span style="color: red">*</span></label>
                                       <div class="validate"></div>
                                 </div>

                                 <div class="col-md-6 form-group input_wrap">
                                   {{-- <span class="input-group-addon"><strong>225</strong></span> --}}

                                    <input style="width: 30%;float: left;margin-right: 27px" type="text" name="indicatif" class="form-control requiredField indicatif " id="indicatif" placeholder="" data-rule="minlen:4" data-msg="Entrer votre indicatif téléphonique" required @if (!empty($data_step_six) && array_key_exists("2",$data_step_six)) value="{{$data_step_six[2]}}" @endif/>
                                    <label style="text-align: left;">indicatif <span style="color: red">*</span></label>

                                       <input style="width: 60%;float: left;" type="text" class="form-control requiredField  telReg" name="telephonerdv" id="telephonerdv" data-rule="minlen:9" data-msg="Entrer votre numero de telephone" required @if (!empty($data_step_six) && array_key_exists("1",$data_step_six)) value="{{$data_step_six[1]}}" @endif/>
                                       <label style="display: block;text-align: left;font-weight:600;left: 145px !important" >  Télephone    <span style="color: red">*</span></label>
                                       <div class="validate"></div>
                                 </div>
                            </div>

                            <div class="form-row ">
                                    <div class="col-md-6" style="width:50%">
                                          <a href="#" id="back_pre_enrol" class="button_prev"  style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" >PRECEDENT</a>
                                    </div>
                                    <div class="col-md-6" style="width:50%">
                                       {{--  <a href="#" id="save_step_six" style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_next">SUIVANT </a>
 --}}

                                      

                                          <a id="save_step_six" href="#" style="background: #f36e23" class="customBtn  progress-button" data-progress-button>
                                                    <span class="progress-button-indicator"></span>
                                                    <span class="progress-button-content">
                                                        <span class="progress-button-before">SUIVANT</span>
                                                        <span class="progress-button-after">PATIENTER</span>
                                                        <span class="progress-button-spacer">PATIENTER</span>
                                                    </span>
                                                </a>
                                    </div>
                              </div>
                         </fieldset>

                        <fieldset id="step_seven" @if (!empty($newarray) &&($lastsavedStep =='rdv1')) class="section is-active" @else  class="section" @endif>

                            <h4 style="color: #28285e;background: #28285e14;padding: 10px;">SITE D'ENROLEMENT  </h4>

                            <div class="form-row">
                               
                                 <div class="col-md-6 form-group input_wrap">
                                    <select id="formulerdv"  class="form-control requiredField" name="formulerdv" data-rule="minlen:6" data-msg="selectionner le type de pièce">
                                       <option value="0" disabled selected>Veuillez selectionner une formule</option>
                                      @foreach ($formules as $formule) 
                                          {{-- <option value="{{$formule['id_formule']}}">{{$formule['nom_formule']}}</option> --}}
                                          <option data-mnt-formule="{{$formule['montant_rdv']}}" value="{{$formule['id_formule']}}">{{$formule['nom_formule']}}</option>
                                      @endforeach
                                    
                                    </select>
                                    <label style="display: block;text-align: left;font-weight:600;" > Formules<span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                                 <div class="col-md-6 form-group input_wrap">
                                    <select class="form-control requiredField" name="siterdv" id="siterdv" data-rule="minlen:6" data-msg="selectionner le type de pièce" disabled>
                                      <option value="0" disabled selected>Veuillez selectionner le site d'enrôlement </option>
                                    </select>
                                    <label style="display: block;text-align: left;font-weight:600;" > Site d'enrôlement<span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                                 <div id="spinner" class="col-md-12 form-group input_wrap" style="margin-bottom: 0px;margin-top: -20px;display: none">
                                 <span>Patientez</span> <img src="/assets/img/Ellipsis-1s-200px.gif" style="height: 45px">
                                </div>

                                 <div class="col-md-12 form-group">
                                    <div id="calendar"></div>
                                 </div>


                            </div>
                            <div class="form-row ">
                                    <div class="col-md-12">
                                          <a id="back_to_stepO_rdv" style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_prev" href="#" >PRECEDENT</a>
                                    </div>
                                   {{--  <div class="col-md-6" style="width:50%">
                                        <a id="save_step_five" style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_next">VALIDER </a>
                                    </div> --}}
                              </div>
                        </fieldset>

                        {{-- confirmation --}}
                         <fieldset id="step_eight" class="section ">

                            <h4 style="color: #28285e;background: #28285e14;padding: 10px;">CONFIRMATION </h4>

                            <div class="form-row " style="margin-top: 30px">


                                    <table class="col-md-12" >
                                     <tr style="background: #babacb;color: black">
                                       <th>LIBÉLLÉ</th>
                                       <th>MONTANT</th>
                                     </tr> 
                                      


                                        <tr style="border:dashed 2px #575288">
                                          <td style="font-weight: bold;">Reçu de paiement</td>
                                          <td  style="font-weight: bold;">{{$montant_recu_p}} FCFA</td>
                                        </tr>
                                        <tr style="border:dashed 2px #575288">
                                          <td style="font-weight: bold;">Frais de transaction(digitale)  </td>
                                          <td style="font-weight: bold;">{{$frais_transac_dig}} FCFA</td>
                                        </tr>


                                        <tr style="border:dashed 2px #575288">
                                          <td style="font-weight: bold;">Frais Service(prise de Rendez-vous) </td>
                                          <td id="fraisrdv" style="font-weight: bold;"><span id="mntrdv"> {{$frais_serv_rdv}} </span> FCFA</td>
                                        </tr>
                                          <tr style="border: dashed 2px #575288;background: #28285e;color: white;">
                                          <td style="font-weight: bold;">TOTAL </td>
                                          <td id="totalpayment" style="font-weight: bold;">{{$montant_recu_p + $frais_serv_rdv + $frais_transac_dig}} FCFA</td>
                                        </tr>
                                    </table>

                                   <div class="col-md-12" style="margin-bottom: 40px">
                                      <p style="font-size: 10px">
                                        Vous vous apprêtez à finaliser votre demande passeport biométrique, vous serez débité de <span style="color: #f36e23;font-weight: bold;" id="paymentmsg"> {{$montant_recu_p + $frais_serv_rdv + $frais_transac_dig}} F CFA*</span> relatif aux frais de paiement passeport biométrique et de la prise Rendez-vous.
                                      </p>
                                   </div>



                            </div>
                            <div class="form-row ">
                                    <div class="col-md-6" style="width:50%">
                                          <a id="back_to_rdv" href="#"  style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_prev" >PRECEDENT</a>
                                    </div>
                                    <div class="col-md-6" style="width:50%">
                                       <a id="save_step_eight" href="#" style="background: #f36e23" class="customBtn  progress-button" data-progress-button>
                                                    <span class="progress-button-indicator"></span>
                                                    <span class="progress-button-content">
                                                        <span class="progress-button-before">VALIDER</span>
                                                        <span class="progress-button-after">PATIENTER</span>
                                                        <span class="progress-button-spacer">PATIENTER</span>
                                                    </span>
                                                </a>


                                    </div>
                              </div>
                        </fieldset>


                         


                        {{-- pop up  --}}

                         <a id="popca" class="js-openCa btn-open is-active" style="z-index: 100;height: 30px;;background: #cacbdf; display: none;">Show modal</a>


                         <div class="wrap popop">
                          <div class="modal js-modal" style="position: relative;width: 95%;top:20px;margin: 0 auto;background: #cacbdf">

                              <div id="heures_rdv">
                                <h4 style="font-size: 40px">Veuillez Patienter ...</h4>
                              </div>
                            
                          </div>
                         </div>

                         <div class="modal js-modalCa loadingcalendar" style="width: 60%;margin: 0 auto;background: #fff;padding: 2em 1em;height: 85%;z-index: 1000;top: 350px;left: 40px;">
                                  
                                  <div style="margin-top: 100px;">
                                         <h4 style="font-size: 25px;text-align: center;">Veuillez Patienter ...</h4>
                                  </div>
                                  <a class="close js-closeCa"></a>
                         </div>


                         <fieldset id="step_information" class="section">
                            <h4 style="color: #28285e;background: #28285e14;padding: 10px;">INFORMATION </h4>
                            <div class="form-row " style="margin-top: 30px;margin-bottom:30px">

                                    <p style="font-size: 24px;text-align: center;margin: 0 auto;color: red;">Une erreur s'est produite veuillez réessayer plutard !!</p>



                            </div>
                            <div class="form-row ">
                                    <div class="col-md-6" style="width:50%;margin: 0 auto;">
                                          <a href="/demande_passeport"  style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block"  >faire une demande</a>
                                    </div>

                                    </div>
                              </div>
                        </fieldset>


                  </form>


                    <form id="finalrequest" method="POST" action = "{{config('AppConfig.get_way_order_url')}}">
                        @csrf
                                              <input type="hidden" name="currency" value="xof"/>
                                              <input type="hidden" name="operation_token" value="{{config('AppConfig.get_way_order_token')}}"/>
                                              <input type="hidden" id="ordersent" name="order" value="Y4U465J3455N687C"/>
                                              <input type="hidden" id="sentamount" name="transaction_amount" value=""/>
                                              <input type="hidden" id="jwt" name="jwt" value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ4aDlOVy1nbmgxa3FNQ0Mt RFNKViIsImV4cCI6MTUwOTEyMDQyNSwiaXNzIjoiSFVCIiwiaWF0IjoxNTA5MDM0M DI1LCJhdWQiOiJFLWFnZW5jZSJ9.9BQNlLJ2v1dAAbuBISOTBvWkBBmfOUXsVMa Z2qCUcYY"/>
                                             <input id="finalrequestbtn" type="submit" name="submit" value="envoyer" style="display: none" >
                                           </form>

                                    <form id="donnee_compl">
                                        @csrf
                                       <input type="hidden" name="emailRdv" id="emailRdv" value="xof"/>
                                       <input type="hidden" name="location_code" id="location_code" value="xof"/>
                                       <input type="hidden" name="time_value" id="time_value" value="xof"/>
                                       <input type="hidden" name="time_code" id="time_code" value="xof"/>
                                       <input type="hidden" name="date_desired" id="date_desired" value="xof"/>
                                       <input type="hidden" name="telephoneRdv" id="telephoneRdv" value="xof"/>
                                       <input type="hidden" name="location_address" id="location_address" value="xof"/>
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

   <script type="text/javascript">
    // global variable 
       var selected_date = '';   
       var data_rdv_array =  '';
       var lieurdv  = '';
       var sitecode  ='';
       var telephone = '';
       var email = '';
       var site_code_with_name  = '';
       var type_resident ='1';
       var passport_type ='passport_ci';
       var rdv_payant =0;
        // $("#finalrequestbtn").trigger('click');
   </script>


   <script type="text/javascript">
       // var dataload = {};
     // $.ajax({
     //            type: 'GET',
     //            async:false,
     //            url: '/PasseportCiDispo',
     //            success: function(response){
     //               dataload = response;
     //            }

     //          });


     // $(document).on('change','#siterdv', function(e){
     //    var site_selected = $(this).val();
     //    console.log(site_selected);
     //    var dataload={};
     //     $.ajaxSetup({
     //          headers: {
     //              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     //          }
     //      });

     //        $.ajax({
     //            type: 'POST',
     //            data:{site:site_selected},
     //            async:false,
     //            url: '/PasseportCiDispo',
     //            success: function(response){
     //                 console.log(response);
     //               dataload = response;
     //                $("#calendar").html("");
     //               calendar = new Calendar("#calendar", dataload);
     //            }
     //        });
     //  })
   </script>

   <script src="/assets/js/plugins/jquery.inputmask.bundle.js"></script>
   <script type="text/javascript" src="/assets/js/plugins/moment.min.js"></script>
   <script type="text/javascript" src="/assets/js/plugins/moment-recur.min.js"></script>
   <script type="text/javascript" src="/assets/js/calendar.js"></script>
   <link href="/anim/anim_edit.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="/assets/css/calendar_style.css"/>
   <script src="/assets/js/plugins/dynamics.js"></script>
   {{-- <script type="text/javascript" src="/assets/js/demandes.js"></script> --}}
    <script type="text/javascript" src="{{mix('/assets/js/demandes.js')}} "></script>
   <script type="text/javascript" src="{{mix('/assets/js/form_validation.js')}}"></script>
   <script type="text/javascript" src="/modals/modals_customized.js"></script>
   <link href="/modals/modals.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="/assets/js/bootstrap-datepicker/css/datepicker.css" />
   <script type="text/javascript" src="/assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   
   <style type="text/css">
     .form-control{
        text-transform:uppercase;
      }

      .email{
        text-transform:lowercase !important;
      }
    
         table.hfilter{    
          width:100%;
          table-layout: fixed;
           }
        .tbl-header{
          background-color: rgba(255,255,255,0.3);
         }
        .tbl-content{
          height:300px;
          overflow-x:auto;
          margin-top: 0px;
          border: 1px solid rgba(255,255,255,0.3);
        }
         th{
          padding: 20px 15px;
          text-align: left;
          font-weight: 500;
          font-size: 12px;
         
          text-transform: uppercase;
        }

         .hfilter th{
          color: #fff;
        }
        td{
          padding: 15px;
          text-align: left;
          vertical-align:middle;
          font-weight: 300;
          font-size: 12px;
          border-bottom: solid 1px rgba(255,255,255,0.1);
        }

        .hfilter td{
          color: #fff;
        }
        .recap-table{
          border: dashed 2px black;
        }
        .rowtable{
          background:#7680b6;
          color: white;
          font-weight: bold;
          width: 50%;
        }
        .wrap {
    display: table;
    width: 100%;
    height: 80% !important;
}
   </style>
   
   <script type="text/javascript">

         $(":input").inputmask();

         $("#date_naiss").inputmask({ alias: "date", placeholder:"jj/mm/aaaa",});
         $("#datenaiss_pere").inputmask({ alias: "date", placeholder:"jj/mm/aaaa",yearrange:{minyear: 1900, maxyear: 2099 }});
         $("#datenaiss_mere").inputmask({ alias: "date", placeholder:"jj/mm/aaaa",yearrange:{minyear: 1900, maxyear: 2099 }});
         $("#datenaiss_conj").inputmask({ alias: "date", placeholder:"jj/mm/aaaa",});
         $("#date_mariage").inputmask({ alias: "date", placeholder:"jj/mm/aaaa",});
         

        var date_ = new Date();
        var selected_date = '';
        date_.setDate(date_.getDate()-1);
        var nowDate = new Date();
        var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
        
        var childAge=0;
        var fatherAge=0;
        var MotherAge=0;
        var er_father_son=false;
        var er_mother_son=false;
        var er_date_son=false;
        var er_date_mother=false;
        var er_date_father=false;
        var erdateconj=false;

          $('.day ').on('click',function(ev){
          
              console.log('bonjour');
             // $('.datepicker').hide();
          })



         $('#date_naiss').on('blur', function(e){



          
          selected_date = $(this).val();

          var dateAr = selected_date.split('/');
          var selectedYear = dateAr[2];
          var currentYear = new Date().getFullYear()

          var isValid = Inputmask.isValid(selected_date, { alias: "date", inputFormat: "dd/mm/yyyy"});
          //console.log('isValid :'+ isValid);

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

          var dateAr = selected_date.split('/');
          var newDate = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0];
          var start = new Date(newDate),
          end   = new Date(),
          datedif = end - start,
          diffc  = new Date(datedif),
          day  = 1000*60*60*24;
         
          var days = Math.floor(diffc/day);
          var months = Math.floor(days/31);
          var years = Math.floor(months/12);
           console.log(days);

          childAge = years; //age enfant

           console.log('diff ' +years);

          if(years < 18 ) {
            $('#profession').removeClass('requiredField');
            $('#profession').attr('disabled','disabled').val('');
          }else{
           $('#profession').removeAttr('disabled').addClass('requiredField');
          }

          });



         $('#datenaiss_mere').on('blur', function(e){
         
          selected_date = $(this).val();
          er_mother_son= false;

          $(this).removeClass('invalid');
          $(this).siblings('.validate').css('display','none').html('');


          var isValid = Inputmask.isValid(selected_date, { alias: "date", inputFormat: "dd/mm/yyyy"});
          if(isValid == false){
                        er_date_mother=true;
                        $(this).addClass('invalid');
                        $(this).siblings('.validate').html('Date invalide').show('blind');
                      }else {
                         er_date_mother=false;
                         $(this).removeClass('invalid');
                         $(this).siblings('.validate').css('display','none').html('');
                      }

          var dateAr = selected_date.split('/');
          var newDate = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0];
         // console.log(newDate);

          var son_birth = $('#date_naiss').val();
          var son_birthAr = son_birth.split('/');
          var newDate_son_birth = son_birthAr[2] + '-' + son_birthAr[1] + '-' + son_birthAr[0];

        
          var mother_date_birth = new Date(newDate),
          son_date_birth = new Date(newDate_son_birth),
          diff  = new Date(son_date_birth - mother_date_birth),
          day  = 1000*60*60*24;

          var days = Math.floor(diff/day);
          var months = Math.floor(days/31);
          var years = Math.floor(months/12);
           // motherbd.hide();

          var years = new Date(diff).getFullYear() - 1970;

          // console.log('diff M' +years);

          if(years <=10 ) {

            $(this).addClass('invalid');
            $(this).siblings('.validate').html('10 - 100 ans entre mère et enfant').show('blind');
            er_mother_son = true;

          }
          if( years >=101 ) {
            
             $(this).addClass('invalid');
             $(this).siblings('.validate').html('10 - 100 ans entre mère et enfant').show('blind');
              er_mother_son=true;
          }
          

          });



         $('#datenaiss_pere').on('blur', function(e){
         
           selected_date = $(this).val();
          er_father_son=false;
          $(this).removeClass('invalid');
          $(this).siblings('.validate').css('display','none').html('');


           var isValid = Inputmask.isValid(selected_date, { alias: "date", inputFormat: "dd/mm/yyyy"});
          if(isValid == false){
                        er_date_father=true;
                        $(this).addClass('invalid');
                        $(this).siblings('.validate').html('Date invalide').show('blind');
                      }else {
                         er_date_father=false;
                         $(this).removeClass('invalid');
                         $(this).siblings('.validate').css('display','none').html('');
                      }

          var dateAr = selected_date.split('/');
          var newDate = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0];
         // console.log(newDate);

          var son_birth = $('#date_naiss').val();
          var son_birthAr = son_birth.split('/');
          var newDate_son_birth = son_birthAr[2] + '-' + son_birthAr[1] + '-' + son_birthAr[0];

          // console.log(newDate_son_birth);

        
          var father_date_birth = new Date(newDate),
          son_date_birth = new Date(newDate_son_birth),
          diff  = new Date(son_date_birth  - father_date_birth),
          day  = 1000*60*60*24;

          var days = Math.floor(diff/day);
          var months = Math.floor(days/31);
          var years = Math.floor(months/12);

          var years = new Date(diff).getFullYear() - 1970;
           //fatherbd.hide();
          // $('#nompere')[0].focus();
         

         // console.log('diff P' +years);

          if(years <=10 ) {
            er_father_son=true;
            $(this).addClass('invalid');
            $(this).siblings('.validate').html('10 - 100 ans entre père et enfant').show('blind');
          }

          if( years>=101 ) {
            
             $(this).addClass('invalid');
             $(this).siblings('.validate').html('10 - 100 ans entre père et enfant').show('blind');
               er_father_son=true;
          } 
          

          });


    


    $('#datenaiss_conj').on('blur', function(e){
          selected_date = $(this).val();

          var dateAr = selected_date.split('/');
          var selectedYear = dateAr[2];
          var currentYear = new Date().getFullYear()

          var isValid = Inputmask.isValid(selected_date, { alias: "date", inputFormat: "dd/mm/yyyy"});
          //console.log('isValid :'+ isValid);

          if(isValid == false){
            // er_date_son=true;
            $(this).addClass('invalid');
            $(this).siblings('.validate').html('Date invalide').show('blind');
          }else if(parseInt(selectedYear) > parseInt(currentYear)){
             // er_date_son=true;
             console.log('superior');
             $(this).addClass('invalid');
             $(this).siblings('.validate').html('Date de naissance invalide').show('blind');
          }
          else {
             // er_date_son=false;
             $(this).removeClass('invalid');
             $(this).siblings('.validate').css('display','none').html('');
          }

          var dateAr = selected_date.split('/');
          var newDate = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0];
          var start = new Date(newDate),
          end   = new Date(),
          datedif = end - start,
          diffc  = new Date(datedif),
          day  = 1000*60*60*24;
         
          var days = Math.floor(diffc/day);
          var months = Math.floor(days/31);
          var years = Math.floor(months/12);

          var years = new Date(diffc).getFullYear() - 1970;
           // console.log(days);

          //childAge = years; //age enfant

          // console.log('diff ' +years);

          if(years < 10 ) {
            // $('#profession').removeClass('requiredField');
            // $('#profession').attr('disabled','disabled').val('');
            erdateconj =true;
             $(this).addClass('invalid');
             $(this).siblings('.validate').html('10 au moins pour l\'age du conjoint').show('blind');
          }else{
           erdateconj=false;
          }

          });

   </script>


<script>
       
 var btnOpen = select('.js-openCa');
 var btnClose = select('.js-closeCa');
//var modal = $(".js-modal");
var modal = select('.js-modalCa');
var modalChildren = modal.children;

function hideModal() {
    dynamics.animate(modal, {
        opacity: 0,
        translateY: 100
    }, {
        type: dynamics.spring,
        frequency: 50,
        friction: 600,
        duration: 1500
    });
}

function showModal() {
    // Define initial properties
    dynamics.css(modal, {
        opacity: 0,
        scale: .5
    });

    // Animate to final properties
    dynamics.animate(modal, {
        opacity: 1,
        scale: 1
    }, {
        type: dynamics.spring,
        frequency: 300,
        friction: 400,
        duration: 1000
    });
}

function showBtn() {
    dynamics.css(btnOpen, {
        opacity: 0
    });

    dynamics.animate(btnOpen, {
        opacity: 1
    }, {
        type: dynamics.spring,
        frequency: 300,
        friction: 400,
        duration: 800
    });
}

function showModalChildren() {
    // Animate each child individually
    for (var i = 0; i < modalChildren.length; i++) {
        var item = modalChildren[i];

        // Define initial properties
        dynamics.css(item, {
            opacity: 0,
            translateY: 30
        });

        // Animate to final properties
        dynamics.animate(item, {
            opacity: 1,
            translateY: 0
        }, {
            type: dynamics.spring,
            frequency: 300,
            friction: 400,
            duration: 1000,
            delay: 100 + i * 40
        });
    }
}

function toggleClasses() {
   // toggleClass(btnOpen, 'is-active');
    toggleClass(modal, 'is-active');
}

// Open nav when clicking sandwich button
// btnOpen.addEventListener('click', function(e) {
//     toggleClasses();
//     showModal();
//     showModalChildren();
// });


$(document).on('click','.js-openCa', function(e){

    toggleClasses();
    showModal();
    showModalChildren();
})

$(document).on('click','.js-closeCa', function(e){
    e.preventDefault();
   hideModal();
    dynamics.setTimeout(toggleClasses, 500);
    dynamics.setTimeout(showBtn, 500);
})


// Open nav when clicking sandwich button
// btnClose.addEventListener('click', function(e) {
//     hideModal();
//     dynamics.setTimeout(toggleClasses, 500);
//     dynamics.setTimeout(showBtn, 500);
// });


// 



// hasClass
function hasClass(elem, className) {
  return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}

// toggleClass
function toggleClass(elem, className) {
  var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
  if (hasClass(elem, className)) {
    while (newClass.indexOf(' ' + className + ' ') >= 0) {
      newClass = newClass.replace(' ' + className + ' ', ' ');
    }
    elem.className = newClass.replace(/^\s+|\s+$/g, '');
  } else {
    elem.className += ' ' + className;
  }
}

// select
function select(selector) {
  var elements = document.querySelectorAll(selector);

  if (elements.length > 1) {
    return elements;
  } else {
    return elements.item(0);
  }
}// External JS: JS Helper Functions
// External JS: Dynamics JS




</script>


  
@endsection