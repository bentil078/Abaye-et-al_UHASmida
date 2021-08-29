<?php 
include("../../connect.php");

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

echo getAllDetails($connect);
?>
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