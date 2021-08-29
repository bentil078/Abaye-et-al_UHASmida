<?php
    include("../../connect.php");

    $indexno = $_POST['indexno'];
    // Todo: re-structure DB to use JOIN for these queries.
    $details_query = mysqli_query($connect, "SELECT * FROM details WHERE PID = '$indexno';");

    $final_query = mysqli_query($connect, "SELECT * FROM final_preview WHERE PID = '$indexno';");

    $inj_query = mysqli_query($connect, "SELECT * FROM injected_preview WHERE PID = '$indexno';");

    $post_query = mysqli_query($connect, "SELECT * FROM post_preview WHERE PID = '$indexno';");

    if (mysqli_num_rows($details_query) > 0) {
        while($rowData = mysqli_fetch_array($details_query)){
              echo $rowData["PID"].'<br>';
              echo $rowData["gender"].'<br>';
              echo $rowData["weight"].'<br>';
              echo $rowData["hct_blood"].'<br>';
        }
    }

    if (mysqli_num_rows($final_query) > 0) {
        while($rowData = mysqli_fetch_array($final_query)){
              echo $rowData["review_infusateVol"].'<br>';
              echo $rowData["review_injhct_inf"].'<br>';
              echo $rowData["review_vol_redInfusate"].'<br>';
              echo $rowData["review_vwb"].'<br>';
              echo $rowData["review_blood_volume"].'<br>';
              echo $rowData["review_cor_blood_volume"].'<br>';
              echo $rowData["review_vwb_over_wt"].'<br>';
              echo $rowData["review_vol_over_wt"].'<br>';
        }
    }

    if (mysqli_num_rows($inj_query) > 0) {
        while($rowData = mysqli_fetch_array($inj_query)){
              echo $rowData["injmeanRBC53Cr"].'<br>';
           
        }
    }

    if (mysqli_num_rows($post_query) > 0) {
        while($rowData = mysqli_fetch_array($post_query)){
              echo $rowData["postmeanRBC53Cr"].'<br>';
        }
    }


?>
