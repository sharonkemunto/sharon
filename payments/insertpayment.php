<?php
include('../partials/connection.php');

// include('./server.php')

//code to insert data to the database
        if(isset($_POST['AddPayment']))
        {
                $username=$_POST['username'];
                $owner=$_POST['owner'];
                $pid=$_POST['pid'];
                $amount=$_POST['amount'];
                $paymentdate=$_POST['paymentdate'];      
                

        //sql statement to insert values to the database  

        $sql= "INSERT INTO payments(paymentid,username,owner,pid, amount, paymentdate)
        VALUES (NULL,'$username','$owner','$pid','$amount','$paymentdate')";
 
 
 $runsql = mysqli_query($connection,$sql); 
 if($runsql){
        echo "<script>alert('Payment Added Successful')</script>";
        echo " <script>window.open('payment.php','_self')</script>"; 
        }

}
        
 /*
if ($_POST('submit')){ 
if(mysqli_query($connection, $sql))
{
        echo 'New entry inserted successfully!';
}
else {
echo 'something went wrong';        
}
}

//redirecting to index page after user refresh in two seconds

header("refresh:2; url=addproperty.html");*/
?>
