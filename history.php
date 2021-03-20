<!DOCTYPE html>
<html lang="en">
<head>
    <title>All Customers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a class="navbar-brand text-center" href="#">Welcome To Banking System</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link adv" href="index.php">Home</a>
                </li>
            </ul>
        </div>
    </nav>
<?php  
 echo '<table class=" listtable table-primary table  table-striped table-hover mt-5"  style="opacity: 0.9; width: 70%; margin: auto;">
 <tr>
     <th>ID</th>
     <th>Name</th>
     <th>E-mail</th>
     <th>Balance</th>
 </tr>';
    $server = "localhost:3305";
    $username = "root";
    $password = "";
    $database = "bank";
    // Create a database connection
    $con = mysqli_connect($server, $username, $password, $database);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
      
     $sql = "SELECT his_id,sender,reciever,amount FROM history;";
     
     // Execute the query
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result)){
            // var_dump($row);
            echo '<tr>
            <td>'.$row["his_id"].'</td>
            <td>'.$row["sender"].'</td>
            <td>'.$row["reciever"].'</td>
            <td>'.$row["amount"].'</td>
        </tr>';
          }
    
 
 
 echo'</table>';


?><br>