<?php 
 include("connect.php");
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Abaye-et-al UHASmida">
  <meta name="author" content="Abaye-et-al">
  
  <title>UHAS-MIDA</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="asset/vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="asset/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="asset/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="asset/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="asset/images/favicon.png" />
</head>

<body class="boxed-layout">
  <div class="container-scroller">   
    <div class="container-fluid page-body-wrapper">      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
                UHAS-MIDA
            </h3>
            
          </div>
          <!--vertical wizard-->
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Cr-RBCs</h4>
                  <form id="example-vertical-wizard" method="POST" action="#">
                    <div>
                      <!-- file upload -->
                      <h3>File Upload</h3>
                      <section>
                      <h4>csv File Upload</h4>
                        <div class="row">
                          <!-- Modal starts -->
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body">
                                <h5>file upload Instructions</h5>
                                <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="ModalLabel">Guidelines for file upload</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <p>1. You can download a <a href="asset/uhasmidasample.csv"> sample csv file format from here</a></p>
                                        <p>2. The file format should be saved in a csv format as in instruction 1</p>
                                        <p>3. The fields in the file to be uploaded must correspond to the arrangement in the sample</p>
                                      </div>
                                      <div class="modal-footer">                                        
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal-4" data-whatever="users">Click here</button>
                              </div>
                            </div>
                          </div>
                          <!-- Modal Ends -->
                        </div>
                        <div class="row">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body">                                
                                <input type="file" accept=".csv" id="dealCsv" class="dropify" />
                              </div>
                            </div>
                          </div>
                                                    
                        </div>          
                      </section>
                      <!-- file Upload ends here -->     

                      <!-- matrix page -->
                      <h3>Isotopomer Matrix Calculation</h3>
                      <section>
                        <h4>Isotopomer Matrix Calculation</h4>
                        <div class="grid-margin stretch-card form-group">
                          <div class="card">
                            <div class="card-body">
                              <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th> </th>
                                      <th>Natural</th>
                                      <th>Spike</th>
                                      <th>Label</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>"358"</td>
                                      <td><input id="m1r1" class="m1r1" type="number" /></td>                                      
                                      <td><input id="m1r2" class="m1r1" type="number" /></td>
                                      <td><input id="m1r3" class="m1r1" type="number" /></td>
                                    </tr>
                                    <tr>
                                      <td>"356"</td>
                                      <td><input id="m2r1" class="m1r2" type="number" /></td>
                                      <td><input id="m2r2" class="m1r2" type="number" /></td>
                                      <td><input id="m2r3" class="m1r2" type="number" /></td>                                    
                                    </tr>
                                    <tr>
                                      <td>"359"</td>
                                      <td><input id="m3r1" class="m1r3" type="number" /></td>
                                      <td><input id="m3r2" class="m1r3" type="number" /></td>
                                      <td><input id="m3r3" class="m1r3" type="number" /></td> 
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                              <div id="matrix2" class="parent" style="display: none;">
                               
                                <input class="m2r1" type="text" value="0"/>
                                <input class="m2r1" type="text" value="0"/>
                                <input class="m2r1" type="text" value="0"/>
                                <input class="m2r2" type="text" value="0"/>
                                <input class="m2r2" type="text" value="0"/>
                                <input class="m2r2" type="text" value="0"/>
                                <input class="m2r3" type="text" value="0"/>
                                <input class="m2r3" type="text" value="0"/>
                                <input class="m2r3" type="text" value="0"/>		
                              </div>
                              <br>
                              <div id="" style="border: 1px solid #e2e2e2; border-radius: 10px; background: e5e5e5; padding: 5px;">
                                <label id="console" style="display: none; font-weight: bold;"></label>
                                <div id="display_matrix" class="table-responsive" style="display: none;">
                                  <table class="table table-hover">
                                    <p>Inverse Matrix</p>
                                    <thead>
                                      <tr>
                                        <th> </th>
                                        <th>"358"</th>
                                        <th>"356"</th>
                                        <th>"359"</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>n</td>
                                        <td><input id="r1c1" type="text" readonly="readonly"/></td>
                                        <td><input id="r1c2" type="text" readonly="readonly"/></td>
                                        <td><input id="r1c3" type="text" readonly="readonly"/></td>
                                      </tr>
                                      <tr>
                                        <td>s</td>
                                        <td><input id="r2c1" type="text" readonly="readonly"/></td>
                                        <td><input id="r2c2" type="text" readonly="readonly"/></td>
                                        <td><input id="r2c3" type="text" readonly="readonly"/></td>                                    
                                      </tr>
                                      <tr>
                                        <td>l</td>
                                        <td><input id="r3c1" type="text" readonly="readonly"/></td>
                                        <td><input id="r3c2" type="text" readonly="readonly"/></td>
                                        <td><input id="r3c3" type="text" readonly="readonly"/></td> 
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="container-fluid w-100">                          
                          <button id="reset" type="reset" name="clear" class="function btn btn-outline-warning btn-icon-text" value="Clear Form">
                            <i class="fas fa-redo btn-icon-prepend"></i>                                                    
                            Reset
                          </button>                          
                          
                          <button type="button" id="invert_btn" class="function btn btn-outline-primary btn-icon-text" value="Invert" >
                            <i class="far fa-check-square btn-icon-prepend"></i>
                            Inverse
                          </button>                          
                        </div>                   
                      </section>
                      <!-- matrix ends here -->                     

                      <!-- Baseline blood input page - Baseline Blood -->
                      <h3>Baseline Blood</h3>
                      <section>
                        
                        <h4>Raw Mass Data</h4>
                        <div class="row">
                          <div class="col-md-7">
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">ID</label>
                              <div class="col-sm-10">
                                <input id="PID" name="PID" type="text" class="required form-control form-control-sm" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Gender </label>
                              <div class="col-sm-7">
                                <select id="gender" name="gender" class="form-control js-example-basic-single w-100">
                                  <option value="">Select</option>
                                  <option value="male">Male</option>
                                  <option value="female">Female</option>                                
                                </select>
                              </div>                              
                            </div>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-md-7">
                            <div class="form-group row">
                              <div class="input-group">
                                <label class="col-sm-4 col-form-label">Weight</label>
                                <!-- <div class="col-sm-8"> -->
                                  <input id="weight" name="weight" type="number" class="required form-control form-control-sm" />
                                  <div class="input-group-append">
                                    <span class="input-group-text">kg</span>
                                  </div>
                                <!-- </div> -->
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="form-group row">
                              <label class="col-sm-5 col-form-label">Hct blood</label>
                              <div class="col-sm-6">
                                <input id="hct_blood" name="hct_blood" type="number" class="required form-control form-control-sm" />
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      

                        <hr>

                        <h4>Baseline Blood(Red Cells)</h4>
                        <h6>Rep 1</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="base1msdata52" name="base1msdata52" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="base1msdata50" name="base1msdata50" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="base1msdata53" name="base1msdata53" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Rep 2</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="base2msdata52" name="base2msdata52" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="base2msdata50" name="base2msdata50" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="base2msdata53" name="base2msdata53" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Rep 3</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="base3msdata52" name="base3msdata52" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="base3msdata50" name="base3msdata50" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="base3msdata53" name="base3msdata53" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>  
                        <h4>50Cr spike added</h4>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              
                              <label class="col-sm-5 col-form-label">50Cr spike added</label>
                              <div class="col-sm-7">
                                <div class="input-group">                                
                                  <input type="number" id="basecrspike" name="base50CrSpike" class="required form-control form-control-sm" aria-label="Username">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">ng</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> 
                          
                        </div> 
                        
                        <hr>

                        <h4>Wt blood analysed</h4>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              
                              <label class="col-sm-5 col-form-label">Wt blood analysed</label>
                              <div class="col-sm-7">
                                <div class="input-group">                                
                                  <input type="number" id="basewtblood" name="basewtblood" class="required form-control form-control-sm" aria-label="Username">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">g</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>                          
                        </div> 

                        <hr>
                        <h4>Hct</h4>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              
                              <label class="col-sm-5 col-form-label">Hct:</label>
                              <div class="col-sm-7">
                                <div class="input-group">                                
                                  <input type="number" id="basehct" name="basehct" class="required form-control form-control-sm" aria-label="Username">
                                </div>
                              </div>
                            </div>
                          </div>                          
                        </div> 

                        <hr>
                        <h4></h4>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-5 col-form-label">Density of red cells</label>
                              <div class="col-sm-7">
                                <div class="input-group">
                                  <input id="dorc" name="dorc" type="number" class="required form-control form-control-sm" />
                                  <div class="input-group-append">
                                    <span class="input-group-text">g/ml</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-5 col-form-label">Density of plasma</label>
                              <div class="col-sm-7">
                                <div class="input-group">
                                  <input id="dop" name="dop" type="number" class="required form-control form-control-sm" />
                                  <div class="input-group-append">
                                    <span class="input-group-text">g/ml</span>
                                  </div>
                                </div>
                              </div>                              
                            </div>
                          </div>
                        </div>                          
                        <hr>                                             
                      </section>
                      <!-- baseline blood input page ends here-->

                      <!-- preview page - Baseline Blood -->

                      <h3>Baseline Blood Preview</h3>
                      <section>
                        <h4>Baseline Blood Calculation</h4>
                        <div class="row">
                          <div class="col-md-7">
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">ID</label>
                              <div class="col-sm-10">                             
                                <input type="text" class="review_PID required form-control form-control-sm" value='N/A' readonly="readonly"/>
                              </div>
                            </div>
                          </div>
                            <div class="col-md-5">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Gender </label>
                              <div class="col-sm-7">
                                <input class="review_gender required form-control form-control-sm" value='N/A' readonly="readonly"/> 
                              </div>                              
                            </div>
                          </div>
                        </div> 
                        <div class="row">
                          <div class="col-md-7">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Weight</label>
                              <div class="col-sm-8">
                                <input name="review_weight" type="number" class="review_weight required form-control form-control-sm" value="N/A" readonly="readonly"/>
                              </div>
                            </div>
                          </div>
                          
                        </div>                     

                        <hr>

                        <h4>Signal by Cr source</h4> <hr>
                        <h5>Corrected' MS data</h5>
                        <h6>Rep 1</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <p style="color: green;">natural</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="cor_base1msdata52" name="cor_base1msdata52" class="required form-control form-control-sm"  readonly="readonly">                                
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: red; ">spike</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="cor_base1msdata50" name="cor_base1msdata50" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: blue ;">label</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="cor_base1msdata53" name="cor_base1msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Rep 2</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <p style="color: green;">natural</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="cor_base2msdata52" name="cor_base2msdata52" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: red; ">spike</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="cor_base2msdata50" name="cor_base2msdata50" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: blue ;">label</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="cor_base2msdata53" name="cor_base2msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Rep 3</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <p style="color: green;">natural</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="cor_base3msdata52" name="cor_base3msdata52" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: red; ">spike</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="cor_base3msdata50" name="cor_base3msdata50" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: blue ;">label</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="cor_base3msdata53" name="cor_base3msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>
                        
                        <h4>Amounts in original sample</h4> <hr>
                        <h6>Rep 1</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <p style="color: green;">natural</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="amt_base1msdata52" name="amt_base1msdata52" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: red; ">spike</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="amt_base1msdata50" name="amt_base1msdata50" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: blue ;">label</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="amt_base1msdata53" name="amt_base1msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Rep 2</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <p style="color: green;">natural</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="amt_base2msdata52" name="amt_base2msdata52" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>                              
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: red; ">spike</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="amt_base2msdata50" name="amt_base2msdata50" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: blue ;">label</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="amt_base2msdata53" name="amt_base2msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Rep 3</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <p style="color: green;">natural</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="amt_base3msdata52" name="amt_base3msdata52" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: red; ">spike</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="amt_base3msdata50" name="amt_base3msdata50" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: blue ;">label</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="amt_base3msdata53" name="amt_base3msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>
                        
                        <h4>Baseline corrected 53Cr</h4>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group row">
                              <h6>Rep 1</h6>
                              <div class="input-group">                                
                                <input type="number" id="bcor_base1msdata53" name="bcor_base1msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <h6>Rep 2</h6>
                              <div class="input-group">                                
                                <input type="number" id="bcor_base2msdata53" name="bcor_base2msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div> 
                          <div class="col-md-4">
                            <div class="form-group row">
                              <h6>Rep 3</h6>
                              <div class="input-group">                                
                                <input type="number" id="bcor_base3msdata53" name="bcor_base3msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>                         
                        </div> 
                        
                        <hr>

                        <h4>Volume blood analysed</h4>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group row">
                              <!-- <h6>Rep 1</h6> -->
                              <div class="input-group">                                
                                <input type="number" id="vol_base" name="vol_base1" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ml</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </div> 

                        <hr>
                        <h4>Conc'n 53Cr in RBC</h4>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group row">
                              <h6>Rep 1</h6>
                              <div class="input-group">                                
                                <input type="number" id="base1RBC53Cr" name="base1RBC53Cr" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng/ml</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <h6>Rep 2</h6>
                              <div class="input-group">
                                <input type="number" id="base2RBC53Cr" name="base2RBC53Cr" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng/ml</span>
                                </div>
                              </div>
                            </div>
                          </div> 
                          <div class="col-md-4">
                            <div class="form-group row">
                              <h6>Rep 3</h6>
                              <div class="input-group">                                
                                <input type="number" id="base3RBC53Cr" name="base3RBC53Cr" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng/ml</span>
                                </div>
                              </div>
                            </div>
                          </div>                         
                        </div> 

                        <hr>
                        <h4>Mean 53Cr in RBC</h4>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-5 col-form-label">Mean 53Cr in RBC</label>
                              <div class="col-sm-7">
                                <div class="input-group">
                                  <input id="basemeanRBC53Cr" name="basemeanRBC53Cr" type="number" class="required form-control form-control-sm" readonly="readonly"/>
                                  <div class="input-group-append">
                                    <span class="input-group-text">ng/ml</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>                          
                        </div>                          
                        <hr>                                             
                      </section>
                      
                      <!-- preview page for first input page ends here-->

                      <!-- injected labelled Cells -->

                      <h3>Injected labelled Cells</h3>
                      <section>
                        <div class="row">
                          <div class="col-md-7">
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">ID</label>
                              <div class="col-sm-10">
                                <input name="injPID" type="text" class="review_PID required form-control form-control-sm" readonly="readonly"/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Gender </label>
                              <div class="col-sm-7">
                                <input name="inj_gender" class="review_gender required form-control form-control-sm" value='N/A' readonly="readonly"/> 
                              </div>                              
                            </div>
                          </div>
                        </div>                            
                        <hr>

                        <h4>Injected labelled Cells</h4>
                        <h6>Rep 1</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="inj1msdata52" name="inj1msdata52" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="inj1msdata50" name="inj1msdata50" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="inj1msdata53" name="inj1msdata53" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Rep 2</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="inj2msdata52" name="inj2msdata52" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="inj2msdata50" name="inj2msdata50" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="inj2msdata53" name="inj2msdata53" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Rep 3</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="inj3msdata52" name="inj3msdata52" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="inj3msdata50" name="inj3msdata50" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="inj3msdata53" name="inj3msdata53" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>  
                        <h4>50Cr spike added</h4>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              
                              <label class="col-sm-5 col-form-label">50Cr spike added</label>
                              <div class="col-sm-7">
                                <div class="input-group">                                
                                  <input type="number" id="injcrspike" name="inj50CrSpike" class="required form-control form-control-sm" aria-label="Username">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">ng</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> 
                          
                        </div> 
                        
                        <hr>

                        <h4>Wt blood analysed</h4>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              
                              <label class="col-sm-5 col-form-label">Wt blood analysed</label>
                              <div class="col-sm-7">
                                <div class="input-group">                                
                                  <input type="number" id="injwtblood" name="injwtblood" class="required form-control form-control-sm" aria-label="Username">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">g</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>                          
                        </div> 

                        <hr>
             
                        <h4>Infusate</h4>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-5 col-form-label">Volume</label>
                              <div class="col-sm-7">
                                <div class="input-group">
                                  <input id="infusateVol" name="infusateVol" type="number" class="required form-control form-control-sm" />
                                  <div class="input-group-append">
                                    <span class="input-group-text">ml</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-5 col-form-label">hct-inf</label>
                              <div class="col-sm-7">
                                <div class="input-group">
                                  <input id="injhct_inf" name="injhct_inf" type="number" class="required form-control form-control-sm" />
                                  
                                </div>
                              </div>                              
                            </div>
                          </div>
                        </div>                          
                        <hr>                                             
                      </section>
                      <!-- Injected labelled Cells page ends here-->

                      <!-- preview page - Injected labelled Cells -->

                      <h3>Injected labelled Cells Preview</h3>
                      <section>
                        <div class="row">
                          <div class="col-md-7">
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">ID</label>
                              <div class="col-sm-10">                             
                                <input type="text" class="review_PID required form-control form-control-sm" value='N/A' readonly="readonly"/>
                              </div>
                            </div>
                          </div>
                            <div class="col-md-5">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Gender </label>
                              <div class="col-sm-7">
                                <input class="review_gender required form-control form-control-sm" value='N/A' readonly="readonly"/> 
                              </div>                              
                            </div>
                          </div>
                        </div>                 

                        <hr>

                        <h4>Signal by Cr source</h4> <hr>
                        <h5>Corrected' MS data</h5>
                        <h6>Rep 1</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <p style="color: green;">natural</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="cor_inj1msdata52" name="cor_inj1msdata52" class="required form-control form-control-sm"  readonly="readonly">                                
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: red; ">spike</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="cor_inj1msdata50" name="cor_inj1msdata50" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: blue ;">label</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="cor_inj1msdata53" name="cor_inj1msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Rep 2</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <p style="color: green;">natural</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="cor_inj2msdata52" name="cor_inj2msdata52" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: red; ">spike</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="cor_inj2msdata50" name="cor_inj2msdata50" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: blue ;">label</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="cor_inj2msdata53" name="cor_inj2msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Rep 3</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <p style="color: green;">natural</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="cor_inj3msdata52" name="cor_inj3msdata52" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: red; ">spike</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="cor_inj3msdata50" name="cor_inj3msdata50" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: blue ;">label</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="cor_inj3msdata53" name="cor_inj3msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>
                        
                        <h4>Amounts in original sample</h4> <hr>
                        <h6>Rep 1</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <p style="color: green;">natural</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="amt_inj1msdata52" name="amt_inj1msdata52" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: red; ">spike</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="amt_inj1msdata50" name="amt_inj1msdata50" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: blue ;">label</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="amt_inj1msdata53" name="amt_inj1msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Rep 2</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <p style="color: green;">natural</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="amt_inj2msdata52" name="amt_inj2msdata52" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>                              
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: red; ">spike</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="amt_inj2msdata50" name="amt_inj2msdata50" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: blue ;">label</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="amt_inj2msdata53" name="amt_inj2msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Rep 3</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <p style="color: green;">natural</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="amt_inj3msdata52" name="amt_inj3msdata52" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: red; ">spike</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="amt_inj3msdata50" name="amt_inj3msdata50" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: blue ;">label</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="amt_inj3msdata53" name="amt_inj3msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>
                        
                        <h4>Baseline corrected 53Cr</h4>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group row">
                              <h6>Rep 1</h6>
                              <div class="input-group">                                
                                <input type="number" id="bcor_inj1msdata53" name="bcor_inj1msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <h6>Rep 2</h6>
                              <div class="input-group">                                
                                <input type="number" id="bcor_inj2msdata53" name="bcor_inj2msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div> 
                          <div class="col-md-4">
                            <div class="form-group row">
                              <h6>Rep 3</h6>
                              <div class="input-group">                                
                                <input type="number" id="bcor_inj3msdata53" name="bcor_inj3msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>                         
                        </div> 
                        
                        <hr>

                        <h4>Volume blood analysed</h4>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group row">
                              <!-- <h6>Rep 1</h6> -->
                              <div class="input-group">                                
                                <input type="number" id="vol_inj" name="vol_inj1" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ml</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </div> 

                        <hr>
                        <h4>Conc'n 53Cr in RBC</h4>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group row">
                              <h6>Rep 1</h6>
                              <div class="input-group">                                
                                <input type="number" id="inj1RBC53Cr" name="inj1RBC53Cr" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng/ml</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <h6>Rep 2</h6>
                              <div class="input-group">                                
                                <input type="number" id="inj2RBC53Cr" name="inj2RBC53Cr" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng/ml</span>
                                </div>
                              </div>
                            </div>
                          </div> 
                          <div class="col-md-4">
                            <div class="form-group row">
                              <h6>Rep 3</h6>
                              <div class="input-group">                                
                                <input type="number" id="inj3RBC53Cr" name="inj3RBC53Cr" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng/ml</span>
                                </div>
                              </div>
                            </div>
                          </div>                         
                        </div> 

                        <hr>
                        <h4>Mean 53Cr in RBC</h4>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-5 col-form-label">Mean 53Cr in RBC</label>
                              <div class="col-sm-7">
                                <div class="input-group">
                                  <input id="injmeanRBC53Cr" name="injmeanRBC53Cr" type="number" class="required form-control form-control-sm" readonly="readonly"/>
                                  <div class="input-group-append">
                                    <span class="input-group-text">ng/ml</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>                          
                        </div>                          
                        <hr>                                             
                      </section>
                      
                      <!-- preview page Injected labelled Cells-->


                      <!-- Post-labelling red blood cells -->

                      <h3>Post-labelling red blood cells</h3>
                      <section>
                        <div class="row">
                          <div class="col-md-7">
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">ID</label>
                              <div class="col-sm-10">
                                <input name="postPID" type="text" class="review_PID required form-control form-control-sm" readonly="readonly"/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Gender </label>
                              <div class="col-sm-7">
                                <input name="post_gender" class="review_gender required form-control form-control-sm" value='N/A' readonly="readonly"/> 
                              </div>                              
                            </div>
                          </div>
                        </div>                            
                        <hr>

                        <h4>Post-labelling red blood cells</h4>
                        <h6>Rep 1</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="post1msdata52" name="post1msdata52" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="post1msdata50" name="post1msdata50" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="post1msdata53" name="post1msdata53" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Rep 2</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="post2msdata52" name="post2msdata52" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="post2msdata50" name="post2msdata50" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="post2msdata53" name="post2msdata53" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Rep 3</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="post3msdata52" name="post3msdata52" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="post3msdata50" name="post3msdata50" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="post3msdata53" name="post3msdata53" class="required form-control form-control-sm" aria-label="Username">
                                <div class="input-group-append">
                                  <span class="input-group-text">m/z</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>  
                        <h4>50Cr spike added</h4>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              
                              <label class="col-sm-5 col-form-label">50Cr spike added</label>
                              <div class="col-sm-7">
                                <div class="input-group">                                
                                  <input type="number" id="postcrspike" name="post50CrSpike" class="required form-control form-control-sm" aria-label="Username">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">ng</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> 
                          
                        </div> 
                        
                        <hr>

                        <h4>Wt blood analysed</h4>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              
                              <label class="col-sm-5 col-form-label">Wt blood analysed</label>
                              <div class="col-sm-7">
                                <div class="input-group">                                
                                  <input type="number" id="postwtblood" name="postwtblood" class="required form-control form-control-sm" aria-label="Username">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">g</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>                          
                        </div> 

                        <hr>
                        <h4>Hct</h4>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              
                              <label class="col-sm-5 col-form-label">Hct:</label>
                              <div class="col-sm-7">
                                <div class="input-group">                                
                                  <input type="number" id="posthct" name="posthct" class="required form-control form-control-sm" aria-label="Username">
                                </div>
                              </div>
                            </div>
                          </div>                          
                        </div> 

                        <hr>

                      </section>
                      <!-- Post-labelling red blood cells page ends here-->

                      <!-- preview page - Post-labelling red blood cells -->

                      <h3>Post-labelling red blood cells Preview</h3>
                      <section>
                        <div class="row">
                          <div class="col-md-7">
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">ID</label>
                              <div class="col-sm-10">                             
                                <input id="postreview_PID" type="text" class="review_PID required form-control form-control-sm" value='N/A' readonly="readonly"/>
                              </div>
                            </div>
                          </div>
                            <div class="col-md-5">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Gender </label>
                              <div class="col-sm-7">
                                <input name="postreview_gender" class="review_gender required form-control form-control-sm" value='N/A' readonly="readonly"/> 
                              </div>                              
                            </div>
                          </div>
                        </div>                 

                        <hr>

                        <h4>Signal by Cr source</h4> <hr>
                        <h5>Corrected' MS data</h5>
                        <h6>Rep 1</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <p style="color: green;">natural</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="cor_post1msdata52" name="cor_post1msdata52" class="required form-control form-control-sm"  readonly="readonly">                                
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: red; ">spike</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="cor_post1msdata50" name="cor_post1msdata50" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: blue ;">label</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="cor_post1msdata53" name="cor_post1msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Rep 2</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <p style="color: green;">natural</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="cor_post2msdata52" name="cor_post2msdata52" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: red; ">spike</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="cor_post2msdata50" name="cor_post2msdata50" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: blue ;">label</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="cor_post2msdata53" name="cor_post2msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Rep 3</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <p style="color: green;">natural</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="cor_post3msdata52" name="cor_post3msdata52" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: red; ">spike</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="cor_post3msdata50" name="cor_post3msdata50" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: blue ;">label</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="cor_post3msdata53" name="cor_post3msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>
                        
                        <h4>Amounts in original sample</h4> <hr>
                        <h6>Rep 1</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <p style="color: green;">natural</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="amt_post1msdata52" name="amt_post1msdata52" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: red; ">spike</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="amt_post1msdata50" name="amt_post1msdata50" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: blue ;">label</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="amt_post1msdata53" name="amt_post1msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Rep 2</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <p style="color: green;">natural</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="amt_post2msdata52" name="amt_post2msdata52" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>                              
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: red; ">spike</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="amt_post2msdata50" name="amt_post2msdata50" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: blue ;">label</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="amt_post2msdata53" name="amt_post2msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Rep 3</h6>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group row">
                              <p style="color: green;">natural</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">52</span>
                                </div>
                                <input type="number" id="amt_post3msdata52" name="amt_post3msdata52" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: red; ">spike</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">50</span>
                                </div>
                                <input type="number" id="amt_post3msdata50" name="amt_post3msdata50" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <p style="color: blue ;">label</p>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">53</span>
                                </div>
                                <input type="number" id="amt_post3msdata53" name="amt_post3msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>
                        
                        <h4>Baseline corrected 53Cr</h4>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group row">
                              <h6>Rep 1</h6>
                              <div class="input-group">                                
                                <input type="number" id="bcor_post1msdata53" name="bcor_post1msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <h6>Rep 2</h6>
                              <div class="input-group">                                
                                <input type="number" id="bcor_post2msdata53" name="bcor_post2msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div> 
                          <div class="col-md-4">
                            <div class="form-group row">
                              <h6>Rep 3</h6>
                              <div class="input-group">                                
                                <input type="number" id="bcor_post3msdata53" name="bcor_post3msdata53" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng</span>
                                </div>
                              </div>
                            </div>
                          </div>                         
                        </div> 
                        
                        <hr>

                        <h4>Volume blood analysed</h4>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group row">
                              <!-- <h6>Rep 1</h6> -->
                              <div class="input-group">                                
                                <input type="number" id="vol_post" name="vol_post" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ml</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </div> 

                        <hr>
                        <h4>Conc'n 53Cr in RBC</h4>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group row">
                              <h6>Rep 1</h6>
                              <div class="input-group">                                
                                <input type="number" id="post1RBC53Cr" name="post1RBC53Cr" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng/ml</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <h6>Rep 2</h6>
                              <div class="input-group">                                
                                <input type="number" id="post2RBC53Cr" name="post2RBC53Cr" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng/ml</span>
                                </div>
                              </div>
                            </div>
                          </div> 
                          <div class="col-md-4">
                            <div class="form-group row">
                              <h6>Rep 3</h6>
                              <div class="input-group">                                
                                <input type="number" id="post3RBC53Cr" name="post3RBC53Cr" class="required form-control form-control-sm" aria-label="Username" readonly="readonly">
                                <div class="input-group-append">
                                  <span class="input-group-text">ng/ml</span>
                                </div>
                              </div>
                            </div>
                          </div>                         
                        </div> 

                        <hr>
                        <h4>Mean 53Cr in RBC</h4>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-5 col-form-label">Mean 53Cr in RBC</label>
                              <div class="col-sm-7">
                                <div class="input-group">
                                  <input id="postmeanRBC53Cr" name="postmeanRBC53Cr" type="number" class="required form-control form-control-sm" readonly="readonly"/>
                                  <div class="input-group-append">
                                    <span class="input-group-text">ng/ml</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>                          
                        </div>                          
                        <hr>                                             
                      </section>
                      
                      <!-- preview page Post-labelling red blood cells -->                      
                       
                     <!-- final preview page -->
                      <h3>Calculation of blood volume </h3>
                      <section>
                        <h4>Calculation of blood volume</h4>                        
                        <div class="row">
                          <div class="col-lg-12">
                              <div class="card px-2">
                                  <div class="card-body">
                                      <div class="container-fluid d-flex justify-content-between w-100">
                                        <div class="col-lg-12 pl-0">
                                          <p class="mt-5 mb-2"><b>Calculation of blood volume</b></p>
                                          <div class="settings">
                                            <label>ID </label>
                                            <span><input style="border: none;" type="text" class="review_PID form-control-plaintext p-0" value="N/A" disabled /></span>

                                            <label>Gender </label>
                                            <span><input style="border: none;" type="text" class="review_gender form-control-plaintext p-0" value="N/A" disabled></span>

                                            <label>Weight </label>
                                            <span><input style="border: none;" type="text" class="review_weight form-control-plaintext p-0" value="N/A" disabled></span>
                                          </div>
                                        </div>                                        
                                      </div>
                                      <div class="container-fluid d-flex justify-content-between w-100">
                                        <div class="col-lg-6 pl-0">
                                          <p class="mb-0 mt-5" id="date">Date : </p>
                                            <script>
                                            var d = new Date();
                                            document.getElementById("date").innerHTML = "Date: " + d.toDateString();
                                            </script>
                                          
                                        </div>
                                      </div>
                                      <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                                        <div class="table-responsive w-100">
                                            <table class="table">
                                              
                                              <tbody>
                                                <tr class="text-right">
                                                  <td class="text-left">Concentration 53Cr in infusate, Cinf</td>
                                                  <td class="text-center"> <input id="review_injmeanRBC53Cr" style="border: none;" type="text" class="form-control-plaintext p-0" value="N/A" disabled></td>
                                                  <td class="text-left">ng/ml</td>
                                                </tr>
                                                <tr class="text-right">
                                                  <td class="text-left">Concentration of 53Cr in blood, Cwb</td>
                                                  <td class="text-center"><input id="review_postmeanRBC53Cr" style="border: none;" type="text" class="form-control-plaintext p-0" value="N/A" disabled> </td>
                                                  <td class="text-left">ng/ml</td>
                                                </tr>
                                                <tr class="text-left">                                                  
                                                    <tr>
                                                      <td rowspan="3">Infusate</td>                                                      
                                                    </tr>
                                                    <tr>                                                      
                                                      <td class="text-left">volume</td>
                                                      <td class="text-left"><input id="review_infusateVol" style="border: none;" type="text" class="form-control-plaintext p-0" value="N/A" disabled> </td>
                                                      <td class="text-left">ml</td>
                                                    </tr>                                                 
                                                </tr>
                                                <tr class="text-right">                                                 
                                                  <td class="text-center">hct-inf</td>
                                                  <td class="text-center"><input id="review_injhct_inf" style="border: none;" type="text" class="form-control-plaintext p-0" value="N/A" disabled> </td>
                                                </tr>
                                                <tr class="text-right">
                                                  <td class="text-left">Volume of red cells infused, Vinf</td>
                                                  <td class="text-center"><input id="review_vol_redInfusate" style="border: none;" type="text" class="form-control-plaintext p-0" value="N/A" disabled> </td>
                                                  <td class="text-left">ml</td>
                                                </tr>
                                                <tr class="text-right">
                                                  <td class="text-left">Red cell volume, Vwb</td>
                                                  <td class="text-center"><input id="review_vwb" style="border: none;" type="text" class="form-control-plaintext p-0" value="N/A" disabled> </td>
                                                  <td class="text-left">ml</td>
                                                </tr>
                                                <tr class="text-right">
                                                  <td class="text-left">Hct blood</td>
                                                  <td class="text-center"><input id="review_hct_blood" style="border: none;" type="text" class="form-control-plaintext p-0" value="N/A" disabled> </td>
                                                  
                                                </tr>
                                                <tr class="text-right">
                                                  <td class="text-left">Blood volume</td>
                                                  <td class="text-center"><input id="review_blood_volume" style="border: none;" type="text" class="form-control-plaintext p-0" value="N/A" disabled> </td>
                                                  <td class="text-left">ml</td>
                                                </tr>
                                                <tr class="text-right">
                                                  <td class="text-left">F-corrected blood volume</td>
                                                  <td class="text-center"><input id="review_cor_blood_volume" style="border: none;" type="text" class="form-control-plaintext p-0" value="N/A" disabled> </td>                                                  
                                                  <td class="text-left">ml</td>
                                                </tr>                                                
                                                <tr class="text-right">
                                                  <td class="text-left">Red cell volume/weight, Vwb/wt</td>
                                                  <td class="text-center"><input id="review_vwb_over_wt" style="border: none;" type="text" class="form-control-plaintext p-0" value="N/A" disabled> </td>                                                  
                                                  <td class="text-left">ml/kg</td>
                                                </tr>
                                                <tr class="text-right">
                                                  <td class="text-left">Blood volume/weight</td>
                                                  <td class="text-center"><input id="review_vol_over_wt" style="border: none;" type="text" class="form-control-plaintext p-0" value="N/A" disabled> </td>
                                                  <td class="text-left">ml/kg</td>
                                                </tr>
                                                
                                              </tbody>
                                            </table>
                                          </div>
                                      </div>
                                      
                                      <!-- <div class="container-fluid w-100">
                                        <a href="#" class="btn btn-primary float-right mt-4 ml-2"><i class="fa fa-print mr-1"></i>Print</a>
                                        <a href="#" class="btn btn-success float-right mt-4"><i class="fa fa-share mr-1"></i>Save Preview</a>
                                      </div> -->
                                  </div>
                              </div>
                          </div>
                        </div>
                      </section>
                      
                      
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <?php echo date("Y"); ?> <a href="#" target="_blank">Dr. Abaye's Lab, SBBS, UHAS</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Abaye-et-al <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <script src="asset/jquery/jquery-1.9.1.js"></script>
  <!-- plugins:js -->
  <script src="asset/vendors/js/vendor.bundle.base.js"></script>
  <script src="asset/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <!-- <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script> -->
  <!-- <script src="js/settings.js"></script> -->
  <!-- <script src="js/todolist.js"></script> -->
  <!-- endinject -->
  <!-- Custom js for this page-->
  
  <script src="asset/js/MatrixCalculator.js"></script>
  <script src="asset/js/wizard.js"></script>
  <script src="asset/js/js-grid.js"></script>
  <script src="asset/js/dropify.js"></script>  
  <script src="asset/js/custom.js"></script>
  <script src="asset/js/modal-demo.js"></script>
  
  <!-- End custom js for this page-->
</body>

</html>
