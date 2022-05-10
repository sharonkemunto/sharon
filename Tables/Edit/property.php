<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Property </title>
    <link rel="stylesheet" type="text/css" href="../../register/style.css">

</head>
<body>
<div id="header">
<center><img src="admin.png" alt="adminLogo" id="adminLogo"><br> welcome to Admin Panel! </center>
</div> 
<?php 
include('../../partials/connection.php');
$propid = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM property WHERE pid=$propid");
$data = mysqli_fetch_array($query);
if(isset($_POST['update'])){
    $pname = $_POST['pname'];
    $owner = $_POST['owner'];
    $image = $_POST['image'];
    $type = $_POST['type'];
    $location = $_POST['location'];
    $status = $_POST['status'];
    $price = $_POST['price'];


    $edit = mysqli_query($connection, "UPDATE property SET pname='$pname',owner='$owner',image='$image',type='$type',location='$location',status='$status',price='$price'");
    if($edit){
        mysqli_close($connection);
        header("location:../property.php");
        exit;
    } else {
        echo mysqli_error();
    }
}


 ?>	
   
<form method="POST"  name="property" onsubmit="return FormValidation()" enctype="multipart/form-data" >
<div> <h1> Add new Property</h1></div>
  	<div class="input-group">
  	  <label>Property Name:</label>
  	  <input type="text" name="pname"  id="pname" value="<?php echo $data['pname'] ?>" >
  	</div>
  	<div class="input-group">
  	  <label>Property Owner: </label>
  	  <input type="text" name="owner" id="owner" value="<?php echo $data['owner'] ?>">
  	</div>
  	<div class="input-group">
  	  <label>property image:</label>
  	  <input type="file" name="image" id="image" value="<?php echo $data['image'] ?>">
  	</div> 
      <div class="input-group">
  	  <label>property type:</label>
  	  <input type="text" name="type" id="type" value="<?php echo $data['type'] ?>">
  	</div>
      <div class="input-group">
  	  <label>property Location:</label>
  	  <input type="text" name="location" id="location" value="<?php echo $data['location'] ?>">
  	</div>
      <div class="input-group">
  	  <label>property status:</label>
  	  <input type="bool" name="status" id="status" value="<?php echo $data['status'] ?>">
  	</div>
      <div class="input-group">
  	  <label>property Price:</label>
  	  <input type="text" name="price" id="price" value="<?php echo $data['price'] ?>">
  	</div>
	 
<div class="input-group">
  	  <button type="submit" class="btn" name="update">Add Property</button>
  	</div>
  </form>


  <script>
    
function FormValidation(){
    pname = document.property.pname.value;
    owner = document.property.owner.value;
    type=document.property.type.value;
    location= document.property.location.value;
    status= document.property.status.value;
	price= document.property.price.value;
    if(pname == ""){
      alert('Username cannot be blank');
      document.getElementById('pname').focus();
      return false;
    }
    if(owner == ""){
      alert('Payment id cannot be blank');
      document.getElementById('owner').focus();
      return false;
    }
    if(type == ""){
      alert('type cannot be blank');
      document.getElementById('type').focus();
      return false;
    }

	if(location == ""){
      alert('location cannot be blank');
      document.getElementById('location').focus();
      return false;
    }

	if(status == ""){
      alert('status cannot be blank');
      document.getElementById('status').focus();
      return false;
    }

	if(price == ""){
      alert('price cannot be blank');
      document.getElementById('price').focus();
      return false;
    }





}
</script> 

  </body>
</html>