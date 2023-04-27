<?php

    $db_username = "furkan";
    $db_password = "1234";

    // if($db_username == "furkan" and $db_password == "1234"){
    //     echo "Username and Password are Correct";
    // }
    // else{
    //     echo "Username and Password are Incorrect";
    // }

    // if($db_username == "furkan" ){
    //     if($db_password=="12345"){
    //         echo "Successful Login";
    //     } else{
    //         echo "Password Incorrect";
    //     }
    // }
    // else{
    //     echo "Username Incorrect";
    // }


    if ($db_username != "furkan") {
        echo "Username Incorrect";
    } 
    elseif ($db_password != "1234") {
        echo "Password Incorrect";
    }
    else{
        echo "Successful Login";
    }


?>