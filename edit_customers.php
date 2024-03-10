<?php 
include('middleware.php');
include('./db_connection.php');

if(isset($_POST['update']))
{
    $comp_name=$_POST['comp_name'];
    $comp_contact_no=$_POST['comp_contact_no'];
    $comp_email_address=$_POST['comp_email_address'];
    $comp_web_link=$_POST['comp_web_link'];
    $comp_address_1=$_POST['comp_address_1'];
    $comp_shipaddress_1=$_POST['comp_shipaddress_1'];
    $comp_gstin=$_POST['comp_gstin'];
    $cont_person_name=$_POST['cont_person_name'];
    $cont_person_mobile_no=$_POST['cont_person_mobile_no'];
    $cont_person_email_address=$_POST['cont_person_email_address'];
    $cust_id=$_POST['cust_db_id'];
    
  

  $query="update mst_customers set  ";
                            $query.="comp_name='".$comp_name."',";
                            $query.="comp_contact_no='".$comp_contact_no."',";
                            $query.="comp_email_address='".$comp_email_address."',";
                            $query.="comp_web_link='".$comp_web_link."',";
                            $query.="comp_address_1='".$comp_address_1."',";
                            $query.="comp_shipaddress_1='".$comp_shipaddress_1."',";
                            $query.="comp_gstin='".$comp_gstin."',";
                            $query.="cont_person_name='".$cont_person_name."',";
                            $query.="cont_person_mobile_no='".$cont_person_mobile_no."',";
                            $query.="cont_person_email_address='".$cont_person_email_address."' where id=".$cust_id;
                            

     
      if( mysqli_query($con,$query)){
       
        $_SESSION['msg'] = '<div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                    Record Updated Sucessfully
                    </div>
                </div>';
                header('location:customers.php');

       }
       else
       {
        $_SESSION['msg'] = '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
            Record Not Updated
            </div>
        </div>';
        header('location:customers.php');

       }
    
      
}

$cust_view_query= 'select * from mst_customers where id='.$_GET['id'];
// $emp_view_query='select me.*, mr.id role_id, mr.role_name,
// md.id designation_id, md.designation_name from mst_employee me
// left join mst_roles mr on mr.id = me.emp_role_id
// left join mst_designation md on md.id = me.emp_designation_id
// where me.id='.$_GET['id'];

$eqry=mysqli_query($con,$cust_view_query);

$data=mysqli_fetch_array($eqry);


include('./header.php'); 
?>


                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Customer</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="edit_customers.php" enctype="multipart/form-data">
                                            <h5>Company details</h5>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="text" name="comp_name"  value="<?php echo $data['comp_name']; ?>" placeholder="Enter your first name" />
                                                        <label for="inputFirstName"> Name</label>
                                                        <input type="hidden" name="cust_db_id" value="<?php echo $data['id']; ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control"  type="text" name="comp_contact_no" value="<?php echo $data['comp_contact_no']; ?>" placeholder="Enter your last name" />
                                                        <label for="inputLastName"> Contact no</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="text" name="comp_email_address"  value="<?php echo $data['comp_email_address']; ?>" placeholder="Enter your first name" />
                                                        <label for="inputFirstName"> Email ID</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control"  type="text" name="comp_web_link" value="<?php echo $data['comp_web_link']; ?>" placeholder="Enter your last name" />
                                                        <label for="inputLastName"> Web Link</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control"  type="text" name="comp_address_1"  value="<?php echo $data['comp_address_1']; ?>" placeholder="enter Address 1" />
                                                <label for="inputEmail"> Address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control"  type="text" name="comp_shipaddress_1"  value="<?php echo $data['comp_shipaddress_1']; ?>" placeholder="enter Shipping Address" />
                                                <label for="inputEmail"> Shipping Address</label>
                                            </div>
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control"  type="text" name="comp_gstin"  value="<?php echo $data['comp_gstin']; ?>" placeholder="enter GSTIN" />
                                                <label for="inputEmail">GSTIN</label>
                                            </div>
                                            <div class="row mb-3">
                                                <h5>Contact Person Details</h5>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="text" name="cont_person_name" value="<?php echo $data['cont_person_name']; ?>"  placeholder="Enter your  name" />
                                                        <label for="inputFirstName"> Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control"  type="tel"  name="cont_person_mobile_no" value="<?php echo $data['cont_person_mobile_no']; ?>" placeholder="Enter your last name" />
                                                        <label for="phone">Contact no </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">

                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control"  type="text" name="cont_person_email_address" value="<?php echo $data['cont_person_email_address']; ?>"  placeholder="Enter your email " />
                                                        <label for="inputLastName">Email ID</label>
                                                    </div>
                                                </div>
                                                
                                                
                                                 <div class="mt-4 mb-0">
                                                              <!-- <button type="button" class="btn btn-primary" align-end>Primary</button>-->
                                                 <div class="d-grid " >
                                                    <input type="submit" id="btn" class="btn btn-md btn-primary" value="Update Customer Details"  name="update"> </a>
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


