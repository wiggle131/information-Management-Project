<!--ANG MGA CHART DATA NAA RAS CHART DEMO SA JAVASCRIPT NAAS UBOS-->
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Members Online</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">
                                            <h2>
                                                <?php
                                                        $con = mysqli_connect("localhost","root","","esport_org")
                                                                or die("Error in Connection");

                                                        $user_num = "SELECT COUNT(*) as count from players";
                                                        $user_count = mysqli_query($con,$user_num);
                                                        $user = mysqli_fetch_array($user_count);
                                                        echo $user['count'];
                                                ?>
                                            </h2>
                                        </a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>  
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Peripherals Used</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">
                                            <h2>
                                                <?php
                                                        $con = mysqli_connect("localhost","root","","esport_org")
                                                            or die("Error in Connection");
                                                        $periph_num = "SELECT COUNT(*) as count from inventory";
                                                        $periph_count = mysqli_query($con,$periph_num);
                                                        $user = mysqli_fetch_array($periph_count);
                                                        echo $user['count'];
                                                ?>
                                            </h2>
                                        </a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Tournaments Joined</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">
                                            <h2>
                                                <?php   
                                                        $con = mysqli_connect("localhost","root","","esport_org")
                                                              or die("Error in Connection");
                                                        $tour_num = "SELECT COUNT(*) as count from tournament";
                                                        $tour_count = mysqli_query($con,$tour_num);
                                                        $user = mysqli_fetch_array($tour_count);
                                                        echo $user['count'];
                                                ?>
                                            </h2>
                                        </a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Tournament Winnings</div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Bar Chart Example</div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <!--Table--->
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Current Players</div>
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

                                                        $user_num = "SELECT * from players";
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <!--<script src="assets/demo/datatables-demo.js"></script>-->
    </body>
</html>