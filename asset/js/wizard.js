(function($) {
  'use strict';
  var form = $("#example-form");
  form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onFinished: function(event, currentIndex) {
      alert("Submitted!");
    }
  });
  var validationForm = $("#example-validation-form");
  validationForm.val({
    errorPlacement: function errorPlacement(error, element) {
      element.before(error);
    },
    rules: {
      confirm: {
        equalTo: "#password"
      }
    }
  });
  validationForm.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function(event, currentIndex, newIndex) {
      validationForm.val({
        ignore: [":disabled", ":hidden"]
      })
      return validationForm.val();
    },
    onFinishing: function(event, currentIndex) {
      validationForm.val({
        ignore: [':disabled']
      })
      return validationForm.val();
    },
    onFinished: function(event, currentIndex) {
      alert("Submitted!");
    }
  });
  var verticalForm = $("#example-vertical-wizard");
  verticalForm.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    stepsOrientation: "vertical",
    onFinished: function(event, currentIndex) {
      /* Get from elements values */
     // var values = $(this).serialize();
    var id = $('.review_PID').val();
    var postForm = { //Fetch form data
      'id'     : $('input[name="PID"]').val(),
      'gender'     : $('select[name="gender"]').val(),
      'weight'     : $('input[name="weight"]').val(),
      'hct_blood'     : $('#hct_blood').val(),
      'm1r1'    : $('#m1r1').val(),
      'm1r2'    : $('#m1r2').val(),
      'm1r3'    : $('#m1r3').val(),
      'm2r1'    : $('#m2r1').val(),
      'm2r2'    : $('#m2r2').val(),
      'm2r3'    : $('#m2r3').val(),
      'm3r1'    : $('#m3r1').val(),
      'm3r2'    : $('#m3r2').val(),
      'm3r3'    : $('#m3r3').val(),
      'r1c1'    : $('#r1c1').val(),
      'r1c2'    : $('#r1c2').val(),
      'r1c3'    : $('#r1c3').val(),
      'r2c1'    : $('#r2c1').val(),
      'r2c2'    : $('#r2c2').val(),
      'r2c3'    : $('#r2c3').val(),
      'r3c1'    : $('#r3c1').val(),
      'r3c2'    : $('#r3c2').val(),
      'r3c3'    : $('#r3c3').val(),
      'base1msdata52'  : $('#base1msdata52').val(),
      'base1msdata50'  : $('#base1msdata50').val(),
      'base1msdata53'  : $('#base1msdata53').val(),
      'base2msdata52'  : $('#base2msdata52').val(),
      'base2msdata50'  : $('#base2msdata50').val(),
      'base2msdata53'  : $('#base2msdata53').val(),
      'base3msdata52'  : $('#base3msdata52').val(),
      'base3msdata50'  : $('#base3msdata50').val(),
      'base3msdata53'  : $('#base3msdata53').val(),
      'basecrspike'    : $('#basecrspike').val(),
      'basewtblood'    : $('#basewtblood').val(),
      'basehct'        : $('#basehct').val(),
      'dorc'           : $('#dorc').val(),
      'dop'            : $('#dop').val(),
      'cor_base1msdata52' : $('#cor_base1msdata52').val(),
      'cor_base1msdata50' : $('#cor_base1msdata50').val(),
      'cor_base1msdata53' : $('#cor_base1msdata53').val(),
      'cor_base2msdata52' : $('#cor_base2msdata52').val(),
      'cor_base2msdata50' : $('#cor_base2msdata50').val(),
      'cor_base2msdata53' : $('#cor_base2msdata53').val(),
      'cor_base3msdata52' : $('#cor_base3msdata52').val(),
      'cor_base3msdata50' : $('#cor_base3msdata50').val(),
      'cor_base3msdata53' : $('#cor_base3msdata53').val(),
      'amt_base1msdata52' : $('#amt_base1msdata52').val(),
      'amt_base1msdata50' : $('#amt_base1msdata50').val(),
      'amt_base1msdata53' : $('#amt_base1msdata53').val(),
      'amt_base2msdata52' : $('#amt_base2msdata52').val(),
      'amt_base2msdata50' : $('#amt_base2msdata50').val(),
      'amt_base2msdata53' : $('#amt_base2msdata53').val(),
      'amt_base3msdata52' : $('#amt_base3msdata52').val(),
      'amt_base3msdata50' : $('#amt_base3msdata50').val(),
      'amt_base3msdata53' : $('#amt_base3msdata53').val(),
      'bcor_base1msdata53' : $('#bcor_base1msdata53').val(),
      'bcor_base2msdata53' : $('#bcor_base2msdata53').val(),
      'bcor_base3msdata53' : $('#bcor_base3msdata53').val(),
      'vol_base' : $('#vol_base').val(),
      'base1RBC53Cr' : $('#base1RBC53Cr').val(),
      'base2RBC53Cr' : $('#base2RBC53Cr').val(),
      'base3RBC53Cr' : $('#base3RBC53Cr').val(),
      'basemeanRBC53Cr' : $('#basemeanRBC53Cr').val(),
      'inj1msdata52'  : $('#inj1msdata52').val(),
      'inj1msdata50'  : $('#inj1msdata50').val(),
      'inj1msdata53'  : $('#inj1msdata53').val(),
      'inj2msdata52'  : $('#inj2msdata52').val(),
      'inj2msdata50'  : $('#inj2msdata50').val(),
      'inj2msdata53'  : $('#inj2msdata53').val(),
      'inj3msdata52'  : $('#inj3msdata52').val(),
      'inj3msdata50'  : $('#inj3msdata50').val(),
      'inj3msdata53'  : $('#inj3msdata53').val(),
      'injcrspike'    : $('#injcrspike').val(),
      'injwtblood'    : $('#injwtblood').val(),
      'infusateVol'   : $('#infusateVol').val(),
      'injhct_inf'    : $('#injhct_inf').val(),
      'cor_inj1msdata52' : $('#cor_inj1msdata52').val(),
      'cor_inj1msdata50' : $('#cor_inj1msdata50').val(),
      'cor_inj1msdata53' : $('#cor_inj1msdata53').val(),
      'cor_inj2msdata52' : $('#cor_inj2msdata52').val(),
      'cor_inj2msdata50' : $('#cor_inj2msdata50').val(),
      'cor_inj2msdata53' : $('#cor_inj2msdata53').val(),
      'cor_inj3msdata52' : $('#cor_inj3msdata52').val(),
      'cor_inj3msdata50' : $('#cor_inj3msdata50').val(),
      'cor_inj3msdata53' : $('#cor_inj3msdata53').val(),
      'amt_inj1msdata52' : $('#amt_inj1msdata52').val(),
      'amt_inj1msdata50' : $('#amt_inj1msdata50').val(),
      'amt_inj1msdata53' : $('#amt_inj1msdata53').val(),
      'amt_inj2msdata52' : $('#amt_inj2msdata52').val(),
      'amt_inj2msdata50' : $('#amt_inj2msdata50').val(),
      'amt_inj2msdata53' : $('#amt_inj2msdata53').val(),
      'amt_inj3msdata52' : $('#amt_inj3msdata52').val(),
      'amt_inj3msdata50' : $('#amt_inj3msdata50').val(),
      'amt_inj3msdata53' : $('#amt_inj3msdata53').val(),
      'bcor_inj1msdata53' : $('#bcor_inj1msdata53').val(),
      'bcor_inj2msdata53' : $('#bcor_inj2msdata53').val(),
      'bcor_inj3msdata53' : $('#bcor_inj3msdata53').val(),
      'vol_inj' : $('#vol_inj').val(),
      'inj1RBC53Cr' : $('#inj1RBC53Cr').val(),
      'inj2RBC53Cr' : $('#inj2RBC53Cr').val(),
      'inj3RBC53Cr' : $('#inj3RBC53Cr').val(),
      'injmeanRBC53Cr' : $('#injmeanRBC53Cr').val(),
      'post1msdata52'  : $('#post1msdata52').val(),
      'post1msdata50'  : $('#post1msdata50').val(),
      'post1msdata53'  : $('#post1msdata53').val(),
      'post2msdata52'  : $('#post2msdata52').val(),
      'post2msdata50'  : $('#post2msdata50').val(),
      'post2msdata53'  : $('#post2msdata53').val(),
      'post3msdata52'  : $('#post3msdata52').val(),
      'post3msdata50'  : $('#post3msdata50').val(),
      'post3msdata53'  : $('#post3msdata53').val(),
      'postcrspike'    : $('#postcrspike').val(),
      'postwtblood'    : $('#postwtblood').val(),
      'posthct'   : $('#posthct').val(),
      'cor_post1msdata52' : $('#cor_post1msdata52').val(),
      'cor_post1msdata50' : $('#cor_post1msdata50').val(),
      'cor_post1msdata53' : $('#cor_post1msdata53').val(),
      'cor_post2msdata52' : $('#cor_post2msdata52').val(),
      'cor_post2msdata50' : $('#cor_post2msdata50').val(),
      'cor_post2msdata53' : $('#cor_post2msdata53').val(),
      'cor_post3msdata52' : $('#cor_post3msdata52').val(),
      'cor_post3msdata50' : $('#cor_post3msdata50').val(),
      'cor_post3msdata53' : $('#cor_post3msdata53').val(),
      'amt_post1msdata52' : $('#amt_post1msdata52').val(),
      'amt_post1msdata50' : $('#amt_post1msdata50').val(),
      'amt_post1msdata53' : $('#amt_post1msdata53').val(),
      'amt_post2msdata52' : $('#amt_post2msdata52').val(),
      'amt_post2msdata50' : $('#amt_post2msdata50').val(),
      'amt_post2msdata53' : $('#amt_post2msdata53').val(),
      'amt_post3msdata52' : $('#amt_post3msdata52').val(),
      'amt_post3msdata50' : $('#amt_post3msdata50').val(),
      'amt_post3msdata53' : $('#amt_post3msdata53').val(),
      'bcor_post1msdata53' : $('#bcor_post1msdata53').val(),
      'bcor_post2msdata53' : $('#bcor_post2msdata53').val(),
      'bcor_post3msdata53' : $('#bcor_post3msdata53').val(),
      'vol_post' : $('#vol_post').val(),
      'post1RBC53Cr' : $('#post1RBC53Cr').val(),
      'post2RBC53Cr' : $('#post2RBC53Cr').val(),
      'post3RBC53Cr' : $('#post3RBC53Cr').val(),
      'postmeanRBC53Cr' : $('#postmeanRBC53Cr').val(),
     
      'review_infusateVol' : $('#review_infusateVol').val(),
      'review_injhct_inf' : $('#review_injhct_inf').val(),
      'review_vol_redInfusate' : $('#review_vol_redInfusate').val(),
      'review_vwb' : $('#review_vwb').val(),
      'review_hct_blood' : $('#review_hct_blood').val(),
      'review_blood_volume' : $('#review_blood_volume').val(),
      'review_cor_blood_volume' : $('#review_cor_blood_volume').val(),
      'review_vwb_over_wt' : $('#review_vwb_over_wt').val(),
      'review_vol_over_wt' : $('#review_vol_over_wt').val()
      
       //Store name fields value
    };
     // console.log(values);
     $.ajax({
        url: "insert-data.php",
        type: "POST",
        data: postForm ,
        success: function (response) {
          alert(response);
          window.location.reload();
           // You will get response from your PHP page (what you echo or print)
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
      alert("Submitted...!");
    }
  });
})(jQuery); 
