<?php
// Insert User Time Login
       $success = false;
    // Get the User IP
      $userIP = $_SERVER['REMOTE_ADDR'];                                        
      $nowTimeStamp = date("Y-m-d H:i:s");
        // Prepare the SQL Statements  to Insert User Login Time                                            
                                             
        $insertLogin_SQL = 'INSERT INTO accesslog (userID,timein,IPaddress )VALUES('.$id.',"'.$nowTimeStamp.' ","'.$userIP.'"'.')';
                                                             
    if ( $dbConnectionStatus->query($insertLogin_SQL))  {    
                                $success = true;
                                } else {
                                    echo'Error';    
                                        }                        
                                        <?php
                                        // Initialize the session
                                         
                                        include ("C:/xampp/htdocs/dbconnection.php");
                                         
                                        session_start();
                                         
                                        $nowTimeStamp = date("Y-m-d H:i:s");
                                         
                                        $previousStartTime = $_SESSION["startTime"];
                                         
                                        $id = $_SESSION["id"]; 
                                         
                                        $logout_Querry = "UPDATE accesslog SET timeLogout = '$nowTimeStamp'  WHERE( timeLogin = '$previousStartTime ' AND userID = $id)";
                                         
                                        if ($dbConnectionStatus->query($logout_Querry))  {   
                                                                                                echo 'Success';
                                                                                            } else {
                                                                                                echo'Error';    
                                                                                            }   
                                                                                         
                                         
                                         
                                          
                                        // Unset all of the session variables
                                        $_SESSION = array();
                                         
                                         
                                           
                                          
                                        // Destroy the session.
                                        session_destroy();
                                          
                                        // Redirect to login page
                                        header("location: logins.php");
                                        exit;
                                        ?>                                
                                        
                                        ?>