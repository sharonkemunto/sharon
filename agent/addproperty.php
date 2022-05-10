<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Property </title>
    <link rel="stylesheet" type="text/css" href="../register/style.css">
    <link rel="stylesheet" type="text/css" href="../index/style.css">


</head>
<body>
<div id="header">
<center><h1> welcome to Admin Panel!</h1> </center>
</div> 
	
   
<form method="POST" action="insertproperty.php" name="property" onsubmit="return FormValidation()" enctype="multipart/form-data" >
<div> <h3> Add new Property</h3></div>
  	<div class="input-group">
  	  <label>Property Name:</label>
  	  <input type="text" name="pname"  id="pname" >
  	</div>
  	<div class="input-group">
  	  <label>Property Owner: </label>
  	  <input type="text" name="owner" id="owner">
  	</div>
  	<div class="input-group">
  	  <label>property image:</label>
  	  <input type="file" name="image" id="image">
  	</div> 


      <div class="input-group">
  	  <label>Property type:</label>
      <select name="type">
        <option value="">--select--</option>
        <option value="studio apartment">studio apartment</option>
        <option value="Office Space">office space</option>
        <option value="One bedroom apartment">One bedroom apartment</option>
        <option value="Two bedroom apartment">Two bedroom apartment</option>
        <option value="Three bedroom apartment">Three bedroom apartment</option>
        </select>
      </div>

      <div class="input-group">
  	  <label>Property Location: </label>
      <select name="location">
        <option value="">--select--</option>
        <option value="Diani">Diani</option>
        <option value="Ruaka">Ruaka</option>
        <option value="Limuru">Limuru</option>
        <option value="Majengo">Majengo</option>
        <option value="Juja">juja</option>
        <option value="Kitengela">kitengela</option>
        <option value="Ongata Rongai">Ongata Rongai</option>
        <option value="Kilimani">Kilimani</option>
        <option value="Karen">Karen</option>
        <option value="koja">koja</option>
        <option value="Ngara">Ngara</option>
      </select>
      </div>

  	 
    
      <div class="input-group">
  	  <label>property status:</label>
  	  <input type="bool" name="status" id="status">
  	</div>
      <div class="input-group">
  	  <label>property Price:</label>
  	  <input type="text" name="price" id="price">
  	</div>
	 
<div class="input-group">
  	  <button type="submit" class="btn" name="AddProperty">Add Property</button>
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
<div class="footer">
  <p class="footer-text-left">
   
   <h4> All right reserved &copy  2022 kemunto</h4>
  </p>
</div>

  </body>
</html>