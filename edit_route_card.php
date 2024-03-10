<?php 
include('middleware.php');
include('./db_connection.php');

//$material_arr = array('SILVER_STEEL','STAINLESS_STEEL','SILVER_STEEL[POLISH]','STAINLESS_STEEL[POLISH]');


 if(isset($_POST['update']))
{
  
  $route_customer_id=$_POST['route_customer_id'];
  $route_wire_dia=$_POST['route_wire_dia'];
  $route_diagram_id=$_POST['route_diagram_id'];
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
    $route_db_id=$_POST['route_db_id'];
   
    

      $query="update mst_route_card set ";
  
        $query.="route_customer_id='".$route_customer_id."',";
        $query.="route_wire_dia='".$route_wire_dia."',";
        $query.="route_diagram_id='".$route_diagram_id."',";
        $query.="route_diagram_rev_no='".$route_diagram_rev_no."',";
        $query.="route_description='".$route_description."',";
        $query.="route_material_name='".$route_material_name."',";
        $query.="route_grade='".$route_grade."',";
        $query.="route_setter_name='".$route_setter_name."',";
        $query.="route_machine_name='".$route_machine_name."',";
        $query.="od_unit='".$val1_1."',";
        $query.="od_min='".$val1_2."',";
        $query.="od_val='".$val1_3."',";
        $query.="od_max='".$val1_4."',";
        $query.="od_c_ref='".$val1_5."',";
        $query.="id_unit='".$val2_1."',";
        $query.="id_min='".$val2_2."',";
        $query.="id_val='".$val2_3."',";
        $query.="id_max='".$val2_4."',";
        $query.="id_c_ref='".$val2_5."',";
        $query.="total_coil_unit='".$val3_1."',";
        $query.="total_coil_min='".$val3_2."',";
        $query.="total_coil_val='".$val3_3."',";
        $query.="total_coil_max='".$val3_4."',";
        $query.="total_coil_c_ref='".$val3_5."',";
        $query.="active_coil_unit='".$val4_1."',";
        $query.="active_coil_min='".$val4_2."',";
        $query.="active_coil_val='".$val4_3."',";
        $query.="active_coil_max='".$val4_4."',";
        $query.="active_coil_c_ref='".$val4_5."',";
        $query.="free_lenth_unit='".$val5_1."',";
        $query.="free_lenth_min='".$val5_2."',";
        $query.="free_lenth_val='".$val5_3."',";
        $query.="free_lenth_max='".$val5_4."',";
        $query.="free_lenth_c_ref='".$val5_5."',";
        $query.="load_1_unit='".$val6_1."',";
        $query.="load_1_min='".$val6_2."',";
        $query.="load_1_val='".$val6_3."',";
        $query.="load_1_max='".$val6_4."',";
        $query.="load_1_c_ref='".$val6_5."',";
        $query.="load_2_unit='".$val7_1."',";
        $query.="load_2_min='".$val7_2."',";
        $query.="load_2_val='".$val7_3."',";
        $query.="load_2_max='".$val7_4."',";
        $query.="load_2_c_ref='".$val7_5."',";
        $query.="load_3_unit='".$val8_1."',";
        $query.="load_3_min='".$val8_2."',";
        $query.="load_3_val='".$val8_3."',";
        $query.="load_3_max='".$val8_4."',";
        $query.="load_3_c_ref='".$val8_5."',";
        $query.="spring_rate_unit='".$val9_1."',";
        $query.="spring_rate_min='".$val9_2."',";
        $query.="spring_rate_val='".$val9_3."',";
        $query.="spring_rate_max='".$val9_4."',";
        $query.="spring_rate_c_ref='".$val9_5."',";
        $query.="route_wiring_direction='".$route_wiring_direction."',";
        $query.="route_heat_treatment='".$route_heat_treatment."',";
        $query.="route_scragging='".$route_scragging."',";
        $query.="route_end_condition='".$route_end_condition."',";
        $query.="route_surface_finish='".$route_surface_finish."',";
        $query.="route_checking_inspection='".$route_checking_inspection."',";
        $query.="route_packing_instruction='".$route_packing_instruction."' where id=".$route_db_id;

      
     
      if( mysqli_query($con,$query)){
       
        $_SESSION['msg'] = '<div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                    Record Updated Sucessfully
                    </div>
                </div>';
                header('location:route_card_list.php');

       }
       else
       {
        $_SESSION['msg'] = '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
            Record Not Updated
            </div>
        </div>';
        header('location:route_card_list.php');

       }
    
     
}


$route_view_query='select * from mst_route_card where id='.$_GET['id'];

$eqry=mysqli_query($con,$route_view_query);

$data=mysqli_fetch_array($eqry);


$diag_view_query='select a.*, b.comp_name,c.dia_code from mst_route_card a inner join mst_customers b on b.id=a.route_customer_id inner join mst_diagram c on c.id=a.route_diagram_id='.$_GET['id'];

       $eqry1=mysqli_query($con,$diag_view_query);

  
    $row1=mysqli_fetch_array($eqry1);

    



include('./header.php'); 
?>  


<main>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-7">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                      <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Route Card</h3></div>
                      <div class="card-body">
                          <form method="POST" action="edit_route_card.php">
                          <table class="table table-bordered text text-center" >

              <tr>
                <th style="text-align: center;">Machine </th>
                      <td colspan="2">
                      <div class="form-floating mb-3 mb-md-0">
                          <select class="form-control select2" name="route_machine_name"  style="width: 100%;">
                  
                      <option value="  ">----SELECT MACHINE----</option>
                      <?php
                        $dest_query = mysqli_query($con,"select name FROM mst_base WHERE type = 'machine' and is_active=true and is_removed=false");
                        while($row=mysqli_fetch_array($dest_query)){
                          if($row['id']==$data['route_machine_name'])
                            echo '<option selected value="'.$row['name'].'">'.$row['name'].'</option>';
                          else
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
                  
                      <option value=" "selected>----MACHINE SETTER----</option>
                      <?php
                        $dest_query = mysqli_query($con,"select emp_name from mst_employee where emp_designation_id=6 ");
                        while($row=mysqli_fetch_array($dest_query)){
                          if($row['id']==$data['route_setter_name'])
                            echo '<option selected value="'.$row['emp_name'].'">'.$row['emp_name'].'</option>';
                          else
                            echo '<option value="'.$row['emp_name'].'">'.$row['emp_name'].'</option>';
                        }
                    ?>
                  </select>
                      </div>
                  </td>
                  </tr>
 
 
 <tr> 
   <th style="text-align: center;" >CUSTOMER </th>
    <td colspan="5" >
    <div class="row mb-0">
          <div class="col-md-115">
              <div class="form-floating mb-3 mb-md-0">
              <select class="form-control select2" name="route_customer_id"  style="width: 100%;">
                                            <option value="" selected>------SELECT CUSTOMER------</option>
                                                      
                                                      <?php
                                                          $dest_query = mysqli_query($con,"select * from mst_customers where is_active=true and is_removed=false");
                                                          while($row=mysqli_fetch_array($dest_query)){
                                                            if($row['id']==$data['route_customer_id'])
                                                              echo '<option selected value="'.$row['id'].'">'.$row['comp_name'].'</option>';
                                                            else
                                                              echo '<option value="'.$row['id'].'">'.$row['comp_name'].'</option>';
                                                          }
                                                      ?>
                                          
                                          </select>
                  <input type="hidden" name="route_db_id" value="<?php echo $data['id']; ?>" />
                  
                </div>
          </div>
       </div>
      </td>
   
   
 </tr>
 <tr>
   <th> DIAGRAM </th>
   <td colspan="5">
   <div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
              <select class="form-control select2" name="route_diagram_id"  style="width: 100%;">
                                         <option value="" selected>------SELECT DIAGRAM------</option>
                                                  
                                                  <?php
                                                      $dest_query = mysqli_query($con,"select * from mst_diagram where is_active=true and is_removed=false");
                                                      while($row=mysqli_fetch_array($dest_query)){
                                                        if($row['id']==$data['route_diagram_id'])
                                                          echo '<option selected value="'.$row['id'].'">'.$row['dia_code'].'</option>';
                                                        else
                                                        echo '<option value="'.$row['id'].'">'.$row['dia_code'].'</option>';
                                                      }
                                                  ?>
                                          
                                        </select>
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
              <input class="form-control"  type="textarea" name="route_description" value="<?php echo $data['route_description']; ?>"/>
                </div>
          </div>
       </div>
      </td>
 
   
 </tr>
 <tr>
 <th style="text-align: center;">WIRE DIA</th>
   <td colspan="2">
   <div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
                  <input class="form-control"  type="text" name="route_wire_dia" value="<?php echo $data['route_wire_dia']; ?>"/>
                </div>
          </div>
       </div>
   </td>
   <th>DRG.REV</th>
   <td colspan="2">
   <div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
                  <input class="form-control"  type="textarea" name="route_diagram_rev_no"  value="<?php echo $data['route_diagram_rev_no']; ?>"/>
                </div>
          </div>
       </div></td>
  </tr>
 <tr>
   <th>MATERIAL </th>
   <td colspan="2">
   <select class="form-control select2" name="route_material_name"  style="width: 100%;">
                              
                              <option value="  ">----SELECT MATERIAL----</option>
                              

                              <?php
                                $dest_query = mysqli_query($con,"select name FROM mst_base WHERE type = 'material' and is_active=true and is_removed=false");
                                while($row=mysqli_fetch_array($dest_query)){
                                    echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                }
                            ?>
                          </select>
    
   </td>
   <th>GRADE </th>
   <td colspan="2">
   <div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
              <input class="form-control"  type="textarea" name="route_grade" value="<?php echo $data['route_grade']; ?>"/>
                </div>
          </div>
       </div>

   </td>
  
 </tr>
 <tr>
   <td colspan="6" style="text-align: center;"></td>
   
 </t>
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
                              <td><input type="text" name="id_min" value="<?php echo $data['od_unit']; ?>"  size="5" dir="rtl" /> </td>
                              <td><input type="text" name="od_min" value="<?php echo $data['od_min']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="od_val" value="<?php echo $data['od_val']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="od_max" value="<?php echo $data['od_max']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="od_c_ref" value="<?php echo $data['od_c_ref']; ?>"  size="5"  /> </td>

                            
                              
                            </tr>
                            <tr>
                              <th>ID</th>
                              <td><input type="text" name="id_unit" value="<?php echo $data['id_unit']; ?>"  size="5" dir="rtl" /> </td>
                              <td><input type="text" name="id_min" value="<?php echo $data['id_min']; ?>"  size="5" dir="rtl" /> </td>
                              <td><input type="text" name="id_val"  value="<?php echo $data['id_val']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="id_max" value="<?php echo $data['id_max']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="id_c_ref" value="<?php echo $data['id_c_ref']; ?>" size="5"  /> </td>
                            </tr>
                            <tr>
                              <th>TOTAL COIL</th>
                              <td><input type="text" name="total_coil_unit" value="<?php echo $data['total_coil_unit']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="total_coil_min"  value="<?php echo $data['total_coil_min']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="total_coil_val" value="<?php echo $data['total_coil_val']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="total_coil_max" value="<?php echo $data['total_coil_max']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="total_coil_c_ref" value="<?php echo $data['total_coil_c_ref']; ?>"  size="5"  /> </td>
                            </tr>
                            <tr>
                              <th>ACTIVE COIL</th>
                              <td><input type="text" name="active_coil_unit" value="<?php echo $data['active_coil_unit']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="active_coil_min" value="<?php echo $data['active_coil_min']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="active_coil_val" value="<?php echo $data['active_coil_val']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="active_coil_max" value="<?php echo $data['active_coil_max']; ?>"size="5" dir="rtl" /> </td>
                              <td><input type="text" name="active_coil_c_ref" value="<?php echo $data['active_coil_c_ref']; ?>" size="5"  /> </td>
                            </tr>
                            <tr>
                              <th>FL</th>
                              <td><input type="text" name="free_lenth_unit" value="<?php echo $data['active_coil_unit']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="free_lenth_min" value="<?php echo $data['free_lenth_min']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="free_lenth_val" value="<?php echo $data['free_lenth_val']; ?>"  size="5" dir="rtl" /> </td>
                              <td><input type="text" name="free_lenth_max" value="<?php echo $data['free_lenth_max']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="free_lenth_c_ref" value="<?php echo $data['free_lenth_c_ref']; ?>" size="5"  /> </td>
                            </tr>
                            
                            <tr>
                              <tH style="text-align: left;">LOAD @</tH>
                              <td><input type="text" name="load_1_unit" value="<?php echo $data['load_1_unit']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_1_min" value="<?php echo $data['load_1_min']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_1_val" value="<?php echo $data['load_1_val']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_1_max" value="<?php echo $data['load_1_max']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_1_c_ref" value="<?php echo $data['load_1_c_ref']; ?>" size="5"  /> </td>
                            </tr>
                            <tr>
                              <tH style="text-align: left;" >LOAD @  </tH>
                              <td><input type="text" name="load_2_unit" value="<?php echo $data['load_2_unit']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_2_min" value="<?php echo $data['load_2_min']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_2_val" value="<?php echo $data['load_2_val']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_2_max" value="<?php echo $data['load_2_max']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_2_c_ref" value="<?php echo $data['load_2_c_ref']; ?>" size="5"  /> </td>
                            </tr>
                            <tr>
                              <tH style="text-align: left;">LOAD @</tH>
                              <td><input type="text" name="load_3_unit" value="<?php echo $data['load_3_unit']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_3_min" value="<?php echo $data['load_3_min']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_3_val" value="<?php echo $data['load_3_val']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_3_max" value="<?php echo $data['load_3_max']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="load_3_c_ref" value="<?php echo $data['load_3_c_ref']; ?>" size="5"  /> </td>
                            </tr>
                            <tr>
                              <tH>SPRING RATE</tH>
                              <td><input type="text" name="spring_rate_unit"  value="<?php echo $data['spring_rate_unit']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="spring_rate_min"  value="<?php echo $data['spring_rate_min']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="spring_rate_val" value="<?php echo $data['spring_rate_val']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="spring_rate_max" value="<?php echo $data['spring_rate_max']; ?>" size="5" dir="rtl" /> </td>
                              <td><input type="text" name="spring_rate_c_ref" value="<?php echo $data['spring_rate_c_ref']; ?>"size="5"  /> </td>
                            </tr>
                            
 
 <tr>
   <tH>WIRING DIRECTION </tH>
   <td colspan="5"><div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
              <input class="form-control"  type="textarea" name="route_wiring_direction" value="<?php echo $data['route_wiring_direction']; ?>" /> 
                </div>
          </div>
       </div>
       </td>
   
 </tr>
 <tr>
   <tH>HEAT TREATMENT </tH>
   <td colspan="5">
   <div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
              <input class="form-control"  type="textarea" name="route_heat_treatment" value="<?php echo $data['route_heat_treatment']; ?>"/>
                </div>
          </div>
       </div>
       </td>
 </tr>
 <tr>
   <tH>SCRAGGING </tH>
   <td colspan="5"><div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
              <input class="form-control"  type="textarea" name="route_scragging" value="<?php echo $data['route_scragging']; ?>"/>
                </div>
          </div>
       </div>
       </td>
 </tr>
 <tr>
   <tH>END CONDITION </tH>
   <td colspan="5"><div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
              <input class="form-control"  type="textarea" name="route_end_condition"  value="<?php echo $data['route_end_condition']; ?>" /> 
                </div>
          </div>
       </div>
       </td>
 </tr>
 <tr>
   <tH>CLEANING </tH>
   <td colspan="5">
   <div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
              <input class="form-control"  type="textarea" name="route_cleaning"  value="<?php echo $data['route_cleaning']; ?>" /> 
                </div>
          </div>
       </div>
       </td>
 </tr>
 <tr>
   <tH>SURFACE FINISH </tH>
   <td colspan="5">
   <div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
              <input class="form-control"  type="textarea" name="route_surface_finish"  value="<?php echo $data['route_surface_finish']; ?>" /> </div>
          </div>
       </div>
       </td>
 </tr>
 <tr>
   <tH>CHECKING / INSPECTION </tH>
   <td colspan="5"><div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
              <input class="form-control"  type="textarea" name="route_checking_inspection"  value="<?php echo $data['route_checking_inspection']; ?>" />   </div>
          </div>
       </div>
       </td>
 </tr>
 <tr>
   <tH>PACKING INSTRUCTION </tH>
   <td colspan="5"><div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
              <input class="form-control"  type="textarea" name="route_packing_instruction"  value="<?php echo $data['route_packing_instruction']; ?>"/> </div>
          </div>
       </div>
       </td>
 </tr>
 </table>
 <div class="row mb-3">                                               
        <div class="d-grid " >
        <input type="submit" id="btn" class="btn btn-md btn-primary" value="Update RouteCard"  name="update" />
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
