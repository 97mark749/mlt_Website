<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f520d024f2.js" crossorigin="anonymous"></script>    <link rel="stylesheet" href="css/styles.css">
    <title>Create Account</title>
</head>
<body>
    <div class="ctr">
        <nav class="navbar sticky-top navbar-expand-lg">
            <div class="container-fluid">
                <img class="nav-logo" src="img/nav-brand.png">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="material-icons nav-toggler-icon">menu</span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="login.php">Login</a>
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
                        <button class="btn btn-outline-light" id="login-search-btn" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="content">
        <div class="createAccount-form-ctr">
            <form class="create-account" action="" Method="POST">
                <div class="left-ctr">
                    <h1 id="createAccount-welcome">Welcome To Magnify LifeStyle Tracking</h1>
                    <div id="hr-breakPoint"></div>
                    <img class="nav-logo-createAccount" src="img/nav-brand.png">
                    <h6 id="signin-createAccount-txt">Create An Account or <a id="login-nav-link" href="#">Login</a> To Continue</h6>
                </div>
                <div class="right-ctr">
                    <input type="text" id="fName" class="createAccount-input" placeholder="First Name...">
                    <input type="text" id="lName" class="createAccount-input" placeholder="Last Name...">
                    <input type="email" id="email" class="createAccount-input" placeholder="Email...">
                    <input type="password" id="password" class="createAccount-input" placeholder="Password...">
                    <input type="password" id="confirmPassword" class="createAccount-input" placeholder="Confirm...">
                    <div id="form-lineOne"></div>
                    <h6 id="createAccountAlt-txt">Or Create Account With</h6>
                    <div id="form-lineTwo"></div>
                    <div class="socialMedia-createAccount-ctr">
                        <img src="img/facebook.png" alt="Facebook Logo" class="sm-img" id="facebook">
                        <img src="img/linkedin-logo.png" alt="LinkedIn Logo" class="sm-img" id="linkedin">
                        <img src="img/twitter.png" alt="Twitter Logo" class="sm-img" id="twitter">
                        <img src="img/google.png" alt="Google Logo" class="sm-img" id="google">
                    </div>
                    <h3 id="createTitle">Create Your Account</h3>
                    <h3 id="passwordTxt">Insert A Strong Password!</h3>
                </div>
                
            </form>
        </div>
        </div>
    </div>
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script></html>
</body>
</html>