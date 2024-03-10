<?php
include('middleware.php');
include('./db_connection.php');

if(isset($_POST['register']))
{
    $route_customer_id=$_POST['route_customer_id'];
    $route_wire_dia=$_POST['route_wire_dia'];
    $route_diagram_id=$_POST['route_diagram_id'];
    $route_diagram_rev_no=$_POST['route_diagram_rev_no'];
    $route_description=$_POST['route_description'];
    $route_material_name=$_POST['route_material_name'];
    $route_grade=$_POST['route_grade'];
    $route_wiring_direction=$_POST['route_wiring_direction'];
    $route_heat_treatment=$_POST['route_heat_treatment'];
    $route_scragging=$_POST['route_scragging'];
    $route_end_condition=$_POST['route_end_condition'];
    $route_cleaning=$_POST['route_cleaning'];
    $route_surface_finish=$_POST['route_surface_finish'];
    $route_checking_inspection=$_POST['route_checking_inspection'];
    $route_packing_instruction=$_POST['route_packing_instruction'];
    
    
    
    
	   $query="insert into mst_route_card (id,route_customer_id,route_wire_dia,route_diagram_id,route_diagram_rev_no,route_description,route_material_name,route_grade,
    route_wiring_direction,route_heat_treatment,route_scragging,route_end_condition,route_cleaning,route_surface_finish,route_checking_inspection,route_packing_instruction,is_active,is_removed)
       values('','$route_customer_id','$route_wire_dia','$route_diagram_id','$route_diagram_rev_no', '$route_description', '$route_material_name', '$route_grade', 
       '$route_wiring_direction','$route_heat_treatment', '$route_scragging', '$route_end_condition', '$route_cleaning', '$route_surface_finish', '$route_checking_inspection','$route_packing_instruction',true,false )";
  
     //  if(mysqli_query($con, $query)){
        // Obtain last inserted id
       // $last_id = mysqli_insert_id($con);
       // echo "Records inserted successfully. Last inserted ID is: " . $last_id;
   // } else{
        //echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    //}
    
    if( mysqli_query($con,$query)){
        
       
      $_SESSION['msg'] = '<div class="alert alert-success d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                  <div>
                  Record Added Sucessfully 
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
              <div class="col-lg-7">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                      <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Final Inspection Report </h3></div>
                      <div class="card-body">
                          <form method="POST" action="create_route_card.php">
                          <table class="table table-bordered text text-center" >
 
 
                          <tr>
        <th colspan="8" style="text-align: center;">SRI RAM INDUSTRIES</th>
       
    </tr>
    <tr>
        <td colspan="8"></td>
        
    </tr>
    <tr>
        <th colspan="8" style="text-align: center;">INSPECTION REPORT</th>
       
    </tr>
    <tr>
        <th >Customer:</th>
        <td colspan="4"></td>
        <th>Report No:</th>
        <td colspan="4"></td>
        
    </tr>
    <tr>
        <th >Drawing No:</th>
        <td colspan="4"></td>
        <th>Date:</th>
        <td colspan="3"></td>
    </tr>
    <tr>
        <th >Drawing Description:</th>
        <td colspan="4"></td>
        <th>Quantity:</th>
        <td colspan="4"></td>
    </tr>
    <tr>
        <td colspan="8"></td>
        
    </tr>
    <tr>
        <th>S.no</th>
        <th>CHARACTERISTICS</th>
        <th>Drawing Specification</th>
        
        <th colspan="5">Observed Values</th>
        
    </tr>
    <th width="60px">1</th>
        <th style="text-align: left;">Wire Diameter</th>
        <td></td>
        <td  width="12%"></td>
        <td  width="12%"></td>
        <td  width="12%"></td>
        <td  width="12%"></td>
        <td  width="12%"></td>
    </tr>
    <tr>
        <th>2</th>
        <th style="text-align: left;">Outer Diameter</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th > 3</th>
        <th style="text-align: left;">Mean Diameter</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th>4</th>
        <th style="text-align: left;">Inner Diameter</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th >5</th>
        <th style="text-align: left;">Free Length</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th >6</th>
        <th style="text-align: left;">Max. Block Length</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th >7</th>
        <th style="text-align: left;">Total Coils</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th >8</th>
        <th style="text-align: left;">Active Coils</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th >9</th>
        <th style="text-align: left;">LOAD @ mm ht.</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th>10</th>
        <th style="text-align: left;">LOAD @ mm ht.</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th>11</th>
        <th style="text-align: left;">LOAD @ mm ht.</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

    <tr>
        <th>12</th>
        <th style="text-align: left;">Spring Rate</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th>13</th>
        <th style="text-align: left;">Direction Of Winding</th>
        <td ></td>
        <td colspan="5"></td>
        
    </tr> <tr>
        <th>14</th>
        <th style="text-align: left;">End Condition</th>
        <td ></td>
        <td colspan="5"></td>
    </tr>
    <tr>
        <th>15</th>
        <th style="text-align: left;">Squareness</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

    <tr>
        <th>16</th>
        <th style="text-align: left;">Parellelism of Ends</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th>17</th>
        <th style="text-align: left;">Maretial</th>
        <td ></td>
        <td colspan="5"></td>
    </tr>
    <tr>
        <th>18</th>
        <th style="text-align: left;">heat Treatment</th>
        <td ></td>
        <td colspan="5"></td>
    </tr>

    <tr>
        <th>19</th>
        <th style="text-align: left;">Pre-Stressing (Scragging)</th>
        <td ></td>
        <td colspan="5"></td>
    </tr>
    <tr>
        <th>20</th>
        <th style="text-align: left;">Surface Finish</th>
        <td ></td>
        <td colspan="5"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr> 
   
</table>

   

<h3 style="text-align: left;">  <pre>  Inspected By                Authorized Signatory<pre></h3>
<br>
<h3 colspan="8" rowspan="3" style="text-align: left;">Remarks</h3>
    
    <br>
    <br>
    <br>
    <br>



<h3 style="text-align: justify;">-------------------------------------------------------------------------------------------------------------------------------------------</h3>
<Address><b>Address:</b>18F,Ranganayaki Nagar Extn,PeriyanickenPalayam,Coimbatore-641020</Address>
<address><b>PH:</b>91 9944931391 <b>Website:</b><u>WWW.sriramind.com </u> <b>E-mail:</b><u>info@sriramind.com</u></address>
<b>GSTIN:</b>33ABRF5668F12N
</form> 
 </table>
 <div class="row mb-3">                                               
        <div class="d-grid " >
        <input type="submit" id="btn"  value="Create RouteCard"  name="register" />
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
