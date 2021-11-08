<?php
define('username', 'kirbym3');
define('password', 'Mk10201997!');
define('database', 'mlt_website');
define('server', 'localhost');

try{
    $connection = mysqli_connect(server,username,password,database);

    //encoded language
    mysqli_set_charset($connection, 'utf8');
    // Check Connection
}catch(Exception $ex){
    print "An Exception Occured. Message:".$ex->getMessage();
}catch(Error $e){
    print "The system is busy please try later: ".$e->getMessage();
}

function close_connection(){
    mysqli_close(mysqli_connect(username,password,server,database));
}
?>