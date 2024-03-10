main>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-7">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                      <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Route Card</h3></div>
                      <div class="card-body">
                          <form method="POST" action="create_route_card.php">
                          <table class="table table-bordered text text-center" >
 
 
 <tr> 
   <th style="text-align: center;" >CUSTOMER </th>
    <td colspan="2" >
    <div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-1 mb-md-0">
                  <input class="form-control"  type="text" name="route_customer_id" />
                  
                </div>
          </div>
       </div>
      </td>
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
   
 </tr>
 <tr>
   <th> DIAGRAM </th>
   <td colspan="2">
   <div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
                  <input class="form-control"  type="text" name="route_diagram_id" />
                </div>
          </div>
       </div></td>
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

   
     <select  name="route_material_name">
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
              <input class="form-control"  type="textarea" name="route_grade" />
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
   <td>
     <select name=name>
     <option value="  ">-- UNIT--</option>
     <?php
        $dest_query = mysqli_query($con,"select name FROM mst_base WHERE type = 'unit' and is_active=true and is_removed=false ");
        while($row=mysqli_fetch_array($dest_query)){
            echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
        }
    ?>
 
     </select>
   </td>
   <td><input type="text" name="dimension['od']['min']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['value']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['max']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['critical_ref']" size="5"  /> </td>

 
   
 </tr>
 <tr>
   <th>ID</th>
   <td>
     <select>
       <option>--UNIT--</option>
       <option>MM</option>
       <option>INCH</option>
       <option>CM</option>
       <option>KGF</option>
 
     </select>
   </td>
   <td><input type="text" name="dimension['od']['min']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['value']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['max']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['critical_ref']" size="5"  /> </td>
 </tr>
 <tr>
   <th>TOTAL COIL</th>
   <td><input type="text" name="dimension['od']['min']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['min']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['value']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['max']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['critical_ref']" size="5"  /> </td>
 </tr>
 <tr>
   <th>ACTIVE COIL</th>
   <td><input type="text" name="dimension['od']['min']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['min']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['value']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['max']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['critical_ref']" size="5"  /> </td>
 </tr>
 <tr>
   <th>FL</th>
   <td>
     <select>
       <option>--UNIT--</option>
       <option>MM</option>
       <option>INCH</option>
       <option>CM</option>
       <option>KGF</option>
 
     </select>
   </td>
   <td><input type="text" name="dimension['od']['min']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['value']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['max']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['critical_ref']" size="5"  /> </td>
 </tr>
 
 <tr>
   <tH style="text-align: left;">LOAD @</tH>
   <td>
     <select>
       <option>--UNIT--</option>
       <option>MM</option>
       <option>INCH</option>
       <option>CM</option>
       <option>KGF</option>
 
     </select>
   </td>
   <td><input type="text" name="dimension['od']['min']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['value']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['max']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['critical_ref']" size="5"  /> </td>
 </tr>
 <tr>
   <tH style="text-align: left;">LOAD @</tH>
   <td>
     <select>
       <option>--UNIT--</option>
       <option>MM</option>
       <option>INCH</option>
       <option>CM</option>
       <option>KGF</option>
 
     </select>
   </td>
   <td><input type="text" name="dimension['od']['min']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['value']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['max']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['critical_ref']" size="5"  /> </td>
 </tr>
 <tr>
   <tH style="text-align: left;">LOAD @</tH>
   <td>
     <select>
       <option>--UNIT--</option>
       <option>MM</option>
       <option>INCH</option>
       <option>CM</option>
       <option>KGF</option>
 
     </select>
   </td>
   <td><input type="text" name="dimension['od']['min']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['value']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['max']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['critical_ref']" size="5"  /> </td>
 </tr>
 <tr>
   <tH>SPRING RATE</tH>
   <td>
     <select>
       <option>--UNIT--</option>
       <option>KGF/MM</option>
       
 
     </select>
   </td>
   <td><input type="text" name="dimension['od']['min']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['value']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['max']" size="5" dir="rtl" /> </td>
   <td><input type="text" name="dimension['od']['critical_ref']" size="5"  /> </td>
 </tr>
 
 <tr>
   <tH>WIRING DIRECTION </tH>
   <td colspan="5"><div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
              <input class="form-control"  type="textarea" name="route_wiring_direction" /> 
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
              <input class="form-control"  type="textarea" name="route_heat_treatment" />
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
              <input class="form-control"  type="textarea" name="route_scragging" />
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
              <input class="form-control"  type="textarea" name="route_end_condition" /> 
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
              <input class="form-control"  type="textarea" name="route_cleaning" /> 
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
              <input class="form-control"  type="textarea" name="route_surface_finish" /> </div>
          </div>
       </div>
       </td>
 </tr>
 <tr>
   <tH>CHECKING / INSPECTION </tH>
   <td colspan="5"><div class="row mb-0">
          <div class="col-md-12">
              <div class="form-floating mb-0 mb-md-0">
              <input class="form-control"  type="textarea" name="route_checking_inspection" />   </div>
          </div>
       </div>
       </td>
 </tr>
 <tr>
   <tH>PACKING INSTRUCTION </tH>
   <td colspan="5"><div class="row mb-0">
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