 
 
  $('input[type="text"], input[type="number"]').on('input',function(e){
     $(this).siblings('.validate').html('');
     $(this).removeClass('invalid');

  })

  $('.maxlength25').on('input',function(e){
      var currentInput=$(this);
     if(currentInput.val().length >=25){
        currentInput.siblings('.validate').html('longueur max autorisée : 25').show('blind');
        currentInput.addClass('invalid');

        setTimeout(function(){ 
          currentInput.siblings('.validate').html('');
          currentInput.removeClass('invalid');
         }, 3000);
     }
     
  })

   var hasErrorNumPass=false; //pour le control 
   var onDoneInput = function(e) {
          var value = e.currentTarget.value;
            hasErrorNumPass=false;
          var alphaNumRegex = /^\d{0,2}\D{0,2}\d{0,5}?$/;
          if (alphaNumRegex.test(value)  && $(this).val().length >= 9 ) {
                
                $(this).val($(this).val().slice(0, 9));
                 $(this).css({"border": "1px solid green"});
                 $(".resNumPass").text("");
                 $(".verrouNumPass").val("false");
                 hasErrorNumPass=false;
                 $(this).siblings('.validate').css('display', 'none').html('');
          }else if($(this).val().length == 0){
             $(this).siblings('.validate').css('display', 'none').html('');
             hasErrorNumPass=false;
          }
          else{
              hasErrorNumPass=true;
               $(this).siblings('.validate').html((hasErrorNumPass ? ($(this).attr('data-msg') !== undefined ? $(this).attr('data-msg') : 'wrong Input') : '')).show('blind');
           }

           // if($(this).val()===""){
           //   $(".resNumPass").text("");
           //   $(this).css({"border": "1px solid green"});
           //   $(".verrouNumPass").val("false");
           // }

      };
      var userInput = $('input.numpassport');
      // var isAlphaNum = $('#isAlphaNum');
      userInput.bind('input', onDoneInput);

      // $("#date_naiss").datepicker({
      //     onSelect: function(dateText) {
      //         console.log("Selected date: " + dateText + "; input's current value: " + this.value);
      //     }
      // });


//  $('#date_naiss').on('change',function(e){

//     console.log('bonjour ');
//     console.log($(this).val());

// });






 $(".form-wrapper #save_step_one").click(function(e) {
    e.preventDefault();
    var hasError = false;
    var btnclicked = $(this);
    var uploadhaserror = false;
    var datasT = new FormData();
    var hasErrorupload = new Array();
    console.log($('#date').val());
    $('#step_one').find('input, textarea, select').each(function() {
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

    datasT.append('type_resident',type_resident);

    $('.requiredField').removeClass('invalid');
    $('.requiredField').addClass('fieldtrue');
    $('#step_one .requiredField').each(function() {
        var i = $(this);
        i.siblings('.validate').html('');
        // hasError = false;
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
        // taillle
         else if ($(this).hasClass('taille')) {
            var taille = jQuery.trim($(this).val());
             if (taille === '') {
                hasError = true;
                $(this).addClass('invalid');
                i.siblings('.validate').html((hasError ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
             }

            if (taille < 40 || taille > 300) {
                 hasError = true;
                 $(this).addClass('invalid');
                 i.siblings('.validate').html((hasError ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
            }
        }
        else if( $(this).hasClass('numpassport')){

          
        }
        // i.siblings('.validate').html((hasError ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
    });

    if ($.inArray(true, hasErrorupload) !== -1) {
        uploadhaserror = true;
        btnclicked.parent().siblings('.msg_fieldset').css('display', 'block').html('<strong>*Un ou plusieurs type de fichiers joints ne sont pas autorisés, utiliser les types suivants: Pdf - Jpeg - Png - Gif | 2MB/fichier.</strong>');
    } else {
        uploadhaserror = false;
    }

    if(er_date_son){
        $('#date_naiss').addClass('invalid');
        $('#date_naiss').siblings('.validate').html('Date de naissance invalide').show('blind');
    }
    
    if (!hasError && !uploadhaserror && !hasErrorNumPass && !er_date_son) {

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
      url: '/save_step_one',
      beforeSend: function(){
          btnclicked.removeClass('normalstate');
            btnclicked.addClass('is-active');

      },
      success: function(response){

       if (response =='inserted'||response =='updated') {
        // var button = btnclicked;

         btnclicked.removeClass('is-active');
         btnclicked.addClass('normalstate');

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
       }
      }
    });








       
    };
})



 $(".form-wrapper #save_step_two").click(function(e) {

    e.preventDefault();
    var hasError = false;
    var btnclicked = $(this);
    var uploadhaserror = false;
    var datasT = new FormData();
    var hasErrorupload = new Array();


    var isValidFather = Inputmask.isValid($('#datenaiss_pere').val(), { alias: "date", inputFormat: "dd/mm/yyyy"});
    var isValidMother = Inputmask.isValid($('#datenaiss_mere').val(), { alias: "date", inputFormat: "dd/mm/yyyy"});
    



    $('#step_two').find('input, textarea, select').each(function() {
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

    datasT.append('type_resident',type_resident);

    $('.requiredField').removeClass('invalid');
    $('.requiredField').addClass('fieldtrue');
    $('#step_two .requiredField').each(function() {
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
         
    });


    $('#datenaiss_pere, #datenaiss_mere').trigger('blur');


    if (er_father_son) {
      $('#datenaiss_pere').addClass('invalid');
      $('#datenaiss_pere').siblings('.validate').html('10 - 99 ans entre père et enfant').show('blind');
    }

     if (er_mother_son) {
      $('#datenaiss_mere').addClass('invalid');
      $('#datenaiss_mere').siblings('.validate').html('10 - 99 ans entre mère et enfant').show('blind');
    }


    if(er_date_mother){
        $('#datenaiss_mere').addClass('invalid');
        $('#datenaiss_mere').siblings('.validate').html('Date invalide').show('blind');
    }

    if(er_date_father){
        $('#datenaiss_pere').addClass('invalid');
        $('#datenaiss_pere').siblings('.validate').html('Date invalide').show('blind');
    }

    if(!isValidMother){
        $('#datenaiss_mere').addClass('invalid');
        $('#datenaiss_mere').siblings('.validate').html('Date invalide').show('blind');
    }

    if(!isValidFather){
        $('#datenaiss_pere').addClass('invalid');
        $('#datenaiss_pere').siblings('.validate').html('Date invalide').show('blind');
    }

    

    if (!hasError && !er_father_son && !er_mother_son && !er_date_father && !er_date_mother   && isValidFather && isValidMother ) {


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
          url: '/save_step_two',
          beforeSend: function(){
             btnclicked.removeClass('normalstate');
            btnclicked.addClass('is-active');
          },
          success: function(response){

           if (response =='inserted'||response =='updated') {
            // var button = btnclicked;

             btnclicked.removeClass('is-active');
             btnclicked.addClass('normalstate');

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
           }
          }
        });
    }
})

 

 $(".form-wrapper #save_step_three").click(function(e) {
    e.preventDefault();
    var hasError = false;
    var btnclicked = $(this);
    var uploadhaserror = false;
    var datasT = new FormData();
    var hasErrorupload = new Array();
    $('#step_three').find('input, textarea, select').each(function() {
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

    datasT.append('type_resident',type_resident);

    $('.requiredField').removeClass('invalid');
    $('.requiredField').addClass('fieldtrue');
     $('#step_three .requiredField:visible').each(function() {
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
         
    });

    if (!hasError &&!erdateconj) {

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
          url: '/save_step_three',
          beforeSend: function(){
             btnclicked.removeClass('normalstate');
            btnclicked.addClass('is-active');
          },
          success: function(response){


           if (response =='inserted'||response =='updated') {
             btnclicked.removeClass('is-active');
             btnclicked.addClass('normalstate');

            // var button = btnclicked;
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
           }
          }
        });
    }
})


  $(".form-wrapper #save_step_four").click(function(e) {

    e.preventDefault();
    var hasError = false;
    var btnclicked = $(this);
    var uploadhaserror = false;
    var datasT = new FormData();
    var hasErrorupload = new Array();
    $('#step_four').find('input, textarea, select').each(function() {
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

    datasT.append('type_resident',type_resident);

    $('.requiredField').removeClass('invalid');
    $('.requiredField').addClass('fieldtrue');

    $('#step_four .requiredField').each(function() {
        var i = $(this);
        i.siblings('.validate').html('');
         if (jQuery.trim($(this).val()) === '' || jQuery.trim($(this).val()) == 0) {
            hasError = true;
            $(this).addClass('invalid');
            i.siblings('.validate').html((hasError ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
        }
         else if ($(this).hasClass('email')) {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if (!emailReg.test(jQuery.trim($(this).val()))) {
                hasError = true;
                $(this).addClass('invalid');
                i.siblings('.validate').html((hasError ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
            }
        } 
         
    });

    if (!hasError) {

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
          url: '/save_step_four',
          beforeSend: function(){
            btnclicked.removeClass('normalstate');
            btnclicked.addClass('is-active');
          },
          success: function(response){

           if (response =='inserted'||response =='updated') {
               btnclicked.removeClass('is-active');
            btnclicked.addClass('normalstate');
            // var button = btnclicked;
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
           }
          }
        });

       
    }
})


  
   $("#back_to_pre_enroll").click(function(e) {
    e.preventDefault();
     
     //afficher les 5 etapes preenrollement
        $('.pre-enrol').css('display', 'inline-block');

        // //masquer les 2 etapes preenrollement
         $('.rdv').css('display', 'none');
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

          // if(currentSectionIndex === 5){
          //   $(document).find(".form-wrapper .section").first().addClass("is-active");
          //   $(document).find(".steps li").first().addClass("is-active");
          // }



   });

 
$('.form-wrapper #save_step_five').click(function(e){
    e.preventDefault();
    var hasError = false;
    var btnclicked = $(this);
    var uploadhaserror = false;
    var datasT = new FormData();
    var hasErrorupload = new Array();
    btnclicked.removeClass('normalstate');
    btnclicked.addClass('is-active');
    $('#step_five').find('input, textarea, select').each(function(){
        if($(this).is(':input:file')){
            if($(this).val() !== ''){
                hasErrorupload.push(chech_uploadedfile($(this)));
            }
            datasT.append(this.name, $(this)[0].files[0]);
        }else if($(this).is(':radio')){
            if($(this).is(':checked')){
                datasT.append(this.name, $(this).val());
            }
        }else{
            datasT.append(this.name, $(this).val());
        }
    });
    if($.inArray(true, hasErrorupload) !== -1){
        uploadhaserror = true;
        $('#uploadMessage').css('display', 'block').html('<strong>* Utiliser les types de fichier suivants: Pdf - Jpeg - Png - Gif | 2MB/fichier.</strong>');
    }else{
        uploadhaserror = false;
    }
    datasT.append('type_resident', type_resident);
    if(uploadhaserror == false){
        var currentSection = btnclicked.parents('.section');
        var currentSectionIndex = currentSection.index();
        var headerSection = $('.steps li').eq(currentSectionIndex);
        currentSection.removeClass('is-active').next().addClass('is-active');
        headerSection.removeClass('is-active').next().addClass('is-active');
        //masquer les 5 etapes preenrollement
        $('.pre-enrol').css('display', 'none');
        // //masquer les 2 etapes preenrollement
        $('.rdv').css('display', 'inline-block');
        $('#rdvBanner').siblings().removeClass('requestStepActivated').addClass('requestStep');
        $('#rdvBanner').removeClass('requestStep').addClass('requestStepActivated');
        $('.form-wrapper').submit(function(e) {
            e.preventDefault();
        });
        btnclicked.addClass('normalstate');
        btnclicked.removeClass('is-active');
        if(currentSectionIndex === 10){
            $(document).find('.form-wrapper .section').first().addClass('is-active');
            $(document).find('.steps li').first().addClass('is-active');
        }
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
            url: '/save_step_five',
             beforeSend: function(){
            btnclicked.removeClass('normalstate');
            btnclicked.addClass('is-active');
          },
            success: function(response){

                 btnclicked.removeClass('is-active');
            btnclicked.addClass('normalstate');

                if(response == 'inserted'||response == 'updated'){
                    console.log('Good uploading file');
                }
            }
        });
    }
})


$(".form-wrapper #save_step_six").click(function(e) {
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

    datasT.append('type_resident',type_resident);

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
          url: '/save_rdv_step_one',
          beforeSend: function(){
             btnclicked.removeClass('normalstate');
            btnclicked.addClass('is-active');
          },
          success: function(response){

           if (response =='inserted'||response =='updated') {
            // var button = btnclicked;
             btnclicked.removeClass('is-active');
            btnclicked.addClass('normalstate');
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
           }
          }
        });
       
    }
})
 
 

function chech_uploadedfile(selfile){
    var element = selfile;
    var hasErrorf = false;
    var iSize = element[0].files[0].size;
    var iType = element[0].files[0].type;
    var ValidImageTypes = ['image/gif', 'image/jpeg', 'image/png', 'application/pdf'];
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