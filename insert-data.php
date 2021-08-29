<?php
include 'connect.php';
// print_r ($_POST);


// insert into details table
$PID = ($_POST['id']);
$gender = ($_POST['gender']);
$weight = ($_POST['weight']);
$hct_blood = ($_POST['hct_blood']);

// insert into matrix table
$m1r1 = ($_POST['m1r1']);
$m1r2 = ($_POST['m1r2']);
$m1r3 = ($_POST['m1r3']);
$m2r1 = ($_POST['m2r1']);
$m2r2 = ($_POST['m2r2']);
$m2r3 = ($_POST['m2r3']);
$m3r1 = ($_POST['m3r1']);
$m3r2 = ($_POST['m3r2']);
$m3r3 = ($_POST['m3r3']);

// insert into inverse matrix table
$r1c1 = ($_POST['r1c1']);
$r1c2 = ($_POST['r1c2']);
$r1c3 = ($_POST['r1c3']);
$r2c1 = ($_POST['r2c1']);
$r2c2 = ($_POST['r2c2']);
$r2c3 = ($_POST['r2c3']);
$r3c1 = ($_POST['r3c1']);
$r3c2 = ($_POST['r3c2']);
$r3c3 = ($_POST['r3c3']);

// insert into baseline_blood
$base1msdata52 = ($_POST['base1msdata52']);
$base1msdata50 = ($_POST['base1msdata50']);
$base1msdata53 = ($_POST['base1msdata53']);
$base2msdata52 = ($_POST['base2msdata52']);
$base2msdata50 = ($_POST['base2msdata50']);
$base2msdata53 = ($_POST['base2msdata53']);
$base3msdata52 = ($_POST['base3msdata52']);
$base3msdata50 = ($_POST['base3msdata50']);
$base3msdata53 = ($_POST['base3msdata53']);
$basecrspike = ($_POST['basecrspike']);
$basewtblood = ($_POST['basewtblood']);
$basehct = ($_POST['basehct']);
$dorc = ($_POST['dorc']);
$dop = ($_POST['dop']);

// insert into baseline preview
$cor_base1msdata52 = ($_POST['cor_base1msdata52']);
$cor_base1msdata50 = ($_POST['cor_base1msdata50']);
$cor_base1msdata53 = ($_POST['cor_base1msdata53']);
$cor_base2msdata52 = ($_POST['cor_base2msdata52']);
$cor_base2msdata50 = ($_POST['cor_base2msdata50']);
$cor_base2msdata53 = ($_POST['cor_base2msdata53']);
$cor_base3msdata52 = ($_POST['cor_base3msdata52']);
$cor_base3msdata50 = ($_POST['cor_base3msdata50']);
$cor_base3msdata53 = ($_POST['cor_base3msdata53']);
$amt_base1msdata52 = ($_POST['amt_base1msdata52']);
$amt_base1msdata50 = ($_POST['amt_base1msdata50']);
$amt_base1msdata53 = ($_POST['amt_base1msdata53']);
$amt_base2msdata52 = ($_POST['amt_base2msdata52']);
$amt_base2msdata50 = ($_POST['amt_base2msdata50']);
$amt_base2msdata53 = ($_POST['amt_base2msdata53']);
$amt_base3msdata52 = ($_POST['amt_base3msdata52']);
$amt_base3msdata50 = ($_POST['amt_base3msdata50']);
$amt_base3msdata53 = ($_POST['amt_base3msdata53']);
$bcor_base1msdata53 = ($_POST['bcor_base1msdata53']);
$bcor_base2msdata53 = ($_POST['bcor_base2msdata53']);
$bcor_base3msdata53 = ($_POST['bcor_base3msdata53']);
$vol_base = ($_POST['vol_base']);
$base1RBC53Cr = ($_POST['base1RBC53Cr']);
$base2RBC53Cr = ($_POST['base2RBC53Cr']);
$base3RBC53Cr = ($_POST['base3RBC53Cr']);
$basemeanRBC53Cr = ($_POST['basemeanRBC53Cr']);

// insert into inject table
$inj1msdata52 = ($_POST['inj1msdata52']);
$inj1msdata50 = ($_POST['inj1msdata50']);
$inj1msdata53 = ($_POST['inj1msdata53']);
$inj2msdata52 = ($_POST['inj2msdata52']);
$inj2msdata50 = ($_POST['inj2msdata50']);
$inj2msdata53 = ($_POST['inj2msdata53']);
$inj3msdata52 = ($_POST['inj3msdata52']);
$inj3msdata50 = ($_POST['inj3msdata50']);
$inj3msdata53 = ($_POST['inj3msdata53']);
$injcrspike = ($_POST['injcrspike']);
$injwtblood = ($_POST['injwtblood']);
$infusateVol = ($_POST['infusateVol']);
$injhct_inf = ($_POST['injhct_inf']);

// insert into injected preview table
$cor_inj1msdata52 = ($_POST['cor_inj1msdata52']);
$cor_inj1msdata50 = ($_POST['cor_inj1msdata50']);
$cor_inj1msdata53 = ($_POST['cor_inj1msdata53']);
$cor_inj2msdata52 = ($_POST['cor_inj2msdata52']);
$cor_inj2msdata50 = ($_POST['cor_inj2msdata50']);
$cor_inj2msdata53 = ($_POST['cor_inj2msdata53']);
$cor_inj3msdata52 = ($_POST['cor_inj3msdata52']);
$cor_inj3msdata50 = ($_POST['cor_inj3msdata50']);
$cor_inj3msdata53 = ($_POST['cor_inj3msdata53']);
$amt_inj1msdata52 = ($_POST['amt_inj1msdata52']);
$amt_inj1msdata50 = ($_POST['amt_inj1msdata50']);
$amt_inj1msdata53 = ($_POST['amt_inj1msdata53']);
$amt_inj2msdata52 = ($_POST['amt_inj2msdata52']);
$amt_inj2msdata50 = ($_POST['amt_inj2msdata50']);
$amt_inj2msdata53 = ($_POST['amt_inj2msdata53']);
$amt_inj3msdata52 = ($_POST['amt_inj3msdata52']);
$amt_inj3msdata50 = ($_POST['amt_inj3msdata50']);
$amt_inj3msdata53 = ($_POST['amt_inj3msdata53']);
$bcor_inj1msdata53 = ($_POST['bcor_inj1msdata53']);
$bcor_inj2msdata53 = ($_POST['bcor_inj2msdata53']);
$bcor_inj3msdata53 = ($_POST['bcor_inj3msdata53']);
$vol_inj = ($_POST['vol_inj']);
$inj1RBC53Cr = ($_POST['inj1RBC53Cr']);
$inj2RBC53Cr = ($_POST['inj2RBC53Cr']);
$inj3RBC53Cr = ($_POST['inj3RBC53Cr']);
$injmeanRBC53Cr = ($_POST['injmeanRBC53Cr']);

// insert into post label table
$post1msdata52 = ($_POST['post1msdata52']);
$post1msdata50 = ($_POST['post1msdata50']);
$post1msdata53 = ($_POST['post1msdata53']);
$post2msdata52 = ($_POST['post2msdata52']);
$post2msdata50 = ($_POST['post2msdata50']);
$post2msdata53 = ($_POST['post2msdata53']);
$post3msdata52 = ($_POST['post3msdata52']);
$post3msdata50 = ($_POST['post3msdata50']);
$post3msdata53 = ($_POST['post3msdata53']);
$postcrspike = ($_POST['postcrspike']);
$postwtblood = ($_POST['postwtblood']);
$posthct = ($_POST['posthct']);

// insert into post preview table
$cor_post1msdata52 = ($_POST['cor_post1msdata52']);
$cor_post1msdata50 = ($_POST['cor_post1msdata50']);
$cor_post1msdata53 = ($_POST['cor_post1msdata53']);
$cor_post2msdata52 = ($_POST['cor_post2msdata52']);
$cor_post2msdata50 = ($_POST['cor_post2msdata50']);
$cor_post2msdata53 = ($_POST['cor_post2msdata53']);
$cor_post3msdata52 = ($_POST['cor_post3msdata52']);
$cor_post3msdata50 = ($_POST['cor_post3msdata50']);
$cor_post3msdata53 = ($_POST['cor_post3msdata53']);
$amt_post1msdata52 = ($_POST['amt_post1msdata52']);
$amt_post1msdata50 = ($_POST['amt_post1msdata50']);
$amt_post1msdata53 = ($_POST['amt_post1msdata53']);
$amt_post2msdata52 = ($_POST['amt_post2msdata52']);
$amt_post2msdata50 = ($_POST['amt_post2msdata50']);
$amt_post2msdata53 = ($_POST['amt_post2msdata53']);
$amt_post3msdata52 = ($_POST['amt_post3msdata52']);
$amt_post3msdata50 = ($_POST['amt_post3msdata50']);
$amt_post3msdata53 = ($_POST['amt_post3msdata53']);
$bcor_post1msdata53 = ($_POST['bcor_post1msdata53']);
$bcor_post2msdata53 = ($_POST['bcor_post2msdata53']);
$bcor_post3msdata53 = ($_POST['bcor_post3msdata53']);
$vol_post = ($_POST['vol_post']);
$post1RBC53Cr = ($_POST['post1RBC53Cr']);
$post2RBC53Cr = ($_POST['post2RBC53Cr']);
$post3RBC53Cr = ($_POST['post3RBC53Cr']);
$postmeanRBC53Cr = ($_POST['postmeanRBC53Cr']);

// insert into preview page table
// $review_injmeanRBC53Cr = ($_POST['review_injmeanRBC53Cr']);
// $review_postmeanRBC53Cr = ($_POST['review_postmeanRBC53Cr']);
$review_infusateVol = ($_POST['review_infusateVol']);
$review_injhct_inf = ($_POST['review_injhct_inf']);
$review_vol_redInfusate = ($_POST['review_vol_redInfusate']);
$review_vwb = ($_POST['review_vwb']);
$review_hct_blood = ($_POST['review_hct_blood']);
$review_blood_volume = ($_POST['review_blood_volume']);
$review_cor_blood_volume = ($_POST['review_cor_blood_volume']);
$review_vwb_over_wt = ($_POST['review_vwb_over_wt']);
$review_vol_over_wt = ($_POST['review_vol_over_wt']);


// SQL statements for each table
$sql = mysqli_query($connect, "INSERT INTO `details`(`PID`, `gender`, `weight`, `hct_blood`) VALUES ('".$PID."','".$gender."','".$weight."','".$hct_blood."')");

$sql_matrix = mysqli_query($connect, "INSERT INTO `matrix`(`PID`, `m1r1`, `m1r2`, `m1r3`, `m2r1`, `m2r2`, `m2r3`, `m3r1`, `m3r2`, `m3r3`) 
	VALUES ('".$PID."','".$m1r1."','".$m1r2."','".$m1r3."','".$m2r1."','".$m2r2."','".$m2r3."','".$m3r1."','".$m3r2."','".$m3r3."')");

$sql_inverse = mysqli_query($connect, "INSERT INTO `inverse_matrix`(`PID`, `r1c1`, `r1c2`, `r1c3`, `r2c1`, `r2c2`, `r2c3`, `r3c1`, `r3c2`, `r3c3`) 
	VALUES ('".$PID."','".$r1c1."','".$r1c2."','".$r1c3."','".$r2c1."','".$r2c2."','".$r2c3."','".$r3c1."','".$r3c2."','".$r3c3."')");

$sql_base = mysqli_query($connect, "INSERT INTO `baseline_blood`(`PID`, `base1msdata52`, `base1msdata50`, `base1msdata53`, `base2msdata52`, `base2msdata50`, 
	`base2msdata53`, `base3msdata52`, `base3msdata50`, `base3msdata53`, `base50CrSpike`, `basewtblood`, `basehct`, `dorc`, `dop`) 
	VALUES ('".$PID."','".$base1msdata52."','".$base1msdata50."','".$base1msdata53."','".$base2msdata52."','".$base2msdata50."','".$base2msdata53."',
	'".$base3msdata52."','".$base3msdata50."','".$base3msdata53."','".$basecrspike."','".$basewtblood."','".$basehct."','".$dorc."','".$dop."')");

$sql_base_preview = mysqli_query($connect, "INSERT INTO `baseline_preview`(`PID`, `cor_base1msdata52`, `cor_base1msdata50`, `cor_base1msdata53`, `cor_base2msdata52`, 
	`cor_base2msdata50`, `cor_base2msdata53`, `cor_base3msdata52`, `cor_base3msdata50`, `cor_base3msdata53`,
	 `amt_base1msdata52`, `amt_base1msdata50`, `amt_base1msdata53`, `amt_base2msdata52`, `amt_base2msdata50`, `amt_base2msdata53`, `amt_base3msdata52`, `amt_base3msdata50`,
	  `amt_base3msdata53`, `bcor_base1msdata53`,`bcor_base2msdata53`,`bcor_base3msdata53`, `vol_base`, `base1RBC53Cr`,`base2RBC53Cr`,`base3RBC53Cr`, `basemeanRBC53Cr`) 
	VALUES ('".$PID."','".$cor_base1msdata52."','".$cor_base1msdata50."','".$cor_base1msdata53."','".$cor_base2msdata52."','".$cor_base2msdata50."','".$cor_base2msdata53."',
	'".$cor_base3msdata52."','".$cor_base3msdata50."','".$cor_base3msdata53."','".$amt_base1msdata52."','".$amt_base1msdata50."','".$amt_base1msdata53."','".$amt_base2msdata52."',
	'".$amt_base2msdata50."','".$amt_base2msdata53."','".$amt_base3msdata52."','".$amt_base3msdata50."','".$amt_base3msdata53."','".$bcor_base1msdata53."','".$bcor_base2msdata53."',
	'".$bcor_base3msdata53."','".$vol_base."','".$base1RBC53Cr."','".$base2RBC53Cr."','".$base3RBC53Cr."','".$basemeanRBC53Cr."')");

$sql_injected = mysqli_query($connect, "INSERT INTO `injected`(`PID`, `inj1msdata52`, `inj1msdata50`, `inj1msdata53`, `inj2msdata52`, `inj2msdata50`, 
	`inj2msdata53`, `inj3msdata52`, `inj3msdata50`, `inj3msdata53`, `inj50CrSpike`, `injwtblood`, `infusateVol`, `injhct_inf`) 
	VALUES ('".$PID."','".$inj1msdata52."','".$inj1msdata50."','".$inj1msdata53."','".$inj2msdata52."','".$inj2msdata50."','".$inj2msdata53."',
	'".$inj3msdata52."','".$inj3msdata50."','".$inj3msdata53."','".$injcrspike."','".$injwtblood."','".$infusateVol."','".$injhct_inf."')");

$sql_injected_preview = mysqli_query($connect, "INSERT INTO `injected_preview`(`PID`, `cor_inj1msdata52`, `cor_inj1msdata50`, `cor_inj1msdata53`, `cor_inj2msdata52`, 
	`cor_inj2msdata50`, `cor_inj2msdata53`, `cor_inj3msdata52`, `cor_inj3msdata50`, `cor_inj3msdata53`,
	 `amt_inj1msdata52`, `amt_inj1msdata50`, `amt_inj1msdata53`, `amt_inj2msdata52`, `amt_inj2msdata50`, `amt_inj2msdata53`, `amt_inj3msdata52`, `amt_inj3msdata50`,
	  `amt_inj3msdata53`, `bcor_inj1msdata53`,`bcor_inj2msdata53`,`bcor_inj3msdata53`, `vol_inj`, `inj1RBC53Cr`,`inj2RBC53Cr`,`inj3RBC53Cr`, `injmeanRBC53Cr`) 
	VALUES ('".$PID."','".$cor_inj1msdata52."','".$cor_inj1msdata50."','".$cor_base1msdata53."','".$cor_base2msdata52."','".$cor_base2msdata50."','".$cor_base2msdata53."',
	'".$cor_inj3msdata52."','".$cor_inj3msdata50."','".$cor_inj3msdata53."','".$amt_inj1msdata52."','".$amt_inj1msdata50."','".$amt_inj1msdata53."','".$amt_inj2msdata52."',
	'".$amt_inj2msdata50."','".$amt_inj2msdata53."','".$amt_inj3msdata52."','".$amt_inj3msdata50."','".$amt_inj3msdata53."','".$bcor_inj1msdata53."','".$bcor_inj2msdata53."',
	'".$bcor_inj3msdata53."','".$vol_inj."','".$inj1RBC53Cr."','".$inj2RBC53Cr."','".$inj3RBC53Cr."','".$injmeanRBC53Cr."')");

$sql_post_label = mysqli_query($connect, "INSERT INTO `post_label`(`PID`, `post1msdata52`, `post1msdata50`, `post1msdata53`, `post2msdata52`, `post2msdata50`, 
	`post2msdata53`, `post3msdata52`, `post3msdata50`, `post3msdata53`, `postCrSpike`, `postwtblood`, `posthct`) 
	VALUES ('".$PID."','".$post1msdata52."','".$post1msdata50."','".$post1msdata53."','".$post2msdata52."','".$post2msdata50."','".$post2msdata53."',
	'".$post3msdata52."','".$post3msdata50."','".$post3msdata53."','".$postcrspike."','".$postwtblood."','".$posthct."')");

$sql_post_preview = mysqli_query($connect, "INSERT INTO `post_preview`(`PID`, `cor_post1msdata52`, `cor_post1msdata50`, `cor_post1msdata53`, `cor_post2msdata52`, 
	`cor_post2msdata50`, `cor_post2msdata53`, `cor_post3msdata52`, `cor_post3msdata50`, `cor_post3msdata53`,
	 `amt_post1msdata52`, `amt_post1msdata50`, `amt_post1msdata53`, `amt_post2msdata52`, `amt_post2msdata50`, `amt_post2msdata53`, `amt_post3msdata52`, `amt_post3msdata50`,
	  `amt_post3msdata53`, `bcor_post1msdata53`,`bcor_post2msdata53`,`bcor_post3msdata53`, `vol_post`, `post1RBC53Cr`,`post2RBC53Cr`,`post3RBC53Cr`, `postmeanRBC53Cr`) 
	VALUES ('".$PID."','".$cor_post1msdata52."','".$cor_post1msdata50."','".$cor_post1msdata53."','".$cor_post2msdata52."','".$cor_post2msdata50."','".$cor_post2msdata53."',
	'".$cor_post3msdata52."','".$cor_post3msdata50."','".$cor_post3msdata53."','".$amt_post1msdata52."','".$amt_post1msdata50."','".$amt_post1msdata53."','".$amt_post2msdata52."',
	'".$amt_post2msdata50."','".$amt_post2msdata53."','".$amt_post3msdata52."','".$amt_post3msdata50."','".$amt_post3msdata53."','".$bcor_post1msdata53."','".$bcor_post2msdata53."',
	'".$bcor_post3msdata53."','".$vol_post."','".$post1RBC53Cr."','".$post2RBC53Cr."','".$post3RBC53Cr."','".$postmeanRBC53Cr."')");

$sql_final_preview = mysqli_query($connect, "INSERT INTO `final_preview`(`PID`, `review_infusateVol`, `review_injhct_inf`, `review_vol_redInfusate`, `review_vwb`, 
	`review_hct_blood`, `review_blood_volume`, `review_cor_blood_volume`, `review_vwb_over_wt`, `review_vol_over_wt`) 
	VALUES ('".$PID."','".$review_infusateVol."','".$review_injhct_inf."','".$review_vol_redInfusate."','".$review_vwb."','".$review_hct_blood."','".$review_blood_volume."',
	'".$review_cor_blood_volume."','".$review_vwb_over_wt."','".$review_vol_over_wt."')");



if ($sql && $sql_matrix && $sql_inverse) {
	echo 'Insert success';
}else{
	echo 'Error: '. mysqli_error($connect);
}








?>