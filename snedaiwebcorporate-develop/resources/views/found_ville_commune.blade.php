
   <option value="0" selected="true" disabled="disabled" >Sélectionner une ville </option>
   @foreach($found_ville_com[0]['ville'] as $ville)
   		<option data-picone="{{$ville['id']}}" value="{{$ville['libelle']}}">{{ $ville['libelle'] }}</option>
   @endforeach
