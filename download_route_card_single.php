<?php
include('middleware.php');
include('./db_connection.php');



 include('./header.php'); 
 ?>  


<main>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-7">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                      <div class="card-header"><h3 class="text-center font-weight-light my-4">View Route Card</h3>
                   </div>
                    
          <div class="card-body">
         
              <form method="POST" action="create_route_card.php">
               
              <div id="printMe">
                >-------------------All  Copyrights of this product  belongs to Sri Ram industries---------------------
              <table class="table table-bordered text text-center">
  <tr>
  
      
  
  <th width="180px" colspan="6">SRI RAM INDUSTRIES -  Route Card</th>
</tr>
  <tr> 
   <th style="text-align: center;" >Route card No</th>
    <td colspan="1" >
    <div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-1 mb-md-0">
              <input class="form-control"  type="text" name="created_at" value="<?php echo $row['id']; ?>"   placeholder="Enter diagram code" />  
                  
                </div>
          </div>
       </div>
      </td> 
      <th style="text-align: center;" >Machine</th>
      <td colspan="1" >
    <div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-1 mb-md-0">
              <input class="form-control"  type="text" name="created_at" value="<?php echo $row['route_machine_name']; ?>"   placeholder="Enter diagram code" />  
                  
                </div>
          </div>
       </div>
      </td>
      <th style="text-align: center;" >setter</th>
      <td colspan="2" >
    <div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-1 mb-md-0">
              <input class="form-control"  type="text" name="created_at" value="<?php echo $row['route_setter_name']; ?>"   placeholder="Enter diagram code" />  
                  
                </div>
          </div>
       </div>
      </td>
    </tr>           



 
 
 <tr> 
   <th style="text-align: center;" >CUSTOMER </th>
    <td colspan="5" >
    <div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-1 mb-md-0">
              <input class="form-control"  type="text" name="route_customer_id" value="<?php echo $row['comp_name']; ?>"   placeholder="Enter diagram code" />  
                  
                </div>
          </div>
       </div>
      </td>
   
   
 </tr>
 <tr>
   <th> DIAGRAM </th>
   <td colspan="5"align="left">
   <div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-1 mb-md-0">
              <?php echo $row1['dia_code']; ?>
              
                 
                </div>
          </div>
       </div></td>

</tr>
<tr>
   <th>DRG.REV</th>
   <td colspan="2">
   <div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
              <?php echo $row['route_diagram_rev_no']; ?>
                 
                </div>
          </div>
       </div></td>
       <th style="text-align: center;">WIRE DIA</th>
   <td colspan="2">
   <div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
              <?php echo $row['route_wire_dia']; ?>
                  
                </div>
          </div>
       </div>
   </td>
   
 </tr>
 <tr>
   <th> DESCRIPTION </th>
   <td colspan="5">
   <div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
              
              <textarea class="form-control" name="route_description" rows="10"><?php echo $row['route_description']; ?></textarea> 
                </div>
          </div>
       </div>
      </td>
 
   
 </tr>
 
 <tr>
   <th>MATERIAL </th>
   <td colspan="2">
   <?php echo $row['route_material_name']; ?>
     
   </td>
   <th>GRADE </th>
   <td colspan="2">
   <div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
              <?php echo $row['route_grade']; ?>
                </div>
          </div>
       </div>

   </td>
  
 </tr>
 <tr>
   <td colspan="6" style="text-align: center;"></td>
   
 </t>
 <tr>
   <th width="20%">DIMENSION</th>
   <th width="8%">UNIT</th>
   <th width="12%">MIN</th>
   <th width="12%">VALUE</th>
   <th width="12%">MAX</th>
   <th width="20%">CRITICAL / REF </th>
 </tr>
 <tr>
   <th>OD</th>
   <td><?php echo $row['od_unit']; ?> </td>
   <td><?php echo $row['od_min']; ?> </td>
   <td><?php echo $row['od_val']; ?> </td>
   <td><?php echo $row['od_max']; ?> </td>
   <td><?php echo $row['od_c_ref']; ?> </td>  
 </tr>
 <tr>
   <th>ID</th>
   <td><?php echo $row['id_unit']; ?> </td>
   <td><?php echo $row['id_min']; ?> </td>
   <td><?php echo $row['id_val']; ?> </td>
   <td><?php echo $row['id_max']; ?> </td>
   <td><?php echo $row['id_c_ref']; ?> </td>
 </tr>
 <tr>
   <th>TOTAL COIL</th>
   <td><?php echo $row['total_coil_unit']; ?> </td>
   <td><?php echo $row['total_coil_min']; ?> </td>
   <td><?php echo $row['total_coil_val']; ?> </td>
   <td><?php echo $row['total_coil_max']; ?> </td>
   <td><?php echo $row['total_coil_c_ref']; ?> </td>
 </tr>
 <tr>
   <th>ACTIVE COIL</th>
   <td><?php echo $row['active_coil_unit']; ?> </td>
   <td><?php echo $row['active_coil_min']; ?> </td>
   <td><?php echo $row['active_coil_val']; ?> </td>
   <td><?php echo $row['active_coil_max']; ?> </td>
   <td><?php echo $row['active_coil_c_ref']; ?> </td>
 </tr>
 <tr>
   <th>FL</th>
   <td><?php echo $row['free_lenth_unit']; ?> </td>
   <td><?php echo $row['free_lenth_min']; ?> </td>
   <td><?php echo $row['free_lenth_val']; ?> </td>
   <td><?php echo $row['free_lenth_max']; ?> </td>
   <td><?php echo $row['free_lenth_c_ref']; ?> </td>
 </tr>
 
 
 <tr>
   <tH style="text-align: left;">LOAD @</tH>
   <td><?php echo $row['load_1_unit']; ?> </td>
   <td><?php echo $row['load_1_min']; ?> </td>
   <td><?php echo $row['load_1_val']; ?> </td>
   <td><?php echo $row['load_1_max']; ?> </td>
   <td><?php echo $row['load_1_c_ref']; ?> </td>
 <tr>
   <tH style="text-align: left;">LOAD @</tH>
   <  <td><?php echo $row['load_1_unit']; ?> </td>
   <td><?php echo $row['load_2_min']; ?> </td>
   <td><?php echo $row['load_2_val']; ?> </td>
   <td><?php echo $row['load_2_max']; ?> </td>
   <td><?php echo $row['load_2_c_ref']; ?> </td>
 </tr>
 <tr>
   <tH style="text-align: left;">LOAD @</tH>
   <td><?php echo $row['load_3_unit']; ?> </td>
   <td><?php echo $row['load_3_min']; ?> </td>
   <td><?php echo $row['load_3_val']; ?> </td>
   <td><?php echo $row['load_3_max']; ?> </td>
   <td><?php echo $row['load_3_c_ref']; ?> </td>
 </tr>
 <tr>
   <tH>SPRING RATE</tH>  
   <td><?php echo $row['spring_rate_unit']; ?> </td>
   <td><?php echo $row['spring_rate_min']; ?> </td>
   <td><?php echo $row['spring_rate_val']; ?> </td>
   <td><?php echo $row['spring_rate_max']; ?> </td>
   <td><?php echo $row['spring_rate_c_ref']; ?> </td>
 </tr>
 
 <tr>
   <th  style="text-align: left;">WIRING DIRECTION </th>
   <td colspan="5"><div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
              <?php echo $row['route_wiring_direction']; ?>
              
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
              <?php echo $row['route_heat_treatment']; ?>
              
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
              <?php echo $row['route_scragging']; ?>
              
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
              <?php echo $row['route_end_condition']; ?>
             
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
              <?php echo $row['route_cleaning']; ?>
               
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
              <?php echo $row['route_surface_finish']; ?>
              
          </div>
       </div>
       </td>
 </tr>
 <tr>
   <tH>CHECKING / INSPECTION </tH>
   <td colspan="5"><div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
              <?php echo $row['route_checking_inspection']; ?>
              
          </div>
       </div>
       </td>
 </tr>
 <tr>
   <tH>PACKING INSTRUCTION </tH>
   <td colspan="5"><div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
              <?php echo $row['route_packing_instruction']; ?>
      
          </div>
       </div>
       </td>
 </tr>
 </table>
 
</div>
<button class="btn btn-md btn-primary" onclick="printDiv('printMe')">Print Route Card</button>






 
 
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                
           
<?php include('./footer.php'); ?>  
<script>
		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}
	</script>

