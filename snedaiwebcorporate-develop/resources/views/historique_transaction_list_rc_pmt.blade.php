

@if (count($transactionlist) >0)
	{{-- expr --}}
@php
	 // dd($transactionlist);
@endphp
@foreach ($transactionlist as $transactionlist_el)
@php
	$files=$transactionlist_el["attributes"]['files_links'];
	$pdfPasseportFrais=$files["payment_receipt"]  ?? ' ';

	$currency = $transactionlist_el['attributes']['currency'];
	$monnaie = '';
	if(($currency) == 'XOF')$monnaie = 'FCFA';
	if(($currency) == 'EUR')$monnaie = '€';


@endphp

		<tr style="font-weight: bold;">
			<td style="width: 25%;font-weight: 400;">{{$transactionlist_el['attributes']['record_date']}}</td>
			<td style="width: 25%;font-weight: 400;">REÇU DE PAIEMENT</td>

			<td style="width: 25%;font-weight: 400;">{{number_format($transactionlist_el['attributes']['amount'],0,'.',' ').' '. $monnaie}} </td>
			<td style="width: 25%;font-weight: 400;"> 
				 <a href='#' class="btn table_details_btn_paiement js-open btn-open is-active" dataTrans="{{$transactionlist_el["attributes"]["record_date"]."|".$transactionlist_el['attributes']['amount']."|".$transactionlist_el['id']."|".$transactionlist_el["attributes"]['transaction_id']."|".$transactionlist_el["attributes"]['client_id']."|".$transactionlist_el["attributes"]['payment_code']."|".$transactionlist_el["attributes"]['status']."|".$pdfPasseportFrais}}" >
                                      DETAILS
                                   </a>
			</td>
		</tr>	{{-- expr --}}
@endforeach
@else 
<tr>
	 <td style="width: 100%;text-align: center;font-weight: bold;">Aucun resultat pour ce filtre </td>
	</td>
</tr>
@endif