<?php 

session_start();
include('../partials/connection.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>propertymanagement</title>
    <link href="style.css" rel="stylesheet" >

</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="viewproperty.php"> View Property</a></li>
            <li><a href="../propertyowner/requestform.php"> Add new property</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Get in Touch</a></li>
            <div class="admin"><li><a href="#">login</a></li></div>
        </ul>
    </nav>
   
<div class="container" style="margin-bottom:100px;">
      <?php 
        include('../partials/connection.php');
        $sql = "SELECT * FROM property";
        $result = $connection->query($sql);
        $connection->close();
        $i = 0;
        // while($i < 4){
        //   $i++;
        while($rows=$result->fetch_assoc()){
          if($i < 5){
      ?>
        
       <div class="propertygallery">
           <a href=""><img src="../img/<?php echo $rows['image'] ?>" alt="house1"/></a>
           <a href="propertydetails.php?id=<?php echo $rows['pid']?>"> <div class="description">description of the image here</div>   </a>
      </div>
 
    <?php 
} else{
    break;
  }}?>

<footer>
<p> Property Management System, Copyright &copy; 2022 </p>

</footer>



</body>

</html>