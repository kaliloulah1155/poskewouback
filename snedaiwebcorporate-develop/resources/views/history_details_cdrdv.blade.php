      

      @php
         $element = explode('|',$datas);
         
       @endphp
      <h1 style="font-size: 40px">Details !</h1>
          <table style="width: 100%" class="recap-table">
              <tr>
                <td class="rowtable">TYPE DE TRANSACTION</td>
                <td style="font-weight: bold;">ACHAT</td>
              </tr>
              <tr>
                <td class="rowtable">ID TRANSACTION </td>
                <td style="font-weight: bold;">{{$element[3]}}</td>
              </tr>
              <tr>
                <td class="rowtable">HEURE DE RDV</td>
                <td style="font-weight: bold;">{!! !empty($element[4]) ? $element[4] : '' !!}</td>                                       
              </tr>
               <tr>
                <td class="rowtable">LIEU</td>
                <td style="font-weight: bold;">{{$element[5]}}</td>                                       
              </tr>

              <tr>
                <td class="rowtable">CODE RDV</td>
                <td style="font-weight: bold;"> @if ($element[7]){{$element[7]}} @else <span style='color:#f46e23;font-weight: bold;'> NON DEFINI </span> @endif</td>                                       
              </tr>
              <tr>
                <td class="rowtable">DATE ET HEURE </td>
                <td style="font-weight: bold;">{{ date('d-m-Y', strtotime($element[9])) }}</td>                                       
              </tr>

             
                <td class="rowtable">TELECHARGER RECU</td>
                <td><a style="font-weight: bold;color: #28285e" href="{{$element[8] ?? ""}}" id="link1" target="_blank"  >
                  <img src="/assets/img/DownloadPdf.svg" alt="IconDownload" style="width: 16px; float: right" />Télécharger votre reçu ici ! &nbsp; </a></td>
          </table>
           <button style="margin-top: 10px" class="js-close">Fermer</button>