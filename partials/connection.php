<?php
/*this variable informs us we are running our project in localhost*/
$dbhost ="localhost";

/* user variable shows that the root has admin priviledges*/
$dbuser ="viva";
$dbpass="VIVA@2022#";
$dbname="primeproperty";


/*forming a variable connection where we pass all this variables formed*/
$connection= mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);


?>