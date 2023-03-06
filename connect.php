
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "crudoperation";

$conn = mysqli_connect($servername, $username, $password, $database);
if($conn){
    echo "connection successfull.";
}
else{
    echo "connection is not successfull.";
}

?>