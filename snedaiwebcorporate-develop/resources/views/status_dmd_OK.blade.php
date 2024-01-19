
   <div class="content1">
      <h2>STATUT DE VOTRE DEMANDE</h2>
   </div>

@foreach ($transactionlist as $demand)
    {{-- expr --}}
   <div id="statusfordesktop">
      <div class="content2">
         <div class="content2-header1">
            <p style="font-size: 16px">NOM: <br><span>{{$demand['nom']}}</span></p>
         </div>
         <div class="content2-header1">
            <p  style="font-size: 16px">PRENOMS : <br> <span>{{$demand['prenoms']}}</span></p>
         </div>
         <div class="content2-header1">
            <p  style="font-size: 16px">DATE DE NAISSANCE : <br> <span>{{date('d-m-Y', strtotime($demand['date_naiss']))}}</span></p>
         </div>
      </div>
      <div style="clear:both;"></div>
      <div class="container">
         <div class="row">
           
           <style type="text/css"></style>
            <div class="col-12 col-md-12 hh-grayBox pt45 pb20" style="margin-top:5px;margin-bottom: 0px;">
               <div class="row justify-content-between">
                  <div  @if ($demand['afis'] == 'OK') class="order-tracking completed" @else class="order-tracking" @endif>
                     <span class="is-complete"></span>
                     <p style="font-size:16px">Afis<br>
                        
                        <span  @if ($demand['afis']=='OK')style="font-weight: bold;color: green" @else style="font-weight: bold;color: #f36e23"@endif>{{$demand['afis']}}</span>
                     </p>
                  </div>
                  <div  @if ($demand['paid'] == 'OK') class="order-tracking completed" @else class="order-tracking" @endif>
                     <span class="is-complete"></span>
                     <p style="font-size:16px">Paiement<br><span @if ($demand['paid']=='OK')style="font-weight: bold;color: green" @else style="font-weight: bold;color: #f36e23"@endif>{{$demand['paid']}}</span></p>
                  </div>
                  <div  @if ($demand['approbation_police'] == 'OK') class="order-tracking completed" @else class="order-tracking" @endif>
                     <span class="is-complete"></span>
                     <p style="font-size:16px">Police<br><span @if ($demand['approbation_police']=='OK')style="font-weight: bold;color: green" @else style="font-weight: bold;color: #f36e23"@endif>{{$demand['approbation_police']}}</span></p>
                  </div>
                  <div @if ($demand['date_prod'] != '' || $demand['date_prod'] != null ) class="order-tracking completed" @else class="order-tracking" @endif>
                     <span class="is-complete"></span>

                     @if ($demand['date_prod'] != '' || $demand['date_prod'] != null )
                      <p style="font-size:16px">Production <br><span style="font-weight:bold;color:black">{{date('d-m-Y', strtotime($demand['date_prod']))}}</span></p>
                     @else
                      <p style="font-size:16px">Production <br><span style="font-weight:bold;color:#f36e23">NOK</span></p>
                     `  
                     @endif
                  </div>
                  <div  @if ($demand['date_delivrance'] != '' || $demand['date_delivrance'] != null ) class="order-tracking completed" @else class="order-tracking" @endif>
                     <span class="is-complete"></span>

                     @if ($demand['date_delivrance'] != '' || $demand['date_delivrance'] != null )
                      <p style="font-size:16px"> Delivrance<br><span style="font-weight:bold;color:black">{{date('d-m-Y', strtotime($demand['date_delivrance']))}}</span></p>
                     @else 
                     <p style="font-size:16px"> Delivrance<br><span style="font-weight:bold;color:#f36e23">NOK</span></p>

                     @endif
                  </div>
               </div>
            </div>  
         </div>
      </div>
   </div>

   <div id="statusformobile" style="display: none;">
      <div class="content2">
         <div class="content2-header1">
            <p style="font-size: 16px">NOM : <span style="margin-left: 10px;">{{$demand['nom']}}</span></p>
         </div>
         <div class="content2-header1">
            <p  style="font-size: 16px">PRENOMS :  <span style="margin-left: 10px;">{{$demand['prenoms']}}</span></p>
         </div>
         <div class="content2-header1">
            <p  style="font-size: 16px">DATE DE NAISSANCE :  <span style="margin-left: 10px;">{{date('d-m-Y', strtotime($demand['date_naiss']))}}</span></p>
         </div>
      </div>
      <div style="clear:both;"></div>
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-12 hh-grayBox pt45 pb20" style="margin-top:5px;margin-bottom: 0px;">
               <div class="row justify-content-between">
                  <div @if ($demand['afis'] == 'OK') class="order-tracking completed" @else class="order-tracking" @endif>
                     <span class="is-complete" style="float: left;"></span>

                     <p style="font-size:16px ;float: left;margin-top: 0px;margin-left: 20px;">afis :<span @if ($demand['afis']=='OK') style="font-weight: bold;color: green;margin-left: 10px" @else style="font-weight: bold;color: #f36e23;margin-left: 10px" @endif>{{$demand['afis']}}</span></p>
                  </div>
                  <div @if ($demand['paid'] == 'OK') class="order-tracking completed" @else class="order-tracking" @endif>
                     <span class="is-complete" style="float: left;"></span>
                     <p style="font-size:16px ;float: left;margin-top: 0px;margin-left: 20px;">Paiement :<span @if ($demand['paid'] == 'OK') style="font-weight: bold;color: green;margin-left: 10px" @else  style="font-weight: bold;color: #f36e23;margin-left: 10px" @endif >{{$demand['paid']}}</span></p>
                  </div>
                  <div @if ($demand['approbation_police'] == 'OK') class="order-tracking completed" @else class="order-tracking" @endif>
                     <span class="is-complete" style="float: left;"></span>
                     <p style="font-size:16px; float: left;margin-top: 0px;margin-left: 20px;">Police :<span  @if ($demand['approbation_police'] == 'OK') style="font-weight: bold;color: green;margin-left: 10px" @else style="font-weight: bold;color: #f36e23;margin-left: 10px" @endif>{{$demand['approbation_police']}}</span></p>
                  </div>
                  <div @if ($demand['date_prod'] != '' || $demand['date_prod'] != null ) class="order-tracking completed" @else class="order-tracking" @endif>
                     <span class="is-complete" style="float: left;"></span>

                     @if ($demand['date_prod'] != '' || $demand['date_prod'] != null )
                      <p style="font-size:16px ; float: left;margin-top: 0px;margin-left: 20px;">Production :<span style="font-weight:bold;color:black;margin-left:10px">{{date('d-m-Y', strtotime($demand['date_prod']))}}</span></p>
                      @else 
                     <p style="font-size:16px ; float: left;margin-top: 0px;margin-left: 20px;">Production :<span style="font-weight:bold;color:#f36e23;margin-left:10px">NOK</span></p>

                     @endif
                  </div>
                  <div @if ($demand['date_delivrance'] != '' || $demand['date_delivrance'] != null ) class="order-tracking completed" @else class="order-tracking" @endif>
                     <span class="is-complete" style="float: left;"></span>

                     @if ($demand['date_delivrance'] != '' || $demand['date_delivrance'] != null )
                      <p style="font-size:16px ;float: left;margin-top: 0px;margin-left: 20px;"> Delivrance :<span style="font-weight:bold;color:black;margin-left: 10px;">{{date('d-m-Y', strtotime($demand['date_delivrance']))}}</span></p>
                     @else

                      <p style="font-size:16px ;float: left;margin-top: 0px;margin-left: 20px;"> Delivrance :<span style="font-weight:bold;color:#f36e23;margin-left: 10px;">NOK</span></p>

                     @endif
                    


                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

         

         @if ($demand['afis']=='NOK')

            <div style="display: block;margin: 25px auto -5px;color: #f46e23;background: #27285e38;z-index: 1000;padding: 5px;">
               <span style="color: #f46e23;display: block;font-weight: bold;text-align: left;margin-left: 20px;">Afis NOK: </span> 
               <p style="font-size: 14px;margin-top:0px;text-align: left;margin-left: 20px;">Problème au niveau des empreintes ou des informations saisies</p>
              
            </div>
        @endif 


          @if ($demand['approbation_police']=='NOK')

            <div style="display: block;margin: 25px auto -5px;color: #f46e23;background: #27285e38;z-index: 1000;padding: 5px;">
               <span style="color: #f46e23;display: block;font-weight: bold;text-align: left;margin-left: 20px;">POLICE NOK: </span> 
               <p style="font-size: 14px;margin-top:0px;text-align: left;margin-left: 20px;">Le dossier n’est pas encore validé par la police</p>
              
            </div>
        @endif   


         @if ($demand['paid']=='NOK')

            <div style="display: block;margin: 25px auto -5px;color: #f46e23;background: #27285e38;z-index: 1000;padding: 5px;">
               <span style="color: #f46e23;display: block;font-weight: bold;text-align: left;margin-left: 20px;">PAIEMENT NOK: </span> 
               <p style="font-size: 14px;margin-top:0px;text-align: left;margin-left: 20px;">Le paiement a déjà été utiliséOu Le paiement n’est pas valide</p>
              
            </div>
        @endif   


        @if ($demand['date_prod'] == null ||$demand['date_prod'] == '')

            <div style="display: block;margin: 25px auto -5px;color: #f46e23;background: #27285e38;z-index: 1000;padding: 5px;">
               <span style="color: #f46e23;display: block;font-weight: bold;text-align: left;margin-left: 20px;">PRODUCTION NOK: </span> 
               <p style="font-size: 14px;margin-top:0px;text-align: left;margin-left: 20px;">Le passeport n’est pas encore produit </p>
              
            </div>
        @endif   


        @if ($demand['date_delivrance'] == null ||$demand['date_delivrance'] == '')

            <div style="display: block;margin: 25px auto -5px;color: #f46e23;background: #27285e38;z-index: 1000;padding: 5px;">
               <span style="color: #f46e23;display: block;font-weight: bold;text-align: left;margin-left: 20px;">DELIVRANCE NOK: </span> 
               <p style="font-size: 14px;margin-top:0px;text-align: left;margin-left: 20px;">Le passeport n’est pas encore retiré </p>
              
            </div>
        @endif   


@endforeach
   <button style="margin-top: 20px;background: #28285e;" class="js-close">Fermer</button>
