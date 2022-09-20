<?php
error_reporting(0);
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "candidate_registration";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
  // echo "Conecction Established";
}
else{
    echo "Conection Failed".mysqli_connect_error();
}



?>