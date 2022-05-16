
<?php
error_reporting(0);
//The error_reporting(0) is for getting 0 error while php code is running.
?>

<?php
include('../partials/connection.php');
 
//code to insert data to the database
        if(isset($_POST['AddProperty']))
        {
                $pname =$_POST['pname'];
                $owner=$_POST['owner'];
                $type=$_POST['type'];
                $location=$_POST['location'];
                $status=$_POST['status'];
                $price =$_POST['price'];      
                //image upload
        $image=$_FILES["image"]["name"]; 
        $image_tmp=$_FILES["image"]["tmp_name"];
        $folder="../img/dbimg/" .$pimage; 
        move_uploaded_file($image_tmp, $folder.$image); //move the image to the created folder


        //sql statement to insert values to the database  

        $sql= "INSERT INTO property (pid,pname,owner, location, type, status, price, image)
        VALUES (NULL,'$pname','$owner','$location','$type','$status','$price','$image')";
 
 
 $runsql = mysqli_query($connection,$sql); 
 if($runsql){
        echo "<script>alert('Property Added Successful')</script>";
        echo " <script>window.open('addproperty.php','_self')</script>"; 
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
