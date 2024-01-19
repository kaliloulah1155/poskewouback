 @extends('layouts.master')
  @section('content')
 <!-- ======= Hero Section ======= -->
      <div style="height: 50px">
          &nbsp;
       </div>
      <section id="hero" class="d-flex flex-column justify-content-center newdemand" style="height: auto">
         <div class="container" data-aos="zoom-in" data-aos-delay="100" >
            <h1 style="color: white">Tutos videos   </h1>
            <p  style="color: white"><span style="color: white" class="typed" data-typed-items="Contactez-nous sans hésiter !"></span></p>
            <div class="row mt-3">
              
              
               <div class="col-lg-11 mt-5 mt-lg-0" style="border-radius: 5px;padding-top: 20px;min-height:480px;background:#ffffff36">

                <div class="form-row" style="padding: 5px;">

                  
                  <div class="col-md-5">
                   <a href="#" style="display: block;padding: 5px;background: #29285e;color: white;border-radius: 5px;min-height: 54px;line-height: 44px;font-weight: bold;text-align: center;margin-bottom: 20px;max-width: 265px;">Demande de passeport</a>

                   <a href="#" style="display: block;padding: 5px;background: #e8e8e8;color: black;border-radius: 5px;min-height: 54px;line-height: 44px;font-weight: bold;text-align: center;margin-bottom: 20px;max-width: 265px;">Modification RDV</a>

                    <a href="#" style="display: block;padding: 5px;background: #e8e8e8;color: black;border-radius: 5px;min-height: 54px;line-height: 44px;font-weight: bold;text-align: center;margin-bottom: 20px;max-width: 265px;">Paiement OMONEY</a>
                   

                  </div>
                  <div class="col-md-7" style="background:white ;text-align: center;padding-top: 10px;">
                    <iframe width="575" height="315" src="https://www.youtube.com/embed/Gj0nuqsSCVs?controls=0&showinfo=0" title="YouTube video player" frameborder="0"  allowfullscreen></iframe>
                  </div>
                  

                </div>
                  
               
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
        // $("#finalrequestbtn").trigger('click');
   </script>

   {{-- <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script> --}}
   {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment-recur/1.0.5/moment-recur.min.js"></script> --}}

    <script type="text/javascript" src="/assets/externalsources/jquery.inputmask.bundle.js"></script>
    <script type="text/javascript" src="/assets/externalsources/moment.min.js"></script>
    <script type="text/javascript" src="/assets/externalsources/moment-recur.min.js"></script>



   


   <script type="text/javascript" src="/assets/js/calendar.js"></script>
   <link href="/anim/anim_edit.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="/assets/css/calendar_style.css"/>
   {{-- <script src="https://unpkg.com/dynamics.js@1.1.5"></script> --}}
   <script type="text/javascript" src="/assets/js/dynamics.js"></script>
   <script type="text/javascript" src="/assets/js/demandes.js"></script>
   <script type="text/javascript" src="/assets/js/form_validation.js"></script>
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

       // $.fn.datepicker.defaults.autoclose = true;
       $('#date_mariage, #datenaiss_conj').datepicker();

       

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