<?php
    session_start();
    //destroy session
    if(session_destroy()){
        header("Location: login.php");
    }//ends the current user session for logout
?>