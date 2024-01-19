      

      @php
         $element = explode('|',$datas);
         $velt='';
       @endphp
      <h1 style="font-size: 40px">Details !</h1>
          <table style="width: 100%" class="recap-table">
              <tr>
                <td class="rowtable">TYPE DE TRANSACTION</td>
                <td style="font-weight:bold;">FRAIS PASSEPORT</td>
              </tr>
              <tr>
                <td class="rowtable">ID TRANSACTION </td>
                <td style="font-weight:bold;">{{$element[3]}}</td>
              </tr>
              <tr>
                <td class="rowtable">FRAIS</td>
                <td style="font-weight:bold;">{{$element[1].' '.$element[10]}} </td>                                       
              </tr>
              <tr>
                  <td class="rowtable">EMAIL </td>
                  <td style="font-weight:bold;">{!! !empty($element[4]) ? $element[4] : '' !!}</td>
              </tr>
               <tr>
                <td class="rowtable">LIEU</td>
                <td style="font-weight:bold;">{{$element[5]}}</td>                                       
              </tr>

              <tr>
                <td class="rowtable">STATUT</td>
                @php
                  if($element[6]=="processed"){
                    $velt="TRAITE";
                  }
                   if($element[6]=="canceled"){
                    $velt="ANNULE";
                  }
                @endphp 
                <td style="font-weight:bold;">{{$velt}}</td>                                       
              </tr>

              <tr>
                <td class="rowtable">DATE ET HEURE </td>
                <td style="font-weight:bold;">{{$element[0]}}</td>                                       
              </tr>

              <tr>
                 <td class="rowtable">TELECHARGER RECU</td>
                <td><a style="font-weight: bold;color: #28285e" href="{{$element[7] ?? ""}}" target="_blank"  >
                  <img src="/assets/img/DownloadPdf.svg" alt="IconDownload" style="width: 16px; float: right" />Télécharger votre reçu ici ! &nbsp; </a></td>
              </tr>
               
          </table>
           <button style="margin-top: 10px" class="js-close">Fermer</button>