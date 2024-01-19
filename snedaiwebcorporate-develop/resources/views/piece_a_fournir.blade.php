 @extends('layouts.master')
  @section('content')
     <div style="height: 50px">
          &nbsp;
       </div>
	<section id="hero" class="d-flex flex-column justify-content-center inscription" style="height: auto">
	    <div class="container" data-aos="zoom-in" data-aos-delay="100" >
	      <h1 style="color: white">Pièce à fournir</h1>
	      <p  style="color: white"><span style="color: white" class="typed" data-typed-items="Pour une prise en main facile et intuitive, Et bénéficiez de la réactivité de nos services"></span></p>


	       <div class="row mt-5">
	          <div class="col-lg-8 mt-5 mt-lg-0" style="background: rgb(255 255 255 / 90%);border-radius: 5px;padding-top: 30px;height:560px">

	            <form action="" method="post" role="form" class="php-email-form" style="padding: 10px">
                @csrf
	              <div class="form-row">
	                  <div class="col-md-12 form-group input_wrap">
	                  	 <p style="text-align: center;display: block;margin: 7px auto;color: #28285e;">Liste des pièces à fournir</p>

	                  	<p style="font-size: 14px;text-align: center;">Cher demandeur de passeport ci-après la liste des pièces à fournir pour vos différentes demandes de passeport ou de modification de rendez-vous.</p>

	                  </div>
	                 
	                </div>

	            </form>

	            					            <div class="tbl-header" style="background: #d4dbf3">
                                        <table class="hfilter table" cellpadding="0" cellspacing="0" border="0">
                                          <thead>
                                            <tr >
                                              <th scope="col" style="color: black;font-weight: bold;">NOM FICHIER </th>
                                              <th scope="col" style="color: black;font-weight: bold;">LIENS</th>
                                            </tr>
                                          </thead>
                                        </table>
                                    </div>

                                    <div class="tbl-content">
                                      <table class=" table" cellpadding="0" cellspacing="0" border="0">
                                        <tbody id="transaction_list_result">
                                          <tr>
                                             <td style="font-weight: 400;"> <p style="font-size: 13px;margin-top: 0px">Nationaux d'origine</p></td>
                                             <td style="font-weight: 400;"> <a class="filelink" data-link="docs/PicesFournir-NationauxOrigines.pdf" style=";color: #28285e;font-size:14px;font-weight: 400;" ><img src="/assets/img/DownloadPdf.svg" alt="IconDownload" style="width: 16px; float: left;margin-right: 10px;" />Télécharger le fichier ici ! &nbsp; </a></td>
                                          </tr>
                                           <tr>
                                             <td style="font-weight: 400;"> <p style="font-size: 13px;margin-top: 0px">CNI perdue</p></td>
                                             <td style="font-weight: 400;"> <a class="filelink" data-link="docs/PicesFournir-CniPerdue.pdf" style=";color: #28285e;font-size:14px;font-weight: 400;" ><img src="/assets/img/DownloadPdf.svg" alt="IconDownload" style="width: 16px; float: left;margin-right: 10px;" />Télécharger le fichier ici ! &nbsp; </a></td>
                                          </tr>
                                          <tr>
                                             <td style="font-weight: 400;"> <p style="font-size: 13px;margin-top: 0px">Renouvellement </p></td>
                                             <td style="font-weight: 400;"> <a class="filelink" data-link="docs/PicesFournir-Renouvellement.pdf" style=";color: #28285e;font-size:14px;font-weight: 400;" ><img src="/assets/img/DownloadPdf.svg" alt="IconDownload" style="width: 16px; float: left;margin-right: 10px;" />Télécharger le fichier ici ! &nbsp; </a></td>
                                          </tr>
                                          <tr>
                                             <td style="font-weight: 400;"> <p style="font-size: 13px;margin-top: 0px">Photo de la CNI effacée </p></td>
                                             <td style="font-weight: 400;"> <a class="filelink" data-link="docs/PicesFournir-PhotoCniEffacee.pdf" style=";color: #28285e;font-size:14px;font-weight: 400;" ><img src="/assets/img/DownloadPdf.svg" alt="IconDownload" style="width: 16px; float: left;margin-right: 10px;" />Télécharger le fichier ici ! &nbsp; </a></td>
                                          </tr>
                                           <tr>
                                             <td style="font-weight: 400;"> <p style="font-size: 13px;margin-top: 0px">Nationalité par mariage</p></td>
                                             <td style="font-weight: 400;"> <a class="filelink" data-link="docs/PicesFournir-NationaliteParMariage.pdf" style=";color: #28285e;font-size:14px;font-weight: 400;" ><img src="/assets/img/DownloadPdf.svg" alt="IconDownload" style="width: 16px; float: left;margin-right: 10px;" />Télécharger le fichier ici ! &nbsp; </a></td>
                                          </tr>
                                           <tr>
                                             <td style="font-weight: 400;"> <p style="font-size: 13px;margin-top: 0px">Nationalité par naturalisation</p></td>
                                             <td style="font-weight: 400;"> <a class="filelink" data-link="docs/PicesFournir-NationaliteParNaturalisation.pdf" style=";color: #28285e;font-size:14px;font-weight: 400;" ><img src="/assets/img/DownloadPdf.svg" alt="IconDownload" style="width: 16px; float: left;margin-right: 10px;" />Télécharger le fichier ici ! &nbsp; </a></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
	      

                                   


         </div>

                          



                        

	        </div>
	     </div>
	</section>
  @endsection	
  @section('footer')
   <link href="/assets/css/maintable.css" rel="stylesheet">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <style type="text/css">
  
	tr:nth-child(2n+1) {background: #8080801c}
   </style>
   <script type="text/javascript">




      $('.filelink').each(function() {
          var element = $(this);
          var url=$(this).attr('data-link');
          $(this).attr('href',"//drive.google.com/viewerng/viewer?embedded=true&url="+getBaseUrl() +url);
          $(this).attr('target','_blank');
         //  window.open("//drive.google.com/viewerng/viewer?embedded=true&url="+getBaseUrl() +url,"_blank");
       
       });





   	    function getBaseUrl() {
		    var re = new RegExp(/^.*\//);
		    return re.exec(window.location.href);
		}
   </script>
  @endsection