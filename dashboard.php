<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f520d024f2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/dashboardStyles.css">
    <title>Document</title>
</head>
<body>

    <div class="ctr">
        <div class="sidebar-texture">
            <div class="sidebar ps" id="sidebar">
                <div class="logo">
                    <a href="" class="simple-text logo-mini" id='logo-mini'><img src="#" alt="">MLT</a>
                    <a href="" class="simple-text logo-normal" id='logo-normal'>Magnify LifeStyle</a>
                </div>
                <div class="sidebar-wrapper ps">
                    <div class="user">
                        <div class="user-photo">
                            <img src="img/user-img.jpeg" alt="Profile Image">
                        </div>
                        <div class="user-info">
                            <a href="#collapsed-user" class="username collapsed" data-bs-toggle="collapse" aria-expanded="false">
                                <span>Mark Kirby<b id ='profile-caret' class="caret"></b></span>
                            </a>
                        </div>
                        <div class="collapse" id="collapsed-user">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <span class="sidebar-mini">MP</span>
                                        <span class="sidebar-normal">My Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <span class="sidebar-mini">EP</span>
                                        <span class="sidebar-normal">Edit Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <span class="sidebar-mini">S</span>
                                        <span class="sidebar-normal">Settings</span>
                                    </a>
                                </li>
                                <li class="nav-item"></li>
                            </ul>
                        </div>
                    </div>
                    <ul class="nav">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="material-icons">timeline</i>
                            <p>Progress</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="material-icons">grid_on</i>
                            <p>Tables<b class="caret" id='caret-tables'></b></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="material-icons">content_paste</i>
                            <p>Data<b class="caret" id='caret-data'></b></p>
                        </a>
                    </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main" id='main-container'>
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <!--
                            <button id="minimizeSidebar" type="button" class="navbar-toggler">
                                <i id='toggle-open' class="material-icons text_align-center">more_vert</i>
                                <i id='toggle-close' class="material-icons design_bullet-list-67">view_list</i>
                            </button>
                            -->
                        </div>
                        <a class="navbar-brand" href="#">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" id="sidebarCollapse" type="button" data-bs-target="#navbarToggler" data-bs-toggle="collapse" aria-controls="navigation-index" aria-expand="false" aria-label="Toggle navigation">
                        <span class="fas fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarToggler">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" class="form-control" placeholder="Search...">
                                <button class="btn btn-sm" type="button">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="material-icons">dashboard</i>
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="d-lg-none d-md-block">Action</p>
                                    <div class="ripple-container"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right ps" aria-labelledby="navbarDropdownMenuLink">
                                    <a href="#" class="dropdown-item">Option A</a>
                                    <a href="#" class="dropdown-item">Option B</a>
                                    <a href="#" class="dropdown-item">Option C</a>
                                    <a href="#" class="dropdown-item">Option D</a>
                                    <a href="#" class="dropdown-item">Option E</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link" id="navbarDrowdownProfile" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">Account</p>
                                    <div class="ripple-container"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a href="#" class="dropdown-item">Profile</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>   
            </nav>
            <div class="content container-fluid">
                
                <div class="row greeting-quote-ctr mt-4">
                    <div class="col-12 ms-auto me-auto greeting-quote">
                        <h1>Welcome Back Mark</h1>
                        <?php echo(strftime("%m/%d/%Y %I:%M:%Z")); ?></p>
                    </div>
                </div>
                <div class="row headers mt-2">
                    <div class="col-lg-5 col-md-5 col-sm-12 dtw py-4">
                        <div id='dtw-box'>
                            <div class="row">
                                <div class="dtw-ctr col-5 m-1">
                                    <h2 id="temperature"></h2>
                                    <div class="dtw-icon"><span class="material-icons">thermostat</span></div>
                                </div>
                                <div class="dtw-ctr col-5 m-1">
                                    <h2 id="description"></h2>
                                    <div class="dtw-icon"><span class="material-icons">cloud</span></div>                            
                                </div>
                            </div>
                            <div class="row">
                                    <div class="dtw-ctr col-5 m-1">
                                    <h2 id="location"></h2>
                                    <div class="dtw-icon"><span class="material-icons">explore</span></div>
                                </div>
                                <div class="dtw-ctr col-5 m-1">
                                    <h2 id="location"></h2>
                                    <div class="dtw-icon"><span class="material-icons">explore</span></div>
                                </div>
                            </div>
                            <div class="dtw-title"><h1>Your Daily Updates</h1></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12  calendar"></div>
                </div>


                <div class="row graph-content mt-3 pt-5">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mx-auto graph-ctr-one">
                        <div class="container-fluid">
                            <div class="col graph-ctr">
                                <div class="graph mt-3">
                                    <div class="ct-chart-pie"></div>
                                </div>
                            </div>
                            <div class="col chart-results">
                                <div class="row chart-stat">
                                    <div class="col stat-content"><span class="material-icons">print</span><a href="#">Print Chart</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mx-auto graph-ctr-two">
                        <div class="container-fluid">
                            <div class="col graph-ctr">
                                <div class="graph mt-3">
                                <div class="ct-chart-line"></div>
                                </div>
                            </div>
                            <div class="col chart-results">
                                <div class="row chart-stat">
                                    <div class="col stat-content"><span class="material-icons">print</span><a href="#">Print Chart</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mx-auto graph-ctr-three">
                        <div class="container-fluid">
                            <div class="col graph-ctr"><div class="graph mt-3"></div></div>
                            <div class="col chart-results">
                                <div class="row chart-stat">
                                    <div class="col stat-content"><span class="material-icons">print</span><a href="#">Print Chart</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer"></div>
        </div>
    </div>
<script src="js/weather.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script language="Javascript" type="text/javascript" src="js/dashboardScripts.js"></script>
<script src="js/chartScripts.js"></script>
</html>

