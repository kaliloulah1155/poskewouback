@php
  header("Content-Security-Policy: frame-ancestors 'https://www.youtube.com/'");
  header("X-frame-Options: SAMEORIGIN");
  header("X-Content-Type-Options: nosniff");
  header_remove("X-Powered-By");
@endphp
  
  @foreach ($detailsSite as $detailsSite_element)
          

          @php
            $telliste = $detailsSite_element['telephone'][0]['texte'] ;
            $telarray = explode('|', $telliste);
          @endphp

              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>{{$detailsSite_element['libelle']}}:</h4>
                <p>details infos </p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>{{$detailsSite_element['emails'][0]['email']}}:</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Téléphone :</h4>
                @foreach ($telarray as $tel)
                   <p>{{$tel}}</p>
                @endforeach
               
               {{--  <p>Bureau Cocody : +225 27 22 41 38 39</p>
                <p>Bureau Marcory GFCI : +225 27 21 26 36 88</p>
                <p>Bureau Yopougon : +225 27 23 45 12 47</p> --}}
              </div>  

  @endforeach