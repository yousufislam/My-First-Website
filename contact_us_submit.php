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

$cname = $_POST["c_name"];
$cemail = $_POST["c_email"];
$ccomment = $_POST["c_description"];

$query = "INSERT INTO contact_us(c_name, c_email, c_description) VALUES('$cname', '$cemail', '$ccomment')";
$result = mysqli_query($conn, $query);

if($result){
    echo "Your comment has been successfully done. We will contact to you ASAP.";
}
else{
    echo mysqli_error($conn);
}

?>