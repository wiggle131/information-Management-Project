<?php
  $con = mysqli_connect("localhost","root","","esport_org") or die ("Error in connnection");
 
 if (isset($_POST["submit"])) {
  if(!empty($_POST['Email']) && !empty($_POST['Password'])){


  $Email=$_POST['Email'];
  $Password=$_POST['Password'];
  

  $sql="select count(*) as count from user where Username= '$Email'";
  $result=mysqli_query($con, $sql);
  $row =mysqli_fetch_array($result);



  $sql="select count(*) as count from user where Password= '$Password'";
  $resultpass =mysqli_query($con, $sql);

  $rowpass =mysqli_fetch_array($resultpass);

  if($row[0]==1){
    $sql = "select count(*) from user where Email = '$Email' AND Password = '$Password'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    if($row[0]==1){
      echo '<script language="javascript">';
      echo 'alert("You successfully logged in")';  //not showing an alert box.
      echo '</script>';
      session_start();
      $_SESSION["Email"] = $Email;
      header('Location: index.php');
    }
    else{
      echo '<script language="javascript">';
      echo 'alert("Incorrect password.")';  //not showing an alert box.
      echo '</script>';
    }
  }
  else{
    echo '<script language="javascript">';
    echo 'alert("Incorrect username.")';  //not showing an alert box.
    echo '</script>';
  }
}

else{
  echo '<script language="javascript">';
  echo 'alert("Empty fields.")';  //not showing an alert box.
  echo '</script>';
}

}
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
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" name="Email" id="inputEmailAddress" type="email" placeholder="Enter email address" /></div>
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" name="Password" id="inputPassword" type="password" placeholder="Enter password" /></div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="">Forgot Password?</a><a class="btn btn-primary" name="submit" type="submit" href="">Login</a></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
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

