<?php
    // The First Page a User will see Once Logged In!!
    include('account_validation.php'); // THe successful Login! --> Includes Session.

    session_start();
    // If login is unsuccessful, then the user will be redirected or stay at login Page!
    if (!ISSET($_SESSION['loggedin'])){
        header('Location: login.php');
        exit;
    }
?>