var invert_result = [];
$('#console').show('slow');
$('#invert_btn').click(function(){	
	invert_result = mc.invertMatrix();
	// console.log(invert_result[0][1]);
	if (invert_result.length > 0) {
		// console.table(invert_result);
		$('#display_matrix').hide('slow').show('slow');
		$('#r1c1').val(invert_result[0][0]);
		$('#r1c2').val(invert_result[0][1]);
		$('#r1c3').val(invert_result[0][2]);
		
		$('#r2c1').val(invert_result[1][0]);
		$('#r2c2').val(invert_result[1][1]);
		$('#r2c3').val(invert_result[1][2]);

		$('#r3c1').val(invert_result[2][0]);
		$('#r3c2').val(invert_result[2][1]);
		$('#r3c3').val(invert_result[2][2]);
	}		
});
// hide and reset matrix fields when reset button is pressed
$('#reset').click(function(){	
	$('#display_matrix').hide('slow');
});



// Populate the baseline review page
$('#example-vertical-wizard').on('change', function(){
	$('.review_PID').val($('input[name="PID"]').val());
	$('.review_weight').val($('input[name="weight"]').val());
			
});

$('select[name="gender"]').on('change', function(){
	$('.review_gender').val($(this).val());
	
});


// file upload codes here
function uploadDealcsv () {}; 

  /*------ Method for read uploded csv file ------*/
  uploadDealcsv.prototype.getCsv = function(e) {
       
      let input = document.getElementById('dealCsv');
      input.addEventListener('change', function() {

        if (this.files && this.files[0]) {

            var myFile = this.files[0];
            var reader = new FileReader();
            
            reader.addEventListener('load', function (e) {
                
                let csvdata = e.target.result; 
                parseCsv.getParsecsvdata(csvdata); // calling function for parse csv data 
            });
            
            reader.readAsBinaryString(myFile);
        }
      });
    }

	/*------- Method for parse csv data and display --------------*/
	var parsedata = [];
    uploadDealcsv.prototype.getParsecsvdata = function(data) {

        // let parsedata = [];

        let newLinebrk = data.split("\n");
        for(let i = 0; i < newLinebrk.length; i++) {

            parsedata.push(newLinebrk[i].split(","))
        }
		// console.table(parsedata);
		// matrix load
		$('#m1r1').val(parsedata[1][1]);
		$('#m1r2').val(parsedata[1][2]);
		$('#m1r3').val(parsedata[1][3]);
		$('#m2r1').val(parsedata[2][1]);
		$('#m2r2').val(parsedata[2][2]);
		$('#m2r3').val(parsedata[2][3]);
		$('#m3r1').val(parsedata[3][1]);
		$('#m3r2').val(parsedata[3][2]);
		$('#m3r3').val(parsedata[3][3]);

		// base data load
		$('#base1msdata52').val(parsedata[6][1]);
		$('#base1msdata50').val(parsedata[6][2]);
		$('#base1msdata53').val(parsedata[6][3]);
		$('#base2msdata52').val(parsedata[7][1]);
		$('#base2msdata50').val(parsedata[7][2]);
		$('#base2msdata53').val(parsedata[7][3]);
		$('#base3msdata52').val(parsedata[8][1]);
		$('#base3msdata50').val(parsedata[8][2]);
		$('#base3msdata53').val(parsedata[8][3]);

		$('#hct_blood').val(parsedata[21][3]);
		$('#weight').val(parsedata[22][3]);

		$('#basecrspike').val(parsedata[17][1]);
		$('#basewtblood').val(parsedata[17][2]);
		$('#basehct').val(parsedata[17][3]);
		$('#dorc').val(parsedata[21][1]);
		$('#dop').val(parsedata[22][1]);

		// injected load
		$('#inj1msdata52').val(parsedata[9][1]);
		$('#inj1msdata50').val(parsedata[9][2]);
		$('#inj1msdata53').val(parsedata[9][3]);
		$('#inj2msdata52').val(parsedata[10][1]);
		$('#inj2msdata50').val(parsedata[10][2]);
		$('#inj2msdata53').val(parsedata[10][3]);
		$('#inj3msdata52').val(parsedata[11][1]);
		$('#inj3msdata50').val(parsedata[11][2]);
		$('#inj3msdata53').val(parsedata[11][3]);

		$('#injcrspike').val(parsedata[18][1]);
		$('#injwtblood').val(parsedata[18][2]);
		$('#injhct').val(parsedata[18][3]);

		$('#infusateVol').val(parsedata[24][2]);
		$('#injhct_inf').val(parsedata[25][2]);

		// post label load
		$('#post1msdata52').val(parsedata[12][1]);
		$('#post1msdata50').val(parsedata[12][2]);
		$('#post1msdata53').val(parsedata[12][3]);
		$('#post2msdata52').val(parsedata[13][1]);
		$('#post2msdata50').val(parsedata[13][2]);
		$('#post2msdata53').val(parsedata[13][3]);
		$('#post3msdata52').val(parsedata[14][1]);
		$('#post3msdata50').val(parsedata[14][2]);
		$('#post3msdata53').val(parsedata[14][3]);

		$('#postcrspike').val(parsedata[19][1]);
		$('#postwtblood').val(parsedata[19][2]);
		$('#posthct').val(parsedata[19][3]);
        
    }

  
var parseCsv = new uploadDealcsv();
parseCsv.getCsv();



// file upload ends here




// baseline calculation
var cor_base1msdata52 = 0.0000, cor_base1msdata50 = 0.0000, cor_base1msdata53 = 0.0000;
var base1msdata52 = 0.0000, base1msdata50 = 0.0000, base1msdata53 = 0.0000;

var cor_base2msdata52 = 0.0000, cor_base2msdata50 = 0.0000, cor_base2msdata53 = 0.0000;
var base2msdata52 = 0.0000, base2msdata50 = 0.0000, base2msdata53 = 0.0000;

var cor_base3msdata52 = 0.0000, cor_base3msdata50 = 0.0000, cor_base3msdata53 = 0.0000;
var base3msdata52 = 0.0000, base3msdata50 = 0.0000, base3msdata53 = 0.0000;

var r1c1 = 0.0000, r1c2 = 0.0000, r1c3 = 0.0000;
var r2c1 = 0.0000, r2c2 = 0.0000, r2c3 = 0.0000;
var r3c1 = 0.0000, r3c2 = 0.0000, r3c3 = 0.0000;

var basecrspike = 0.0000, basewtblood = 0.0000, basehct = 0.0000;
var dorc = 0.0000, dop = 0.0000; //density of red cells and density of plasma

// amount in original sample
var amt_base1msdata52 = 0.0000, amt_base1msdata50 = 0.0000, amt_base1msdata53 = 0.0000;
var amt_base2msdata52 = 0.0000, amt_base2msdata50 = 0.0000, amt_base2msdata53 = 0.0000;
var amt_base3msdata52 = 0.0000, amt_base3msdata50 = 0.0000, amt_base3msdata53 = 0.0000;

// baseline 1 calculation // $('#PID').on('input', function(){
$('#invert_btn').click(function(){
	base1msdata52 = parseFloat($('#base1msdata52').val());
	base1msdata50 = parseFloat($('#base1msdata50').val());
	base1msdata53 = parseFloat($('#base1msdata53').val());	

	r1c1 = parseFloat(invert_result[0][0]);
	r1c2 = parseFloat(invert_result[0][1]);
	r1c3 = parseFloat(invert_result[0][2]);

	r2c1 = parseFloat(invert_result[1][0]);
	r2c2 = parseFloat(invert_result[1][1]);
	r2c3 = parseFloat(invert_result[1][2]);
		
	r3c1 = parseFloat(invert_result[2][0]);
	r3c2 = parseFloat(invert_result[2][1]);
	r3c3 = parseFloat(invert_result[2][2]);
	
	cor_base1msdata52 = (base1msdata52 * r1c1 ) + (base1msdata50 * r1c2) + (base1msdata53 * r1c3);
	cor_base1msdata52 = cor_base1msdata52.toFixed(4);
	$('#cor_base1msdata52').val(cor_base1msdata52);	
	
	cor_base1msdata50 = (base1msdata52 * r2c1 ) + (base1msdata50 * r2c2) + (base1msdata53 * r2c3);
	cor_base1msdata50 = cor_base1msdata50.toFixed(4);
	$('#cor_base1msdata50').val(cor_base1msdata50);	
	
	cor_base1msdata53 = (base1msdata52 * r3c1 ) + (base1msdata50 * r3c2) + (base1msdata53 * r3c3);
	cor_base1msdata53 = cor_base1msdata53.toFixed(4);
	$('#cor_base1msdata53').val(cor_base1msdata53);

});

// baseline 2 calculation
// $('#PID').on('input', function(){
$('#invert_btn').click(function(){
	base2msdata52 = parseFloat($('#base2msdata52').val());
	base2msdata50 = parseFloat($('#base2msdata50').val());
	base2msdata53 = parseFloat($('#base2msdata53').val());	

	r1c1 = parseFloat(invert_result[0][0]);
	r1c2 = parseFloat(invert_result[0][1]);
	r1c3 = parseFloat(invert_result[0][2]);

	r2c1 = parseFloat(invert_result[1][0]);
	r2c2 = parseFloat(invert_result[1][1]);
	r2c3 = parseFloat(invert_result[1][2]);
		
	r3c1 = parseFloat(invert_result[2][0]);
	r3c2 = parseFloat(invert_result[2][1]);
	r3c3 = parseFloat(invert_result[2][2]);
	
	cor_base2msdata52 = (base2msdata52 * r1c1 ) + (base2msdata50 * r1c2) + (base2msdata53 * r1c3);
	cor_base2msdata52 = cor_base2msdata52.toFixed(4);
	$('#cor_base2msdata52').val(cor_base2msdata52);	
	
	cor_base2msdata50 = (base2msdata52 * r2c1 ) + (base2msdata50 * r2c2) + (base2msdata53 * r2c3);
	cor_base2msdata50 = cor_base2msdata50.toFixed(4);
	$('#cor_base2msdata50').val(cor_base2msdata50);	
	
	cor_base2msdata53 = (base2msdata52 * r3c1 ) + (base2msdata50 * r3c2) + (base2msdata53 * r3c3);
	cor_base2msdata53 = cor_base2msdata53.toFixed(4);
	$('#cor_base2msdata53').val(cor_base2msdata53);
});

// baseline 3 calculation
$('#invert_btn').click(function(){
	base3msdata52 = parseFloat($('#base3msdata52').val());
	base3msdata50 = parseFloat($('#base3msdata50').val());
	base3msdata53 = parseFloat($('#base3msdata53').val());	

	r1c1 = parseFloat(invert_result[0][0]);
	r1c2 = parseFloat(invert_result[0][1]);
	r1c3 = parseFloat(invert_result[0][2]);

	r2c1 = parseFloat(invert_result[1][0]);
	r2c2 = parseFloat(invert_result[1][1]);
	r2c3 = parseFloat(invert_result[1][2]);
		
	r3c1 = parseFloat(invert_result[2][0]);
	r3c2 = parseFloat(invert_result[2][1]);
	r3c3 = parseFloat(invert_result[2][2]);
	
	cor_base3msdata52 = (base3msdata52 * r1c1 ) + (base3msdata50 * r1c2) + (base3msdata53 * r1c3);
	cor_base3msdata52 = cor_base3msdata52.toFixed(4);
	$('#cor_base3msdata52').val(cor_base3msdata52);	
	
	cor_base3msdata50 = (base3msdata52 * r2c1 ) + (base3msdata50 * r2c2) + (base3msdata53 * r2c3);
	cor_base3msdata50 = cor_base3msdata50.toFixed(4);
	$('#cor_base3msdata50').val(cor_base3msdata50);	
	
	cor_base3msdata53 = (base3msdata52 * r3c1 ) + (base3msdata50 * r3c2) + (base3msdata53 * r3c3);
	cor_base3msdata53 = cor_base3msdata53.toFixed(4);
	$('#cor_base3msdata53').val(cor_base3msdata53);
});

$('#invert_btn').click(function(){
	basecrspike =  parseFloat($('#basecrspike').val());
	// first
	amt_base1msdata52 = (cor_base1msdata52 * basecrspike) / cor_base1msdata50;
	amt_base1msdata52 = amt_base1msdata52.toFixed(4);
	$('#amt_base1msdata52').val(amt_base1msdata52);
	// console.log(amt_base1msdata52);

	amt_base1msdata50 = (cor_base1msdata50 * basecrspike ) / cor_base1msdata50;
	amt_base1msdata50 = amt_base1msdata50.toFixed(4);
	$('#amt_base1msdata50').val(amt_base1msdata50);

	amt_base1msdata53 = (cor_base1msdata53 * basecrspike ) / cor_base1msdata50;
	amt_base1msdata53 = amt_base1msdata53.toFixed(4);
	$('#amt_base1msdata53').val(amt_base1msdata53);

	// seond
	amt_base2msdata52 = (cor_base2msdata52 * basecrspike) / cor_base2msdata50;
	amt_base2msdata52 = amt_base2msdata52.toFixed(4);
	$('#amt_base2msdata52').val(amt_base2msdata52);
	
	amt_base2msdata50 = (cor_base2msdata50 * basecrspike ) / cor_base2msdata50;
	amt_base2msdata50 = amt_base2msdata50.toFixed(4);
	$('#amt_base2msdata50').val(amt_base2msdata50);

	amt_base2msdata53 = (cor_base2msdata53 * basecrspike ) / cor_base2msdata50;
	amt_base2msdata53 = amt_base2msdata53.toFixed(4);
	$('#amt_base2msdata53').val(amt_base2msdata53);

	// third
	amt_base3msdata52 = (cor_base3msdata52 * basecrspike) / cor_base3msdata50;
	amt_base3msdata52 = amt_base3msdata52.toFixed(4);
	$('#amt_base3msdata52').val(amt_base3msdata52);
	
	amt_base3msdata50 = (cor_base3msdata50 * basecrspike ) / cor_base3msdata50;
	amt_base3msdata50 = amt_base3msdata50.toFixed(4);
	$('#amt_base3msdata50').val(amt_base3msdata50);

	amt_base3msdata53 = (cor_base3msdata53 * basecrspike ) / cor_base3msdata50;
	amt_base3msdata53 = amt_base3msdata53.toFixed(4);
	$('#amt_base3msdata53').val(amt_base3msdata53);

});

// baseline corrected 53cr
var bcor_base1msdata53 = 0.0000, bcor_base2msdata53 = 0.0000, bcor_base3msdata53 = 0.0000;
var amt_baseAverage = 0.0000;

$('#invert_btn').click(function(){
	amt_baseAverage = (parseFloat(amt_base1msdata53) + parseFloat(amt_base2msdata53) + parseFloat(amt_base3msdata53))/3;
	amt_baseAverage = amt_baseAverage.toFixed(4);

	bcor_base1msdata53 = amt_base1msdata53 - amt_baseAverage;
	bcor_base1msdata53 = bcor_base1msdata53.toFixed(4);
	$('#bcor_base1msdata53').val(bcor_base1msdata53);

	bcor_base2msdata53 = amt_base2msdata53 - amt_baseAverage;
	bcor_base2msdata53 = bcor_base2msdata53.toFixed(4);
	$('#bcor_base2msdata53').val(bcor_base2msdata53);

	bcor_base3msdata53 = amt_base3msdata53 - amt_baseAverage;
	bcor_base3msdata53 = bcor_base3msdata53.toFixed(4);
	$('#bcor_base3msdata53').val(bcor_base3msdata53);

});

// volume blood analyse
var vol_base = 0.0000;
var base1RBC53Cr = 0.0000, base2RBC53Cr = 0.0000, base3RBC53Cr = 0.0000; 
var basemeanRBC53Cr = 0.0000;

$('#invert_btn').click(function(){
	basewtblood = parseFloat($('#basewtblood').val());
	basehct = parseFloat($('#basehct').val());
	dorc = parseFloat($('#dorc').val());
	dop = parseFloat($('#dop').val());

	vol_base = basewtblood / ((dorc * basehct) + (dop * ( 1 - basehct)));
	vol_base = vol_base.toFixed(4);
	$('#vol_base').val(vol_base);

	// Conc'n 53Cr in RBC
	base1RBC53Cr = bcor_base1msdata53 / vol_base;
	base1RBC53Cr = base1RBC53Cr.toFixed(4);
	$('#base1RBC53Cr').val(base1RBC53Cr);

	base2RBC53Cr = bcor_base2msdata53 / vol_base;
	base2RBC53Cr = base2RBC53Cr.toFixed(4);
	$('#base2RBC53Cr').val(base2RBC53Cr);

	base3RBC53Cr = bcor_base3msdata53 / vol_base;
	base3RBC53Cr = base3RBC53Cr.toFixed(4);	
	$('#base3RBC53Cr').val(base3RBC53Cr);

	// Conc'n Mean 53Cr in RBC
	basemeanRBC53Cr = (parseFloat(base1RBC53Cr) + parseFloat(base2RBC53Cr) + parseFloat(base3RBC53Cr)) / 3;
	basemeanRBC53Cr = basemeanRBC53Cr.toFixed(4);
	$('#basemeanRBC53Cr').val(basemeanRBC53Cr);
	
});


// --------------------------------------------------------------------------------------------------------------//


// injected labelled Cells calculation
var cor_inj1msdata52 = 0.0000, cor_inj1msdata50 = 0.0000, cor_inj1msdata53 = 0.0000;
var inj1msdata52 = 0.0000, inj1msdata50 = 0.0000, inj1msdata53 = 0.0000;

var cor_inj2msdata52 = 0.0000, cor_inj2msdata50 = 0.0000, cor_inj2msdata53 = 0.0000;
var inj2msdata52 = 0.0000, inj2msdata50 = 0.0000, inj2msdata53 = 0.0000;

var cor_inj3msdata52 = 0.0000, cor_inj3msdata50 = 0.0000, cor_inj3msdata53 = 0.0000;
var inj3msdata52 = 0.0000, inj3msdata50 = 0.0000, inj3msdata53 = 0.0000;


var injcrspike = 0.0000, injwtblood = 0.0000;
var injhct_inf = 0.0000, infusateVol = 0.0000; //infusate volume and hct inj

// amount in original sample
var amt_inj1msdata52 = 0.0000, amt_inj1msdata50 = 0.0000, amt_inj1msdata53 = 0.0000;
var amt_inj2msdata52 = 0.0000, amt_inj2msdata50 = 0.0000, amt_inj2msdata53 = 0.0000;
var amt_inj3msdata52 = 0.0000, amt_inj3msdata50 = 0.0000, amt_inj3msdata53 = 0.0000;

// review page Red Cells infusate 
var vol_redInfusate = 0.0000;

// injection labelled blood 1 calculation
$('#PID').on('input', function(){
	inj1msdata52 = parseFloat($('#inj1msdata52').val());
	inj1msdata50 = parseFloat($('#inj1msdata50').val());
	inj1msdata53 = parseFloat($('#inj1msdata53').val());	

	r1c1 = parseFloat(invert_result[0][0]);
	r1c2 = parseFloat(invert_result[0][1]);
	r1c3 = parseFloat(invert_result[0][2]);

	r2c1 = parseFloat(invert_result[1][0]);
	r2c2 = parseFloat(invert_result[1][1]);
	r2c3 = parseFloat(invert_result[1][2]);
		
	r3c1 = parseFloat(invert_result[2][0]);
	r3c2 = parseFloat(invert_result[2][1]);
	r3c3 = parseFloat(invert_result[2][2]);
	
	cor_inj1msdata52 = (inj1msdata52 * r1c1 ) + (inj1msdata50 * r1c2) + (inj1msdata53 * r1c3);
	cor_inj1msdata52 = cor_inj1msdata52.toFixed(4);
	$('#cor_inj1msdata52').val(cor_inj1msdata52);	
	
	cor_inj1msdata50 = (inj1msdata52 * r2c1 ) + (inj1msdata50 * r2c2) + (inj1msdata53 * r2c3);
	cor_inj1msdata50 = cor_inj1msdata50.toFixed(4);
	$('#cor_inj1msdata50').val(cor_inj1msdata50);	
	
	cor_inj1msdata53 = (inj1msdata52 * r3c1 ) + (inj1msdata50 * r3c2) + (inj1msdata53 * r3c3);
	cor_inj1msdata53 = cor_inj1msdata53.toFixed(4);
	$('#cor_inj1msdata53').val(cor_inj1msdata53);

});

// injected 2 calculation
$('#PID').on('input', function(){
	inj2msdata52 = parseFloat($('#inj2msdata52').val());
	inj2msdata50 = parseFloat($('#inj2msdata50').val());
	inj2msdata53 = parseFloat($('#inj2msdata53').val());	

	r1c1 = parseFloat(invert_result[0][0]);
	r1c2 = parseFloat(invert_result[0][1]);
	r1c3 = parseFloat(invert_result[0][2]);

	r2c1 = parseFloat(invert_result[1][0]);
	r2c2 = parseFloat(invert_result[1][1]);
	r2c3 = parseFloat(invert_result[1][2]);
		
	r3c1 = parseFloat(invert_result[2][0]);
	r3c2 = parseFloat(invert_result[2][1]);
	r3c3 = parseFloat(invert_result[2][2]);
	
	cor_inj2msdata52 = (inj2msdata52 * r1c1 ) + (inj2msdata50 * r1c2) + (inj2msdata53 * r1c3);
	cor_inj2msdata52 = cor_inj2msdata52.toFixed(4);
	$('#cor_inj2msdata52').val(cor_inj2msdata52);	
	
	cor_inj2msdata50 = (inj2msdata52 * r2c1 ) + (inj2msdata50 * r2c2) + (inj2msdata53 * r2c3);
	cor_inj2msdata50 = cor_inj2msdata50.toFixed(4);
	$('#cor_inj2msdata50').val(cor_inj2msdata50);	
	
	cor_inj2msdata53 = (inj2msdata52 * r3c1 ) + (inj2msdata50 * r3c2) + (inj2msdata53 * r3c3);
	cor_inj2msdata53 = cor_inj2msdata53.toFixed(4);
	$('#cor_inj2msdata53').val(cor_inj2msdata53);
});

// injected 3 calculation
$('#PID').on('input', function(){
	inj3msdata52 = parseFloat($('#inj3msdata52').val());
	inj3msdata50 = parseFloat($('#inj3msdata50').val());
	inj3msdata53 = parseFloat($('#inj3msdata53').val());	

	r1c1 = parseFloat(invert_result[0][0]);
	r1c2 = parseFloat(invert_result[0][1]);
	r1c3 = parseFloat(invert_result[0][2]);

	r2c1 = parseFloat(invert_result[1][0]);
	r2c2 = parseFloat(invert_result[1][1]);
	r2c3 = parseFloat(invert_result[1][2]);
		
	r3c1 = parseFloat(invert_result[2][0]);
	r3c2 = parseFloat(invert_result[2][1]);
	r3c3 = parseFloat(invert_result[2][2]);
	
	cor_inj3msdata52 = (inj3msdata52 * r1c1 ) + (inj3msdata50 * r1c2) + (inj3msdata53 * r1c3);
	cor_inj3msdata52 = cor_inj3msdata52.toFixed(4);
	$('#cor_inj3msdata52').val(cor_inj3msdata52);	
	
	cor_inj3msdata50 = (inj3msdata52 * r2c1 ) + (inj3msdata50 * r2c2) + (inj3msdata53 * r2c3);
	cor_inj3msdata50 = cor_inj3msdata50.toFixed(4);
	$('#cor_inj3msdata50').val(cor_inj3msdata50);	
	
	cor_inj3msdata53 = (inj3msdata52 * r3c1 ) + (inj3msdata50 * r3c2) + (inj3msdata53 * r3c3);
	cor_inj3msdata53 = cor_inj3msdata53.toFixed(4);
	$('#cor_inj3msdata53').val(cor_inj3msdata53);
});

$('#PID').on('input', function(){
	injcrspike =  parseFloat($('#injcrspike').val());
	// first
	amt_inj1msdata52 = (cor_inj1msdata52 * injcrspike) / cor_inj1msdata50;
	amt_inj1msdata52 = amt_inj1msdata52.toFixed(4);
	$('#amt_inj1msdata52').val(amt_inj1msdata52);
	// console.log(amt_inj1msdata52);

	amt_inj1msdata50 = (cor_inj1msdata50 * injcrspike ) / cor_inj1msdata50;
	amt_inj1msdata50 = amt_inj1msdata50.toFixed(4);
	$('#amt_inj1msdata50').val(amt_inj1msdata50);

	amt_inj1msdata53 = (cor_inj1msdata53 * injcrspike ) / cor_inj1msdata50;
	amt_inj1msdata53 = amt_inj1msdata53.toFixed(4);
	$('#amt_inj1msdata53').val(amt_inj1msdata53);

	// seond
	amt_inj2msdata52 = (cor_inj2msdata52 * injcrspike) / cor_inj2msdata50;
	amt_inj2msdata52 = amt_inj2msdata52.toFixed(4);
	$('#amt_inj2msdata52').val(amt_inj2msdata52);
	
	amt_inj2msdata50 = (cor_inj2msdata50 * injcrspike ) / cor_inj2msdata50;
	amt_inj2msdata50 = amt_inj2msdata50.toFixed(4);
	$('#amt_inj2msdata50').val(amt_inj2msdata50);

	amt_inj2msdata53 = (cor_inj2msdata53 * injcrspike ) / cor_inj2msdata50;
	amt_inj2msdata53 = amt_inj2msdata53.toFixed(4);
	$('#amt_inj2msdata53').val(amt_inj2msdata53);

	// third
	amt_inj3msdata52 = (cor_inj3msdata52 * injcrspike) / cor_inj3msdata50;
	amt_inj3msdata52 = amt_inj3msdata52.toFixed(4);
	$('#amt_inj3msdata52').val(amt_inj3msdata52);
	
	amt_inj3msdata50 = (cor_inj3msdata50 * injcrspike ) / cor_inj3msdata50;
	amt_inj3msdata50 = amt_inj3msdata50.toFixed(4);
	$('#amt_inj3msdata50').val(amt_inj3msdata50);

	amt_inj3msdata53 = (cor_inj3msdata53 * injcrspike ) / cor_inj3msdata50;
	amt_inj3msdata53 = amt_inj3msdata53.toFixed(4);
	$('#amt_inj3msdata53').val(amt_inj3msdata53);

});

// baseline corrected 53cr
var bcor_inj1msdata53 = 0.0000, bcor_inj2msdata53 = 0.0000, bcor_inj3msdata53 = 0.0000;
// var amt_injAverage = 0.0000;

$('#PID').on('input', function(){
	// amt_injAverage = (parseFloat(amt_inj1msdata53) + parseFloat(amt_inj2msdata53) + parseFloat(amt_inj3msdata53))/3;
	// amt_injAverage = amt_injAverage.toFixed(4);

	bcor_inj1msdata53 = amt_inj1msdata53 - parseFloat(amt_baseAverage);
	bcor_inj1msdata53 = bcor_inj1msdata53.toFixed(4);
	$('#bcor_inj1msdata53').val(bcor_inj1msdata53);

	bcor_inj2msdata53 = amt_inj2msdata53 - parseFloat(amt_baseAverage);
	bcor_inj2msdata53 = bcor_inj2msdata53.toFixed(4);
	$('#bcor_inj2msdata53').val(bcor_inj2msdata53);

	bcor_inj3msdata53 = amt_inj3msdata53 - parseFloat(amt_baseAverage);
	bcor_inj3msdata53 = bcor_inj3msdata53.toFixed(4);
	$('#bcor_inj3msdata53').val(bcor_inj3msdata53);

});

// volume blood analyse
var vol_inj = 0.0000;
var inj1RBC53Cr = 0.0000, inj2RBC53Cr = 0.0000, inj3RBC53Cr = 0.0000; 
var injmeanRBC53Cr = 0.0000, hct_blood = 0.0000, vwb = 0.0000;

$('#PID').on('input', function(){
	injwtblood = parseFloat($('#injwtblood').val());
	injhct_inf = parseFloat($('#injhct_inf').val());
	dorc = parseFloat($('#dorc').val());
	dop = parseFloat($('#dop').val());
	infusateVol = parseFloat($('#infusateVol').val());
	hct_blood = parseFloat($('#hct_blood').val());

	vol_inj = injwtblood / ((dorc * injhct_inf) + (dop * ( 1 - injhct_inf)));
	vol_inj = vol_inj.toFixed(4);
	$('#vol_inj').val(vol_inj);

	// Conc'n 53Cr in RBC	
	inj1RBC53Cr = bcor_inj1msdata53 / (injhct_inf * vol_inj);
	inj1RBC53Cr = inj1RBC53Cr.toFixed(4);
	$('#inj1RBC53Cr').val(inj1RBC53Cr);

	inj2RBC53Cr = bcor_inj2msdata53 / (injhct_inf * vol_inj);
	inj2RBC53Cr = inj2RBC53Cr.toFixed(4);
	$('#inj2RBC53Cr').val(inj2RBC53Cr);

	inj3RBC53Cr = bcor_inj3msdata53 / (injhct_inf * vol_inj);
	inj3RBC53Cr = inj3RBC53Cr.toFixed(4);	
	$('#inj3RBC53Cr').val(inj3RBC53Cr);

	// Conc'n Mean 53Cr in RBC
	injmeanRBC53Cr = (parseFloat(inj1RBC53Cr) + parseFloat(inj2RBC53Cr) + parseFloat(inj3RBC53Cr)) / 3;
	injmeanRBC53Cr = injmeanRBC53Cr.toFixed(4);
	$('#injmeanRBC53Cr').val(injmeanRBC53Cr);

	// review page
	$('#review_injmeanRBC53Cr').val(injmeanRBC53Cr);
	$('#review_infusateVol').val(infusateVol);
	$('#review_injhct_inf').val(injhct_inf);
	$('#review_hct_blood').val(hct_blood);

	vol_redInfusate = infusateVol * injhct_inf;
	vol_redInfusate = vol_redInfusate.toFixed(4);
	$('#review_vol_redInfusate').val(vol_redInfusate);


	
});	



// --------------------------------------------------------------------------------------------------------------//


// Post-labelling Red Blood Cells calculation
var cor_post1msdata52 = 0.0000, cor_post1msdata50 = 0.0000, cor_post1msdata53 = 0.0000;
var post1msdata52 = 0.0000, post1msdata50 = 0.0000, post1msdata53 = 0.0000;

var cor_post2msdata52 = 0.0000, cor_post2msdata50 = 0.0000, cor_post2msdata53 = 0.0000;
var post2msdata52 = 0.0000, post2msdata50 = 0.0000, post2msdata53 = 0.0000;

var cor_post3msdata52 = 0.0000, cor_post3msdata50 = 0.0000, cor_post3msdata53 = 0.0000;
var post3msdata52 = 0.0000, post3msdata50 = 0.0000, post3msdata53 = 0.0000;


var postcrspike = 0.0000, postwtblood = 0.0000, posthct = 0.0000;

// amount in original sample
var amt_post1msdata52 = 0.0000, amt_post1msdata50 = 0.0000, amt_post1msdata53 = 0.0000;
var amt_post2msdata52 = 0.0000, amt_post2msdata50 = 0.0000, amt_post2msdata53 = 0.0000;
var amt_post3msdata52 = 0.0000, amt_post3msdata50 = 0.0000, amt_post3msdata53 = 0.0000;

// Post-labelling Red blood 1 calculation
$('#PID').on('input', function(){
	post1msdata52 = parseFloat($('#post1msdata52').val());
	post1msdata50 = parseFloat($('#post1msdata50').val());
	post1msdata53 = parseFloat($('#post1msdata53').val());	

	r1c1 = parseFloat(invert_result[0][0]);
	r1c2 = parseFloat(invert_result[0][1]);
	r1c3 = parseFloat(invert_result[0][2]);

	r2c1 = parseFloat(invert_result[1][0]);
	r2c2 = parseFloat(invert_result[1][1]);
	r2c3 = parseFloat(invert_result[1][2]);
		
	r3c1 = parseFloat(invert_result[2][0]);
	r3c2 = parseFloat(invert_result[2][1]);
	r3c3 = parseFloat(invert_result[2][2]);
	
	cor_post1msdata52 = (post1msdata52 * r1c1 ) + (post1msdata50 * r1c2) + (post1msdata53 * r1c3);
	cor_post1msdata52 = cor_post1msdata52.toFixed(4);
	$('#cor_post1msdata52').val(cor_post1msdata52);	
	
	cor_post1msdata50 = (post1msdata52 * r2c1 ) + (post1msdata50 * r2c2) + (post1msdata53 * r2c3);
	cor_post1msdata50 = cor_post1msdata50.toFixed(4);
	$('#cor_post1msdata50').val(cor_post1msdata50);	
	
	cor_post1msdata53 = (post1msdata52 * r3c1 ) + (post1msdata50 * r3c2) + (post1msdata53 * r3c3);
	cor_post1msdata53 = cor_post1msdata53.toFixed(4);
	$('#cor_post1msdata53').val(cor_post1msdata53);

});

// Post-labelling Red Blood Cells 2 calculation
$('#PID').on('input', function(){
	post2msdata52 = parseFloat($('#post2msdata52').val());
	post2msdata50 = parseFloat($('#post2msdata50').val());
	post2msdata53 = parseFloat($('#post2msdata53').val());	

	r1c1 = parseFloat(invert_result[0][0]);
	r1c2 = parseFloat(invert_result[0][1]);
	r1c3 = parseFloat(invert_result[0][2]);

	r2c1 = parseFloat(invert_result[1][0]);
	r2c2 = parseFloat(invert_result[1][1]);
	r2c3 = parseFloat(invert_result[1][2]);
		
	r3c1 = parseFloat(invert_result[2][0]);
	r3c2 = parseFloat(invert_result[2][1]);
	r3c3 = parseFloat(invert_result[2][2]);
	
	cor_post2msdata52 = (post2msdata52 * r1c1 ) + (post2msdata50 * r1c2) + (post2msdata53 * r1c3);
	cor_post2msdata52 = cor_post2msdata52.toFixed(4);
	$('#cor_post2msdata52').val(cor_post2msdata52);	
	
	cor_post2msdata50 = (post2msdata52 * r2c1 ) + (post2msdata50 * r2c2) + (post2msdata53 * r2c3);
	cor_post2msdata50 = cor_post2msdata50.toFixed(4);
	$('#cor_post2msdata50').val(cor_post2msdata50);	
	
	cor_post2msdata53 = (post2msdata52 * r3c1 ) + (post2msdata50 * r3c2) + (post2msdata53 * r3c3);
	cor_post2msdata53 = cor_post2msdata53.toFixed(4);
	$('#cor_post2msdata53').val(cor_post2msdata53);
});

// Post-labelling 3 calculation
$('#PID').on('input', function(){
	post3msdata52 = parseFloat($('#post3msdata52').val());
	post3msdata50 = parseFloat($('#post3msdata50').val());
	post3msdata53 = parseFloat($('#post3msdata53').val());	

	r1c1 = parseFloat(invert_result[0][0]);
	r1c2 = parseFloat(invert_result[0][1]);
	r1c3 = parseFloat(invert_result[0][2]);

	r2c1 = parseFloat(invert_result[1][0]);
	r2c2 = parseFloat(invert_result[1][1]);
	r2c3 = parseFloat(invert_result[1][2]);
		
	r3c1 = parseFloat(invert_result[2][0]);
	r3c2 = parseFloat(invert_result[2][1]);
	r3c3 = parseFloat(invert_result[2][2]);
	
	cor_post3msdata52 = (post3msdata52 * r1c1 ) + (post3msdata50 * r1c2) + (post3msdata53 * r1c3);
	cor_post3msdata52 = cor_post3msdata52.toFixed(4);
	$('#cor_post3msdata52').val(cor_post3msdata52);	
	
	cor_post3msdata50 = (post3msdata52 * r2c1 ) + (post3msdata50 * r2c2) + (post3msdata53 * r2c3);
	cor_post3msdata50 = cor_post3msdata50.toFixed(4);
	$('#cor_post3msdata50').val(cor_post3msdata50);	
	
	cor_post3msdata53 = (post3msdata52 * r3c1 ) + (post3msdata50 * r3c2) + (post3msdata53 * r3c3);
	cor_post3msdata53 = cor_post3msdata53.toFixed(4);
	$('#cor_post3msdata53').val(cor_post3msdata53);
});

$('#PID').on('input', function(){
	postcrspike =  parseFloat($('#postcrspike').val());
	// first
	amt_post1msdata52 = (cor_post1msdata52 * postcrspike) / cor_post1msdata50;
	amt_post1msdata52 = amt_post1msdata52.toFixed(4);
	$('#amt_post1msdata52').val(amt_post1msdata52);
	// console.log(amt_inj1msdata52);

	amt_post1msdata50 = (cor_post1msdata50 * postcrspike ) / cor_post1msdata50;
	amt_post1msdata50 = amt_post1msdata50.toFixed(4);
	$('#amt_post1msdata50').val(amt_post1msdata50);

	amt_post1msdata53 = (cor_post1msdata53 * postcrspike ) / cor_post1msdata50;
	amt_post1msdata53 = amt_post1msdata53.toFixed(4);
	$('#amt_post1msdata53').val(amt_post1msdata53);

	// seond
	amt_post2msdata52 = (cor_post2msdata52 * postcrspike) / cor_post2msdata50;
	amt_post2msdata52 = amt_post2msdata52.toFixed(4);
	$('#amt_post2msdata52').val(amt_post2msdata52);
	
	amt_post2msdata50 = (cor_post2msdata50 * postcrspike ) / cor_post2msdata50;
	amt_post2msdata50 = amt_post2msdata50.toFixed(4);
	$('#amt_post2msdata50').val(amt_post2msdata50);

	amt_post2msdata53 = (cor_post2msdata53 * postcrspike ) / cor_post2msdata50;
	amt_post2msdata53 = amt_post2msdata53.toFixed(4);
	$('#amt_post2msdata53').val(amt_post2msdata53);

	// third
	amt_post3msdata52 = (cor_post3msdata52 * postcrspike) / cor_post3msdata50;
	amt_post3msdata52 = amt_post3msdata52.toFixed(4);
	$('#amt_post3msdata52').val(amt_post3msdata52);
	
	amt_post3msdata50 = (cor_post3msdata50 * postcrspike ) / cor_post3msdata50;
	amt_post3msdata50 = amt_post3msdata50.toFixed(4);
	$('#amt_post3msdata50').val(amt_post3msdata50);

	amt_post3msdata53 = (cor_post3msdata53 * postcrspike ) / cor_post3msdata50;
	amt_post3msdata53 = amt_post3msdata53.toFixed(4);
	$('#amt_post3msdata53').val(amt_post3msdata53);

});

// baseline corrected 53cr
var bcor_post1msdata53 = 0.0000, bcor_post2msdata53 = 0.0000, bcor_post3msdata53 = 0.0000;
// var amt_postAverage = 0.0000;

$('#PID').on('input', function(){
	// amt_postAverage = (parseFloat(amt_post1msdata53) + parseFloat(amt_post2msdata53) + parseFloat(amt_post3msdata53))/3;
	// amt_postAverage = amt_postAverage.toFixed(4);

	bcor_post1msdata53 = amt_post1msdata53 - parseFloat(amt_baseAverage);
	bcor_post1msdata53 = bcor_post1msdata53.toFixed(4);
	$('#bcor_post1msdata53').val(bcor_post1msdata53);

	bcor_post2msdata53 = amt_post2msdata53 - parseFloat(amt_baseAverage);
	bcor_post2msdata53 = bcor_post2msdata53.toFixed(4);
	$('#bcor_post2msdata53').val(bcor_post2msdata53);

	bcor_post3msdata53 = amt_post3msdata53 - parseFloat(amt_baseAverage);
	bcor_post3msdata53 = bcor_post3msdata53.toFixed(4);
	$('#bcor_post3msdata53').val(bcor_post3msdata53);

});

// volume blood analyse
var vol_post = 0.0000;
var post1RBC53Cr = 0.0000, post2RBC53Cr = 0.0000, post3RBC53Cr = 0.0000; 
var postmeanRBC53Cr = 0.0000, blood_volume = 0.0000;
var cor_blood_volume = 0.0000, vwb_over_wt = 0.0000, vol_over_wt = 0.0000;

$('#PID').on('input', function(){
	postwtblood = parseFloat($('#postwtblood').val());
	posthct = parseFloat($('#posthct').val());
	dorc = parseFloat($('#dorc').val());
	dop = parseFloat($('#dop').val());
	weight = parseFloat($('#weight').val())

	vol_post = postwtblood / ((dorc * posthct) + (dop * ( 1 - posthct)));
	vol_post = vol_post.toFixed(4);
	$('#vol_post').val(vol_post);

	// Conc'n 53Cr in RBC
	post1RBC53Cr = bcor_post1msdata53 / vol_post;
	post1RBC53Cr = post1RBC53Cr.toFixed(4);
	$('#post1RBC53Cr').val(post1RBC53Cr);

	post2RBC53Cr = bcor_post2msdata53 / vol_post;
	post2RBC53Cr = post2RBC53Cr.toFixed(4);
	$('#post2RBC53Cr').val(post2RBC53Cr);

	post3RBC53Cr = bcor_post3msdata53 / vol_post;
	post3RBC53Cr = post3RBC53Cr.toFixed(4);	
	$('#post3RBC53Cr').val(post3RBC53Cr);

	// Conc'n Mean 53Cr in RBC
	postmeanRBC53Cr = (parseFloat(post1RBC53Cr) + parseFloat(post2RBC53Cr) + parseFloat(post3RBC53Cr)) / 3;
	vwb = parseFloat(vol_redInfusate) * parseFloat(injmeanRBC53Cr) / postmeanRBC53Cr;
	blood_volume = vwb / parseFloat(hct_blood);

	if ($('#gender').val() == 'female') {
		cor_blood_volume = (parseFloat(blood_volume)) / 0.85;
		// console.log(cor_blood_volume);
		
	}else{
		cor_blood_volume = (parseFloat(blood_volume)) / 0.83;
		// console.log(cor_blood_volume);
	}
	
	vwb_over_wt = vwb / weight;

	vol_over_wt = cor_blood_volume / weight;
	
	postmeanRBC53Cr = postmeanRBC53Cr.toFixed(4);
	$('#postmeanRBC53Cr').val(postmeanRBC53Cr);
	$('#review_postmeanRBC53Cr').val(postmeanRBC53Cr);

	vwb = vwb.toFixed(4);
	$('#review_vwb').val(vwb);

	blood_volume = blood_volume.toFixed(4);
	$('#review_blood_volume').val(blood_volume);
	
	cor_blood_volume = cor_blood_volume.toFixed(4);
	$('#review_cor_blood_volume').val(cor_blood_volume);

	vwb_over_wt = vwb_over_wt.toFixed(4);
	$('#review_vwb_over_wt').val(vwb_over_wt);
	
	vol_over_wt = vol_over_wt.toFixed(4);
	$('#review_vol_over_wt').val(vol_over_wt);
});	


