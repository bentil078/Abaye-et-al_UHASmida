<?php 
 include("../connect.php");

 function getAllDetails($connect){
  
    $sql = mysqli_query($connect, "SELECT * FROM details ORDER BY PID;");

    $output = "";
    $counter = 1;
    if (mysqli_num_rows($sql) >= 1){
      $output .= '<table id="detailsTable" class="table table-condensed table-striped table-borderless table-hover" ><thead><tr class="table-success"><th>#</th><th>PID</th><th>Gender</th><th>Weight</th><th>HCT_Blood</th><th>Action</th></thead><tbody>';

      while ($row = mysqli_fetch_array($sql)){
        $viewDetailstext = "view";

        $output .= '<tr><td>'.$counter.'</td><td>'.$row["PID"].'</td><td>'.$row["gender"].'</td><td>'.$row["weight"].'</td><td>'.$row["hct_blood"].'</td><td><button id="viewDetail" indexx="'.$row["PID"].'" buttonText="'.$viewDetailstext.'" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal-4" data-whatever="users">'.$viewDetailstext.'</button></td></tr>';
        $counter++;
      }
      $output .= '</tbody></table>';
    }
    
    if ($output == ""){
      $output = "<h3 class='text-center'>No Data...</h3>";
    }
    return $output;
  }
  
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="Abaye-et-al UHASmida">
  <meta name="author" content="Abaye-et-al">

  <title>UHAS-MIDA</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../asset/vendors/iconfonts/font-awesome/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../asset/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- DATATABLES -->
  <link rel="stylesheet" type="text/css" href="../asset/css/datatables.min.css">
  <link rel="shortcut icon" href="../asset/images/favicon.png" />
    
</head>

<body class="layout-navbar-fixed layout-footer-fixed sidebar-collapse">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <h3 class="m-0">UHAS-mida Admin Page</h3>

    <!-- SEARCH FORM -->
    
    
  </nav>
  <!-- /.navbar -->



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Cr-RBCs</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <p class="text-center">
                      <strong>Cr-RBCs</strong>
                    </p>

                    <div class="container">
                      <div id="details_Table">                        
                        <?php echo getAllDetails($connect); ?>
                      </div>
                    </div>
                    
                     <!-- /.col -->
                  <!-- Modal starts -->
                  <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <!-- <h5>Details Page for </h5> -->
                        <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="ModalLabel">Calculation of blood volume</h5>                               

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <!-- body starts here -->
                                
                                
                                            
                                  <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card px-2">
                                            <div class="card-body">
                                                <div class="container-fluid d-flex justify-content-between w-100">
                                                  <div class="col-lg-12 pl-0">
                                                    <p class="mt-5 mb-2"><b>Calculation of blood volume</b></p>
                                                    <div class="settings">
                                                      <!-- <label>ID </label> -->
                                                      <span><div id="PID"></div><input style="border: none;" type="text" class="review_PID form-control-plaintext p-0" disabled /></span>

                                                      <!-- <label>Gender </label> -->
                                                      <span><div id="gender"></div><input style="border: none;" type="text" class="review_gender form-control-plaintext p-0" disabled></span>

                                                      <!-- <label>Weight </label> -->
                                                      <span><div id="weight"></div></span>
                                                    </div>
                                                  </div>                                        
                                                </div>
                                                
                                                <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                                                  <div class="table-responsive w-100">
                                                      <table class="table">
                                                        
                                                        <tbody>
                                                          <tr class="text-right">
                                                            <td class="text-left"><strong>Concentration 53Cr in infusate, Cinf</strong></td>
                                                            <td class="text-center"><div id="review_injmeanRBC53Cr"></div> <input style="border: none;" type="text" class="form-control-plaintext p-0" disabled></td>
                                                            <td class="text-left">ng/ml</td>
                                                          </tr>
                                                          <tr class="text-right">
                                                            <td class="text-left"><strong>Concentration of 53Cr in blood, Cwb</strong></td>
                                                            <td class="text-center"><div id="review_postmeanRBC53Cr"></div><input style="border: none;" type="text" class="form-control-plaintext p-0" disabled> </td>
                                                            <td class="text-left">ng/ml</td>
                                                          </tr>
                                                          <tr class="text-left">                                                  
                                                              <tr>
                                                                <td rowspan="3"><strong>Infusate</strong></td>                                                      
                                                              </tr>
                                                              <tr>                                                      
                                                                <td class="text-left"><strong>volume</strong></td>
                                                                <td class="text-left"><div id="review_infusateVol"></div><input style="border: none;" type="text" class="form-control-plaintext p-0" disabled> </td>
                                                                <td class="text-left">ml</td>
                                                              </tr>                                                 
                                                          </tr>
                                                          <tr class="text-right">                                                 
                                                            <td class="text-center"><strong>hct-inf</strong></td>
                                                            <td class="text-center"><div id="review_injhct_inf"></div><input style="border: none;" type="text" class="form-control-plaintext p-0" disabled> </td>
                                                          </tr>
                                                          <tr class="text-right">
                                                            <td class="text-left"><strong>Volume of red cells infused, Vinf</strong></td>
                                                            <td class="text-center"><div id="review_vol_redInfusate"></div><input style="border: none;" type="text" class="form-control-plaintext p-0" disabled> </td>
                                                            <td class="text-left">ml</td>
                                                          </tr>
                                                          <tr class="text-right">
                                                            <td class="text-left"><strong>Red cell volume, Vwb</strong></td>
                                                            <td class="text-center"><div id="review_vwb"></div><input style="border: none;" type="text" class="form-control-plaintext p-0" disabled> </td>
                                                            <td class="text-left">ml</td>
                                                          </tr>
                                                          <tr class="text-right">
                                                            <td class="text-left"><strong>Hct blood</strong></td>
                                                            <td class="text-center"><div id="hct_blood"></div><input style="border: none;" type="text" class="form-control-plaintext p-0" disabled> </td>
                                                            
                                                          </tr>
                                                          <tr class="text-right">
                                                            <td class="text-left"><strong>Blood volume</strong></td>
                                                            <td class="text-center"><div id="review_blood_volume"></div><input style="border: none;" type="text" class="form-control-plaintext p-0" disabled> </td>
                                                            <td class="text-left">ml</td>
                                                          </tr>
                                                          <tr class="text-right">
                                                            <td class="text-left"><strong>F-corrected blood volume</strong></td>
                                                            <td class="text-center"><div id="review_cor_blood_volume"></div><input style="border: none;" type="text" class="form-control-plaintext p-0" disabled> </td>                                                  
                                                            <td class="text-left">ml</td>
                                                          </tr>                                                
                                                          <tr class="text-right">
                                                            <td class="text-left"><strong>Red cell volume/weight, Vwb/wt</strong></td>
                                                            <td class="text-center"><div id="review_vwb_over_wt"></div><input style="border: none;" type="text" class="form-control-plaintext p-0" disabled> </td>                                                  
                                                            <td class="text-left">ml/kg</td>
                                                          </tr>
                                                          <tr class="text-right">
                                                            <td class="text-left"><strong>Blood volume/weight</strong></td>
                                                            <td class="text-center"><div id="review_vol_over_wt"></div><input style="border: none;" type="text" class="form-control-plaintext p-0" disabled> </td>
                                                            <td class="text-left">ml/kg</td>
                                                          </tr>
                                                          
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                



                                
                                <!-- body ends here -->
                              </div>
                              <div class="modal-footer">                                        
                                <button type="button" id= "deleteButton" class="btn btn-danger" data-dismiss="modal">Delete</button>  
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal-4" data-whatever="users">Click here</button> -->
                      </div>
                    </div>
                  </div>
                  <!-- Modal Ends -->
                  
                  <!-- /.col -->
                  </div>
                 
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                <div class="row">
                  <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <?php echo date("Y"); ?> <a href="#" target="_blank">Dr. Abaye's Lab, SBBS, UHAS</a>. All rights reserved.</span>
                    </div>
                  </footer>
                  
                  
                 
                  
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->



        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../asset/jquery/jquery-1.9.1.js"></script>
<!-- Bootstrap -->
<script src="../asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src='../asset/js/datatables.min.js'></script>
<!-- AdminLTE App -->
<script src="../asset/dist/js/adminlte.js"></script>


</body>
</html>
<script>
  // search through the table
	$(document).ready(function () {
			var t = $('#detailsTable').DataTable( {
		        "columnDefs": [ {
		            "searchable": false,
		            "orderable": false,
		            "targets": 0
		        } ],
		        "pageLength": 50,
		        "order": [[ 3, 'asc' ],[ 2, 'asc' ]],
		        "oLanguage": {
					"sSearch": "SEARCH PID:"
					}
	    	} );
	 
		    t.on( 'order.dt search.dt', function () {
		        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
		            cell.innerHTML = i+1;
		        } );
		    } ).draw();
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 400);
            return false;
        });
        
        $('#back-to-top').tooltip('show');


	});
</script>



<script>
  var indexno = '';
  $(document).on('click', '#viewDetail', function(){
    indexno =  $(this).attr('indexx');

    
    // Go to View Preview Page and fetch data (echoed data)to populate admin preview page;
    $.ajax({
      type: "POST",
      url: "includes/viewPreview.php",
      data: {
        indexno:indexno
      },
      success: function(text) {
        var str = text;
        var result = str.split("<br>");
        $('#PID').html('ID: ' + result[0]);
        $('#gender').html('Gender: ' + result[1]);
        $('#weight').html('Weight: ' + result[2] + ' kg');
        $('#hct_blood').html(result[3]);
        $('#review_infusateVol').html(result[4]);
        $('#review_injhct_inf').html(result[5]);
        $('#review_vol_redInfusate').html(result[6]);
        $('#review_vwb').html(result[7]);
        $('#review_blood_volume').html(result[8]);
        $('#review_cor_blood_volume').html(result[9]);
        $('#review_vwb_over_wt').html(result[10]);
        $('#review_vol_over_wt').html(result[11]);
        $('#review_injmeanRBC53Cr').html(result[12]);
        $('#review_postmeanRBC53Cr').html(result[13]);


        // $('#displayinfo').html(text);
        // console.log(result);
      
      }
      
    });   

  });
  
  
  

	$('#deleteButton').click(function(){
    var buttonText = $('#deleteButton').text();
    // console.log(buttonText);
    var r = confirm("Are you sure you want to DELETE "+indexno+"?");
    // console.log(r);
    if (r == true) {
	    //txt = "You pressed OK!";
	     $.ajax({
            type: "POST",
            url: "includes/deleteDetails.php?action="+buttonText,
            data: {
            	indexno:indexno
           },
           dataType: "html",
           beforeSend: function() {
           },
           success: function(text) {
           	$('#details_Table').load('includes/refreshDetailsTable.php');
           },
           complete: function() {},
           error: function(xhr, ajaxOptions, thrownError) {
             alert(xhr.status + " " + thrownError);
           }
          });
	  } else {
	    //txt = "You pressed Cancel!";
	  }	

  });

</script>

