 @extends('layouts.master')
  @section('content')
 <!-- ======= Hero Section ======= -->
      <div style="height: 50px">
          &nbsp;
       </div>
      <section id="hero" class="d-flex flex-column justify-content-center newdemand" style="height: auto">
         <div class="container" data-aos="zoom-in" data-aos-delay="100" >
            <h1 style="color: white">Nouvelle demande   </h1>
            <p  style="color: white"><span style="color: white" class="typed" data-typed-items="Contactez-nous sans hésiter !"></span></p>
            <div class="row mt-3">
              
               <div class="col-lg-8 mt-5 mt-lg-0" style="border-radius: 5px;padding-top: 20px;min-height:480px">
                  <div class="form-row" style="background: white;margin-left: unset;margin-right: unset;">
                    <div id="pre-enrollmentBanner" class="col-md-3 requestStep"  > 1. Pré-enrôlement </div>
                    <div id="rdvBanner"  class="col-md-3 requestStep" > 2. Rendez-vous </div>
                    <div id="confirmationBanner" class="col-md-3 requestStep"> 3. Confirmation </div>
                    <div id="paiementBanner" class="col-md-3 requestStep"> 4. Paiement </div>
                  </div>
                 
                  
                  <form id="passport_request_form" action="" autocomplete="off" method="post" role="form" class="php-email-form form-wrapper" style="position:relative;background: white;height:400px" enctype="multipart/form-data">
 
                      {{-- preenrollement --}}
                        <fieldset class="section is-active">
                             
                               <div class="form-row" style="height: auto">
                                 <img src="/assets/img/alerte.png" style="display: block; height: 150px;width: 150px;margin: 10px auto 10px;">
                                 <p style="text-align: center;">
                                    Service momentanément indisponible, veuillez réessayer plus tard.
                                 </p>
                                 
                               </div>
                              <div class="form-row" style="margin-top: 30px;">

                                <div class="col-md-12" >
                                
                                    <a id="" href="/" style="background: #27285e" class="customBtn  progress-button" data-progress-button>
                                                    <span class="progress-button-indicator"></span>
                                                    <span class="progress-button-content">
                                                        <span class="progress-button-before">ACCUEIL</span>
                                                        <span class="progress-button-after">PATIENTER</span>
                                                        <span class="progress-button-spacer">PATIENTER</span>
                                                    </span>
                                                </a>

                                </div>
                                 
                              </div>
                              <!-- <p style="font-size: 12px;font-weight: 600;"> Vous avez déjà un compte ? <span style="color: #f36e23">Connectez vous !</span> </p> -->
                        </fieldset>

{{-- 
                        <div style="height: 400px;background: orange;">
                           <h4 style="text-align: center;margin-top: 200px;">Page indisponible </h4>
                        </div> --}}
                        



                  </form>



               </div>


            </div>

         </div>

        

        <div style="height: 300px">
          &nbsp;
         </div> 
      </section>
      <!-- End Hero -->

       
   @endsection

   @section('footer')

   <script type="text/javascript">
    // global variable 
       var selected_date = '';   
       var data_rdv_array =  '';
       var lieurdv  = '';
       var sitecode  ='';
       var telephone = '';
       var email = '';
       var site_code_with_name  = '';
       var type_resident ='1';
       var passport_type ='passport_ci';
        // $("#finalrequestbtn").trigger('click');
   </script>

   <script src="/assets/js/plugins/jquery.inputmask.bundle.js"></script>
   <script type="text/javascript" src="/assets/js/plugins/moment.min.js"></script>
   <script type="text/javascript" src="/assets/js/plugins/moment-recur.min.js"></script>
   <script type="text/javascript" src="/assets/js/calendar.js"></script>
   <link href="/anim/anim_edit.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="/assets/css/calendar_style.css"/>
   <script src="/assets/js/plugins/dynamics.js"></script>
   {{-- <script type="text/javascript" src="/assets/js/demandes.js"></script> --}}
    <script type="text/javascript" src="{{mix('/assets/js/demandes.js')}} "></script>
   <script type="text/javascript" src="{{mix('/assets/js/form_validation.js')}}"></script>
   <script type="text/javascript" src="/modals/modals_customized.js"></script>
   <link href="/modals/modals.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="/assets/js/bootstrap-datepicker/css/datepicker.css" />
   <script type="text/javascript" src="/assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   
   <style type="text/css">
     .form-control{
        text-transform:uppercase;
      }

      .email{
        text-transform:lowercase !important;
      }
    
         table.hfilter{    
          width:100%;
          table-layout: fixed;
           }
        .tbl-header{
          background-color: rgba(255,255,255,0.3);
         }
        .tbl-content{
          height:300px;
          overflow-x:auto;
          margin-top: 0px;
          border: 1px solid rgba(255,255,255,0.3);
        }
         th{
          padding: 20px 15px;
          text-align: left;
          font-weight: 500;
          font-size: 12px;
         
          text-transform: uppercase;
        }

         .hfilter th{
          color: #fff;
        }
        td{
          padding: 15px;
          text-align: left;
          vertical-align:middle;
          font-weight: 300;
          font-size: 12px;
          border-bottom: solid 1px rgba(255,255,255,0.1);
        }

        .hfilter td{
          color: #fff;
        }
        .recap-table{
          border: dashed 2px black;
        }
        .rowtable{
          background:#7680b6;
          color: white;
          font-weight: bold;
          width: 50%;
        }
        .wrap {
    display: table;
    width: 100%;
    height: 80% !important;
}
   </style>
   
   <script type="text/javascript">

         $(":input").inputmask();

         $("#date_naiss").inputmask({ alias: "date", placeholder:"jj/mm/aaaa",});
         $("#datenaiss_pere").inputmask({ alias: "date", placeholder:"jj/mm/aaaa",});
         $("#datenaiss_mere").inputmask({ alias: "date", placeholder:"jj/mm/aaaa",});
         $("#datenaiss_conj").inputmask({ alias: "date", placeholder:"jj/mm/aaaa",});
         $("#date_mariage").inputmask({ alias: "date", placeholder:"jj/mm/aaaa",});


        var date_ = new Date();
        var selected_date = '';
        date_.setDate(date_.getDate()-1);
        var nowDate = new Date();
        var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
        
        var childAge=0;
        var fatherAge=0;
        var MotherAge=0;
        var er_father_son=false;
        var er_mother_son=false;
        var er_date_son=false;
        var er_date_mother=false;
        var er_date_father=false;

          $('.day ').on('click',function(ev){
          
              console.log('bonjour');
             // $('.datepicker').hide();
          })



         $('#date_naiss').on('blur', function(e){



          
          selected_date = $(this).val();

          var dateAr = selected_date.split('/');
          var selectedYear = dateAr[2];
          var currentYear = new Date().getFullYear()

          var isValid = Inputmask.isValid(selected_date, { alias: "date", inputFormat: "dd/mm/yyyy"});
          //console.log('isValid :'+ isValid);

          if(isValid == false){
            er_date_son=true;
            $(this).addClass('invalid');
            $(this).siblings('.validate').html('Date invalide').show('blind');
          }else if(parseInt(selectedYear) > parseInt(currentYear)){
             er_date_son=true;
             console.log('superior');
             $(this).addClass('invalid');
             $(this).siblings('.validate').html('Date de naissance invalide').show('blind');
          }
          else {
             er_date_son=false;
             $(this).removeClass('invalid');
             $(this).siblings('.validate').css('display','none').html('');
          }

          var dateAr = selected_date.split('/');
          var newDate = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0];
          var start = new Date(newDate),
          end   = new Date(),
          datedif = end - start,
          diffc  = new Date(datedif),
          day  = 1000*60*60*24;
         
          var days = Math.floor(diffc/day);
          var months = Math.floor(days/31);
          var years = Math.floor(months/12);
           console.log(days);

          childAge = years; //age enfant

           console.log('diff ' +years);

          if(years < 18 ) {
            $('#profession').removeClass('requiredField');
            $('#profession').attr('disabled','disabled').val('');
          }else{
           $('#profession').removeAttr('disabled').addClass('requiredField');
          }

          });




         $('#datenaiss_mere').on('blur', function(e){
         
          selected_date = $(this).val();
          er_mother_son= false;

          $(this).removeClass('invalid');
          $(this).siblings('.validate').css('display','none').html('');


          var isValid = Inputmask.isValid(selected_date, { alias: "date", inputFormat: "dd/mm/yyyy"});
          if(isValid == false){
                        er_date_mother=true;
                        $(this).addClass('invalid');
                        $(this).siblings('.validate').html('Date invalide').show('blind');
                      }else {
                         er_date_mother=false;
                         $(this).removeClass('invalid');
                         $(this).siblings('.validate').css('display','none').html('');
                      }

          var dateAr = selected_date.split('/');
          var newDate = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0];
         // console.log(newDate);

          var son_birth = $('#date_naiss').val();
          var son_birthAr = son_birth.split('/');
          var newDate_son_birth = son_birthAr[2] + '-' + son_birthAr[1] + '-' + son_birthAr[0];

        
          var mother_date_birth = new Date(newDate),
          son_date_birth = new Date(newDate_son_birth),
          diff  = new Date(son_date_birth - mother_date_birth),
          day  = 1000*60*60*24;

          var days = Math.floor(diff/day);
          var months = Math.floor(days/31);
          var years = Math.floor(months/12);
           // motherbd.hide();

          if(years <=10 ) {

            $(this).addClass('invalid');
            $(this).siblings('.validate').html('10 - 99 ans entre mère et enfant').show('blind');
            er_mother_son = true;

          }
          if( years >=100 ) {
            
             $(this).addClass('invalid');
             $(this).siblings('.validate').html('10 - 99 ans entre mère et enfant').show('blind');
              er_mother_son=true;
          }
          

          });



         $('#datenaiss_pere').on('blur', function(e){
         
           selected_date = $(this).val();
          er_father_son=false;
          $(this).removeClass('invalid');
          $(this).siblings('.validate').css('display','none').html('');


           var isValid = Inputmask.isValid(selected_date, { alias: "date", inputFormat: "dd/mm/yyyy"});
          if(isValid == false){
                        er_date_father=true;
                        $(this).addClass('invalid');
                        $(this).siblings('.validate').html('Date invalide').show('blind');
                      }else {
                         er_date_father=false;
                         $(this).removeClass('invalid');
                         $(this).siblings('.validate').css('display','none').html('');
                      }

          var dateAr = selected_date.split('/');
          var newDate = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0];
         // console.log(newDate);

          var son_birth = $('#date_naiss').val();
          var son_birthAr = son_birth.split('/');
          var newDate_son_birth = son_birthAr[2] + '-' + son_birthAr[1] + '-' + son_birthAr[0];

        
          var father_date_birth = new Date(newDate),
          son_date_birth = new Date(newDate_son_birth),
          diff  = new Date(son_date_birth  - father_date_birth),
          day  = 1000*60*60*24;

          var days = Math.floor(diff/day);
          var months = Math.floor(days/31);
          var years = Math.floor(months/12);
           //fatherbd.hide();
          // $('#nompere')[0].focus();
         

         console.log('diff ' +years);

          if(years <=10 ) {
            er_father_son=true;
            $(this).addClass('invalid');
            $(this).siblings('.validate').html('10 - 99 ans entre père et enfant').show('blind');
          }

          if( years>=100 ) {
            
             $(this).addClass('invalid');
             $(this).siblings('.validate').html('10 - 99 ans entre père et enfant').show('blind');
               er_father_son=true;
          } 
          

          });

   </script>

  
   @endsection