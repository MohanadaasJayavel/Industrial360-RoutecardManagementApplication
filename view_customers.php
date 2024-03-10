<?php
include('middleware.php');
include('./db_connection.php');


// $emp_view_query='select mc.*, mr.id role_id, mr.role_name,
// md.id designation_id, md.designation_name from mst_employee me
// left join mst_roles mr on mr.id = me.emp_role_id
// left join mst_designation md on md.id = me.emp_designation_id
// where me.id='.$_GET['id'];

$cust_view_query='select * from mst_customers where id='.$_GET['id'];

$eqry=mysqli_query($con,$cust_view_query);

$row=mysqli_fetch_array($eqry);

 include('./header.php'); 
 ?>


                <main>
                <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body"> 
                    
                  <div class="row">
                        <div class="col-sm-3">
                         <h6 class="mb-0"><label for="comp_name">Company Name</label></h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $row['comp_name']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0"><label for="comp_contact_no">Contact No</label></h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $row['comp_contact_no']; ?>
                        </div>
                    </div>
                  <hr>
                  <div class="row">
                        <div class="col-sm-3">
                         <h6 class="mb-0">Email ID</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $row['comp_email_address']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                         <h6 class="mb-0">Website link</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $row['comp_web_link']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                         <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $row['comp_address_1']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                         <h6 class="mb-0">Shipping Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $row['comp_shipaddress_1']; ?>
                        </div>
                    </div>
                   
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                         <h6 class="mb-0">GSTIN</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $row['comp_gstin']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                         <h6 class="mb-0">Contact person name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $row['cont_person_name']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                         <h6 class="mb-0">Contact No</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $row['cont_person_mobile_no']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                         <h6 class="mb-0">Email ID</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $row['cont_person_email_address']; ?>
                        </div>
                    </div>
                   
                </main>
           
<?php include('./footer.php'); ?>


