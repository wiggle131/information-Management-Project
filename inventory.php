<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Peripherals</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/datatables.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Esport Organization</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >
                            <a class="nav-link" href="tables.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-headset"></i></div>
                                Players</a
                            >
                            <a class="nav-link" href="inventory.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-mouse"></i></div>
                                Peripherals</a
                            >
                            <!-- <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                        >Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login.html">Login</a><a class="nav-link" href="register.html">Register</a><a class="nav-link" href="password.html">Forgot Password</a></nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                                        >Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401 Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="500.html">500 Page</a></nav>
                                    </div>
                                </nav>
                            </div> -->
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Peripherals</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Peripherals</li>
                        </ol>
                        <!--MODAL-->
                        <!-- Button trigger modal -->
                        <input type="submit" class="btn btn-secondary mb-sm-2" data-toggle="modal" data-target="#borrow" name = "Borrow"  value = "Borrow">
                        <div class="modal fade" id="borrow" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Borrow</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form method = "post"> 
                                        <div class = "form-group row">
                                                <label for="Peripheral" class="col-sm-2 col-form-label">Peripheral</label>
                                                <div class="col-sm-10">
                                                <select name = "selectPerphrl" class="form-control">
                                                    <?php
                                                        $con = mysqli_connect("localhost","root","","esport_org")
                                                                    or die("Error in Connection");
                                                                    
                                                        $user_num = "SELECT * from inventory";
                                                        $user_count = mysqli_query($con,$user_num);
                                                        while($user = mysqli_fetch_array($user_count))
                                                        {                                                                  
                                                        echo '<option>' .$user['name']. '</option>';
                                                        }
                                                    ?>
                                                </select>
                                                </div>
                                        </div>
                                        <div class = "form-group row">
                                                <label for="Quantity" class="col-sm-2 col-form-label">Quantity</label>
                                                <div class="col-sm-10">
                                                <select name = "quantity" class="form-control">
                                                    <option> 1 </option>
                                                    <option> 2 </option>
                                                    <option> 3 </option>
                                                </select>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" name = "borrow" class="btn btn-primary"value = "Borrow">
                                        </div>  
                                    </form>
                                        <?php
                                            $con = mysqli_connect("localhost","root","","esport_org")
                                            or die("Error in Connection");

                                            if(isset($_POST["borrow"],$_POST["selectPerphrl"],$_POST["quantity"])){
                                               
                                                    $quantity = $_POST["quantity"];
                                                    $name = $_POST["selectPerphrl"];
                                                    $peripheral_cmd = "SELECT quantity FROM inventory WHERE name = '$name'";
                                                    $peripheral_query = mysqli_query($con,$peripheral_cmd);
                                                    $qty = mysqli_fetch_assoc($peripheral_query);
                                                    $curr_qty = $qty["quantity"];
                                                    if($curr_qty >= $quantity){
                                                        $qty_update = "UPDATE inventory SET quantity = quantity - '$quantity' WHERE name = '$name'";
                                                        mysqli_query($con,$qty_update);
                                                        $peripheral_cmd = "SELECT peripheralID FROM inventory WHERE name = '$name'";
                                                        $peripheral_query = mysqli_query($con,$peripheral_cmd);
                                                        $peripheral = mysqli_fetch_assoc($peripheral_query);
                                                        $peripheral_id = $peripheral["peripheralID"];
                                                        $ins = "INSERT INTO item_usage (peripheralID,Quantity) VALUES ('$peripheral_id','$quantity')";        
                                                        mysqli_query($con,$ins);
                                                        echo $peripheral["peripheralID"];
                                                    }
                                                    else if($curr_qty < $quantity){
                                                        echo '$name Has $qty["quantity"] Avaialable';
                                                    }
                                            }
                                            else if(isset($_POST["return"])){
                                                echo "<p style = 'color = red'>Please enter all fields<p>";
                                            }
                                        ?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-secondary mb-sm-2" data-toggle="modal" data-target="#return" name = "return"  value = "Return">
                        <div class="modal fade" id="return" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Return</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form method = "post"> 
                                               <div class="form-group row">
                                                    <label for="playerID" class="col-sm-2 col-form-label">Return</label>
                                                    <div class="col-sm-10">
                                                    <select name = "selectPerphrl" class="form-control">
                                                    <?php
                                                            $con = mysqli_connect("localhost","root","","esport_org")
                                                            or die("Error in Connection");
                                                            
                                                            $user_num = "SELECT * from inventory";
                                                            $user_count = mysqli_query($con,$user_num);
                                                            while($user = mysqli_fetch_array($user_count))
                                                            {                                                                  
                                                            echo '<option>' .$user['name']. '</option>';
                                                            }
                                                         ?>
                                                    </select>
                                                    </div>
                                                </div>
                                                    <div class = "form-group row">
                                                    <label for="Quantity" class="col-sm-2 col-form-label">Quantity</label>
                                                    <div class="col-sm-10">
                                                    <select name = "quantity" class="form-control">
                                                        <option> 1 </option>
                                                        <option> 2 </option>
                                                        <option> 3 </option>
                                                    </select>
                                                    </div>
                                            </div>
                                                <div class="modal-footer">                    
                                                 <input type="submit" name = "return" class="btn btn-primary"value = "Return">
                                                </div>
                                    </form>
                                            <?php
                                                  if(isset($_POST["return"],$_POST["selectPerphrl"],$_POST["quantity"])){
                                               
                                                    $quantity = $_POST["quantity"];
                                                    $name = $_POST["selectPerphrl"];
                                                    $peripheral_cmd = "SELECT quantity FROM inventory WHERE name = '$name'";
                                                    $peripheral_query = mysqli_query($con,$peripheral_cmd);
                                                    $qty = mysqli_fetch_assoc($peripheral_query);
                                                    $curr_qty = $qty["quantity"];    
                                                    
                                                    $qty_update = "UPDATE inventory SET quantity = quantity + '$quantity' WHERE name = '$name'";
                                                    mysqli_query($con,$qty_update);                                               
                                            }
                                            else if(isset($_POST["return"])){
                                                echo "<p style = 'color = red'>Please enter all fields<p>";
                                            }
                                            ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--------->
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-mouse mr-1"></i>Peripherals</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Peripheral ID</th>
                                                <th>Brand</th>
                                                <th>Name</th>
                                                <th>Quantity</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Peripheral ID</th>
                                                <th>Brand</th>
                                                <th>Name</th>
                                                <th>Quantity</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                            <!--PeripheralID Brand Name Quantity -->
                                                <?php
                                                        $con = mysqli_connect("localhost","root","","esport_org")
                                                            or die("Error in Connection");

                                                        $user_num = "SELECT * from inventory";
                                                        $user_count = mysqli_query($con,$user_num);
                                                        
                                                        while($user = mysqli_fetch_array($user_count))
                                                        {
                                                                echo '<td>' .$user['peripheralID']. '</td>';   
                                                                echo '<td>' .$user['brand']. '</td>';
                                                                echo '<td>' .$user['name']. '</td>'; 
                                                                echo '<td>' . $user['quantity']. '</td>';
                                                                echo '</tr>';
                                                        }
                                                ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
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
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
