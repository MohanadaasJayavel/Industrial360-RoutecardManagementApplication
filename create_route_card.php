<?php
include('middleware.php');
include('./db_connection.php');

if(isset($_POST['register']))
{
    $route_customer_id=$_POST['route_customer_id'];
    $route_wire_dia=$_POST['route_wire_dia'];
    $comp_name=$_POST['route_diagram_id'];
    $route_diagram_rev_no=$_POST['route_diagram_rev_no'];
    $route_description=$_POST['route_description'];
    $route_material_name=$_POST['route_material_name'];
    $route_grade=$_POST['route_grade'];
    $route_setter_name=$_POST['route_setter_name'];
    $route_machine_name=$_POST['route_machine_name'];
    $val1_1=$_POST['od_unit'];
    $val1_2=$_POST['od_min'];
    $val1_3=$_POST['od_val'];
    $val1_4=$_POST['od_max'];
    $val1_5=$_POST['od_c_ref'];
    $val2_1=$_POST['id_unit'];
    $val2_2=$_POST['id_min'];
    $val2_3=$_POST['id_val'];
    $val2_4=$_POST['id_max'];
    $val2_5=$_POST['id_c_ref'];
    $val3_1=$_POST['total_coil_unit'];
    $val3_2=$_POST['total_coil_min'];
    $val3_3=$_POST['total_coil_val'];
    $val3_4=$_POST['total_coil_max'];
    $val3_5=$_POST['total_coil_c_ref'];
    $val4_1=$_POST['active_coil_unit'];
    $val4_2=$_POST['active_coil_min'];
    $val4_3=$_POST['active_coil_val'];
    $val4_4=$_POST['active_coil_max'];
    $val4_5=$_POST['active_coil_c_ref'];
    $val5_1=$_POST['free_lenth_unit'];
    $val5_2=$_POST['free_lenth_min'];
    $val5_3=$_POST['free_lenth_val'];
    $val5_4=$_POST['free_lenth_max'];
    $val5_5=$_POST['free_lenth_c_ref'];
    $val6_1=$_POST['load_1_unit'];
    $val6_2=$_POST['load_1_min'];
    $val6_3=$_POST['load_1_val'];
    $val6_4=$_POST['load_1_max'];
    $val6_5=$_POST['load_1_c_ref'];
    $val7_1=$_POST['load_2_unit'];
    $val7_2=$_POST['load_2_min'];
    $val7_3=$_POST['load_2_val'];
    $val7_4=$_POST['load_2_max'];
    $val7_5=$_POST['load_2_c_ref'];
    $val8_1=$_POST['load_3_unit'];
    $val8_2=$_POST['load_3_min'];
    $val8_3=$_POST['load_3_val'];
    $val8_4=$_POST['load_3_max'];
    $val8_5=$_POST['load_3_c_ref'];
    $val9_1=$_POST['spring_rate_unit'];
    $val9_2=$_POST['spring_rate_min'];
    $val9_3=$_POST['spring_rate_val'];
    $val9_4=$_POST['spring_rate_max'];
    $val9_5=$_POST['spring_rate_c_ref'];
    $route_wiring_direction=$_POST['route_wiring_direction'];
    $route_heat_treatment=$_POST['route_heat_treatment'];
    $route_scragging=$_POST['route_scragging'];
    $route_end_condition=$_POST['route_end_condition'];
    $route_cleaning=$_POST['route_cleaning'];
    $route_surface_finish=$_POST['route_surface_finish'];
    $route_checking_inspection=$_POST['route_checking_inspection'];
    $route_packing_instruction=$_POST['route_packing_instruction'];
    
    
    
    
	   $query="insert into mst_route_card (id,route_customer_id,route_wire_dia,route_diagram_id,route_diagram_rev_no,route_description,route_material_name,route_grade,route_setter_name,route_machine_name,
    od_unit,od_min,od_val,od_max,od_c_ref,
    id_unit,id_min,id_val,id_max,id_c_ref,
    total_coil_unit,total_coil_min,total_coil_val,total_coil_max,total_coil_c_ref,
    active_coil_unit,active_coil_min,active_coil_val,active_coil_max,active_coil_c_ref,
    free_lenth_unit,free_lenth_min,free_lenth_val,free_lenth_max,free_lenth_c_ref,
    load_1_unit,load_1_min,load_1_val,load_1_max,load_1_c_ref,
    load_2_unit,load_2_min,load_2_val,load_2_max,load_2_c_ref,
    load_3_unit,load_3_min,load_3_val,load_3_max,load_3_c_ref,
    spring_rate_unit,spring_rate_min,spring_rate_val,spring_rate_max,spring_rate_c_ref,
  route_wiring_direction,route_heat_treatment,route_scragging,route_end_condition,route_cleaning,route_surface_finish,route_checking_inspection
  ,route_packing_instruction,is_active,is_removed)
       values('','$route_customer_id','$route_wire_dia','$comp_name','$route_diagram_rev_no', '$route_description', '$route_material_name', '$route_grade', '$route_setter_name','$route_machine_name',
       '$val1_1','$val1_2','$val1_3','$val1_4','$val1_5',
       '$val2_1','$val2_2','$val2_3','$val2_4','$val2_5',
       '$val3_1','$val3_2','$val3_3','$val3_4','$val3_5',
       '$val4_1','$val4_2','$val4_3','$val4_4','$val4_5',
       '$val5_1','$val5_2','$val5_3','$val5_4','$val5_5',
       '$val6_1','$val6_2','$val6_3','$val6_4','$val6_5',
       '$val7_1','$val7_2','$val7_3','$val7_4','$val7_5',
       '$val8_1','$val8_2','$val8_3','$val8_4','$val8_5',
       '$val9_1','$val9_2','$val9_3','$val9_4','$val9_5',
       '$route_wiring_direction','$route_heat_treatment', '$route_scragging', '$route_end_condition', '$route_cleaning', '$route_surface_finish', 
       '$route_checking_inspection','$route_packing_instruction',true,false )";

      
     //  if(mysqli_query($con, $query)){
        // Obtain last inserted id
       // $last_id = mysqli_insert_id($con);
       // echo "Records inserted successfully. Last inserted ID is: " . $last_id;
   // } else{
        //echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    //}
    
   

          if ($con->query($query) === TRUE) {
            $last_id = $con->insert_id;
          
          $_SESSION['msg'] = '<div class="alert alert-success d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                      <div>
                      Record Added Sucessfully  Your Reference ID  is: '. $last_id.';
                      </div>
                  </div>';
                  
                  header('location:route_card_list.php');

        }
     
     else
     {
      $_SESSION['msg'] = '<div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
          <div>
          Record Not Added
          </div>
      </div>';
      header('location:route_card_list.php');

     }
    

      
    
      
}

 include('./header.php'); 
?>  


  <main>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                      <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Route Card</h3></div>
                      <div class="card-body">
                          <form method="POST" action="create_route_card.php">
                          <table class="table table-bordered text text-center" >
                             <tr> 
                                <th style="text-align: center;" >CUSTOMER </th>
                                  <td colspan="5" >
                                        <div class="col-md-15">
                                        <div class="form-floating mb-3 mb-md-0">
                                          <select class="form-control select2" name="route_customer_id"  style="width: 100%;" onchange="getDiagrams(this);">
                                            <option value="" selected>------SELECT CUSTOMER------</option>
                                                      
                                                      <?php
                                                          $dest_query = mysqli_query($con,"select * from mst_customers where is_active=true and is_removed=false");
                                                          while($row=mysqli_fetch_array($dest_query)){
                                                              echo '<option value="'.$row['id'].'">'.$row['comp_name'].'</option>';
                                                          }
                                                      ?>
                                          
                                          </select>
                                         </div>
                                    </div>
                                    </td>
                                    
                                                        </tr>
                                                        <tr>
                                                        <th> DIAGRAM </th>
                               <td colspan="5">
                               <div class="col-md-15">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <select class="form-control select2" name="route_diagram_id"  id="route_diagram_id" style="width: 100%;">
                                         <option value="" selected>------SELECT DIAGRAM------</option>
                                                  
                                                  
                                          
                                        </select>
                                    </div>
                               </div>
                            </tr>
                            <tr>
                            <th style="text-align: center;">Machine </th>
                                  <td colspan="2">
                                  <div class="form-floating mb-3 mb-md-0">
                                      <select class="form-control select2" name="route_machine_name"  style="width: 100%;">
                              
                                  <option value="  ">----SELECT MACHINE----</option>
                                  <?php
                                    $dest_query = mysqli_query($con,"select name FROM mst_base WHERE type = 'machine' and is_active=true and is_removed=false");
                                    while($row=mysqli_fetch_array($dest_query)){
                                        echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                    }
                                ?>
                              </select>
                                  </div>
                              </td>
                              <th style="text-align: center;">Machine </th>
                                  <td colspan="2">
                                  <div class="form-floating mb-3 mb-md-0">
                                      <select class="form-control select2" name="route_setter_name"  style="width: 100%;">
                              
                                  <option value="  ">----MACHINE SETTER----</option>
                                  <?php
                                    $dest_query = mysqli_query($con,"select emp_name from mst_employee where emp_designation_id=6 ");
                                    while($row=mysqli_fetch_array($dest_query)){
                                        echo '<option value="'.$row['emp_name'].'">'.$row['emp_name'].'</option>';
                                    }
                                ?>
                              </select>
                                  </div>
                              </td>
                              </tr>
                            <tr>
                            <th style="text-align: center;">WIRE DIA</th>
                                  <td colspan="2">
                               <div class="row mb-0">
                                      <div class="col-md-12">
                                          <div class="form-floating mb-0 mb-md-0">
                                              <input class="form-control"  type="text" name="route_wire_dia" />
                                            </div>
                                      </div>
                                  </div>
                              </td>
                             
                              <th>DRG.REV</th>
                              <td colspan="2">
                              <div class="row mb-0">
                                      <div class="col-md-12">
                                          <div class="form-floating mb-0 mb-md-0">
                                              <input class="form-control"  type="textarea" name="route_diagram_rev_no" />
                                            </div>
                                      </div>
                                  </div></td>
                              
                            </tr>
                            <tr>
                              <th> DESCRIPTION </th>
                              <td colspan="5">
                              <div class="row mb-0">
                                      <div class="col-md-12">
                                          <div class="form-floating mb-0 mb-md-0">
                                          <textarea class="form-control" name="route_description" rows="10"></textarea> 
                                            </div>
                                      </div>
                                  </div>
                                  </td>
                            
                              
                            </tr>
 
                            <tr>
                              <th>MATERIAL </th>
                              <td colspan="2">

                              <div class="form-floating mb-3 mb-md-0">
                                      <select class="form-control select2" name="route_material_name"  style="width: 100%;">
                              
                                  <option value="  ">----SELECT MATERIAL----</option>
                                  

                                  <?php
                                    $dest_query = mysqli_query($con,"select name FROM mst_base WHERE type = 'material' and is_active=true and is_removed=false");
                                    while($row=mysqli_fetch_array($dest_query)){
                                        echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                    }
                                ?>
                              </select>
                                  </div>
                              </td>
                              <th>GRADE </th>
                              <td colspan="2">
                              <div class="row mb-0">
                                      <div class="col-md-12">
                                          <div class="form-floating mb-0 mb-md-0">
                                          <input class="form-control"  type="textarea" name="route_grade" />
                                            </div>
                                      </div>
                                  </div>

                              </td>
                              
                            </tr>
                            <tr>
                              <td colspan="6" style="text-align: center;"></td>
                              
                            </tr>
                            <tr >
                            <th width="20%">DIMENSION</th>
                              <th width="8%">UNIT</th>
                              <th width="12%">MIN</th>
                              <th width="12%">VALUE</th>
                              <th width="12%">MAX</th>
                              <th width="20%">CRITICAL / REF </th>
                            </tr>
                            <tr>
                              <th>OD</th>
                              <td>
                                <select name=od_unit>
                                <option value="  ">-- UNIT--</option>
                                <?php
                                    $dest_query = mysqli_query($con,"select name FROM mst_base WHERE type = 'unit' and is_active=true and is_removed=false ");
                                    while($row=mysqli_fetch_array($dest_query)){
                                        echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                    }
                                ?>
                            
                                </select>
                              </td>
                              <td><input type="text" name="od_min" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="od_val" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="od_max" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="od_c_ref" size="5"  /> </td>

                            
                              
                            </tr>
                            <tr>
                              <th>ID</th>
                              <td>
                              <select name=id_unit>
                                <option value="  ">-- UNIT--</option>
                                <?php
                                    $dest_query = mysqli_query($con,"select name FROM mst_base WHERE type = 'unit' and is_active=true and is_removed=false ");
                                    while($row=mysqli_fetch_array($dest_query)){
                                        echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                    }
                                ?>
                            
                                </select>
                              </td>
                              <td><input type="text" name="id_min" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="id_val" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="id_max" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="id_c_ref" size="5"  /> </td>
                            </tr>
                            <tr>
                              <th>TOTAL COIL</th>
                              <td><input type="text" name="total_coil_unit" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="total_coil_min" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="total_coil_val" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="total_coil_max" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="total_coil_c_ref" size="5"  /> </td>
                            </tr>
                            <tr>
                              <th>ACTIVE COIL</th>
                              <td><input type="text" name="active_coil_unit" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="active_coil_min" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="active_coil_val" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="active_coil_max" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="active_coil_c_ref" size="5"  /> </td>
                            </tr>
                            <tr>
                              <th>FL</th>
                              <td>
                              <select name=free_lenth_unit>
                                <option value="  ">-- UNIT--</option>
                                <?php
                                    $dest_query = mysqli_query($con,"select name FROM mst_base WHERE type = 'unit' and is_active=true and is_removed=false ");
                                    while($row=mysqli_fetch_array($dest_query)){
                                        echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                    }
                                ?>
                            
                                </select>
                              </td>
                              <td><input type="text" name="free_lenth_min" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="free_lenth_val" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="free_lenth_max" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="free_lenth_c_ref" size="5"  /> </td>
                            </tr>
                            
                            <tr>
                              <tH style="text-align: left;">LOAD @</tH>
                              <td>
                              <select name=load_1_unit>
                                <option value="  ">-- UNIT--</option>
                                <?php
                                    $dest_query = mysqli_query($con,"select name FROM mst_base WHERE type = 'unit' and is_active=true and is_removed=false ");
                                    while($row=mysqli_fetch_array($dest_query)){
                                        echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                    }
                                ?>
                            
                                </select>
                              </td>
                              <td><input type="text" name="load_1_min" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_1_val" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_1_max" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_1_c_ref" size="5"  /> </td>
                            </tr>
                            <tr>
                              <tH style="text-align: left;" >LOAD @  </tH>
                              <td>
                              <select name=load_2_unit>
                                <option value="  ">-- UNIT--</option>
                                <?php
                                    $dest_query = mysqli_query($con,"select name FROM mst_base WHERE type = 'unit' and is_active=true and is_removed=false ");
                                    while($row=mysqli_fetch_array($dest_query)){
                                        echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                    }
                                ?>
                            
                                </select>
                              </td>
                              <td><input type="text" name="load_2_min" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_2_val" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_2_max" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_2_c_ref" size="5"  /> </td>
                            </tr>
                            <tr>
                              <tH style="text-align: left;">LOAD @</tH>
                              <td>
                              <select name=load_3_unit>
                                <option value="  ">-- UNIT--</option>
                                <?php
                                    $dest_query = mysqli_query($con,"select name FROM mst_base WHERE type = 'unit' and is_active=true and is_removed=false ");
                                    while($row=mysqli_fetch_array($dest_query)){
                                        echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                    }
                                ?>
                            
                                </select>
                              </td>
                              <td><input type="text" name="load_3_min" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_3_val" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_3_max" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_3_c_ref" size="5"  /> </td>
                            </tr>
                            <tr>
                              <tH>SPRING RATE</tH>
                              <td>
                              <select name=spring_rate_unit>
                                <option value="  ">-- UNIT--</option>
                                <?php
                                    $dest_query = mysqli_query($con,"select name FROM mst_base WHERE type = 'unit' and is_active=true and is_removed=false ");
                                    while($row=mysqli_fetch_array($dest_query)){
                                        echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                    }
                                ?>
                            
                                </select>
                              </td>
                              <td><input type="text" name="spring_rate_min" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="spring_rate_val" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="spring_rate_max" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="spring_rate_c_ref" size="5"  /> </td>
                            </tr>
                            
                            <tr>
                              <tH>WIRING DIRECTION </tH>
                              <td colspan="2">
                                <div class="row mb-0">
                                      <div class="col-md-12">
                                          <div class="form-floating mb-0 mb-md-0">
                                          <input class="form-control"  type="textarea" name="route_wiring_direction" /> 
                                            </div>
                                      </div>
                                  </div>
                                  </td>
                              
                            
                              <tH>HEAT TREATMENT </tH>
                              <td colspan="2">
                              <div class="row mb-0">
                                      <div class="col-md-12">
                                          <div class="form-floating mb-0 mb-md-0">
                                          <input class="form-control"  type="textarea" name="route_heat_treatment" />
                                            </div>
                                      </div>
                                  </div>
                                  </td>
                            </tr>
                            <tr>
                              <tH>SCRAGGING </tH>
                              <td colspan="2"><div class="row mb-0">
                                      <div class="col-md-12">
                                          <div class="form-floating mb-0 mb-md-0">
                                          <input class="form-control"  type="textarea" name="route_scragging" />
                                            </div>
                                      </div>
                                  </div>
                                  </td>
                           
                              <tH>END CONDITION </tH>
                              <td colspan="2"><div class="row mb-0">
                                      <div class="col-md-12">
                                          <div class="form-floating mb-0 mb-md-0">
                                          <input class="form-control"  type="textarea" name="route_end_condition" /> 
                                            </div>
                                      </div>
                                  </div>
                                  </td>
                            </tr>
                            <tr>
                              <tH>CLEANING </tH>
                              <td colspan="2">
                              <div class="row mb-0">
                                      <div class="col-md-12">
                                          <div class="form-floating mb-0 mb-md-0">
                                          <input class="form-control"  type="textarea" name="route_cleaning" /> 
                                            </div>
                                      </div>
                                  </div>
                                  </td>
                            
                              <tH>SURFACE FINISH </tH>
                              <td colspan="2">
                              <div class="row mb-0">
                                      <div class="col-md-12">
                                          <div class="form-floating mb-0 mb-md-0">
                                          <input class="form-control"  type="textarea" name="route_surface_finish" /> </div>
                                      </div>
                                  </div>
                                  </td>
                            </tr>
                            <tr>
                              <tH>CHECKING / INSPECTION </tH>
                              <td colspan="2"><div class="row mb-0">
                                      <div class="col-md-12">
                                          <div class="form-floating mb-0 mb-md-0">
                                          <input class="form-control"  type="textarea" name="route_checking_inspection" />   </div>
                                      </div>
                                  </div>
                                  </td>
                            
                              <tH>PACKING INSTRUCTION </tH>
                              <td colspan="2"><div class="row mb-0">
                                      <div class="col-md-12">
                                          <div class="form-floating mb-0 mb-md-0">
                                          <input class="form-control"  type="textarea" name="route_packing_instruction" /> </div>
                                      </div>
                                  </div>
                                  </td>
                            </tr>
                                                </table>
                            <div class="row mb-3">                                               
                                <div class="d-grid " >
                                <input type="submit" id="btn" class="btn btn-md btn-primary"  value="Create RouteCard"  name="register" />
                            </div>
                      </div> 
                     </form>
                    </div>
                                    
                    </div>
                    </div>
                   </div>
                   </div>
                </main>
           
<?php include('./footer.php'); ?>  

<script type="text/javascript">
function getDiagrams(val)
{
 // alert(val.value);
  $.ajax({
  method: "GET",
  url: "get_diagram.php",
  data: { id: val.value }
})
  .done(function( msg ) {
  //  alert( "Data Saved: " + msg );
 $('#route_diagram_id').html(msg);
  });
}
</script>
