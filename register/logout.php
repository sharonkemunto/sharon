<?php
    session_start();
    //destroy session
    session_unset();
    if(session_destroy()){
        header("Location: login.php");
    }//ends the current user session for logout
?>