<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Management</title>
    <link  rel="stylesheet" type="text/css" href="../index/style.css">
    <link  rel="stylesheet" type="text/css" href="table.css">

</head>

<div class="container">
      <?php 
        include('../partials/connection.php');
        $sql = "SELECT * FROM logs";
        $result = $connection->query($sql);
        $connection->close();
      ?>
        <table>
            <h2>Log Table</h2>
            <tr>
                <th>Log id</th>
                <th>userid </th>
                <th>Time in</th>
                <th>Time Out</th>
                <th>Ip Address</th>
                
            </tr>
            <?php while($rows=$result->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $rows['logid'] ?></td>
                <td><?php echo $rows['userid'] ?></td>
                <td><?php echo $rows['timein'] ?></td>
                <td><?php echo $rows['timeout'] ?></td>
                <td><?php echo $rows['ipaddress'] ?></td>
                
                <td><a href="./Edit/property.php?id=<?php echo $rows['pid']?>">Edit</a></td>
                <td>Delete</td>    
            </tr>
            <?php } ?>
        </table>

    </div>


<footer>
<p> Property Management System, Copyright &copy; 2022 </p>

</footer>

<div class="footer">