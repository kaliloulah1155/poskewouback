
<h4 style="font-size: 30px">Modification de RDV</h4> 
<h4>Choix du créneau horaire</h4>
<h6 style="color: #234eb1;font-weight: bold;">selectionner une place horaire puis confirmer</h6>
<p style="font-size: 12px;font-weight: bold;">Pour la date du <span style="color: black;letter-spacing: normal;font-weight: bold;" id="rdv_date">{{$displayed_date}}</span> - Site : <span style="color: black;letter-spacing: normal;font-weight: bold;" id="sitelib">{{$lieurdv}}</span></p>

	<div class="row" style="margin-top: 15px">
	     <div class="col-md-6 " style="font-weight: bold;text-transform: uppercase;">Plage Horaire</div>
	     <div class="col-md-6 "  style="font-weight: bold;text-transform: uppercase;">Places disponibles</div>
	 </div>

		     @foreach ($rdv_datas as $rdv_datas_el)
		      <div class="row" style="margin-top: 15px;border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
			      <div class="col-md-6" >
			        <input type="radio" class="cbkHeures form-control" name="date_chbk" value="{{$rdv_datas_el['libelle'].'|'.$rdv_datas_el['id']}}" style="width: 15%;display: inline;height: 20px;" > 
			         <span style="display: inline-block;top: -7px;position: relative;font-size:12px">{{$rdv_datas_el['libelle']}}</span>
			     </div>
			     <div class="col-md-6"> <p style="font-size: 12px;margin-top: 0px">{{$rdv_datas_el['nb_dispo']}} places disponibles</p></div>
			  </div>  
		     @endforeach
		     {{-- <button class="js-close">Fermer</button> --}}
		     <div class="form-row " style="margin-top: 20px">
	                <div class="col-md-6" style="width:50%">
	                      <a href="#" class="js-close"  style="background: #000;border: 0;padding: 10px 5px;color: #fff;font-weight: bold;transition: 0.4s;border-radius: 5px;display:block"  >FERMER</a>
	                </div>
	                <div class="col-md-6" style="width:50%">
	                   {{--  <a id="confirmer" href="#" style="background: #f36e23;border: 0;padding: 10px 5px;color: #fff;transition: 0.4s;border-radius: 5px;display:block;font-weight: bold;" >CONFIRMER </a> --}}

	                   @if ($mustpay =='mustpay')
	                   
		                   <a id="confirmer" href="#" style="background: #f36e23" class="customBtn  progress-button not-active" data-progress-button>
		                      <span class="progress-button-indicator"></span>
		                      <span class="progress-button-content">
		                          <span class="progress-button-before">CONFIRMER</span>
		                          <span class="progress-button-after">PATIENTER</span>
		                          <span class="progress-button-spacer">PATIENTER</span>
		                      </span>
		                  </a>

	                   @else

	                   <a id="confirmerwithoutpay" href="#" style="background: #f36e23" class="customBtn  progress-button not-active" data-progress-button>
		                      <span class="progress-button-indicator"></span>
		                      <span class="progress-button-content">
		                          <span class="progress-button-before">CONFIRMER</span>
		                          <span class="progress-button-after">PATIENTER</span>
		                          <span class="progress-button-spacer">PATIENTER</span>
		                      </span>
		                  </a>

	                   @endif
	                </div>
	          </div>


  