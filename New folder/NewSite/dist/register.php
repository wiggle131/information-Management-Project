<?php
  $con = mysqli_connect("localhost","root","","esport_org") or die ("Error in connnection");
  ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                    <form name="myForm" action="" method="post" required>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group" ><label class="small mb-1"  for="inputFirstName">First Name</label><input class="form-control py-4" name="firstName" id="inputFirstName" type="text" placeholder="Enter first name" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" ><label class="small mb-1"  for="inputLastName">Last Name</label><input class="form-control py-4" name="lastName" id="inputLastName" type="text" placeholder="Enter last name" /></div>
                                                </div>
                                            </div>
                                            <div class="form-group" ><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" name="Email" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Enter email address" /></div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"  ><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" name="Password" id="inputPassword" type="password" placeholder="Enter password" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Confirm Password</label><input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" /></div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0" name="submit"><a class="btn btn-primary btn-block" type="submit" name="submit" href="">Create Account</a></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

<?php

if (isset($_POST["submit"])) {
    $firstName =$_POST['firstName'];
    $lastName =$_POST['lastName'];
  $Email=$_POST['Email'];
  $Password=$_POST['Password'];
  
  $sql="select count(*) as count from user where Email= '$Email'";
  $result=mysqli_query($con, $sql);
  
  $row =mysqli_fetch_array($result);
    
  if($row['count']==0){
    $sql= "insert into user values('$firstName','$lastName','$Email','$Password')";
    mysqli_query($con, $sql);
    header('Location: login.php');
  }
  else {
    echo '<script language="javascript">';
    echo 'alert("Email already existing")';  //not showing an alert box.
    echo '</script>';
  }
  exit;
    
}
?>