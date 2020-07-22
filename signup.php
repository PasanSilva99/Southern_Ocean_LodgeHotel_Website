<?php
    $FirstName = $_REQUEST["firstName"];
    $LastName = $_REQUEST["lastName"];
    $Email = $_REQUEST["email"];
    $psw = $_REQUEST["psw"];    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "hoteldb";

    $con = new mysqli($servername, $username, $password, $dbName);

    if($con->connect_error){
        die("Connection Failed: ". $con->connect_error);
    }
    
    $qry = "INSERT INTO userData (FirstName, LastName, Email, Password) VALUES('".$FirstName ."', '".$LastName."', '".$Email."', '".$psw."')";
    $result = $con->query($qry);
    
    if ($con->query($qry) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $qry . "<br>" . $con->error;
      }
    
    if($retrievedPassword == $userPassword && $retrievedUserName == $userUserName){
        #Password Works
        header("Location: index.html");
    }
    else{
        #Login Unsuccessfull
    
    }
    
?>