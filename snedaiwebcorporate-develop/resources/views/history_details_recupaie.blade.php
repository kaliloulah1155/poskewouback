      
      @php
         $element = explode('|',$datas);
       @endphp
      <h1 style="font-size: 40px">Details !</h1>
          <table style="width: 100%" class="recap-table">
              <tr>
                <td class="rowtable">TYPE DE TRANSACTION</td>
                <td style="font-weight: bold;">DEMANDES</td>
              </tr>
              <tr>
                <td class="rowtable">ID TRANSACTION </td>
                <td style="font-weight: bold;">{{$element[3]}}</td>
              </tr>
              <tr>
                <td class="rowtable">FRAIS </td>
                <td style="font-weight: bold;">{{number_format($element[1],0,'.',' ')}}</td>                                       
              </tr>
               <tr>
                <td class="rowtable">EMAIL</td>
                <td style="font-weight: bold;">{!! !empty($element[4]) ? $element[4] : '' !!}</td>                                       
              </tr>

               <tr>
                <td class="rowtable">STATUT TRANSACTION</td>
                @php
                  if($element[6]=="processed"){
                    $velt="traité";
                  }
                  if($element[6]=='canceled') $velt ="ANNULE"
                @endphp
                <td style="font-weight: bold;">{{!empty($velt) ? $velt : ''}}</td>                                       
              </tr>

              <tr>
                <td class="rowtable">DATE ET HEURE </td>
                <td style="font-weight: bold;">{{$element[0]}}</td>                                       
              </tr>

                <td class="rowtable">Télécharger votre reçu frais passeport !</td>
                <td><a style="font-weight: bold;color: #28285e" href="{{$element[7] ?? ""}}" id="link1" target="_blank"  ><img src="/assets/img/DownloadPdf.svg" alt="IconDownload" style="width: 16px; float: right" />Télécharger votre reçu ici ! &nbsp; </a></td>
          </table>
           <button style="margin-top: 10px" class="js-close">Fermer</button>