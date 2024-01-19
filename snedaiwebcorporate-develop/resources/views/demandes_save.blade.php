 @extends('layouts.master')
  @section('content')
 <!-- ======= Hero Section ======= -->
      <div style="height: 100px">
          &nbsp;
       </div>
      <section id="hero" class="d-flex flex-column justify-content-center newdemand" >
         <div class="container" data-aos="zoom-in" data-aos-delay="100" >
            <h1 style="color: white">Nouvelle demande   </h1>
            <p  style="color: white"><span style="color: white" class="typed" data-typed-items="Contactez-nous sans hésiter !"></span></p>
            <div class="row mt-3">
               <div class="col-lg-8 mt-5 mt-lg-0" style="border-radius: 5px;padding-top: 20px;min-height:400px">
                  <div class="form-row" style="background: white;margin-left: unset;margin-right: unset;">
                     <div class="col-md-3" style="background: black;color: white;padding: 10px"> 1. Pré-enrôlement </div>
                      <div class="col-md-3" style="background: #f4f4f4;color: #a5a5a5;padding: 10px;text-align: center;"> 3. Rendez-vous </div>
                       <div class="col-md-3" style="background: #f4f4f4;color: #a5a5a5;padding: 10px;text-align: center;"> 2. Confirmation </div>
                        <div class="col-md-3" style="background: #f4f4f4;color: #a5a5a5;padding: 10px;text-align: center;"> 4. Paiement </div>
                  </div>
                  <ul class="steps">
                    <li class="is-active">Etape 1</li>
                    <li>Etape 2</li>
                    <li>Etape 3</li>
                    <li>Etape 4</li>
                    <li>Etape 5</li>
                  </ul>
                  
                  <form action="" method="post" role="form" class="php-email-form form-wrapper" style="position:relative">
                      
                        <fieldset id="step_one" class="section is-active" >
                             <h4 style="color: #28285e;background: #28285e14;padding: 10px;">QUI SUIS JE ?</h4>
                              <div class="form-row">
                                 <div class="col-md-6 form-group" style="width:50%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">PREMIERE DEMANDE</label>
                                    <input type="radio" class="form-control" name="type_demande" value="newpassport" style="width: 50%;display: inline;height: 25px;" checked> 
                                 </div>
                                 <div class="col-md-6 form-group" style="width:50%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">RENOUVELLEMENT</label>
                                    <input type="radio" class="form-control " name="type_demande" value="renewpassport" style="width: 50%;display: inline;height: 25px;"> 
                                 </div>
                              </div>
                              <div class="form-row">
                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="text" name="name" class="form-control requiredField numpassport" id="numpassport" data-rule="minlen:9" data-msg="Entrer un numero passeport valide" required maxlength="9" disabled="disabled" />
                                    <label style="display: block;text-align: left;font-weight:600;">Numéro passeport précédent <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>



                                {{--  <option value="CNI" @if (!empty($data_step1) &&  $data_step1[1] =='PASSEPORT' && array_key_exists("1",$data_step1)) selected @endif @if (empty($data_step1)) selected @endif>CNI</option>
                                  <option value="PASSEPORT" @if (!empty($data_step1) && $data_step1[1] =='PASSEPORT' && array_key_exists("1",$data_step1)) selected @endif>Passeport</option>
                                  <option value="ATTESTATION D'IDENTITE" @if (!empty($data_step1) && $data_step1[1] =='ATTESTATION D\'IDENTITE' && array_key_exists("1",$data_step1)) selected @endif>Attestation d'identité</option> --}}


                                  <div class="col-md-4 form-group input_wrap">
                                   
                                    <select  class="form-control requiredField" name="type_piece" id="type_piece" data-rule="minlen:6" data-msg="selectionner le type de pièce">
                                      <option value="CNI">Cni</option>
                                      <option value="PASSEPORT" >Passeport</option>
                                      <option value="ATTESTATION D'IDENTITE" >Attestation d'identité</option>
                                    </select>
                                    <label style="display: block;text-align: left;font-weight:600;" > Type de pièce<span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>



                               {{--   <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control requiredField" name="type_piece" id="type_piece"  data-rule="minlen:6" data-msg="selectionner le type de pièce" required />
                                    <label style="display: block;text-align: left;font-weight:600;" >Type de pièce<span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div> --}}

                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control requiredField" name="numpiece" id="numpiece"  data-rule="minlen:6" data-msg="Entrer un numero de pièce valide" required />
                                    <label style="display: block;text-align: left;font-weight:600;" >Numéro de pièce  <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                              </div>
                              <div class="form-row">
                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control requiredField" name="nom" id="nom" data-rule="minlen:6" data-msg="Entrer un nom valide" required />
                                    <label style="display: block;text-align: left;font-weight:600;" >  Nom   <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control requiredField" name="prenom" id="prenoms"  data-rule="minlen:6" data-msg="Entrer un prenom valide" required />
                                    <label style="display: block;text-align: left;font-weight:600;" > Prénom  <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                                 <div class="col-md-4 form-group input_wrap">

                                    <input type="number" min="40" max="300" class="form-control requiredField taille" name="taille" id="taille" maxlength="3"  data-rule="maxlen:3" data-msg="Entrer une taille valide entre  40 et 300 cm "  required/>
                                    <label style="display: block;text-align: left;font-weight:600;" > Taille  (cm) <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                              </div>
                              <div class="form-row">
                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control requiredField" name="date_naiss" id="date_naiss"  data-rule="minlen:6" data-msg="Entrer une date de naissance valide" required />
                                    <label style="display: block;text-align: left;font-weight:600;" >  Date de naissance   <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                                 <div class="col-md-4 form-group input_wrap">
                                    <select  class="form-control requiredField" name="pays_naissance" id="pays_naissance" data-rule="minlen:6" data-msg="Entrer un email valide">
                                       @foreach ($countries as $country)
                                          <option value="{{$country->abreviation}}" @if($country->libelle=="Côte d'Ivoire") 
                                         selected @endif>{{ $country->libelle }}</option>
                                       @endforeach
                                    </select>
                                    <label style="display: block;text-align: left;font-weight:600;" > Pays de naissance   <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                                 <div class="col-md-4 form-group input_wrap">
                                    <select  class="form-control" name="pays_residence" id="pays_residence" >
                                       @foreach ($countries as $country)
                                          <option value="{{$country->abreviation}}" @if($country->libelle=="Côte d'Ivoire") 
                                         selected @endif>{{ $country->libelle }}</option>
                                       @endforeach
                                    </select>
                                    <label style="display: block;text-align: left;font-weight:600;" > Pays Residence  <span style="color: red">*</span></label>
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
                                    <input type="text" class="form-control requiredField" name="lieu_naissance" id="lieu_naissance"  data-rule="email" data-msg="Entrer un lieu valide" required />
                                    <label style="display: block;text-align: left;font-weight:600;" > Lieu de naissance   <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control" name="profession" id="profession"  data-rule="minlen:6" data-msg="Entrer vtre proferssion" required />
                                    <label style="display: block;text-align: left;font-weight:600;" > Profession    <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                              </div>
                              <div class="mb-2">
                                 <div class="error-message"></div>
                                 <div class="sent-message"></div>
                              </div>
                              <div class="form-row">
                                 
                                {{--  <button class="js-open btn-open is-active" style="z-index: 100;height: 30px;display: block;background: #cacbdf">Show modal</button> --}}

                                <div class="col-md-12" >
                                   <a id="save_step_one" href="#" style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_next">SUIVANT </a>
                                </div>
                                 
                              </div>
                              <!-- <p style="font-size: 12px;font-weight: 600;"> Vous avez déjà un compte ? <span style="color: #f36e23">Connectez vous !</span> </p> -->
                        </fieldset>
                        <fieldset id="step_two" class="section ">
                              <h4 style="color:#28285e;background: #28285e14;padding: 10px;">FILIATION</h4>
                              <div class="form-row">
                                 <div class="col-md-4 form-group input_wrap">
                                       <input type="text" class="form-control requiredField" name="nompere" id="nompere" data-rule="minlen:9" data-msg="Entrer le nom du père" required />
                                       <label style="display: block;text-align: left;font-weight:600;" >  Nom du père    <span style="color: red">*</span></label>
                                       <div class="validate"></div>
                                 </div>
                                 <div class="col-md-4 form-group input_wrap">
                                       <input type="text" class="form-control requiredField" name="nompere" id="nompere" data-rule="minlen:9" data-msg="Entrer le nom du père" required />
                                       <label style="display: block;text-align: left;font-weight:600;" >  Prénoms père    <span style="color: red">*</span></label>
                                       <div class="validate"></div>
                                 </div>

                                  <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control requiredField" name="datenaisspere" id="datenaisspere"  data-rule="minlen:9" data-msg="Entrer un email valide" required />
                                    <label style="display: block;text-align: left;font-weight:600;" >Date de naissance père    <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                               </div>


                               <div class="form-row">
                                 <div class="col-md-4 form-group input_wrap">
                                       <input type="text" class="form-control requiredField" name="nompere" id="nompere" data-rule="minlen:9" data-msg="Entrer le nom du père " required />
                                       <label style="display: block;text-align: left;font-weight:600;" >  Nom mère    <span style="color: red">*</span></label>
                                       <div class="validate"></div>
                                 </div>
                                 <div class="col-md-4 form-group input_wrap">
                                       <input type="text" class="form-control requiredField" name="prenomspere" id="prenomspere" data-rule="minlen:9" data-msg="Entrer le nom du père" required/>
                                       <label style="display: block;text-align: left;font-weight:600;" >  Prénoms mère    <span style="color: red">*</span></label>
                                       <div class="validate"></div>
                                 </div>

                                  <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control requiredField" name="datenaissmere" id="datenaissmere"  data-rule="minlen:9" data-msg="Entrer une date de naissance correcte" required />
                                    <label style="display: block;text-align: left;font-weight:600;" >    Date de naissance mère    <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                              </div>
                              <div class="form-row ">
                                    <div class="col-md-6" style="width:50%">
                                          <a  style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_prev" >PRECEDENT</a>
                                    </div>
                                    <div class="col-md-6" style="width:50%">
                                        <a id="save_step_two" href="#" style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_next">SUIVANT </a>
                                    </div>
                              </div>
                        </fieldset>
                        <fieldset id="step_three" class="section ">
                             <h4 style="color: #28285e;background: #28285e14;padding: 10px;">MA SITUATION ACTUELLE ?</h4>
                              <div class="form-row">
                                 <div class="col-md-4 form-group" style="width:50%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">MARIE(E)</label>
                                    <input type="radio" class="form-control" name="sitmat" value="" style="width: 50%;display: inline;height: 25px;"> 
                                 </div>
                                 <div class="col-md-4 form-group" style="width:50%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">CELIBATAIRE</label>
                                    <input type="radio" class="form-control invalid" name="sitmat" value="" style="width: 50%;display: inline;height: 25px;"> 
                                 </div>

                                 <div class="col-md-4 form-group" style="width:50%">
                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">VEUF(VE)</label>
                                    <input type="radio" class="form-control invalid" name="sitmat" value="" style="width: 50%;display: inline;height: 25px;"> 
                                 </div>
                              </div>

                              <div class="form-row">
                                 <div class="col-md-4 form-group input_wrap">
                                       <input type="text" class="form-control requiredField" name="nomconjoint" id="nomconjoint" data-rule="minlen:9" data-msg="Entrer le nom du conjoint" required />
                                       <label style="display: block;text-align: left;font-weight:600;" >  Nom conjoint(e)     <span style="color: red">*</span></label>
                                       <div class="validate"></div>
                                 </div>
                                 <div class="col-md-4 form-group input_wrap">
                                       <input type="text" class="form-control requiredField" name="prenomsconjoint" id="prenomsconjoint" data-rule="minlen:9" data-msg="Entrer le prenom du conjoint" required />
                                       <label style="display: block;text-align: left;font-weight:600;" >  Prénoms conjoint(e)   <span style="color: red">*</span></label>
                                       <div class="validate"></div>
                                 </div>

                                  <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control requiredField" name="datenaissconj" id="datenaissconj"  data-rule="minlen:9" data-msg="Entrer une date naissance valide" required />
                                    <label style="display: block;text-align: left;font-weight:600;" >  Date de naissance conjoint(e)    <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                              </div>

                              <div class="form-row">
                                 <div class="col-md-4 form-group input_wrap">
                                       <input type="text" class="form-control requiredField" name="lieu_naiss_cj" id="lieu_naiss_cj" data-rule="email" data-msg="Entrer le lieu de naissance du conjoint" required />
                                       <label style="display: block;text-align: left;font-weight:600;" >   Lieu de naissance conjoint(e)      <span style="color: red">*</span></label>
                                       <div class="validate"></div>
                                 </div>
                                 <div class="col-md-4 form-group input_wrap">
                                       <input type="text" class="form-control requiredField" name="date_mariage" id="date_mariage" data-rule="email" data-msg="Entrer la date de mariage" />
                                       <label style="display: block;text-align: left;font-weight:600;" >  Date de mariage   <span style="color: red">*</span></label>
                                       <div class="validate"></div>
                                 </div>

                                  <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control requiredField" name="datenaisspere" id="datenaisspere"  data-rule="email" data-msg="Entrer le lieu de mariage" required />
                                    <label style="display: block;text-align: left;font-weight:600;" >  Lieu de mariage    <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control requiredField" name="datenaisspere" id="datenaisspere"  data-rule="email" data-msg="Entrer un email valide" />
                                    <label style="display: block;text-align: left;font-weight:600;" >  Profession  *    <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>
                              </div>

                              <div class="form-row ">
                                    <div class="col-md-6" style="width:50%">
                                          <a  style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_prev" >PRECEDENT</a>
                                    </div>
                                    <div class="col-md-6" style="width:50%">
                                        <a style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_next">SUIVANT </a>
                                    </div>
                              </div>
                        </fieldset>

                        <fieldset class="section ">
                            <h4 style="color: #28285e;background: #28285e14;padding: 10px;">ADRESSE GEOGRAPHIQUE </h4>

                            <div class="form-row ">

                               <div class="col-md-4 form-group input_wrap">
                                    <select  class="form-control" name="password" id="password" data-rule="email" data-msg="Entrer un email valide">
                                       <option> </option>
                                       <option>Cote d'ivoire </option>
                                       <option>Cote d'ivoire </option>
                                       <option>Cote d'ivoire </option>
                                    </select>
                                    <label style="display: block;text-align: left;font-weight:600;" > Region   <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>


                                 <div class="col-md-4 form-group input_wrap">
                                    <select  class="form-control" name="password" id="password" data-rule="email" data-msg="Entrer un email valide">
                                       <option> </option>
                                       <option>Cote d'ivoire </option>
                                       <option>Cote d'ivoire </option>
                                       <option>Cote d'ivoire </option>
                                    </select>
                                    <label style="display: block;text-align: left;font-weight:600;" > Departement   <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                                 <div class="col-md-4 form-group input_wrap">
                                    <select  class="form-control" name="password" id="password" data-rule="email" data-msg="Entrer un email valide">
                                       <option> </option>
                                       <option>Cote d'ivoire </option>
                                       <option>Cote d'ivoire </option>
                                       <option>Cote d'ivoire </option>
                                    </select>
                                    <label style="display: block;text-align: left;font-weight:600;" > Ville / Commune   <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>

                                  
                               
                            </div>
                             <div class="form-row "> 

                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control" name="datenaisspere" id="datenaisspere"  data-rule="email" data-msg="Entrer un email valide" required />
                                    <label style="display: block;text-align: left;font-weight:600;" >  Boite postale   *    <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>  
                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control" name="datenaisspere" id="datenaisspere"  data-rule="email" data-msg="Entrer un email valide" required />
                                    <label style="display: block;text-align: left;font-weight:600;" >  Boite postale   *    <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>  

                                 <div class="col-md-4 form-group input_wrap">
                                    <input type="text" class="form-control" name="datenaisspere" id="datenaisspere"  data-rule="email" data-msg="Entrer un email valide" required />
                                    <label style="display: block;text-align: left;font-weight:600;" >  Boite postale   *    <span style="color: red">*</span></label>
                                    <div class="validate"></div>
                                 </div>  

                             </div>

                               <div class="form-row ">
                                    <div class="col-md-6" style="width:50%">
                                          <a  style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_prev" >PRECEDENT</a>
                                    </div>
                                    <div class="col-md-6" style="width:50%">
                                        <a style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_next">SUIVANT </a>
                                    </div>
                              </div>
                        </fieldset>
                        <fieldset class="section ">

                            <h4 style="color: #28285e;background: #28285e14;padding: 10px;">DOCUMENT ADMINISTRATIF  </h4>

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
                                             <label for="file" class="sr-only">CNI / AI  </label>
                                             <input type="file" name="cni_ai" id="file">
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-md-4 wrap">
                                     <div class="valign-middle">
                                         <div class="form-group">
                                             <label for="file" class="sr-only">Photocopie CNI/AI d'un parent  </label>
                                             <input type="file" name="photoc_cni_ai" id="file">
                                         </div>
                                     </div>
                                 </div>
                            </div>

                            <div class="form-row ">
                               <div class="col-md-4 wrap">
                                     <div class="valign-middle">
                                         <div class="form-group">
                                             <label for="file" class="sr-only">Certificat de nationalité</label>
                                             <input type="file" id="file" name="certif_nat">
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-md-4 wrap">
                                     <div class="valign-middle">
                                         <div class="form-group">
                                             <label for="file" class="sr-only">Extrait acte de Mariage </label>
                                             <input type="file" id="file">
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-md-4 wrap">
                                     <div class="valign-middle">
                                         <div class="form-group">
                                             <label for="file" class="sr-only">Autorisation Parentale légalisée    </label>
                                             <input type="file" id="file">
                                         </div>
                                     </div>
                                 </div>
                            </div>
                            <div class="form-row ">
                                    <div class="col-md-6" style="width:50%">
                                          <a  style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_prev" >PRECEDENT</a>
                                    </div>
                                    <div class="col-md-6" style="width:50%">
                                        <a style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block" class="button_next">VALIDER </a>
                                    </div>
                              </div>

                        </fieldset>


                         <div class="wrap popop">
                          <div class="modal js-modal" style="position: relative;width: 95%;top:20px;margin: 0 auto;background: #cacbdf">
                            <div class="modal-image">
                              <svg viewBox="0 0 32 32" style="fill:#009688"><path d="M1 14 L5 10 L13 18 L27 4 L31 8 L13 26 z"></path></svg>
                            </div>
                            <h1 style="font-size: 40px">Nice job!</h1>
                            <p>To dismiss click the button below</p>
                            <button class="js-close">Fermer</button>
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

   <script src="https://unpkg.com/dynamics.js@1.1.5"></script>
   <script type="text/javascript" src="/assets/js/demandes.js"></script>
   <script type="text/javascript" src="/assets/js/form_validation.js"></script>
   <script type="text/javascript" src="/modals/modals_customized.js"></script>
   <link href="/modals/modals.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="/assets/js/bootstrap-datepicker/css/datepicker.css" />
   <script type="text/javascript" src="/assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <style type="text/css">
     .form-control{
        text-transform:uppercase;
      }
   </style>

   <script type="text/javascript">
        var date_ = new Date();
        var selected_date = '';
        date_.setDate(date_.getDate()-1);
        var nowDate = new Date();
        var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
        
        var childAge=0;
        var fatherAge=0;
        var MotherAge=0;

        

        $('#datenaisspere, #datenaissmere').datepicker();

        $('#date_naiss').datepicker()
          .on('changeDate', function(ev) {
          // if (ev.date.valueOf() > checkout.date.valueOf()) {
          //   var newDate = new Date(ev.date)
          //   newDate.setDate(newDate.getDate() + 1);
          //   checkout.setValue(newDate);
          // }
          // var newDate = new Date(ev.date)
          // console.log(newDate);
         // console.log($(this).val())
          selected_date = $(this).val();

          var dateAr = selected_date.split('-');
          var newDate = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0];
         // console.log(newDate);


          // var datechangedformat = $('#date_naiss').datepicker({dateFormat: 'yy-mm-dd' }).val();

          // var minValue = $(this).val();
           // converted_selected_date = $.datepicker.parseDate("yy-mm-dd", selected_date);

         // console.log(converted_selected_date);
          var start = new Date(newDate),
          end   = new Date(),
          diff  = new Date(end - start),
          day  = 1000*60*60*24;

          var days = Math.floor(diff/day);
          var months = Math.floor(days/31);
          var years = Math.floor(months/12);

          childAge = years; //age enfant

          // console.log('diff ' +years);

          if(years < 18 ) {
            $('#profession').attr('disabled','disabled').html('');
          }else
           $('#profession').removeAttr('disabled');
          
        });


      $(function(e) {
         e(document).on("keydown keyup blur input",".numpassport",function(e){this.value.length>=9&&$(this).val($(this).val().substr(0,9))});

         e(document).on("keydown keyup blur input",".taille",function(e){this.value.length>=3&&$(this).val($(this).val().substr(0,3));var t=String.fromCharCode(e.which)||e.key;if(/[a-z]/i.test(t))return e.preventDefault(),!1});

        e(document).on("keydown keyup blur input","#date_naiss",function(e){this.value.length>=11&&$(this).val($(this).val().substr(0,11))});

      });
   </script>
   @endsection