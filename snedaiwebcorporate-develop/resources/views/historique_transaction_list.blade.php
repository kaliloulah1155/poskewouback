@if (count($transactionlist)>0)
	{{-- expr --}}
@foreach ($transactionlist as $transactionlist_el)


		<tr style="font-weight: bold;">
			<td style="width: 25%;font-weight: 400;">{{$transactionlist_el['attributes']['record_date']}}  </td>
			<td style="width: 25%;font-weight: 400;"> CODE RDV</td>
			<td style="width: 25%;font-weight: 400;">@if ($transactionlist_el['attributes']['meeting_code']){{$transactionlist_el['attributes']['meeting_code']}} @else <span style='color:#f46e23;font-weight: bold;'> NON DEFINI </span> @endif </td>
			<td style="width: 25%;font-weight: 400;"> <a   class="btn table_details_btn js-open btn-open is-active"  dataTrans="{{$transactionlist_el["attributes"]["record_date"]."|".$transactionlist_el['attributes']['amount']."|".$transactionlist_el['id']."|".$transactionlist_el["attributes"]['transaction_id']."|".$transactionlist_el["attributes"]['time_value']."|".$transactionlist_el["attributes"]['location_address']."|".$transactionlist_el["attributes"]['status']."|".$transactionlist_el["attributes"]['meeting_code']."|".$transactionlist_el["attributes"]['files_links']."|".$transactionlist_el["attributes"]['scheduled_at']}}">DETAILS </a></td>
		</tr>	{{-- expr --}}
@endforeach
@else 
<tr>
	 <td style="width: 100%;text-align: center;font-weight: bold;">Aucun resultat pour ce filtre </td>
	</td>
</tr>
@endif