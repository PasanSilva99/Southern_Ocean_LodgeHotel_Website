<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "hoteldb";
$userPassword;
$userUserName;
$retrievedUserName = $_REQUEST["UserName"];
$retrievedPassword = $_REQUEST["psw"];

$con = new mysqli($servername, $username, $password, $dbName);

if($con->connect_error){
    die("Connection Failed: ". $con->connect_error);
}

$qry = "SELECT UserName, Password FROM UserData";
$result = $con->query($qry);

if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
    $userUserName = $row["UserName"];
    $userPassword = $row["Password"];
    }
}

if($retrievedPassword == $userPassword && $retrievedUserName == $userUserName)
{
    echo "Bravo... I got your Username Password. I will hack your account now!<br />";
}
else
{
    echo "Hola! How are you?<br />";
}


?>
