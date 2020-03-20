<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Players</title>
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
                        <h1 class="mt-4">Players</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Players</li>
                        </ol>
                        <!--MODAL-->
                        <!-- Button trigger modal -->
                        <input type="submit" class="btn btn-secondary mb-sm-2" data-toggle="modal" data-target="#add" name = "Add"  value = "Add">
                        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Customize</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form method = "post"> 
                                               <div class="form-group row">
                                                    <label for="playerID" class="col-sm-2 col-form-label">PlayerID</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" class = "form-control" name="playerID" id = "playerID" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="playerName" class="col-sm-2 col-form-label">Name</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" class = "form-control" name="playerName" id = "playerName" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" class = "form-control" name="home" id = "home" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="game" class="col-sm-2 col-form-label">Game</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" class = "form-control" name="game" id = "game" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="startContract" class="col-sm-4 col-form-label">Start of Contract</label>
                                                    <div class="col-sm-8">
                                                    <input type="date" class = "form-control" name="startContract" id = "startContract" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="endContract" class="col-sm-4 col-form-label">End of Contract</label>
                                                    <div class="col-sm-8">
                                                    <input type="date" class = "form-control" name="endContract" id = "endContract" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="salary" class="col-sm-2 col-form-label">Salary</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" class = "form-control" name="salary" id = "salary" >
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="submit" name = "add" class="btn btn-primary"value = "Save changes">
                                                </div>  
                                     </form>
                                     <?php
                                                    $con = mysqli_connect("localhost","root","","esport_org")
                                                    or die("Error in Connection");
                                                   if(isset($_POST["add"],$_POST["playerID"],$_POST["playerName"],$_POST["home"],$_POST["game"], $_POST["startContract"],$_POST["endContract"],$_POST["salary"]))
                                                    {
                                                        $playerID = $_POST["playerID"];
                                                        $name = $_POST["playerName"];
                                                        $address = $_POST["home"];
                                                        $game = $_POST["game"];
                                                        $start = $_POST["startContract"];
                                                        $end = $_POST["endContract"];
                                                        $salary = $_POST["salary"];
                                                        $status = 1;
                                                        $ins = "INSERT INTO players (playerID, name, address, gameID, startContract, endContract, status) VALUES ('$playerID','$name','$address','$game','$start','$end','$status')";
                                                        mysqli_query($con,$ins);
                                                        $ins = "INSERT INTO salary(playerID, totalSalary) VALUES ('$playerID','$salary')";
                                                        mysqli_query($con,$ins);
                                                    }
                                                    else if(isset($_POST["add"])){
                                                        echo "Please enter all fields";
                                                    }
                                                ?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-secondary mb-sm-2" data-toggle="modal" data-target="#delete" name = "delete"  value = "Delete">
                        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Customize</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form method = "post"> 
                                               <div class="form-group row">
                                                    <label for="playerID" class="col-sm-2 col-form-label">PlayerID</label>
                                                    <div class="col-sm-10">
                                                    <select name = "selectName" class="form-control">
                                                    <?php
                                                             $con = mysqli_connect("localhost","root","","esport_org")
                                                             or die("Error in Connection");
                                                            
                                                             $user_num = "SELECT * from players";
                                                             $user_count = mysqli_query($con,$user_num);
                                                            while($user = mysqli_fetch_array($user_count))
                                                            {                                                                  
                                                                echo '<option>' .$user['name']. '</option>';
                                                            }
                                                         ?>
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                 <input type="submit" name = "delete" class="btn btn-primary"value = "Delete">
                                                 <input type="submit" name = "inactive" class="btn btn-primary"value = "Change Status">
                                                </div>
                                    </form>
                                            <?php
                                                 $con = mysqli_connect("localhost","root","","esport_org")
                                                 or die("Error in Connection");

                                                 if(isset($_POST["delete"],$_POST["selectName"])){
                                                    
                                                    $name = $_POST["selectName"];
                                                    
                                                    $id_code = "SELECT playerID FROM players WHERE name = '$name'";
                                                    $id_query = mysqli_query($con,$id_code);
                                                    $id = mysqli_fetch_assoc($id_query);
                                                    $playerID = $id['playerID'];
                                                    $delete = "DELETE FROM salary WHERE playerID = $playerID";
                                                    mysqli_query($con,$delete);    
                                                    $delete = "DELETE FROM players WHERE playerID = $playerID";
                                                    mysqli_query($con,$delete);
                                                }
                                                if(isset($_POST["inactive"],$_POST["selectName"])){
                                                   
                                                    $name = $_POST["selectName"];
                                                    
                                                    $id_code = "SELECT status FROM players WHERE name = '$name'";
                                                    $id_query = mysqli_query($con,$id_code);
                                                    $id = mysqli_fetch_assoc($id_query);
                                                    if(!$id['status']){
                                                        $id_code = "UPDATE players SET status = 1 WHERE name = '$name'";
                                                        mysqli_query($con,$id_code);
                                                    }
                                                    else if($id['status']){
                                                        $id_code = "UPDATE players SET status = 0 WHERE name = '$name'";
                                                        mysqli_query($con,$id_code);
                                                    }
                                                }    
                                            ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--------->
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-headset mr-1"></i>Current Players</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Player ID</th>
                                                <th>Name</th>
                                                <th>Game</th>
                                                <th>Start Contract</th>
                                                <th>End Contract</th>
                                                <th> Status </th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Player ID</th>
                                                <th>Name</th>
                                                <th>Game</th>
                                                <th>Start Contract</th>
                                                <th>End Contract</th>
                                                <th> Status </th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                            <!--PlayerID Name Game StartContract Endcontract Status Salray-->
                                                <?php
                                                        $con = mysqli_connect("localhost","root","","esport_org")
                                                            or die("Error in Connection");

                                                        $user_num = "SELECT * from players ORDER BY players.name";
                                                        $user_count = mysqli_query($con,$user_num);
                                                        
                                                        while($user = mysqli_fetch_array($user_count))
                                                        {
                                                                echo '<td>' .$user['playerID']. '</td>';   
                                                                echo '<td>' .$user['name']. '</td>';
                                                    
                                                                $gameID = $user['gameID'];
                                                                $game = "SELECT * FROM game WHERE gameID = $gameID";
                                                                $game_count = mysqli_query($con,$game);
                                                                $gameName = mysqli_fetch_array($game_count);

                                                                echo '<td>' .$gameName['nameOfgame']. '</td>'; 

                                                                echo '<td>' . $user['startContract']. '</td>';
                                                                echo '<td>' . $user['endContract']. '</td>';
                                                                echo '<td>';
                                                                if($user['status'] )
                                                                {
                                                                    echo  '<p >Active</p>';
                                                                }
                                                                else if(!$user['status'])
                                                                {
                                                                    echo  '<p >Not-Active</p>';
                                                                }
                                                                echo '</td>';
                                                                $playerID = $user['playerID'];
                                                                $salary = "SELECT * FROM salary WHERE playerID = $playerID";
                                                                $salary_count = mysqli_query($con,$salary);
                                                                $salary1 = mysqli_fetch_array($salary_count);
                                                               
                                                                if(isset($salary1['totalSalary'] ))
                                                                     echo'<td> $' .$salary1['totalSalary']. '</td>';
                                                                else
                                                                     echo'<td> $0 </td>';
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
