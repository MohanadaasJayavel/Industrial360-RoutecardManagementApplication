<?php 

include('middleware.php');
include('./db_connection.php');



if(isset($_POST['register']))
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
  

    
	  $query="insert into mst_customers (id,comp_name,comp_contact_no,comp_email_address,comp_web_link,comp_address_1,comp_shipaddress_1, comp_gstin,cont_person_name,cont_person_mobile_no,cont_person_email_address,is_active,is_removed)
       values('','$comp_name','$comp_contact_no', '$comp_email_address', '$comp_web_link', '$comp_address_1', '$comp_shipaddress_1',
        '$comp_gstin',  '$cont_person_name', '$cont_person_mobile_no', '$cont_person_email_address',true,false)";

      
        if( mysqli_query($con,$query)){
       
            $_SESSION['msg'] = '<div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <div>
                        Record Added Sucessfully
                        </div>
                    </div>';
                    header('location:customers.php');
    
           }
           else
           {
            $_SESSION['msg'] = '<div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                Record Not Added
                </div>
            </div>';
            header('location:customers.php');
    
           }
        
        /*$result = mysqli_query($con,$query);
        if($con->query($query) === TRUE){
          echo "Record Added Sucessfully";
         }
         else
         {
          echo "Error" . $query . "<br/>" . $con->error;
         }
     
     echo $result = mysqli_query($con,$query);
      exit();
      if($con->query($query) === TRUE){
        echo "Record Added Sucessfully";
       }
       else
       {
        echo "Error" . $query . "<br/>" . $con->error;
       }*/


}


include('./header.php');
?>

                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Customer</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="create_customers.php">
                                            <h5>Company details</h5>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="text" name="comp_name" placeholder="Enter your first name" />
                                                        <label for="inputFirstName"> Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control"  type="text" name="comp_contact_no"placeholder="Enterconatct number" />
                                                        <label for="inputLastName"> Contact no</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="text" name="comp_email_address" placeholder="Enter email" />
                                                        <label for="inputFirstName"> Email ID</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control"  type="text" name="comp_web_link" placeholder="Enter web link" />
                                                        <label for="inputLastName"> Web Link</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control"  type="text" name="comp_address_1" placeholder="enter Address 1" />
                                                <label for="inputEmail"> Address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control"  type="text" name="comp_shipaddress_1" placeholder="enter Shipping Address" />
                                                <label for="inputEmail"> Shipping Address</label>
                                            </div>
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control"  type="text" name="comp_gstin" placeholder="enter GSTIN" />
                                                <label for="inputEmail">GSTIN</label>
                                            </div>
                                            <div class="row mb-3">
                                                <h5>Contact Person Details</h5>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="text" name="cont_person_name" placeholder="Enter your  name" />
                                                        <label for="inputFirstName"> Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control"  type="tel"  name="cont_person_mobile_no" placeholder="Enter mobile no" />
                                                        <label for="phone">Contact no </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">

                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control"  type="text" name="cont_person_email_address" placeholder="Enter your email " />
                                                        <label for="inputLastName">Email ID</label>
                                                    </div>
                                                </div>
                                                 <div class="mt-4 mb-0">
                                                              <!-- <button type="button" class="btn btn-primary" align-end>Primary</button>-->
                                                 <div class="d-grid " >
                                                 <input type="submit" id="btn" class="btn btn-md btn-primary" value="Create Customer Account"  name="register" />
                                                   <!-- <a class="btn btn-primary " href="#" value="customer_submit"> <i class="fa fa-plus" ></i> Create Account</a>-->
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


