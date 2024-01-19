

         // Open the file browser when our custom button is clicked.
     $('.input-file .btn').click(function() {
         $(this).siblings('input[type="file"]').trigger('click');
     });

      $('#closecheck_resp').on('click',function (e){
      e.preventDefault();
        $('.checkresponse').css('display','none');
        $('.form-rdvcode').css('margin-bottom','50px');
        $('#check_rdv_code').removeClass('not-active');
     });



   $(".form-wrapper #check_rdv_code").click(function(e) {
    e.preventDefault();
    var hasError = false;
    var btnclicked = $(this);
    var uploadhaserror = false;
    var datasT = new FormData();
    var hasErrorupload = new Array();
    $('#step_six').find('input, textarea, select').each(function() {
        if ($(this).is(':input:file')) {
            if ($(this).val() !== '') {
                hasErrorupload.push(chech_uploadedfile($(this)));
                i++;
            }
            datasT.append(this.name, $(this)[0].files[0]);
        } else if ($(this).is(':radio')) {
            if ($(this).is(':checked')) {
                datasT.append(this.name, $(this).val());
            }
        } else {
            datasT.append(this.name, $(this).val());
        }
    });

    $('.requiredField').removeClass('invalid');
    $('.requiredField').addClass('fieldtrue');
    $('#step_six .requiredField:visible').each(function() {
        var i = $(this);
        i.siblings('.validate').html('');
        if (jQuery.trim($(this).val()) === '') {
            hasError = true;
            $(this).addClass('invalid');
            i.siblings('.validate').html((hasError ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
        } else if ($(this).hasClass('email')) {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if (!emailReg.test(jQuery.trim($(this).val()))) {
                hasError = true;
                $(this).addClass('invalid');
                i.siblings('.validate').html((hasError ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
            }
        }
        else if ($(this).hasClass('telReg')) {
            if (jQuery.trim($(this).val()).length <10) {
                hasError = true;
                $(this).addClass('invalid');
                i.siblings('.validate').html((hasError ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
            }
        }
          
    });
    
    datasT.append('meeting_type', meeting_type);


   if (!hasError ) {

       $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
               $.ajax({
                        type: 'POST',
                        data: datasT,
                        contentType: false, 
                        processData: false,
                        url: '/searchCoderdv',
                        beforeSend: function(){
                          btnclicked.removeClass('normalstate');
                          btnclicked.addClass('is-active');
                        },
                        success:function(response){ 
                            //console.log(response);
                            // console.log(response.time_slot);
                            //   var resp= response.split('*');
                              btnclicked.removeClass('is-active');
                              btnclicked.addClass('normalstate');
                             $('#coderdv').siblings('.validate').html("");
                            // if (resp[0] =='Invalid code!') {
                               if (response =='Invalid code!') {
                               var message =' Ce code rendez-vous n\'existe pas! ';
                               $('#coderdv').addClass('invalid');
                               $('#coderdv').siblings('.validate').html(message).show('blind');
                            }
                            if(response.paymentstatus =='echu mustpay'){
                                // codeRDV = resp[2];
                                codeRDV = response.meeting_code;
                              $('.form-rdvcode').css('margin-bottom','0px');
                              $('.checkresponse').css('display','block');
                              $('#check_rdv_code').addClass('not-active');
                              mustpay ='mustpay';
                            }

                            if(response.paymentstatus =='mustpay'){
                                // codeRDV = resp[2];
                                codeRDV = response.meeting_code;
                              $('.form-rdvcode').css('margin-bottom','0px');
                              $('.checkresponse').css('display','block');
                              $('#check_rdv_code').addClass('not-active');
                              mustpay ='mustpay';
                            }


                            if(response.paymentstatus =='non echu mustpay'){
                                // codeRDV = resp[2];
                               codeRDV = response.meeting_code;
                              $('.form-rdvcode').css('margin-bottom','0px');
                              $('#msgCheck').html(`vous ne disposez plus de tentative pour modifier votre rendez-vous. 
                                Vous devez payer la somme de 5000 FCFA.`);
                              $('.checkresponse').css('display','block');
                              $('#check_rdv_code').addClass('not-active');
                               mustpay ='mustpay';
                            }
                            
                            if (response.paymentstatus == 'non echu mustnotpay' || response.paymentstatus == 'mustnotpay' ) {
                            // codeRDV = resp[2];
                             codeRDV = response.meeting_code;
                              var currentSection = btnclicked.parents(".section");
                              var currentSectionIndex = currentSection.index();
                              var headerSection = $('.steps li').eq(currentSectionIndex);
                              currentSection.removeClass("is-active").next().addClass("is-active");
                              headerSection.removeClass("is-active").next().addClass("is-active");
                              mustpay ='mustnotpay';

                              $(".form-wrapper").submit(function(e) {
                                  e.preventDefault();
                              });

                              if (currentSectionIndex === 10) {
                                  $(document).find(".form-wrapper .section").first().addClass("is-active");
                                  $(document).find(".steps li").first().addClass("is-active");
                              }
                            }


                             $("#calendar").html('');
                             calendar = new Calendar("#calendar", response.calendarData);



                          lieurdv  =  response.addresse_dem;// resp[1];
                          sitecode  = response.site_code; //resp[6];
                          telephone = response.petitioner_mobile_number;// resp[5];;
                          email = response.email_demandeur; //resp[7];;
                          site_code_with_name =lieurdv +''+sitecode;
                          selectedsiterdv = response.site_code+'|'+ response.addresse_dem +'|'+ response.rdv_payant ;
                          // console.log('sel '+ selectedsiterdv);
                          $('#lieurdv').html(lieurdv);
                          // $('#dateHrdv').html(resp[3] +' '+resp[4] );
                           $('#dateHrdv').html(response.date_rdv +' '+response.time_value );

                        },
                    });

    }
})


$('#mustpay').on('click',function(e){

  e.preventDefault();
  
    var currentSection = $('#moov_on_to_calendar').parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $('.steps li').eq(currentSectionIndex);
    currentSection.removeClass("is-active").next().addClass("is-active");
    headerSection.removeClass("is-active").next().addClass("is-active");

    $(".form-wrapper").submit(function(e) {
        e.preventDefault();
    });

    if (currentSectionIndex === 10) {
        $(document).find(".form-wrapper .section").first().addClass("is-active");
        $(document).find(".steps li").first().addClass("is-active");
    }

})


$(document).on('click','#confirmerwithoutpay',function (e){
    e.preventDefault();


    var datehour_code= $('input[name ="date_chbk"]:checked').val();
    var array_date_hour_code = datehour_code.split('|');
    timecode = array_date_hour_code[1];
    timevalue = array_date_hour_code[0];
    console.log('bb. '+datehour_code);
    console.log(datehour_code + ' ** ' +email + ' ** ' +telephone+ ' ** ' +site_code_with_name+ ' ** ' +lieurdv+ ' ** ' +sitecode+ ' ** ' +selected_date);

     //cacher le popup
      hideModal();
      toggleClasses();

      var button = $("#payforedit");
      var currentSection = button.parents(".section");
      var currentSectionIndex = currentSection.index();
      var headerSection = $('.steps li').eq(currentSectionIndex);
      currentSection.removeClass("is-active").next().addClass("is-active");
      headerSection.removeClass("is-active").next().addClass("is-active");

    $(".form-wrapper").submit(function(e) {
        e.preventDefault();
    });

    if (currentSectionIndex === 10) {
        $(document).find(".form-wrapper .section").first().addClass("is-active");
        $(document).find(".steps li").first().addClass("is-active");
    }


       $('.confirmation').css('display','inline-block');
       $('#confirmationBanner').siblings().removeClass('requestStepActivated').addClass('requestStep');
       $('#confirmationBanner').removeClass('requestStep').addClass('requestStepActivated');
       var newheight = $('#passport_request_form').height();
       // $('#passport_request_form').height( newheight- 30)
        $('#passport_request_form').css('height','auto');
        $('#coderdv_disp').html(codeRDV);
        $('#siterdv_todisplay').html(lieurdv);
        $('#daterdv').html(selected_date);







    
})


 $(document).on('click','.js-close', function(e){
    $("#back_to_stepO_rdv").removeClass('not-active');
    $("#calendar").css('display','block');
     var newheight = $('#passport_request_form').height();
    $('#passport_request_form').height( newheight- 30)
                        
  })

$(document).on('change','input[name="date_chbk"]', function(e){
                 $("#confirmer").removeClass("not-active");
                  $("#confirmerwithoutpay").removeClass("not-active");
         });



$(document).on('change','input[name="choixsite"]', function(e){
             var selected_site =$(this).val();
             console.log(selected_site);
             if(selected_site == 'newsite'){
                 $('#site_selecter').css('display','flex');
                 $('#oldrdvinfo').css('display','none');
             }
             else {
                $('#site_selecter').css('display','none');
                $('#oldrdvinfo').css('display','block');
             }
         });



$('#formulerdv').on('change', function(e) {

              var idenfiantformule = $(this).val();
              var mntformule =$('option:selected',this).attr('data-mnt-formule');
              console.log(mntformule);
              $("#siterdv").attr('disabled','disabled');
              $.ajax({     
                      type : "GET",
                      url:'/findsite_enrollement',
                      data:{idformule:idenfiantformule}, 
                      beforeSend: function(){
                       $('#spinner').css('display','block');
                        },
                        success:function(response){
                        
                          $('#mntrdv').html(mntformule);
                          $('#spinner').css('display','none');
                          $("#siterdv").removeAttr('disabled');
                          $("#siterdv").html(response);
                        },
                        error: function(data) {
                         
                        }
                });

    })


 $('#formulerdv_diapo').on('change', function(e) {

              var idenfiantformule = $(this).val();
              // var mntformule = $(this).attr('data-mnt-formule');
              // var mntformule = $(this 'option:selected').attr('data-mnt-formule');
               var mntformule =$('option:selected',this).attr('data-mnt-formule');
              $("#siterdv").attr('disabled','disabled');
              $.ajax({     
                      type : "GET",
                      url:'/findsite_enrollement_diaspora',
                      data:{idformule:idenfiantformule}, 
                      beforeSend: function(){
                       $('#spinner').css('display','block');
                        },
                        success:function(response){
                          $('#spinner').css('display','none');
                            $("#siterdv").removeAttr('disabled');
                            $("#siterdv").html(response);
                        },
                        error: function(data) {
                         
                        }
                });

    })



$(document).on('click','#confirmEditRdv', function(e){
    e.preventDefault();
     var   btnclicked =$(this);
    // console.log('test');

     $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

     $.ajax({
         type : "POST",
         url:'/confirmRdvSuccessCode',
         data:{timecode:timecode,timevalue:timevalue,desired_date:selected_date,meeting_code:codeRDV,meeting_type:meeting_type,rdv_payant:rdv_payant,location_address:lieurdv},
          beforeSend: function(){
                         btnclicked.removeClass('normalstate');
                         btnclicked.addClass('is-active');
                        },
          success:function(resp){ 
            console.log(resp);
            var arrayresp = resp.split('*');
            btnclicked.removeClass('is-active');
            btnclicked.addClass('normalstate');
      
                $('#paiementBanner').siblings().removeClass('requestStepActivated').addClass('requestStep');
                $('#paiementBanner').removeClass('requestStep').addClass('requestStepActivated');
                 $('.pre-enrol').css('display','none');

             if  (resp == 'rdv updated') {  
                 $('#sucessmsg').css('display','block');
                 $('#errormsg').css('display','none');
                }

               if  (resp == 'rdv not updated') {  
                 $('#sucessmsg').css('display','none');
                 $('#errormsg').css('display','block');
              }

              if (arrayresp[3]=='pay') {

                $('#ordersent').val(arrayresp[2]);
                $('#sentamount').val(arrayresp[1]);
                $('#jwt').val(arrayresp[0])

                $('#finalrequestbtn').trigger('click');
               }else{

                 $('.rdv').css('display','none');
                 $('.confirmation').css('display','none');
                  var currentSection = $("#step_nine");
                  var currentSectionIndex = currentSection.index();
                  var headerSection = $('.steps li').eq(currentSectionIndex);
                  currentSection.removeClass("is-active").next().addClass("is-active");
                  headerSection.removeClass("is-active").next().addClass("is-active");
                  $('#passport_request_form').css('height','auto');

              }
            

           
           
          }

     })
});


$(document).on('click','#confirmer', function(e){
             e.preventDefault();
             var   btnclicked =$(this);

             var datehour_code= $('input[name ="date_chbk"]:checked').val();
             var mntformule = $('#formulerdv option:selected').attr('data-mnt-formule');
             // console.log('bb. '+datehour_code);
             // console.log(datehour_code + ' ** ' +email + ' ** ' +telephone+ ' ** ' +site_code_with_name+ ' ** ' +lieurdv+ ' ** ' +sitecode+ ' ** ' +selected_date);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
               $.ajax({
                       type : "POST",
                        url:'/feestopay',
                        data:{emailRdv:email,telephoneRdv:telephone,rq_siteRdv:site_code_with_name,location_address:lieurdv,location_code:sitecode,dateEnrol:selected_date, dateHourCode:datehour_code,rdv_payant:rdv_payant, mntformule:mntformule},
                        beforeSend: function(){
                         btnclicked.removeClass('normalstate');
                         btnclicked.addClass('is-active');
                        },
                        success:function(resp){ 
                           // console.log("a+   "+resp)
                           btnclicked.removeClass('is-active');
                           btnclicked.addClass('normalstate');

                           $('#passport_request_form').css('height','auto');

                           var content = resp.split('*');
                           var jwt= content[0];
                           var ordersent=content[2];
                           var sentamount=content[1];

                          $("#sentamount").val(sentamount);
                          $("#jwt").val(jwt);
                          $("#ordersent").val(ordersent);

                           $("#emailRdv").val(content[3]);
                           $("#location_code").val(content[5]);
                           $("#time_value").val(content[8]);
                           $("#time_code").val(content[7]);
                           $("#date_desired").val(content[9]);
                           $("#telephoneRdv").val(content[4]);
                           $("#location_address").val(content[6]);

                          //cacher le popup
                              hideModal();
                              toggleClasses();
                              var button = $("#back_to_stepO_rdv");
                              var currentSection = button.parents(".section");
                              var currentSectionIndex = currentSection.index();
                              var headerSection = $('.steps li').eq(currentSectionIndex);
                              currentSection.removeClass("is-active").next().addClass("is-active");
                              headerSection.removeClass("is-active").next().addClass("is-active");

                          //masquer les 5 etapes preenrollement
                          $('.pre-enrol').css('display','none');
                          $('.rdv').css('display','rdv');
                          // //masquer les 2 etapes preenrollement
                           $('.confirmation').css('display','inline-block');
                           $('#confirmationBanner').siblings().removeClass('requestStepActivated').addClass('requestStep');
                           $('#confirmationBanner').removeClass('requestStep').addClass('requestStepActivated');


                            
                        },
                    });
          });











$(document).on('click','#payforedit', function(e){
    e.preventDefault();
    $('#finalrequestbtn').trigger('click');
})


 $(document).on('click','#back_to_rdv',function(e){
      e.preventDefault();
     
     //afficher les 5 etapes preenrollement
        $('.rdv').css('display','inline-block');

        // //masquer les 2 etapes preenrollement
         $('.rdv').css('display','none');
         $('#rdvBanner').siblings().removeClass('requestStepActivated').addClass('requestStep');
         $('#rdvBanner').removeClass('requestStep').addClass('requestStepActivated');

         //afficher le calendrier
         $('#calendar').css('display','block');
          $("#back_to_stepO_rdv").removeClass('not-active');
        // activer 
        //
         var button = $(this);
          var currentSection = button.parents(".section");
          var currentSectionIndex = currentSection.index();
          var headerSection = $('.steps li').eq(currentSectionIndex);
          currentSection.removeClass("is-active").prev().addClass("is-active");
          headerSection.removeClass("is-active").prev().addClass("is-active");

    
    })


 $(".form-wrapper .button_prev").click(function(){
          var button = $(this);
          var currentSection = button.parents(".section");
          var currentSectionIndex = currentSection.index();
          var headerSection = $('.steps li').eq(currentSectionIndex);
          currentSection.removeClass("is-active").prev().addClass("is-active");
          headerSection.removeClass("is-active").prev().addClass("is-active");

          $(".form-wrapper").submit(function(e) {
            e.preventDefault();
          });

          if(currentSectionIndex === 10){
            $(document).find(".form-wrapper .section").first().addClass("is-active");
            $(document).find(".steps li").first().addClass("is-active");
          }
        });