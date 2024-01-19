
@if (count($transactionlist) >0)
	{{-- expr --}}

@foreach ($transactionlist as $transactionlist_el)
@php
	 $files=$transactionlist_el["attributes"]['files_links'];
	 $pdfPasseportEnrol=$files["application_form"];
	 $pdfPasseportFrais=$files["payment_receipt"];
	 $pdfPasseportRdv=$files["meeting_receipt"];
@endphp
		<tr style="font-weight: bold;">



			<td style="width: 25%;font-weight: 400;">{{$transactionlist_el['attributes']['record_date']}}</td>
			<td style="width: 25%;font-weight: 400;"> FRAIS PASSEPORT</td>
			<td style="width: 25%;font-weight: 400;">{{number_format($transactionlist_el['attributes']['amount'],2,'.',' ')}}  </td>
			<td style="width: 25%;font-weight: 400;"> <a class="btn table_details_dmd_btn js-open btn-open is-active"  dataTrans="{{$transactionlist_el["attributes"]["record_date"]."|".$transactionlist_el['attributes']['amount']."|".$transactionlist_el['id']."|".$transactionlist_el["attributes"]['transaction_id']."|".$transactionlist_el["attributes"]['client_id']."|".$transactionlist_el["attributes"]['payment_code']."|".$transactionlist_el["attributes"]['status']."|".$pdfPasseportEnrol."|".$pdfPasseportFrais."|".$pdfPasseportRdv}}">DETAILS </a></td>
		</tr>	{{-- expr --}}
@endforeach
@else 
<tr>
	 <td style="width: 100%;text-align: center;font-weight: bold;">Aucun resultat pour ce filtre !</td>
	</td>
</tr>
@endif
