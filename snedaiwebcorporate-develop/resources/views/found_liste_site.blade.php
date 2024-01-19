
   <option value="0" selected="true" disabled="disabled" >Veuillez selectionner le site d'enrôlement</option>
   @foreach($liste_site as $liste_site_el)
   		<option  value="{{$liste_site_el['id_site'].'|'. $liste_site_el['adresse']. '|'. $liste_site_el['rdv_payant'] }}">{{ $liste_site_el['nom'] }}</option>

        {{-- <option  value="{{$liste_site_el['id_site'].'|'. $liste_site_el['adresse'] }}">{{ $liste_site_el['nom'] }}</option> --}}
   @endforeach
