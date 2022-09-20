<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="style.css">
    <title>Registration</title>
</head>
<body>
    <div class="container">
      <form action="#" method="POST">
      <div class="title">
       Register Your Self 
      </div>
      <div class="form">
       <div class="input_field">
            <label>Full Name</label>
            <input type="text" class="input" name="name" required>
        </div>  
         <div class="input_field">
            <label>Registration Number</label>
            <input type="number" class="input" name="registration_number" required>
        </div> 
         <div class="input_field">
            <label>Student Of</label>
           <select class="selectbox" name="student_of" required>
            <option value="">Select</option>
            <option value="B-Tech">B-Tech</option>
            <option value="Agriculture">Agriculture</option>
            <option value="BCA">BCA</option>
            <option value="Diploma">Diploma</option>
           </select>
            <label class="c">Gender</label>
           <select class="selectbox" name="gender" required>
            <option value="">select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option Value="Others">Others</option>
           </select >
        </div> 
         <div class="input_field">
            <label>Email </label>
            <input type="email" class="input" name="email" required>
        </div>  
         <div class="input_field">
            <label>Phone Number</label>
            <input type="number" class="input" name="phone_number" required>
        </div> 
           <h4 style="text-align:center; margin:20px;">Select Events to Participats on it</h4>
         <div class="input_field">
            <label style="margin-right:80px;">Outdoor</label>
            <input type="checkbox" name="r1[]" value="Javelin"><label style="margin-left:5px;">Javelin Throw</label>
            <input type="checkbox" name="r1[]" value="Discus"><label style="margin-left:5px;">Discus Throw</label>
            <input type="checkbox" name="r1[]" value="Shotput"><label style="margin-left:5px;">Shotput Throw</label>
        </div> 
        <div class="input_field">
            <label style="margin-right:80px;">Race</label>
            <input type="checkbox" name="r2[]" value="hundred"><label style="margin-left:5px;">100m</label>
            <input type="checkbox" name="r2[]" value="twohun"><label style="margin-left:5px;">200m</label>
            <input type="checkbox" name="r2[]" value="fourhun"><label style="margin-left:5px;">400m</label>
          
        </div> 
        <div class="input_field">
            <label style="margin-right:80px;">Performing Arts</label>
            <input type="checkbox" name="r3[]" value="Singing"><label style="margin-left:5px;">Singing</label>
            <input type="checkbox" name="r3[]" value="Dancing"><label style="margin-left:5px;">Dancing</label>
            <input type="checkbox" name="r3[]" value="Foodfun"><label style="margin-left:5px;">Foodfun</label>
        </div> 
        <div class="input_field">
            <label style="margin-right:80px;">Indoor</label>
            <input type="checkbox" name="r4[]" value="Carrom"><label style="margin-left:5px;">Carrom</label>
            <input type="checkbox" name="r4[]" value="Chess"><label style="margin-left:5px;">Chess</label>
            <input type="checkbox" name="r4[]" value="Pubg"><label style="margin-left:5px;">Pubg</label>
        </div>
        <div class="input_field">
            <label style="margin-right:80px;">Cultural & Arts</label>
            <input type="checkbox" name="r5[]" value="Mehandi" ><label style="margin-left:5px;">Mehandi</label>
            <input type="checkbox" name="r5[]" value="Rangoli"><label style="margin-left:5px;">Rangoli</label>
            <input type="checkbox" name="r5[]" value="Painting"><label style="margin-left:5px;">Painting</label>
        </div>
        <div class="input_field">
            <label style="margin-right:12px;font-weight: 600;">HighLights</label>
            <input type="checkbox" name="r6[]" value="StarofYear"><label style="margin-left:10px;font-weight: 600;">Star Of The Year</label>
            <input type="checkbox" name="r6[]" value="Treasure"><label style="margin-left:10px;font-weight: 600;">Treasure Hunt</label>
        </div>
        <div class="input_field">
            <label class="check">
            <input type="checkbox" required>
            <span class="checkmark"></span> 
            </label>
             <p>Agree to term & conditions</p>
        </div>   
          <div class="input_field">
             <input type="submit"  value ="Register" class="btn" name="register">
        </div>      
             
      </div>
     </form>
    </div>
</body>
</html>


<!--php code for data base store-->
<?php
if($_POST['register'])
{
   $name                = $_POST['name'];
   $registration_number = $_POST['registration_number'];
   $student_of          = $_POST['student_of'];
   $gender              = $_POST['gender'];
   $email               = $_POST['email'];
   $phone_number        = $_POST['phone_number'];
   $outdoor             = $_POST['r1'];
   $outdoor1            = implode(",",$outdoor);
   $race                = $_POST['r2'];
   $race1               = implode(",",$race);
   $Performing_Arts     = $_POST['r3'];
   $Performing_Arts1    = implode(",",$Performing_Arts);
   $Indoor              = $_POST['r4'];
   $Indoor1             = implode(",",$Indoor);
   $Cultural            = $_POST['r5'];
   $Cultural1           = implode(",",$Cultural);
   $Highlights          = $_POST['r6'];
   $Highlights1         = implode(",",$Highlights);

   
   if($name != "" && $registration_number != "" && $student_of != "" && $gender != ""
    && $email != ""  && $phone_number != "" )
   {

  $query= "INSERT INTO  registration_form(name,registration,student,gender,email,phone,outdoor,race,perarts,indoor,cultural,highlight)
   values('$name','$registration_number',
  '$student_of','$gender','$email','$phone_number','$outdoor1','$race1','$Performing_Arts1','$Indoor1','$Cultural1','$Highlights1')";

  $data = mysqli_query($conn,$query);
  if($data)
  {    $print="<script>alert('Good Luck.....Participated Successfully');</script>";
       echo $print;
  }
  else
  {
     $print="<script>alert('Failed To insert data.. registration number is used');</script>";
    echo $print;
  }
 }
 else{
    echo "<script>alert('Fill your details First');</script>";
 }
}


?>