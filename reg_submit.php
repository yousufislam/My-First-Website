<?php

$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "flash_sale";

$conn = mysqli_connect ($dbserver, $dbuser, $dbpass, $dbname);

/*
//check exception
if(!$conn){
    die("could not established connection: " .mysqli_error());
}
else{
    echo "connection established";
}
*/

$fname = $_POST["fname"];
$email = $_POST["email"];
$phone_no = $_POST["phone_no"];
$address = $_POST["address"];
$phone_model_no = $_POST["phone_model"];

$query = "INSERT INTO usr_reg(fname, email, phone_no, u_address, phone_model) VALUES('$fname', '$email', '$phone_no', '$address', '$phone_model_no')";
$result = mysqli_query($conn, $query);

if($result){
    echo "Your registration has been successfully added in database";
}
else{
    echo mysqli_error($conn);
}
 
?>