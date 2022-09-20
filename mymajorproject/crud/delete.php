<?php
include("connection.php");
$registration= $_GET['reg'];
$query="DELETE FROM registration_form WHERE registration='$registration'";

$data=mysqli_query($conn,$query);
if($data){
    echo "<script>alert('Record Deleted ..');</script>";
    ?>
     <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php"/>

    <?php
}
else{
    echo "Record Not Deleted";
}
?>
