<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Payments </title>
    <link rel="stylesheet" type="text/css" href="../../register/style.css">

</head>
<body>
<div id="header">
<center><br> Confirm Payment Made </center>
</div> 
	
<?php 
    include('../../partials/connection.php');
    $paymentid = $_GET['id'];
    $query = mysqli_query($connection, "SELECT * FROM payments WHERE paymentid=$paymentid");
    $data = mysqli_fetch_array($query);
    if(isset($_POST['update'])){
        $paymentid = $_POST['paymentid'];
        $username = $_POST['username'];
        $pid = $_POST['pid'];
        $amount = $_POST['amount'];
        $owner = $_POST['owner'];
        $paymentdate = $_POST['paymentdate'];
       


        $edit = mysqli_query($connection, "UPDATE payments SET paymentid='$paymentid',username='$username',pid='$pid',amount='$amount',owner='$owner',paymentdate='$paymentdate'");
        if($edit){
            mysqli_close($connection);
            header("location:../payments.php");
            exit;
        } else {
            echo mysqli_error();
        }
    }


    ?>
<form method="POST" action="insertpayment.php" name="payment" onsubmit="return FormValidation()">
<div> <h1> Add new Payment</h1></div>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username"  id="username" value="<?php echo $data['username'] ?> ">
  	</div>
      <div class="input-group">
  	  <label>Owner</label>
  	  <input type="text" name="owner" id="owner" value="<?php echo $data['owner'] ?> ">
  	</div>
  	<div class="input-group">
  	  <label>Property ID </label>
  	  <input type="text" name="pid" id="pid" value="<?php echo $data['pid'] ?> ">
  	</div>
  	<div class="input-group">
  	  <label>Amount</label>
  	  <input type="text" name="amount" id="amount" value="<?php echo $data['amount'] ?> ">
  	</div>
      <div class="input-group">
  	  <label>paymentdate:</label>
  	  <input type="text" name="paymentdate" id="paymentdate" placeholder="DD/MM/YYYY" value="<?php echo $data['paymentdate'] ?> ">
  	</div>
     
	 
<div class="input-group">
  	  <button type="submit" class="btn" name="AddPayment">Add Payment</button>
  	</div>
  </form>

  <script>
    
function FormValidation(){
    username = document.payment.username.value;
    owner = document.payment.owner.value;
    amount=document.payment.amount.value;
    pid= document.payment.pid.value;
    paymentdate= document.payment.paymentdate.value;
    if(username == ""){
      alert('Username cannot be blank');
      document.getElementById('username').focus();
      return false;
    }
    if(owner == ""){
      alert('Payment id cannot be blank');
      document.getElementById('owner').focus();
      return false;
    }
    if(paymentdate == ""){
      alert('Payment date cannot be blank');
      document.getElementById('paymentdate').focus();
      return false;
    }
    if(pid == ""||isNaN(pid)){
      alert('A valid property id is required');
      document.getElementById('pid').focus();
      return false;
    
    if(amount=""||isNaN(amount)){
        alert('A valid tenant Id is required');
        document.getElementById('amount').focus();
        return false;
    
    }
    var returned = true;

    returned = validateDate_of_payment();
    if(returned == true)
    returned = validatePayment_due_date();
    if(returned == true)
    return returned;
  }
 



 // validating Date of payment
 function validateDate_of_payment(){
    Date_of_payment= document.getElementById('Date_of_payment').value;
    var ToDate = new Date();
    if(new Date(paymentdate).getTime() > ToDate.getTime()|| Todate==""){
      alert('please enter a valid date of payment');
      return false;
    }
    else{
      return true;
    }
    //Getting the date Entered
    paymentdate=document.getElementById("paymentdate").value;
    //Whether it is of the format dd-mm-yyyy and also if it is empty( Implied)
    if(paymentdate.indexOf("-")==-1){
        alert("Date must be entered and of the format (dd-mm-yyyy)");
        document.getElementById("paymentdate").focus();
        return false;
    }
 }

}
</script> 
  </body> 
</html>