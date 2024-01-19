
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

        // selection type de demande 



       
        
         var iknowdate = $('input[name="knownparentsdate"]').val();
          if (iknowdate == 'yes') {
                $("#datenaiss_pere").val('');
                $("#datenaiss_mere").val('');
              }

         $('input[name="knownparentsdate"]').on('change', function(e) {

              iknowdate =$(this).val();

              if (iknowdate == 'yes') {
                $("#datenaiss_pere").val('');
                $("#datenaiss_mere").val('');

              }else
              {
                console.log('no bonjour');
                var son_birth = $('#date_naiss').val();
                var son_birthAr = son_birth.split('/');
                

                var son_birth_year = son_birthAr[2];
                var finalYear = parseInt(son_birth_year) -100;

                if (finalYear <1900) { finalYear =1900}

                console.log(finalYear);
                // var finaldate ='01/01/'+finalYear;
                var finaldate =son_birthAr[0]+'/'+son_birthAr[1]+'/'+finalYear;

                console.log(finaldate);
                
                // $("#datenaiss_pere").val(finaldate);
                $("#datenaiss_pere").val(finaldate);
                $("#datenaiss_mere").val(finaldate);
                $("#datenaiss_moses").val(finaldate);
              }

         });


        $('input[name="type_demande"]').on('change', function(e) {

              var valeur = $(this).val();
               console.log(valeur);
              if (valeur == 'newpassport') {
                  $("#type_piece").val('PASSEPORT');
                 // $("#type_piece").html('<option value="CNI">CNI</option><option value="EXTRAIT DE NAISSANCE" >Extrait de naissance</option><option value="ATTESTATION D\'IDENTITE">Attestation d\'identité</option>');
                   $("#numpassport").val('');
                   $("#numpassport").attr('disabled', 'disabled');
                   $("#numpassport").removeClass('requiredField');
                    $("#numpassport").css({
                      'background': '#f0f0f0',
                      'border': 'solid 1px #d5d5d5'
                  });
                    $('#qOldpp').css('display','none');

                     $("#numpassport").attr('disabled', 'disabled');
                     $("#numpassport").attr('readonly', true);;
                     $("#numpassport").css({
                                        'background': '#f0f0f0',
                                        'border': 'solid 1px #d5d5d5'
                                    });
                     $('input[type="text"]').removeAttr('disabled');
                     $("input[type='text']:not('.datepicker')").attr('readonly',false);
                     

              } else {
                   $("#numpassport").removeAttr('disabled');
                   $('input[type="text"]').attr('disabled', 'disabled');
                   $("input[type='text']:not('.datepicker')").attr('readonly',true);
                   $("#numpassport").addClass('requiredField');
                  // $("#numpassport").css('background','#f0f0f0') ;
                   $("#numpassport").css({
                      'background': 'white',
                      'border': 'solid 1px #d5d5d5'
                  });
                  $('#qOldpp').css('display','block');
                  $(".resNumPass").css('display', 'none');
                  $("#numPass").val('');
                //  $("#type_piece").html('<option value="CNI">CNI</option><option value="PASSEPORT">PASSEPORT</option>');
              }


          })




        $('input[name="sitmat"]').on('change', function(e) {
              var valeur = $(this).val();
              console.log(valeur);
              if (valeur == 'C') {
                  $(".dataconjoint").css('display','none');   
                  //$("#step_three")
                   $("#step_three input[type=text], textarea").val("");
              }else 
               $(".dataconjoint").css('display','flex');   
          })


        $(document).on('change','input[name="date_chbk"]', function(e){
                 $("#confirmer").removeClass("not-active");
                 $("#confirmerDiasp").removeClass("not-active");
         })

          $("#confirmer").addClass("not-active");


        $('#region').on('change',function(e){
         var region_id = $('option:selected', this).attr('data-regionId');
         $('#departmentList').attr('disabled','disabled');
             $.ajax({
                type:'GET',
                url:'/find_department',
                data: {region_id:region_id},
                 beforeSend: function(){
                     $('#spinner0').css('display','block');
                      },
                success:function(data){
                   $('#departmentList').removeAttr('disabled');
                   $('#spinner0').css('display','none');
                  $("#departmentList").html(data);
                }
            });
          
         });


        $(document).on('change','#departmentList', function(e){
         var department_id = $('option:selected', this).attr('data-deptId');
         $('#villeList').attr('disabled','disabled');
             $.ajax({
                type:'GET',
                url:'/find_ville_commune',
                data: {dept_id:department_id},
                beforeSend: function(){
                     $('#spinner0').css('display','block');
                      },
                success:function(data){
                    $('#villeList').removeAttr('disabled');
                   $('#spinner0').css('display','none');
                  $("#villeList").html(data);
                }
            });
          
         });

        $('.dept').on('change',function(){
                 var id=$(this).find(':selected').data('picone');
               //  alert(id);
         });



        $(document).on('click','.icofont-bin', function(e){
            e.preventDefault();
             $(this).css('display','none');
             $(this).siblings('.file-selected').html('');
             $(this).siblings('input[type="file"]').val(''); 
        })




         $('input[type="file"]').each(function() {
             // get label text
             var label = $(this).parents('.form-group').find('label').text();
             label = (label) ? label : 'Upload File';
             // wrap the file input
             $(this).wrap('<div class="input-file"></div>');
             // display label
             $(this).before('<span class="btn" style="font-size:13px;width:100%">'+label+'</span>');
             // we will display selected file here
             $(this).before('<span class="file-selected"></span> <i style="display:none;color:#f46e23;cursor:pointer" class="icofont-bin"></i> ');

             // file input change listener 
             $(this).change(function(e){
                 // Get this file input value
                 var val = $(this).val();

                 //check if erreur 

                // chech_uploadedfile($(this));
                 if (!chech_uploadedfile($(this))) {
                     $(this).siblings('.btn').removeClass('invalid');
                     $("#uploadMessage").html(`<span style="color:black;">Fichiers autorisés: </span>  Pdf - Jpeg - Png - Gif | 2MB/fichier`);
                    
                      $(this).siblings('.file-selected').css('color','green');
                 }else{
                    
                    $(this).siblings('.btn').addClass('invalid');
                    $("#uploadMessage").html('Le fichier selectionné est invalide.');
                    $(this).siblings('.file-selected').css('color','#f46e23');
                 }
                   
                 var filename = val.replace(/^.*[\\\/]/, '');
                 // Display the filename
                 $(this).siblings('.file-selected').html(filename);
                 $(this).siblings('.icofont-bin').css('display','inline-block');
                 
             });
         });

         // Open the file browser when our custom button is clicked.
         $('.input-file .btn').click(function() {
             $(this).siblings('input[type="file"]').trigger('click');
         });


        $('#oui_old_pp').on('click',function(e){
          e.preventDefault();
            $("#numpassport").removeAttr('disabled');
             $("#numpassport").attr('readonly', false);;
            $("#numpassport").addClass('requiredField');
             $("#numpassport").val('');
             $("#numpassport").focus();
             $('#qOldpp').css('display','none');
             $('input[type="text"]').removeAttr('disabled');
             $("input[type='text']:not('.datepicker')").attr('readonly',false);
        })

        $('#non_old_pp').on('click',function(e){
          e.preventDefault();
           $("#numpassport").attr('disabled', 'disabled');
           $("#numpassport").attr('readonly', true);;
           $("#numpassport").css({
                                'background': '#f0f0f0',
                                'border': 'solid 1px #d5d5d5'
                            });
          $('input[type="text"]').removeAttr('disabled');
          $("#numpassport").removeClass('requiredField');
          $("input[type='text']:not('.datepicker')").attr('readonly',false);
          // $("#numpassport").val('NA');
           $("#numpassport").val('');
          $('#qOldpp').css('display','none');
        })



  // filtre sur les formules 
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

   





   //validation demande passeport

  $(document).on('click','.js-close', function(e){
    $("#back_to_stepO_rdv").removeClass('not-active');
    $("#calendar").css('display','block');
     var newheight = $('#passport_request_form').height();
    $('#passport_request_form').height( newheight- 30)
                        
  })


  

  $(document).on('click','#generatepdf', function(e){
     e.preventDefault();

     var datasT = new FormData();
     var   btnclicked =$(this);
     console.log('sent');

     $('#passport_request_form').find('input, textarea, select').each(function() {
              if ($(this).is(':radio')) {
                  if ($(this).is(':checked')) {
                      datasT.append(this.name, $(this).val());
                  }
              } else {
                  datasT.append(this.name, $(this).val());
              }
          });


      $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                        data: datasT,
                        contentType: false, 
                        processData: false,
                        type : "POST",
                        url:'/generatepdf',
                        beforeSend: function(){
                         btnclicked.removeClass('normalstate');
                         btnclicked.addClass('is-active');
                        },
                        xhrFields: { 
                            responseType: 'blob' 
                        }, 
                        success:function(resp){ 
                            var blob = new Blob([resp]); 
                            var link = document.createElement('a');
                            link.href = window.URL.createObjectURL(blob); 
                            link.download = "formulaire_passeport_ci.pdf"; 
                            link.click();

                            btnclicked.addClass('normalstate');
                            btnclicked.removeClass('is-active');
                        },

                    });


  });


  


    $(document).on('change','#dataconfirmation', function(e){
        if ($(this).is(':checked')) {
              console.log('test');
              $("#confirm_data").removeClass('disable');
          }else
          $("#confirm_data").addClass('disable');
      });



 $(document).on('click','#confirm_data', function(e){

    var btnclicked =$(this);
    var currentSection = btnclicked.parents(".section");
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
         });



   $(document).on('click','#edit_data', function(e){
          e.preventDefault();

         
          var currentSection = $(this).parents(".section");
          var currentSectionIndex = currentSection.index();
          var headerSection = $('.steps li').eq(currentSectionIndex);
          // currentSection.removeClass("is-active").next().addClass("is-active");
          // headerSection.removeClass("is-active").next().addClass("is-active");
          // currentSection.removeClass("is-active").prev().addClass("is-active");
          // headerSection.removeClass("is-active").prev().addClass("is-active");
            currentSection.removeClass("is-active");
            $('#step_one').addClass("is-active");
            headerSection.removeClass("is-active");
            $('.steps li').eq(0).addClass("is-active");

          



   });

   $(document).on('click','#confirmer', function(e){
             e.preventDefault();
             var   btnclicked =$(this);
             var datehour_code= $('input[name ="date_chbk"]:checked').val();

             nom_demandeur  = $('#nom_demandeur').val();
             prenom_demandeur = $('#prenom_demandeur').val();
             indicatif  = $('#indicatif').val();
             telephonerdv = $('#telephonerdv').val();
             var mntformule = $('#formulerdv option:selected').attr('data-mnt-formule');

             console.log(rdv_payant);



             if(datehour_code != 0){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                       type : "POST",
                        url:'/feestopay',
                        data:{nom_demandeur:nom_demandeur, prenom_demandeur:prenom_demandeur, indicatif:indicatif, telephonerdv:telephonerdv,passport_type:passport_type  ,emailRdv:email,telephoneRdv:telephone,rq_siteRdv:site_code_with_name,location_address:lieurdv,location_code:sitecode,dateEnrol:selected_date, dateHourCode:datehour_code, rdv_payant:rdv_payant, mntformule:mntformule},
                        // data:{nom_demandeur:nom_demandeur, prenom_demandeur:prenom_demandeur, indicatif:indicatif, telephonerdv:telephonerdv,passport_type:passport_type  ,emailRdv:email,telephoneRdv:telephone,rq_siteRdv:site_code_with_name,location_address:lieurdv,location_code:sitecode,dateEnrol:selected_date, dateHourCode:datehour_code},
                        beforeSend: function(){
                         btnclicked.removeClass('normalstate');
                         btnclicked.addClass('is-active');
                         $("#spinnerAv").css('display','block');
                        },
                        success:function(resp){ 
                            console.log("a+   "+resp)
                           $("#spinnerAv").css('display','none');
                           btnclicked.removeClass('is-active');
                           btnclicked.addClass('normalstate');

                           if(resp != 'not reserved'){

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
                          $('.rdv').css('display','none');
                          // //masquer les 2 etapes preenrollement
                           $('.confirmation').css('display','inline-block');
                           $('#confirmationBanner').siblings().removeClass('requestStepActivated').addClass('requestStep');
                           $('#confirmationBanner').removeClass('requestStep').addClass('requestStepActivated');
        // activer 
                            $('#passport_request_form').css('height','auto');
                            $("#fraisrdv").html(content[10]);
                            $('#totalpayment').html(sentamount +' FCFA');
                            $('#paymentmsg').html(sentamount +' FCFA');
                           }else
                           $("#spinnerAvError").css('display','block');
                           
                        },
                    });
            }
          });




 $(document).on('click','#confirmerDiasp', function(e){
             e.preventDefault();
             var   btnclicked =$(this);

             var datehour_code= $('input[name ="date_chbk"]:checked').val();
             var mntformule = $('#formulerdv option:selected').attr('data-mnt-formule');
             console.log(mntformule);
           
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
               $.ajax({
                       type : "POST",
                        url:'/feestopayDiasp',
                        data:{nom_demandeur:nom_demandeur, prenom_demandeur:prenom_demandeur, indicatif:indicatif, telephonerdv:telephonerdv,passport_type:passport_type , emailRdv:email,telephoneRdv:telephone,rq_siteRdv:site_code_with_name,location_address:lieurdv,location_code:sitecode,dateEnrol:selected_date, dateHourCode:datehour_code},
                        beforeSend: function(){
                         btnclicked.removeClass('normalstate');
                         btnclicked.addClass('is-active');
                        },
                        success:function(resp){ 
                           // console.log("a+   "+resp)
                           btnclicked.removeClass('is-active');
                           btnclicked.addClass('normalstate');

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
                        
                            $('#passport_request_form').css('height','auto');    
                        },
                    });
          });








    $(document).on('click','#save_step_eight', function(e){
             e.preventDefault();
         var btnclicked= $(this);
         var uploadhaserror = false;
        var datasT = new FormData();
        var hasErrorupload = new Array();
        var addresse_siterdv = $('#siterdv option:selected').text();

        var mntformule =$('#formulerdv option:selected').attr('data-mnt-formule');;
        console.log($('#siterdv option:selected').text());
         $('#passport_request_form').find('input, textarea, select').each(function() {
              // if ($(this).is(':input:file')) {
              //     if ($(this).val() !== '') {
              //         hasErrorupload.push(chech_uploadedfile($(this)));
              //         // i++;
              //     }
              //     datasT.append(this.name, $(this)[0].files[0]);
              // } else 
              if ($(this).is(':radio')) {
                  if ($(this).is(':checked')) {
                      datasT.append(this.name, $(this).val());
                  }
              } else {
                  datasT.append(this.name, $(this).val());
              }
          });

         $('#finalrequest').find('input').each(function() {
                  datasT.append(this.name, $(this).val());
              
          });


          

          $('#donnee_compl').find('input, textarea, select').each(function() {
                  datasT.append(this.name, $(this).val());
          });


           datasT.append('passport_type', passport_type);
           datasT.append('addresse_siterdv', addresse_siterdv);
           datasT.append('rdv_payant', rdv_payant);
           datasT.append('mntformule', mntformule);

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
        // async:false,
        cache:false,
        url: '/save_passport_request',
        beforeSend: function(){
          // $('#loading-image').show();
            btnclicked.removeClass('normalstate');
            btnclicked.addClass('is-active');
        },
        success: function(response){
            // btnclicked.removeClass('is-active');
            // btnclicked.addClass('normalstate');
            if (response=='inserted') {
                // $('#finalrequest').submit();

                

              $("#finalrequestbtn").trigger('click');
            }else{
                    var currentSection = btnclicked.parents(".section");
                    var currentSectionIndex = currentSection.index();
                    var headerSection = $('.steps li').eq(currentSectionIndex);
                    // currentSection.removeClass("is-active").next('#step_information').addClass("is-active");
                    //headerSection.removeClass("is-active").next('#step_information').addClass("is-active");
                    currentSection.removeClass("is-active");
                    $('#step_information').addClass("is-active");
                    $('.popop').css('display','none');
                    $('#passport_request_form').css('height','auto');

                    $(".form-wrapper").submit(function(e) {
                        e.preventDefault();
                    });

                    if (currentSectionIndex === 10) {
                        $(document).find(".form-wrapper .section").first().addClass("is-active");
                        $(document).find(".steps li").first().addClass("is-active");
                    }
              // $("#finalrequestbtn").trigger('click');
            }
        }
      });

         // $("#finalrequestbtn").trigger('click');
    })




    $(document).on('click','#back_to_rdv',function(e){
      e.preventDefault();
     
     //afficher les 5 etapes preenrollement
        $('.rdv').css('display','inline-block');

        $("#back_to_stepO_rdv").removeClass('not-active');
        $('.confirmation').css('display','none');
        $("#calendar").css('display','block');
         var newheight = $('#passport_request_form').height();
        $('#passport_request_form').height( newheight- 30)

        // //masquer les 2 etapes preenrollement
         $('.pre-enrol').css('display','none');
         $('#rdvBanner').siblings().removeClass('requestStepActivated').addClass('requestStep');
         $('#rdvBanner').removeClass('requestStep').addClass('requestStepActivated');
        // activer 
        //
         var button = $(this);
          var currentSection = button.parents(".section");
          var currentSectionIndex = currentSection.index();
          var headerSection = $('.steps li').eq(currentSectionIndex);
          currentSection.removeClass("is-active").prev().addClass("is-active");
          headerSection.removeClass("is-active").prev().addClass("is-active");

          $(".form-wrapper").submit(function(e) {
            e.preventDefault();
          });


        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

       $.ajax({
            type:'POST',
            url:'/cancel_reservation_ci',
             beforeSend: function(){
                 // $('#spinner0').css('display','block');
                  },
            success:function(data){
                console.log('bonjour');

                 $("#calendar").html('');
                calendar = new Calendar("#calendar", data);
            }
        });




    });



    $(document).on('click','#back_pre_enrol',function(e){
      e.preventDefault();
     
     //afficher les 5 etapes preenrollement
        $('.pre-enrol').css('display','inline-block');

        // //masquer les 2 etapes preenrollement
         $('.rdv').css('display','none');
         $('#pre-enrollmentBanner').siblings().removeClass('requestStepActivated').addClass('requestStep');
         $('#pre-enrollmentBanner').removeClass('requestStep').addClass('requestStepActivated');
        // activer 
        //
         var button = $(this);
          var currentSection = button.parents(".section");
          var currentSectionIndex = currentSection.index();
          var headerSection = $('.steps li').eq(currentSectionIndex);
          currentSection.removeClass("is-active").prev().addClass("is-active");
          headerSection.removeClass("is-active").prev().addClass("is-active");

          $(".form-wrapper").submit(function(e) {
            e.preventDefault();
          });
    })



    
  $(document).on('click','#back_to_stepO_rdv',function(e){
      e.preventDefault();
      $('.rdv').css('display','inline-block');
      $('.pre-enrol').css('display','none');
  })


 function chech_uploadedfile(selfile){
    var element = selfile;
    var hasErrorf = false;
    var iSize = element[0].files[0].size;
    var iType = element[0].files[0].type;
    var ValidImageTypes = ['image/gif','image/jpeg','image/png','application/pdf'];
    if($.inArray(iType, ValidImageTypes) < 0){
      element.css({'border':'solid 1px #F00'});
      hasErrorf = true;
    }else{
      if(iSize > 2100000){
        hasErrorf = true;
      }
    }
    return hasErrorf;
  }


