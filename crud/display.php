<html>
<head>
    <title>Display</title>
    <style>
        body
        {
            background: rgba(235, 245, 246, 123);
        }
        table
        {
           background-color:#ffff;
        }

        .update,.delete
        {
            background-color:green;
            color:white;
            border:0;
            outline:0;
            border-radius:5px;
            height:20px;
            width:60px;
            font-weight:bold;
            cursor:pointer;

        }
        .update:hover{
            background-color:#00FF00;
        }
          .delete
        {
            background-color:#8B0000;

        }
        .delete:hover{
            background-color:#ff0000;
        }
    </style>
</head>



<?php
include("connection.php");

$query = "SELECT * FROM registration_form ORDER BY slno";
$data  = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
//$result = mysqli_fetch_assoc($data);



if($total !=0)
{
    ?>

    <h2 align="center"><mark>List  Of Participants</mark></h2>
<center><table border="2" cellspacing="3" width="140%">
    <tr>
   <th width="1%">Entry No</th>     
   <th width="11%">Name</th>
   <th width="6%">Registration No</th>
   <th width="4%">Student Of</th>
   <th width="4%">Gender</th>
   <th width="15%">Email</th>
   <th width="6%">Phone No</th>
   <th width="10%">Outdoor</th>
   <th width="8%">Race</th>
   <th width="8%">Performing Arts</th>
    <th width="8%">Indoor</th>
    <th width="9%">Cultural</th>
    <th width="8%">Highlight</th>
   

   <th width="5%">Operation</th>
   </tr>
    <?php
   while($result=mysqli_fetch_assoc($data))
   { 
      echo
       "
   <tr>
   <th>".$result[slno]."</th>
   <td>".$result[name]."</td>
   <td>".$result[registration]."</td>
   <td>".$result[student]."</td>
   <td>".$result[gender]."</td>
   <td>".$result[email]."</td>
   <td>".$result[phone]."</td>
   <td>".$result[outdoor]."</td>
   <td>".$result[race]."</td>
   <td>".$result[perarts]."</td>
   <td>".$result[indoor]."</td>
   <td>".$result[cultural]."</td>
 <td>".$result[highlight]."</td>
   
   <td><a href='update_design.php?reg=$result[registration]'>
   <input type='submit' value='EDIT' class='update'></a>

   <a href='delete.php?reg=$result[registration]'>
   <input type='submit' value='DELETE' class='delete'
    onclick='return checkdelete()'></a></td>
   </tr>
    
       ";

   }

}
else{
    echo"No Record";
}

?>
</table>
</center>

<script>
function checkdelete()
{
return confirm('Are you sure?');


}

</script>


 