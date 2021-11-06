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
    <link rel="stylesheet" href="css/styles.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Login Please</title>
</head>
<body>

    <?php 
    require('config.php');

    //include('account_validation.php'); ?>

    <div class="ctr">
        <nav class="navbar sticky-top navbar-expand-lg">
            <div class="container-fluid">
                <img class="nav-logo" src="img/nav-brand.png">
                <button class="navbar-toggler" id = 'navbar-toggler' type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="material-icons nav-toggler-icon" id="nav-toggler-icon">menu</span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="create_account.php">Create Account</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline" id="login-search-btn" type="submit"><span class="material-icons">search</span></button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="content">
            <!-- 
            -->
            <h1 id="welcome" class="login-welcome">Welcome To Magnify LifeStyle Tracking</h1>
            <div class="form-ctr" id="form-ctr">
                <form class="login-form" action="" Method="POST">
                    <div class="alt-login-ctr">
                        <h2 class="login-header">Login Here</h2>
                        <div class="socialMedia-login-ctr">
                            <i class="fab fa-facebook sm-img" id='facebook'></i>
                            <i class="fab fa-linkedin sm-img" id='linkedin'></i>
                            <i class="fab fa-twitter sm-img" id='twitter'></i>
                            <i class="fab fa-google sm-img" id='google'></i>
                        </div>
                    </div>
                    <span class="or">OR BE TRADITIONAL</span>
                    <div id="username-ctr" class="input-ctr">
                        <!--<label class="login-label">Username:</label>-->
                        <input id = "username" type="text" class="login-input" placeholder="Username..."></input>
                        <span class="underline"></span>
                    </div>
                    <div id="password-ctr" class="input-ctr">
                        <!--<label class="login-label">Password:</label>-->
                        <input id="pass" type="text" class="login-input" placeholder="Password..."></input>
                        <span class="underline"></span>
                    </div>
                    <button type="submit" id="login-submit" class=" btn  submit-button">LET'S GO</button>
                    <div class="options-login">
                        <p id="forget-password" class="options">Forget <a id ="forget-password-link" href="">Password?</a></p>
                        <p id="help" class="options">Help</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    



    <?php
        require_once('config.php');
    ?>
<script type="text/javascript" src="js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script></html>
</body>
</html>