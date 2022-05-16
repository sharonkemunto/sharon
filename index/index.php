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
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Get in Touch</a></li>
            <div class="admin"><li><a href="#">login</a></li></div>

        </ul>
    </nav>
    <div class="type">
    <form action="#" style="display:flex">
      <label for="Property">Property Type:</label>
      <select name="House type" id="lang">
        <option value="Studio Apartment ">Studio</option>
        <option value="Bed-Sitter">Bed-sitter</option>
        <option value="One bedroom">One bedroom</option>
        <option value="Two Bedroom">Two bedroom</option>
        <option value="Three bedroom">Three Bedroom</option>
        <option value="Office space">Office space</option>
      </select>

       
      <label for="Property">Location: </label>
      <select name="property" id="lang">
        <option value="location">Ruaka</option>
        <option value="location">Limuru</option>
        <option value="location">Karen</option>
        <option value="location">Kitengela</option>
        <option value="location">Juja</option>
        <option value="location">Ongata Rongai</option>
      </select>
    
      <label for="house">Price: </label>
      <select name="property" id="lang">
        <option value="pricerange">20,000-30,000</option>
        <option value="pricerange">30,0000-50000</option>
        <option value="pricerange">50,000-60,000</option>
        <option value="pricerange">60,000-80,000</option>
        <option value="pricerange">80,000-100,000</option>
        <option value="pricerange">Above 100,000</option>
</select>
      
      
      <input type="submit" value="Search" />

</form>
</div>
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
           <a href="./propertydetails.php?propid=<?php echo $rows['pid']?>"><img src="../img/<?php echo $rows['image'] ?>" alt="house1"/></a>
           
          <div class="description"><a href="./propertydetails.php?propid=<?php echo  $rows['pid']?>">Click to View details</a></div>
      </div>
    <?php 
} else{
    break;
  }}?>

<div class="footer">
  <p class="footer-text-left">
   
   <h4> All right reserved &copy  2022 kemunto</h4>
  </p>
</div>



</body>

</html>