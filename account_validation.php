<?php
    require_once('config.php');

    //checks to see if username and password has been entered once submitted
    if(!ISSET($_POST['username'],$_POST['password'])){ // if does not exist, create
        exit('Please Enter Your Username & Password!');
    }
    else{
        //Prepare SQL, do so to prevent SQL injection.
        if($statement = $connection->prepare('SELECT id,password FROM users WHERE username = ?')){
            // BInd Paramenters
            $statement->bind_param('s',$_POST['username']);
            $statement->execute();
            $statement->store_result();
            $statment->close();


            if($statment->num_rows > 0){
                $statement->bind_result($id,$password);
                $statement->fetch();
                //if the account exists then now we must verify the password;
                // Always HASH the password for encryptions and
                if(password_verify($_POST['password'], $password)){
                    // If the passwordthis passes then login is successful!
                    // Create a session so that we know the user is logged in. This
                    session_regenerate_id();
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['user'] = $_POST['username'];
                    $_SESSION['id'] = $id;
                    echo 'Welcome '. $SESSION_['user'] . '!'; 
                }
                else{
                    // Incorrect Password!
                    echo ' Inccorect Username and/or Password!';
                }
            }
            else{
                // Incorrect Username!
                echo ' Inccorect Username and/or Password!';
            }
        }
    }
?>