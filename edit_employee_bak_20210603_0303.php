<?php 

include('middleware.php');
include('./db_connection.php');



include('./header.php'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Manage Customers</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Employee </h3></div>
                                    <div class="card-body">
                                        <form>
                                            <h5>Employee details</h5>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="text" name="emp_name" placeholder="Enter your first name" />
                                                        <label for="emp_name"> Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control"  type="text" name="emp_no" placeholder="Enter your last name" />
                                                        <label for="emp_no"> Employee No</label>
                                                    </div>
                                                </div>
                                                 
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="text"  name="emp_cont_no" placeholder="Enter your contact_no" />
                                                        <label for="emp_cont_no"> Contact No</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control"  type="text" name="emp_emergency_cont_no" placeholder="Enter your emergency contact_no" />
                                                        <label for="emp_emergency_cont_no"> Emergency Contact No</label>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="date"  name="emp_dob"  placeholder="Enter your Date of Birth"/>
                                                        <label for="emp_dob"> Date-Of-Birth</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="date" name="emp_doj" placeholder="Enter your Date Of Joining" />
                                                        <label for="emp_doj"> Date-Of-Joining</label>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="text"  name="emp_email" placeholder="Enter your email" />
                                                        <label for="emp_email"> Email ID</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="file" id="emp_profile_pic"  name="emp_photo" value="Photo" />
                                                    </div>
                                                </div>
                                                 
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="emp_bloodgroup">Blood Group </label>
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <select name="emp_bloodgroup" >
                                                        <option value="Select You Blood Group" selected>Select Blood Group</option>
                                                        <option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <label for="emp_gender">Gender </label>
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <select name="emp_gender">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>

                                           

                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                <label for="exampleFormControlTextarea1w" class="form-label">Example textarea</label>

                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="emp_bloodgroup">Designation </label>
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <select name="emp_bloodgroup" >
                                                        <option value="Select You Blood Group" selected>Select Blood Group</option>
                                                        <option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <label for="emp_gender">Role </label>
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <select name="emp_gender">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                   
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                            <input type="checkbox" name="is_login_user" value="true"/> Is login user
                                            <br><br>
                                            <div class="row mb-3">
                                                <h5> Login Details</h5>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="text" name="emp_uname" placeholder="Enter your  Username" />
                                                        <label for="emp_uname"> Username</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" type="text" name="emp_password" placeholder="enter your Password" />
                                                        <label for="emp_password">Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">                                               
                                                 <div class="d-grid " >
                                                    <a class="btn btn-primary " href="#" value="view_emp_submit" name="register"> <i class="fa fa-edit" ></i> Edit Account</a>
                                                </div>
                                            </div> 
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php include('./footer.php'); ?>
